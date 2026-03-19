<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\AuditLead;
use App\Models\ContactLead;

class FrontendController extends Controller
{
    public function index()
    {
        // Homepage is now static - no database queries needed
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('projects');
    }

    public function team()
    {
        return view('team');
    }

    public function faq()
    {
        return view('faq');
    }

    public function serviceDetails()
    {
        return view('service-details');
    }

    public function blogDetails()
    {
        return view('blog-details');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
            'page_url' => 'nullable|string|max:500',
        ]);

        ContactLead::create($request->all());

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
    }

    public function teamDetails()
    {
        return view('team-details');
    }

    public function projectsDetails()
    {
        return view('projects-details');
    }

    public function tools()
    {
        return view('tools');
    }

    public function aiReadiness()
    {
        return view('tools.readiness-assessment');
    }

    public function aiAudit()
    {
        return view('tools.ai-audit');
    }

    public function runAudit(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'industry' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
        ]);

        $apiKey = trim(env('GEMINI_API_KEY'));

        if (!$apiKey) {
            return response()->json([
                'success' => false,
                'message' => 'AI API Key not configured. Please add GEMINI_API_KEY to your .env file.'
            ], 500);
        }

        $prompt = "You are a senior AI Strategy Consultant. Perform a comprehensive deep AI audit for a company with the following details:
        - URL: {$request->url}
        - Industry: {$request->industry}

        Provide a detailed, consultant-grade AI audit report in JSON format with exactly the following structure:
        {
          \"executive_summary\": \"A professional 2-3 paragraph executive summary of their current state, AI readiness, and strategic potential. Be specific about their industry context.\",
          \"ai_readiness_score\": \"A score from 1-10 with brief justification\",
          \"tech_assessment\": {
            \"current_stack_analysis\": \"Detailed analysis of their technology stack and how it aligns with AI capabilities\",
            \"infrastructure_readiness\": \"Assessment of their infrastructure for AI implementation\",
            \"data_maturity\": \"Evaluation of their data practices and readiness for AI\"
          },
          \"opportunities\": [
            {
              \"category\": \"Category name (e.g., Customer Experience, Operations, Analytics)\",
              \"title\": \"Specific opportunity title\",
              \"description\": \"Detailed description of the AI opportunity\",
              \"impact\": \"High/Medium/Low\",
              \"implementation_complexity\": \"High/Medium/Low\",
              \"estimated_timeline\": \"Timeframe for implementation\"
            }
          ],
          \"competitive_analysis\": {
            \"market_position\": \"Analysis of their current position in the industry\",
            \"ai_adoption_gap\": \"How they compare to competitors in AI adoption\",
            \"strategic_advantages\": \"Potential competitive advantages from AI implementation\"
          },
          \"roi_forecast\": {
            \"efficiency_gains\": \"Expected efficiency improvements with percentages\",
            \"cost_reduction\": \"Potential cost savings areas and estimates\",
            \"revenue_opportunities\": \"New revenue streams or growth opportunities\",
            \"payback_period\": \"Estimated time to ROI\"
          },
          \"implementation_roadmap\": {
            \"phase_1\": {
              \"title\": \"Phase 1 name\",
              \"duration\": \"Timeline\",
              \"key_actions\": [\"Action 1\", \"Action 2\", \"Action 3\"]
            },
            \"phase_2\": {
              \"title\": \"Phase 2 name\",
              \"duration\": \"Timeline\",
              \"key_actions\": [\"Action 1\", \"Action 2\", \"Action 3\"]
            },
            \"phase_3\": {
              \"title\": \"Phase 3 name\",
              \"duration\": \"Timeline\",
              \"key_actions\": [\"Action 1\", \"Action 2\", \"Action 3\"]
            }
          },
          \"risks_and_considerations\": [
            {
              \"risk\": \"Potential risk or challenge\",
              \"mitigation\": \"How to address it\"
            }
          ],
          \"recommended_next_steps\": [\"Step 1\", \"Step 2\", \"Step 3\"]
        }
        
        Generate at least 5-7 specific opportunities across different categories. Be detailed, specific, and actionable. Base your analysis on the industry type and provide real, practical recommendations. Do not include any other text before or after the JSON.";

        try {
            // Using gemini-2.5-flash - verified as the active model for this API key
            $apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key={$apiKey}";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($apiUrl, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]);

            if ($response->successful()) {
                $result = $response->json();
                $text = $result['candidates'][0]['content']['parts'][0]['text'] ?? '';

                Log::info('Gemini API Success: ' . substr($text, 0, 100) . '...');

                // Clean markdown if AI includes it
                $json = trim($text);
                if (str_starts_with($json, '```json')) {
                    $json = substr($json, 7, -3);
                    $json = trim($json);
                }

                $auditData = json_decode($json, true);

                if (json_last_error() === JSON_ERROR_NONE) {
                    // Save lead to database
                    try {
                        $lead = AuditLead::create([
                            'name' => $request->name,
                            'email' => $request->email,
                            'phone' => $request->phone,
                            'url' => $request->url,
                            'industry' => $request->industry,
                            'audit_report' => $auditData, // Will be auto-cast to JSON
                            'ai_readiness_score' => $auditData['ai_readiness_score'] ?? null,
                            'ip_address' => $request->ip(),
                            'user_agent' => $request->header('User-Agent'),
                        ]);

                        Log::info('AI Audit Lead Saved to Database', [
                            'lead_id' => $lead->id,
                            'email' => $request->email,
                        ]);
                    } catch (\Exception $e) {
                        Log::error('Failed to save lead to database: ' . $e->getMessage());
                        // Continue even if database save fails
                    }

                    // Send email with audit report to the user
                    try {
                        Mail::send('emails.audit-report', [
                            'name' => $request->name,
                            'url' => $request->url,
                            'industry' => $request->industry,
                            'auditData' => $auditData
                        ], function ($message) use ($request) {
                            $message->to($request->email, $request->name)
                                ->subject('Your Free AI Audit Report - ' . parse_url($request->url, PHP_URL_HOST));
                        });

                        Log::info('Audit report email sent to: ' . $request->email);
                    } catch (\Exception $e) {
                        Log::error('Failed to send audit email: ' . $e->getMessage());
                        // Don't fail the request if email fails
                    }

                    return response()->json([
                        'success' => true,
                        'data' => $auditData,
                        'message' => 'Report generated successfully! Check your email for the complete audit.'
                    ]);
                } else {
                    Log::error('Gemini JSON Parse Error: ' . json_last_error_msg());
                    Log::error('Raw Content: ' . $text);
                }
            }

            Log::error('Gemini API Error Status: ' . $response->status());
            Log::error('Gemini API Error Body: ' . $response->body());
            return response()->json([
                'success' => false,
                'message' => 'Failed to generate AI report. API Error: ' . $response->status()
            ], 500);
        } catch (\Exception $e) {
            Log::error('AI Audit Exception: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while connecting to the AI service.'
            ], 500);
        }
    }

    public function solutions()
    {
        if (view()->exists('solutions')) {
            return view('solutions');
        }
        return view('service');
    }

    public function industries()
    {
        if (view()->exists('industries')) {
            return view('industries');
        }
        return view('index');
    }

    public function dynamicPage($category, $slug)
    {
        $viewPath = "{$category}.{$slug}";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404);
    }
}
