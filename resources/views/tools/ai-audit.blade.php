@extends('layouts.app')

@section('content')
    <!-- Hero area start -->
    <section class="tp-hero4-area pt-150 pb-80 tp-tools-hero-area audit">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 text-center">
                    <div class="tp-hero4-content">
                        <h1 class="title mb-30 tp-tools-hero-title">Deep AI <span>Audit</span></h1>
                        <p class="text mb-40 tp-tools-hero-text">
                            A multi-layer technical scan to uncover automation opportunities and AI integration points.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->

    <!-- Tool Area Start -->
    <section class="tp-tool-detail-area pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="tp-tool-card">
                        <div class="mb-30 text-center">
                            <span class="tp-tool-icon-wrapper audit">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ffa940"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </span>
                        </div>

                        <form id="audit-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-20">
                                        <label class="tp-tool-form-label">Company Website URL</label>
                                        <input type="url" id="audit-url" placeholder="https://example.com"
                                            class="form-control tp-tool-form-input" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-20">
                                        <label class="tp-tool-form-label">Industry Profile</label>
                                        <select id="audit-industry" class="form-control tp-tool-form-input" required>
                                            <option value="">Select Industry</option>
                                            <option value="ecommerce">E-commerce / Retail</option>
                                            <option value="saas">SaaS / Software</option>
                                            <option value="finance">Finance / Fintech</option>
                                            <option value="healthcare">Healthcare</option>
                                            <option value="realestate">Real Estate</option>
                                            <option value="education">Education</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 mt-10 mb-20">
                                    <div style="border-top: 2px solid #e9ecef; padding-top: 20px;">
                                        <h5 class="mb-15 text-center" style="color: #6f42c1; font-size: 16px;">
                                            📧 Get Your Free AI Audit Report
                                        </h5>
                                        <p class="text-center mb-20" style="font-size: 14px; color: #6c757d;">
                                            Enter your details to receive the complete audit report via email
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-20">
                                        <label class="tp-tool-form-label">Full Name *</label>
                                        <input type="text" id="audit-name" placeholder="John Doe"
                                            class="form-control tp-tool-form-input" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-20">
                                        <label class="tp-tool-form-label">Email Address *</label>
                                        <input type="email" id="audit-email" placeholder="john@company.com"
                                            class="form-control tp-tool-form-input" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-20">
                                        <label class="tp-tool-form-label">Phone Number *</label>
                                        <input type="tel" id="audit-phone" placeholder="+1 (555) 123-4567"
                                            class="form-control tp-tool-form-input" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="tp-btn-two tp-btn-anim border-0">
                                        <div class="tp-btn-text">Run Deep Scan & Get Report</div>
                                        <span>
                                            <svg width="9" height="13" viewBox="0 0 9 13"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div id="audit-loading" style="display:none;" class="mt-40 text-center">
                            <div class="tp-tool-loading-text">Performing AI-Ready Audit...</div>
                            <div class="tp-tool-scan-steps">
                                <div id="step-1" class="tp-tool-scan-step">Probing technical infrastructure</div>
                                <div id="step-2" class="tp-tool-scan-step">Identifying AI touchpoints</div>
                                <div id="step-3" class="tp-tool-scan-step">Analyzing Competitive Gap</div>
                                <div id="step-4" class="tp-tool-scan-step">Consulting Gemini AI Engine</div>
                            </div>
                        </div>

                        <div id="audit-results" style="display:none;" class="mt-40">
                            <div class="tp-tool-result-box">
                                <div class="text-center mb-30">
                                    <h3 class="mb-15">🎯 AI Audit Intelligence Report</h3>
                                    <div id="audit-summary-badges"
                                        class="d-flex justify-content-center flex-wrap gap-2 mb-20">
                                        <!-- Badges injected here -->
                                    </div>
                                </div>

                                <!-- Executive Summary -->
                                <div class="audit-section mb-30"
                                    style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 25px; border-radius: 10px;">
                                    <h4 class="mb-15" style="color: white;">📊 Executive Summary</h4>
                                    <p id="executive-summary" style="line-height: 1.8; font-size: 15px;"></p>
                                    <div class="mt-20">
                                        <strong>AI Readiness Score:</strong>
                                        <span id="readiness-score" class="ml-10"
                                            style="font-size: 24px; font-weight: bold;"></span>
                                    </div>
                                </div>

                                <!-- Technology Assessment -->
                                <div class="audit-section mb-30"
                                    style="background: #f8f9fa; padding: 20px; border-radius: 10px; border-left: 4px solid #007bff;">
                                    <h4 class="mb-15" style="color: #007bff;">💻 Technology Assessment</h4>
                                    <div class="row">
                                        <div class="col-md-4 mb-15">
                                            <strong style="color: #007bff;">Stack Analysis:</strong>
                                            <p id="stack-analysis" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                        <div class="col-md-4 mb-15">
                                            <strong style="color: #007bff;">Infrastructure:</strong>
                                            <p id="infrastructure-readiness" class="mb-0 mt-10" style="font-size: 14px;">
                                            </p>
                                        </div>
                                        <div class="col-md-4 mb-15">
                                            <strong style="color: #007bff;">Data Maturity:</strong>
                                            <p id="data-maturity" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- AI Opportunities -->
                                <div class="audit-section mb-30">
                                    <h4 class="mb-20" style="color: #28a745;">🚀 AI Implementation Opportunities</h4>
                                    <div id="opportunities-list" class="row">
                                        <!-- Opportunities injected here -->
                                    </div>
                                </div>

                                <!-- Competitive Analysis -->
                                <div class="audit-section mb-30"
                                    style="background: #fff3cd; padding: 20px; border-radius: 10px; border-left: 4px solid #ffc107;">
                                    <h4 class="mb-15" style="color: #856404;">🎯 Competitive Analysis</h4>
                                    <div class="row">
                                        <div class="col-md-4 mb-15">
                                            <strong style="color: #856404;">Market Position:</strong>
                                            <p id="market-position" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                        <div class="col-md-4 mb-15">
                                            <strong style="color: #856404;">AI Adoption Gap:</strong>
                                            <p id="ai-adoption-gap" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                        <div class="col-md-4 mb-15">
                                            <strong style="color: #856404;">Strategic Advantages:</strong>
                                            <p id="strategic-advantages" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- ROI Forecast -->
                                <div class="audit-section mb-30"
                                    style="background: #d4edda; padding: 20px; border-radius: 10px; border-left: 4px solid #28a745;">
                                    <h4 class="mb-15" style="color: #155724;">💰 ROI Forecast</h4>
                                    <div class="row">
                                        <div class="col-md-3 mb-15">
                                            <strong style="color: #155724;">Efficiency Gains:</strong>
                                            <p id="efficiency-gains" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                        <div class="col-md-3 mb-15">
                                            <strong style="color: #155724;">Cost Reduction:</strong>
                                            <p id="cost-reduction" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                        <div class="col-md-3 mb-15">
                                            <strong style="color: #155724;">Revenue Opportunities:</strong>
                                            <p id="revenue-opportunities" class="mb-0 mt-10" style="font-size: 14px;">
                                            </p>
                                        </div>
                                        <div class="col-md-3 mb-15">
                                            <strong style="color: #155724;">Payback Period:</strong>
                                            <p id="payback-period" class="mb-0 mt-10" style="font-size: 14px;"></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Implementation Roadmap -->
                                <div class="audit-section mb-30">
                                    <h4 class="mb-20" style="color: #6f42c1;">🗺️ Implementation Roadmap</h4>
                                    <div class="row" id="roadmap-phases">
                                        <!-- Phases injected here -->
                                    </div>
                                </div>

                                <!-- Risks & Considerations -->
                                <div class="audit-section mb-30"
                                    style="background: #f8d7da; padding: 20px; border-radius: 10px; border-left: 4px solid #dc3545;">
                                    <h4 class="mb-15" style="color: #721c24;">⚠️ Risks & Considerations</h4>
                                    <div id="risks-list">
                                        <!-- Risks injected here -->
                                    </div>
                                </div>

                                <!-- Recommended Next Steps -->
                                <div class="audit-section mb-30"
                                    style="background: #d1ecf1; padding: 20px; border-radius: 10px; border-left: 4px solid #17a2b8;">
                                    <h4 class="mb-15" style="color: #0c5460;">✅ Recommended Next Steps</h4>
                                    <ol id="next-steps-list" style="margin-left: 20px;">
                                        <!-- Next steps injected here -->
                                    </ol>
                                </div>

                                <div class="text-center mt-30">
                                    <button id="new-audit-btn" class="tp-btn-two mr-10">New Audit</button>
                                    <a href="{{ route('contact') }}" class="tp-btn-two">Request Implementation Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Inline Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const auditForm = document.getElementById('audit-form');
            if (!auditForm) return;

            const newAuditBtn = document.getElementById('new-audit-btn');
            if (newAuditBtn) {
                newAuditBtn.addEventListener('click', () => {
                    location.reload();
                });
            }

            auditForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const url = document.getElementById('audit-url').value;
                const industry = document.getElementById('audit-industry').value;
                const name = document.getElementById('audit-name').value;
                const email = document.getElementById('audit-email').value;
                const phone = document.getElementById('audit-phone').value;
                const loading = document.getElementById('audit-loading');
                const results = document.getElementById('audit-results');
                const badgeContainer = document.getElementById('audit-summary-badges');

                // Basic validation
                if (!name || !email || !phone) {
                    alert('Please fill in all contact fields to receive your audit report.');
                    return;
                }

                auditForm.style.display = 'none';
                loading.style.display = 'block';

                const steps = [{
                        id: 'step-1',
                        duration: 1500
                    },
                    {
                        id: 'step-2',
                        duration: 2000
                    },
                    {
                        id: 'step-3',
                        duration: 1500
                    },
                    {
                        id: 'step-4',
                        duration: 1000
                    }
                ];

                let totalDelay = 0;
                steps.forEach((step, index) => {
                    setTimeout(() => {
                        const el = document.getElementById(step.id);
                        el.classList.add('active');
                        if (index > 0) {
                            document.getElementById(steps[index - 1].id).classList.replace(
                                'active', 'completed');
                        }
                    }, totalDelay);
                    totalDelay += step.duration;
                });

                // Prepare Data
                const formData = {
                    url: url,
                    industry: industry,
                    name: name,
                    email: email,
                    phone: phone,
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                };

                // Call Real API through backend
                fetch('{{ route('tools.run-audit') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(formData)
                    })
                    .then(response => response.json())
                    .then(res => {
                        if (!res.success) {
                            throw new Error(res.message || 'Something went wrong');
                        }

                        const data = res.data;

                        // Add a slight delay to ensure the "AI consulting" step feels real
                        setTimeout(() => {
                            loading.style.display = 'none';
                            results.style.display = 'block';

                            // Show email notification
                            if (res.message) {
                                const emailNotice = document.createElement('div');
                                emailNotice.style.cssText =
                                    'background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; padding: 15px 20px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-size: 15px;';
                                emailNotice.innerHTML = `
                                    <strong>✉️ Email Sent!</strong> ${res.message}<br>
                                    <span style="font-size: 13px; opacity: 0.9;">Sent to: ${email}</span>
                                `;
                                results.insertBefore(emailNotice, results.firstChild);
                            }

                            // Badges
                            badgeContainer.innerHTML = `
                                <span style="background:#e6f7ff; color:#007bff; padding:8px 15px; border-radius:20px; font-size:12px; font-weight:700;">URL: ${url.replace('https://','').replace('http://','')}</span>
                                <span style="background:#fffbe6; color:#ffa940; padding:8px 15px; border-radius:20px; font-size:12px; font-weight:700;">Industry: ${industry.toUpperCase()}</span>
                            `;

                            // Executive Summary
                            document.getElementById('executive-summary').textContent = data
                                .executive_summary || 'No summary available';
                            document.getElementById('readiness-score').textContent = data
                                .ai_readiness_score || 'N/A';

                            // Technology Assessment
                            if (data.tech_assessment) {
                                document.getElementById('stack-analysis').textContent = data
                                    .tech_assessment.current_stack_analysis || 'No data';
                                document.getElementById('infrastructure-readiness')
                                    .textContent = data.tech_assessment
                                    .infrastructure_readiness || 'No data';
                                document.getElementById('data-maturity').textContent = data
                                    .tech_assessment.data_maturity || 'No data';
                            }

                            // AI Opportunities
                            const opportunitiesList = document.getElementById(
                                'opportunities-list');
                            if (data.opportunities && data.opportunities.length > 0) {
                                let oppHtml = '';
                                data.opportunities.forEach((opp, i) => {
                                    const impactColor = opp.impact === 'High' ?
                                        '#28a745' : opp.impact === 'Medium' ?
                                        '#ffc107' : '#6c757d';
                                    const complexityColor = opp
                                        .implementation_complexity === 'Low' ?
                                        '#28a745' : opp.implementation_complexity ===
                                        'Medium' ? '#ffc107' : '#dc3545';

                                    oppHtml += `
                                        <div class="col-md-6 mb-20">
                                            <div style="background: white; border: 2px solid #e9ecef; border-radius: 10px; padding: 20px; height: 100%; transition: all 0.3s;">
                                                <div class="mb-10">
                                                    <span style="background: #e7f3ff; color: #007bff; padding: 4px 10px; border-radius: 15px; font-size: 11px; font-weight: 600;">${opp.category || 'General'}</span>
                                                </div>
                                                <h5 style="color: #28a745; margin-bottom: 10px; font-size: 16px;">${i + 1}. ${opp.title}</h5>
                                                <p style="color: #6c757d; font-size: 14px; line-height: 1.6; margin-bottom: 15px;">${opp.description}</p>
                                                <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                    <span style="background: ${impactColor}; color: white; padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 600;">Impact: ${opp.impact || 'N/A'}</span>
                                                    <span style="background: ${complexityColor}; color: white; padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 600;">Complexity: ${opp.implementation_complexity || 'N/A'}</span>
                                                    <span style="background: #6f42c1; color: white; padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 600;">Timeline: ${opp.estimated_timeline || 'N/A'}</span>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                                });
                                opportunitiesList.innerHTML = oppHtml;
                            } else {
                                opportunitiesList.innerHTML =
                                    '<p class="text-center">No opportunities identified</p>';
                            }

                            // Competitive Analysis
                            if (data.competitive_analysis) {
                                document.getElementById('market-position').textContent = data
                                    .competitive_analysis.market_position || 'No data';
                                document.getElementById('ai-adoption-gap').textContent = data
                                    .competitive_analysis.ai_adoption_gap || 'No data';
                                document.getElementById('strategic-advantages').textContent =
                                    data.competitive_analysis.strategic_advantages || 'No data';
                            }

                            // ROI Forecast
                            if (data.roi_forecast) {
                                document.getElementById('efficiency-gains').textContent = data
                                    .roi_forecast.efficiency_gains || 'No data';
                                document.getElementById('cost-reduction').textContent = data
                                    .roi_forecast.cost_reduction || 'No data';
                                document.getElementById('revenue-opportunities').textContent =
                                    data.roi_forecast.revenue_opportunities || 'No data';
                                document.getElementById('payback-period').textContent = data
                                    .roi_forecast.payback_period || 'No data';
                            }

                            // Implementation Roadmap
                            const roadmapPhases = document.getElementById('roadmap-phases');
                            if (data.implementation_roadmap) {
                                let roadmapHtml = '';
                                const phases = ['phase_1', 'phase_2', 'phase_3'];
                                const phaseColors = ['#007bff', '#28a745', '#6f42c1'];

                                phases.forEach((phaseKey, idx) => {
                                    const phase = data.implementation_roadmap[phaseKey];
                                    if (phase) {
                                        roadmapHtml += `
                                            <div class="col-md-4 mb-15">
                                                <div style="background: white; border-left: 4px solid ${phaseColors[idx]}; padding: 15px; border-radius: 8px; height: 100%;">
                                                    <h5 style="color: ${phaseColors[idx]}; font-size: 16px; margin-bottom: 8px;">${phase.title || 'Phase ' + (idx + 1)}</h5>
                                                    <p style="font-size: 12px; color: #6c757d; margin-bottom: 12px;"><strong>Duration:</strong> ${phase.duration || 'N/A'}</p>
                                                    <ul style="margin-left: 15px; font-size: 13px; color: #495057;">
                                                        ${phase.key_actions ? phase.key_actions.map(action => `<li style="margin-bottom: 5px;">${action}</li>`).join('') : '<li>No actions defined</li>'}
                                                    </ul>
                                                </div>
                                            </div>
                                        `;
                                    }
                                });
                                roadmapPhases.innerHTML = roadmapHtml;
                            } else {
                                roadmapPhases.innerHTML =
                                    '<p class="text-center">No roadmap available</p>';
                            }

                            // Risks & Considerations
                            const risksList = document.getElementById('risks-list');
                            if (data.risks_and_considerations && data.risks_and_considerations
                                .length > 0) {
                                let risksHtml = '';
                                data.risks_and_considerations.forEach((risk, i) => {
                                    risksHtml += `
                                        <div class="mb-15" style="background: white; padding: 15px; border-radius: 8px;">
                                            <h6 style="color: #dc3545; font-size: 14px; margin-bottom: 5px;">⚠️ Risk ${i + 1}: ${risk.risk}</h6>
                                            <p style="color: #6c757d; font-size: 13px; margin-bottom: 0;"><strong>Mitigation:</strong> ${risk.mitigation}</p>
                                        </div>
                                    `;
                                });
                                risksList.innerHTML = risksHtml;
                            } else {
                                risksList.innerHTML =
                                    '<p class="text-center">No risks identified</p>';
                            }

                            // Recommended Next Steps
                            const nextStepsList = document.getElementById('next-steps-list');
                            if (data.recommended_next_steps && data.recommended_next_steps
                                .length > 0) {
                                let stepsHtml = '';
                                data.recommended_next_steps.forEach(step => {
                                    stepsHtml +=
                                        `<li style="margin-bottom: 10px; font-size: 14px; color: #0c5460;">${step}</li>`;
                                });
                                nextStepsList.innerHTML = stepsHtml;
                            } else {
                                nextStepsList.innerHTML =
                                    '<li>No specific steps recommended</li>';
                            }
                        }, 500);
                    })
                    .catch(err => {
                        loading.style.display = 'none';
                        auditForm.style.display = 'block';
                        alert(err.message);
                    });
            });
        });
    </script>
@endsection
