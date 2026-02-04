<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your AI Audit Report</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0 0 10px;
            font-size: 28px;
        }

        .header p {
            margin: 0;
            font-size: 16px;
            opacity: 0.9;
        }

        .content {
            padding: 30px;
        }

        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 8px;
            background: #f8f9fa;
        }

        .section h2 {
            color: #667eea;
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .section h3 {
            color: #495057;
            font-size: 16px;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .opportunity {
            background: white;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #28a745;
            border-radius: 5px;
        }

        .opportunity h4 {
            color: #28a745;
            margin: 0 0 10px;
            font-size: 16px;
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 8px;
            margin-top: 5px;
        }

        .badge-high {
            background: #28a745;
            color: white;
        }

        .badge-medium {
            background: #ffc107;
            color: #333;
        }

        .badge-low {
            background: #6c757d;
            color: white;
        }

        .footer {
            background: #f8f9fa;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: 600;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>🎯 Your AI Audit Report is Ready!</h1>
            <p>Comprehensive AI Strategy Analysis for {{ parse_url($url, PHP_URL_HOST) }}</p>
        </div>

        <div class="content">
            <div class="greeting">
                <p>Hi {{ $name }},</p>
                <p>Thank you for using our AI Audit platform! We've completed a comprehensive analysis of your
                    business's AI readiness and opportunities.</p>
            </div>

            <!-- Executive Summary -->
            <div class="section" style="background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);">
                <h2>📊 Executive Summary</h2>
                <p>{{ $auditData['executive_summary'] ?? 'No summary available' }}</p>
                <p style="margin-top: 15px;"><strong>AI Readiness Score:</strong> <span
                        style="font-size: 24px; color: #667eea; font-weight: bold;">{{ $auditData['ai_readiness_score'] ?? 'N/A' }}</span>
                </p>
            </div>

            <!-- Technology Assessment -->
            @if (isset($auditData['tech_assessment']))
                <div class="section">
                    <h2>💻 Technology Assessment</h2>
                    <h3>Stack Analysis:</h3>
                    <p>{{ $auditData['tech_assessment']['current_stack_analysis'] ?? 'No data' }}</p>
                    <h3>Infrastructure Readiness:</h3>
                    <p>{{ $auditData['tech_assessment']['infrastructure_readiness'] ?? 'No data' }}</p>
                    <h3>Data Maturity:</h3>
                    <p>{{ $auditData['tech_assessment']['data_maturity'] ?? 'No data' }}</p>
                </div>
            @endif

            <!-- AI Opportunities -->
            @if (isset($auditData['opportunities']) && count($auditData['opportunities']) > 0)
                <div class="section">
                    <h2>🚀 AI Implementation Opportunities</h2>
                    @foreach ($auditData['opportunities'] as $index => $opp)
                        <div class="opportunity">
                            <h4>{{ $index + 1 }}. {{ $opp['title'] ?? 'Opportunity' }}</h4>
                            <p>{{ $opp['description'] ?? 'No description' }}</p>
                            <div>
                                @if (isset($opp['category']))
                                    <span class="badge"
                                        style="background: #007bff; color: white;">{{ $opp['category'] }}</span>
                                @endif
                                @if (isset($opp['impact']))
                                    <span class="badge badge-{{ strtolower($opp['impact']) }}">Impact:
                                        {{ $opp['impact'] }}</span>
                                @endif
                                @if (isset($opp['implementation_complexity']))
                                    <span
                                        class="badge badge-{{ strtolower($opp['implementation_complexity']) }}">Complexity:
                                        {{ $opp['implementation_complexity'] }}</span>
                                @endif
                                @if (isset($opp['estimated_timeline']))
                                    <span class="badge" style="background: #6f42c1; color: white;">Timeline:
                                        {{ $opp['estimated_timeline'] }}</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- Competitive Analysis -->
            @if (isset($auditData['competitive_analysis']))
                <div class="section">
                    <h2>🎯 Competitive Analysis</h2>
                    <h3>Market Position:</h3>
                    <p>{{ $auditData['competitive_analysis']['market_position'] ?? 'No data' }}</p>
                    <h3>AI Adoption Gap:</h3>
                    <p>{{ $auditData['competitive_analysis']['ai_adoption_gap'] ?? 'No data' }}</p>
                    <h3>Strategic Advantages:</h3>
                    <p>{{ $auditData['competitive_analysis']['strategic_advantages'] ?? 'No data' }}</p>
                </div>
            @endif

            <!-- ROI Forecast -->
            @if (isset($auditData['roi_forecast']))
                <div class="section" style="background: #d4edda;">
                    <h2>💰 ROI Forecast</h2>
                    <h3>Efficiency Gains:</h3>
                    <p>{{ $auditData['roi_forecast']['efficiency_gains'] ?? 'No data' }}</p>
                    <h3>Cost Reduction:</h3>
                    <p>{{ $auditData['roi_forecast']['cost_reduction'] ?? 'No data' }}</p>
                    <h3>Revenue Opportunities:</h3>
                    <p>{{ $auditData['roi_forecast']['revenue_opportunities'] ?? 'No data' }}</p>
                    <h3>Payback Period:</h3>
                    <p>{{ $auditData['roi_forecast']['payback_period'] ?? 'No data' }}</p>
                </div>
            @endif

            <!-- Implementation Roadmap -->
            @if (isset($auditData['implementation_roadmap']))
                <div class="section">
                    <h2>🗺️ Implementation Roadmap</h2>
                    @foreach (['phase_1', 'phase_2', 'phase_3'] as $phaseKey)
                        @if (isset($auditData['implementation_roadmap'][$phaseKey]))
                            @php $phase = $auditData['implementation_roadmap'][$phaseKey]; @endphp
                            <h3>{{ $phase['title'] ?? 'Phase ' . substr($phaseKey, -1) }}</h3>
                            <p><strong>Duration:</strong> {{ $phase['duration'] ?? 'N/A' }}</p>
                            @if (isset($phase['key_actions']) && is_array($phase['key_actions']))
                                <ul>
                                    @foreach ($phase['key_actions'] as $action)
                                        <li>{{ $action }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endif

            <!-- Recommended Next Steps -->
            @if (isset($auditData['recommended_next_steps']) && count($auditData['recommended_next_steps']) > 0)
                <div class="section" style="background: #d1ecf1;">
                    <h2>✅ Recommended Next Steps</h2>
                    <ol>
                        @foreach ($auditData['recommended_next_steps'] as $step)
                            <li>{{ $step }}</li>
                        @endforeach
                    </ol>
                </div>
            @endif

            <div style="text-align: center; margin-top: 30px;">
                <p style="font-size: 16px; color: #495057;">Ready to implement these AI solutions?</p>
                <a href="{{ url('/contact') }}" class="cta-button">Schedule a Free Consultation</a>
            </div>
        </div>

        <div class="footer">
            <p><strong>Thank you for choosing our AI Consulting Platform!</strong></p>
            <p style="color: #6c757d; font-size: 14px;">This report was generated specifically for {{ $url }}
                in the {{ ucfirst($industry) }} industry.</p>
            <p style="color: #6c757d; font-size: 14px; margin-top: 15px;">
                If you have any questions or would like to discuss implementing these recommendations,
                feel free to reply to this email or contact us directly.
            </p>
        </div>
    </div>
</body>

</html>
