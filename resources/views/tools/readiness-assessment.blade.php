@extends('layouts.app')

@section('content')
    <!-- Hero area start -->
    <section class="tp-hero4-area pt-150 pb-80 tp-tools-hero-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10 text-center">
                    <div class="tp-hero4-content">
                        <h1 class="title mb-30 tp-tools-hero-title">AI Readiness <span>Assessment</span></h1>
                        <p class="text mb-40 tp-tools-hero-text">
                            Deep dive into your organization's AI maturity across Data, Strategy, and Technology.
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
                <div class="col-lg-8">
                    <div class="tp-tool-card">
                        <div id="quiz-wrapper">
                            <!-- Progress Bar -->
                            <div id="quiz-progress-container" style="display:none;">
                                <div class="tp-tool-progress-wrapper">
                                    <div id="quiz-progress-bar" class="tp-tool-progress-bar"></div>
                                </div>
                                <div class="text-end mb-20">
                                    <small id="quiz-step-label" style="font-weight: 600; color: #666;"></small>
                                </div>
                            </div>

                            <div id="quiz-intro" class="text-center">
                                <div class="mb-40">
                                    <span class="tp-tool-icon-wrapper readiness">
                                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                            stroke="#007bff" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <h3>Take the Deep Assessment</h3>
                                <p class="mb-30">Answer 10 targeted questions to receive a comprehensive breakdown of your
                                    AI capabilities.</p>
                                <button id="start-quiz-btn" class="tp-btn-two tp-btn-anim">
                                    <div class="tp-btn-text">Start Deep Assessment</div>
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

                            <div id="quiz-questions" style="display:none;">
                                <div class="question-step mb-20">
                                    <div class="mb-10 text-primary"
                                        style="font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 13px;">
                                        Category: <span id="q-category"></span>
                                    </div>
                                    <h4 class="mb-25" id="q-text">Question Text</h4>
                                    <div class="options" id="q-options">
                                        <!-- Options injected here -->
                                    </div>
                                </div>
                            </div>

                            <!-- Lead Capture Step -->
                            <div id="quiz-lead-capture" style="display:none;">
                                <div class="text-center mb-40">
                                    <h3>Almost there!</h3>
                                    <p>Where should we send your detailed AI Maturity Report?</p>
                                </div>
                                <form id="quiz-lead-form">
                                    <div class="mb-20">
                                        <label class="tp-tool-form-label">Full Name</label>
                                        <input type="text" id="lead-name" class="tp-tool-form-input"
                                            placeholder="John Doe" required>
                                    </div>
                                    <div class="mb-30">
                                        <label class="tp-tool-form-label">Business Email</label>
                                        <input type="email" id="lead-email" class="tp-tool-form-input"
                                            placeholder="john@company.com" required>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="tp-btn-two">Get Full Report</button>
                                    </div>
                                </form>
                            </div>

                            <div id="quiz-results" style="display:none;">
                                <div class="tp-tool-result-box">
                                    <div class="text-center mb-40">
                                        <h4 class="mb-10">AI Maturity Score: <span id="final-score"
                                                class="tp-tool-result-score">0</span>/100</h4>
                                        <p id="final-msg" class="mb-0" style="font-weight: 500;"></p>
                                    </div>

                                    <div class="tp-tool-category-scores mb-40">
                                        <!-- Category scores injected here -->
                                        <div id="category-results-container"></div>
                                    </div>

                                    <div class="recommendations p-25"
                                        style="background: #fff; border-radius: 12px; border: 1px solid #e0e0e0;">
                                        <h5 class="mb-15">Key Recommendations:</h5>
                                        <ul id="recommendations-list"
                                            style="list-style: disc; padding-left: 20px; color: #555;">
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mt-30">
                                    <button id="restart-quiz-btn" class="tp-btn-two">Restart Assessment</button>
                                </div>
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
            const questions = [{
                    cat: "Strategy",
                    q: "Do you have a defined AI roadmap for the next 12-24 months?",
                    options: ["Comprehensive Roadmap", "Loose Idea / Draft", "No Roadmap"],
                    scores: [10, 5, 0]
                },
                {
                    cat: "Data",
                    q: "How centralized and cleaned is your company data?",
                    options: ["Fully Centralized & Clean", "Partially Organized", "Data is Siloed/Messy"],
                    scores: [10, 6, 2]
                },
                {
                    cat: "Technology",
                    q: "Are you already using Generative AI (LLMs) in your internal workflows?",
                    options: ["Extensively", "Testing/PoC Phase", "Not at all"],
                    scores: [10, 7, 0]
                },
                {
                    cat: "Data",
                    q: "How do you handle data security and privacy for AI models?",
                    options: ["Strict Protocols in Place", "Basic Security", "No specific AI data policy"],
                    scores: [10, 4, 0]
                },
                {
                    cat: "Culture",
                    q: "How open is your leadership to investing in AI automation?",
                    options: ["Highly Supportive", "Cautious but interested", "Resistance to change"],
                    scores: [10, 5, 0]
                },
                {
                    cat: "Strategy",
                    q: "Is there a dedicated budget for AI research and implementation?",
                    options: ["Yes, annual budget allocated", "Ad-hoc basis", "No budget"],
                    scores: [10, 5, 0]
                },
                {
                    cat: "Technology",
                    q: "What is your primary tech stack's cloud readiness?",
                    options: ["Fully Cloud-Native", "Hybrid (On-prem & Cloud)", "100% On-premise"],
                    scores: [10, 7, 2]
                },
                {
                    cat: "Strategy",
                    q: "Have you identified specific KPIs to measure AI ROI?",
                    options: ["Yes, clearly defined", "Vague ideas", "No metrics"],
                    scores: [10, 5, 0]
                },
                {
                    cat: "Data",
                    q: "How often is your training data refreshed for AI models?",
                    options: ["Real-time / Daily", "Monthly / Quarterly", "Never / Static"],
                    scores: [10, 6, 2]
                },
                {
                    cat: "Culture",
                    q: "Does your team have the internal skills to manage AI systems?",
                    options: ["Yes, specialized team", "General IT knowledge", "Need external help"],
                    scores: [10, 6, 3]
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
                finalMsg: document.getElementById('final-msg'),
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
                elements.quizProgressContainer.style.display = 'none';
            });

            elements.quizLeadForm.addEventListener('submit', (e) => {
                e.preventDefault();
                elements.quizLeadCapture.style.display = 'none';
                showResults();
            });

            function updateProgress() {
                const progress = ((currentQ) / questions.length) * 100;
                elements.quizProgressBar.style.width = `${progress}%`;
                elements.quizStepLabel.textContent = `Question ${currentQ + 1} of ${questions.length}`;
            }

            function loadQuestion() {
                if (currentQ >= questions.length) {
                    elements.quizQuestions.style.display = 'none';
                    elements.quizProgressContainer.style.display = 'none';
                    elements.quizLeadCapture.style.display = 'block';
                    return;
                }
                updateProgress();
                const data = questions[currentQ];
                elements.questionText.textContent = data.q;
                elements.questionCategory.textContent = data.cat;

                elements.optionsContainer.innerHTML = '';
                data.options.forEach((opt, index) => {
                    const btn = document.createElement('button');
                    btn.textContent = opt;
                    btn.className = 'quiz-option-btn';
                    btn.addEventListener('click', () => {
                        categoryScores[data.cat] += data.scores[index];
                        currentQ++;
                        loadQuestion();
                    });
                    elements.optionsContainer.appendChild(btn);
                });
            }

            function showResults() {
                elements.quizResults.style.display = 'block';

                const totalScore = Object.values(categoryScores).reduce((a, b) => a + b, 0);
                elements.finalScoreSpan.textContent = totalScore;

                let msg = "";
                let recs = [];
                if (totalScore > 80) {
                    msg = "AI Leader: You are ready for high-impact AI integration.";
                    recs = ["Focus on custom LLM fine-tuning", "Explore Autonomous Agents",
                        "Optimise AI-first business models"
                    ];
                } else if (totalScore > 50) {
                    msg = "AI Explorer: You have strong foundations, focus on specific pilots.";
                    recs = ["Implement RAG systems for Data QA", "Standardize AI security policies",
                        "Launch high-ROI automation pilots"
                    ];
                } else {
                    msg = "AI Beginner: Start with modernization and data cleaning.";
                    recs = ["Centralize data infrastructure", "Begin leadership AI training",
                        "Audit your tech stack for cloud readiness"
                    ];
                }
                elements.finalMsg.textContent = msg;

                // Category results
                elements.categoryResultsContainer.innerHTML = '';
                for (let cat in categoryScores) {
                    const score = categoryScores[cat];
                    const possible = totalPossiblePerCat[cat];
                    const percent = (score / possible) * 100;

                    const catHtml = `
                        <div class="tp-tool-category-item">
                            <div class="tp-tool-category-header">
                                <span>${cat}</span>
                                <span>${score}/${possible}</span>
                            </div>
                            <div class="tp-tool-category-bar-bg">
                                <div class="tp-tool-category-bar-fill" style="width: 0%"></div>
                            </div>
                        </div>
                    `;
                    elements.categoryResultsContainer.insertAdjacentHTML('beforeend', catHtml);

                    // Trigger animation
                    setTimeout(() => {
                        const fills = elements.categoryResultsContainer.querySelectorAll(
                            '.tp-tool-category-bar-fill');
                        fills[fills.length - 1].style.width = `${percent}%`;
                    }, 100);
                }

                // Recommendations
                elements.recommendationsList.innerHTML = '';
                recs.forEach(r => {
                    const li = document.createElement('li');
                    li.className = 'mb-10';
                    li.textContent = r;
                    elements.recommendationsList.appendChild(li);
                });
            }
        });
    </script>
@endsection
