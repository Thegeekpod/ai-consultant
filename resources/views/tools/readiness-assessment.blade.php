@extends('layouts.app')

@section('title', 'AI Readiness Assessment - Deep Dive')

@push('css')
    <style>
        .tp-tools-hero-area {
            background: linear-gradient(180deg, rgba(161, 255, 117, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
            padding: 100px 0 60px;
        }

        .tp-tool-card {
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.03);
            position: relative;
        }

        .tp-tool-progress-wrapper {
            background: #f0f0f0;
            height: 6px;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .tp-tool-progress-bar {
            background: var(--tp-theme-1);
            height: 100%;
            width: 0%;
            transition: width 0.4s ease;
        }

        .quiz-option-btn {
            width: 100%;
            text-align: left;
            padding: 16px 20px;
            background: #fcfcfc;
            border: 1px solid #eee;
            border-radius: 12px;
            margin-bottom: 12px;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .quiz-option-btn:hover {
            border-color: var(--tp-theme-1);
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .tp-tool-form-input {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .tp-tool-result-score {
            font-size: 56px;
            font-weight: 800;
            color: var(--tp-theme-1);
            line-height: 1;
        }

        .tp-tool-category-item {
            margin-bottom: 20px;
        }

        .tp-tool-category-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 600;
        }

        .tp-tool-category-bar-bg {
            background: #f0f0f0;
            height: 4px;
            border-radius: 10px;
        }

        .tp-tool-category-bar-fill {
            background: var(--tp-theme-1);
            height: 100%;
            border-radius: 10px;
            transition: width 0.8s ease;
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .next-steps-box {
            background: #f8fbf8;
            border: 1px solid #eef5ee;
            border-radius: 16px;
            padding: 25px;
        }

        .retake-btn {
            background: none;
            border: none;
            color: #666;
            text-decoration: underline;
            font-weight: 600;
            cursor: pointer;
            padding: 10px;
            transition: color 0.2s;
        }

        .retake-btn:hover {
            color: var(--tp-theme-1);
        }
    </style>
@endpush

@section('content')
    <section class="tp-tools-hero-area text-center">
        <div class="container">
            <h1 class="tp-section-title-2 mb-10">AI Readiness <span>Deep Dive</span></h1>
            <p class="mb-0">Benchmark your business against industry standards.</p>
        </div>
    </section>

    <section class="tp-tool-detail-area pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tp-tool-card">
                        <div id="quiz-wrapper">
                            <!-- Progress -->
                            <div id="quiz-progress-container" style="display:none;">
                                <div id="quiz-step-label" class="mb-5"
                                    style="font-size: 12px; font-weight: 700; color: #888; text-transform: uppercase;">
                                    Question 1 / 10</div>
                                <div class="tp-tool-progress-wrapper">
                                    <div id="quiz-progress-bar" class="tp-tool-progress-bar"></div>
                                </div>
                            </div>

                            <!-- Intro -->
                            <div id="quiz-intro" class="text-center fade-in">
                                <div class="mb-30">
                                    <div class="mx-auto" style="width: 60px; height: 60px; color: var(--tp-theme-1);">
                                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="mb-15">Discover Your AI Potential</h3>
                                <p class="mb-30">This assessment evaluates your Data, Strategy, Technology, and Culture to
                                    provide a personalized maturity score.</p>
                                <button id="start-quiz-btn" class="tp-btn-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Start Deep Assessment</span>
                                        <span class="text-two">Start Deep Assessment</span>
                                    </span>
                                </button>
                            </div>

                            <!-- Quiz -->
                            <div id="quiz-questions" style="display:none;" class="fade-in">
                                <span id="q-category" class="mb-10 d-inline-block"
                                    style="font-size: 11px; font-weight: 800; color: var(--tp-theme-1); text-transform: uppercase; letter-spacing: 1px;">Category</span>
                                <h4 id="q-text" class="mb-30">Question Text</h4>
                                <div id="q-options"></div>
                            </div>

                            <!-- Lead Capture Step (Middle Step) -->
                            <div id="quiz-lead-capture" style="display:none;" class="fade-in">
                                <form id="quiz-lead-form">
                                    <div class="text-center mb-35">
                                        <h3 class="mb-10">Step Finalized!</h3>
                                        <p>Enter your details to generate your AI Maturity report.</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-15">
                                            <input type="text" id="lead-name" class="tp-tool-form-input"
                                                placeholder="Full Name" required>
                                        </div>
                                        <div class="col-md-6 mb-15">
                                            <input type="email" id="lead-email" class="tp-tool-form-input"
                                                placeholder="Email Address" required>
                                        </div>
                                        <div class="col-md-6 mb-15">
                                            <input type="text" id="lead-phone" class="tp-tool-form-input"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="text-center mt-10">
                                        <button type="submit" class="tp-btn-one">
                                            <span class="btn-wrap">
                                                <span class="text-one">See My Result</span>
                                                <span class="text-two">See My Result</span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!-- Results Section -->
                            <div id="quiz-results" class="fade-in" style="display: none;">
                                <div class="text-center mb-40 border-bottom pb-30">
                                    <span style="font-size: 14px; font-weight: 700; color: #888;">AI MATURITY SCORE</span>
                                    <div class="tp-tool-result-score mt-10"><span id="final-score">0</span><small
                                            style="font-size: 20px; color: #ccc;">/100</small></div>
                                    <div id="final-msg-badge" class="mt-15 d-inline-block"
                                        style="padding: 4px 16px; border-radius: 50px; background: #f0f0f0; font-size: 13px; font-weight: 700;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="category-results-container"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="next-steps-box">
                                            <h5 class="mb-15" style="font-size: 16px;">Immediate Next Steps:</h5>
                                            <ul id="recommendations-list" style="list-style: none; padding-left: 0;"></ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-40">
                                    <button id="restart-quiz-btn" class="retake-btn">Retake Assessment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hidden Internal Submission Form -->
    <form id="internal-submission-form" action="{{ route('contact.store') }}" method="POST" style="display:none;">
        @csrf
        <input type="hidden" name="full_name" id="sub-name">
        <input type="hidden" name="email" id="sub-email">
        <input type="hidden" name="phone" id="sub-phone">
        <input type="hidden" name="page_url" value="{{ url()->current() }}">
        <textarea name="message" id="sub-message"></textarea>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const questions = [{
                    cat: "Strategy",
                    q: "Does your leadership have an AI roadmap?",
                    options: ["Fully Defined", "Partial Idea", "Exploring", "None"],
                    scores: [10, 7, 3, 0]
                },
                {
                    cat: "Data",
                    q: "Current state of business data?",
                    options: ["Centralized & Clean", "Siloed but clean", "Siloed & Messy", "Not tracked"],
                    scores: [10, 6, 2, 0]
                },
                {
                    cat: "Technology",
                    q: "Are you using any AI tools currently?",
                    options: ["Extensive production", "Testing pilots", "Ad-hoc use", "No use"],
                    scores: [10, 7, 4, 0]
                },
                {
                    cat: "Culture",
                    q: "How open is your team to AI?",
                    options: ["Highly Enthusiastic", "Neutral", "Skeptical", "Resistant"],
                    scores: [10, 5, 2, 0]
                },
                {
                    cat: "Strategy",
                    q: "Is there a budget for AI?",
                    options: ["Fixed Annual", "Project-based", "Ad-hoc", "None"],
                    scores: [10, 7, 3, 0]
                },
                {
                    cat: "Data",
                    q: "Do you have data privacy policies?",
                    options: ["Robust/AI specific", "Standard", "Minimal", "None"],
                    scores: [10, 6, 2, 0]
                },
                {
                    cat: "Technology",
                    q: "Legacy systems vs Cloud?",
                    options: ["100% Cloud Native", "Hybrid", "Mostly Legacy", "All Legacy"],
                    scores: [10, 7, 3, 0]
                },
                {
                    cat: "Culture",
                    q: "Internal AI skills availability?",
                    options: ["Specialized Team", "IT knows basics", "Need training", "No skills"],
                    scores: [10, 6, 3, 0]
                },
                {
                    cat: "Data",
                    q: "How often are data audits done?",
                    options: ["Continuous", "Monthly", "Yearly", "Never"],
                    scores: [10, 7, 4, 0]
                },
                {
                    cat: "Strategy",
                    q: "Are ROI metrics defined for AI?",
                    options: ["Clearly Defined", "Loosely defined", "Vague", "None"],
                    scores: [10, 7, 3, 0]
                }
            ];

            let currentQ = 0;
            let categoryScores = {
                "Strategy": 0,
                "Data": 0,
                "Technology": 0,
                "Culture": 0
            };
            let totalPossiblePerCat = {
                "Strategy": 30,
                "Data": 30,
                "Technology": 20,
                "Culture": 20
            };

            const elements = {
                startBtn: document.getElementById('start-quiz-btn'),
                quizIntro: document.getElementById('quiz-intro'),
                quizQuestions: document.getElementById('quiz-questions'),
                quizProgressContainer: document.getElementById('quiz-progress-container'),
                quizProgressBar: document.getElementById('quiz-progress-bar'),
                quizStepLabel: document.getElementById('quiz-step-label'),
                questionText: document.getElementById('q-text'),
                questionCategory: document.getElementById('q-category'),
                optionsContainer: document.getElementById('q-options'),
                quizLeadCapture: document.getElementById('quiz-lead-capture'),
                quizLeadForm: document.getElementById('quiz-lead-form'),
                quizResults: document.getElementById('quiz-results'),
                finalScoreSpan: document.getElementById('final-score'),
                finalMsgBadge: document.getElementById('final-msg-badge'),
                categoryResultsContainer: document.getElementById('category-results-container'),
                recommendationsList: document.getElementById('recommendations-list'),
                restartBtn: document.getElementById('restart-quiz-btn')
            };

            elements.startBtn.addEventListener('click', () => {
                elements.quizIntro.style.display = 'none';
                elements.quizProgressContainer.style.display = 'block';
                elements.quizQuestions.style.display = 'block';
                loadQuestion();
            });

            elements.restartBtn.addEventListener('click', () => {
                currentQ = 0;
                categoryScores = {
                    "Strategy": 0,
                    "Data": 0,
                    "Technology": 0,
                    "Culture": 0
                };
                elements.quizResults.style.display = 'none';
                elements.quizIntro.style.display = 'block';
            });

            elements.quizLeadForm.addEventListener('submit', (e) => {
                e.preventDefault();

                // 1. Get user data
                const name = document.getElementById('lead-name').value;
                const email = document.getElementById('lead-email').value;
                const phone = document.getElementById('lead-phone').value;
                const totalScore = Object.values(categoryScores).reduce((a, b) => a + b, 0);

                // 2. Prep internal submission (background)
                document.getElementById('sub-name').value = name;
                document.getElementById('sub-email').value = email;
                document.getElementById('sub-phone').value = phone;
                document.getElementById('sub-message').value =
                    `AI READINESS ASSESSMENT RESULT:\nTotal Score: ${totalScore}/100\nBreakdown: Strategy: ${categoryScores.Strategy}, Data: ${categoryScores.Data}, Tech: ${categoryScores.Technology}, Culture: ${categoryScores.Culture}`;

                // 3. Submit to server via background fetch (or similar) to avoid page reload logic issues
                fetch(document.getElementById('internal-submission-form').action, {
                    method: 'POST',
                    body: new FormData(document.getElementById('internal-submission-form')),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                // 4. Immediately SHOW results on the page
                elements.quizLeadCapture.style.display = 'none';
                showResultsScreen();
            });

            function updateProgress() {
                const progress = (currentQ / questions.length) * 100;
                elements.quizProgressBar.style.width = `${progress}%`;
                elements.quizStepLabel.textContent = `Question ${currentQ + 1} of ${questions.length}`;
            }

            function loadQuestion() {
                if (currentQ >= questions.length) {
                    elements.quizQuestions.style.display = 'none';
                    elements.quizProgressContainer.style.display = 'none';
                    elements.quizLeadCapture.style.display = 'block'; // Show FORM before RESULTS
                    return;
                }
                updateProgress();
                const data = questions[currentQ];
                elements.questionText.textContent = data.q;
                elements.questionCategory.textContent = data.cat;
                elements.optionsContainer.innerHTML = '';
                data.options.forEach((opt, index) => {
                    const btn = document.createElement('button');
                    btn.className = 'quiz-option-btn fade-in';
                    btn.innerHTML =
                        `<span>${opt}</span> <i class="fa fa-chevron-right" style="font-size: 11px; color: #ccc;"></i>`;
                    btn.addEventListener('click', () => {
                        categoryScores[data.cat] += data.scores[index];
                        currentQ++;
                        loadQuestion();
                    });
                    elements.optionsContainer.appendChild(btn);
                });
            }

            function showResultsScreen() {
                elements.quizResults.style.display = 'block';

                const totalScore = Object.values(categoryScores).reduce((a, b) => a + b, 0);
                elements.finalScoreSpan.textContent = totalScore;

                let badgeText = "";
                let recs = [];
                if (totalScore > 80) {
                    badgeText = "AI FRONT-RUNNER";
                    recs = ["Scale autonomous agent pilots", "Establish AI Governance board",
                        "Optimize custom LLM workflows"
                    ];
                } else if (totalScore > 50) {
                    badgeText = "AI EVOLVER";
                    recs = ["Formalize data clean-up", "Start departmental AI pilots",
                        "Enable cloud-native data hub"
                    ];
                } else {
                    badgeText = "AI BEGINNER";
                    recs = ["Modernize legacy systems", "Launch AI literacy workshops",
                        "Centralize business metadata"
                    ];
                }
                elements.finalMsgBadge.textContent = badgeText;

                // Categories
                elements.categoryResultsContainer.innerHTML = '';
                for (let cat in categoryScores) {
                    const score = categoryScores[cat];
                    const possible = totalPossiblePerCat[cat];
                    const percent = (score / possible) * 100;
                    const catHtml = `
                        <div class="tp-tool-category-item">
                            <div class="tp-tool-category-header">
                                <span>${cat}</span>
                                <span style="color: var(--tp-theme-1);">${score}/${possible}</span>
                            </div>
                            <div class="tp-tool-category-bar-bg">
                                <div class="tp-tool-category-bar-fill" style="width: ${percent}%"></div>
                            </div>
                        </div>
                    `;
                    elements.categoryResultsContainer.insertAdjacentHTML('beforeend', catHtml);
                }

                // Recs
                elements.recommendationsList.innerHTML = '';
                recs.forEach(r => {
                    const li = document.createElement('li');
                    li.className = 'mb-12 d-flex align-items-center gap-10';
                    li.innerHTML =
                        `<i class="fa fa-check-circle" style="color: var(--tp-theme-1); font-size: 14px;"></i> <span style="font-size: 14px;">${r}</span>`;
                    elements.recommendationsList.appendChild(li);
                });
            }
        });
    </script>
@endsection
