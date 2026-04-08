@extends('layouts.app')

@section('content')

      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">AI Model Fine-Tuning Services</h1>
            <div class="btn-wrapper">
              <a class="actova-btn-primary tp-btn-hover" href="mailto:info@actovagmail.com">info@ai-consultant.agency
                <span></span></a>
              <a class="actova-btn-secondary tp-btn-hover" href="/contact">Contact Now<span></span></a>
            </div>
          </div>
        </div>

        <img src="/assets/imgs/hero/hero-2-shape.png" alt="Shape" class="hero-2-shape">
        <canvas id="tp-wave-canva"></canvas>
      </section>
      <!-- Hero area end -->

          <!-- Brand area start -->
    <section class="tp-brand-area-4 pt-130">
        <div class="tp-container-1715">
            <div class="tp-brand-inner">
                <div class="title-wrap">
                    <h2 class="title">We’re the Preferred AI Consulting Partner for 100+ Businesses</h2>
                </div>
                <div class="tp-brand-slider">
                    <div class="tp-brand-logo-4">
                        <a href="#">
                            <img src="{{ asset('assets/imgs/brand/logo-1.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#">
                            <img src="{{ asset('assets/imgs/brand/logo-2.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-3.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-4.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-5.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-6.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-1.png') }}" alt="Logo"></a>
                    </div>
                    <div class="tp-brand-logo-4">
                        <a href="#"><img src="{{ asset('assets/imgs/brand/logo-2.png') }}" alt="Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand area end -->


      <!-- Service area start -->
      <section class="tp-service-details-area pt-140 pb-130">
        <div class="tp-service-details-header">
          <div class="container">
            <div class="title-wrap">
              <h2 class="sub-title">Model Fine-Tuning</h2>
              <h3 class="sec-title-3 actova-word">
                Adapt powerful pre-trained models to your data <span>and unlock precision performance for your business.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. LLM Fine-Tuning for Business Use Cases</h3>
                <div class="tp-service-faq-body">
                  <p>We fine-tune large language models including GPT, LLaMA, and Mistral on your proprietary data, adapting them to your tone, domain vocabulary, and specific tasks such as customer support automation, document summarisation, internal knowledge retrieval, and content generation.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">85%</h3>
                        <p class="text">Avg. Accuracy Improvement</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-1.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-2.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">2. Computer Vision Model Adaptation</h3>
                <div class="tp-service-faq-body">
                  <p>We fine-tune pre-trained vision models such as ResNet, YOLO, and Vision Transformers on your specific image or video datasets, improving performance on tasks like defect detection, medical imaging analysis, retail shelf recognition, and custom object classification at production scale.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">97%</h3>
                        <p class="text">Detection Accuracy</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-3.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-4.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">3. Domain-Specific NLP Model Training</h3>
                <div class="tp-service-faq-body">
                  <p>We fine-tune NLP models including BERT, RoBERTa, and T5 on industry-specific corpora covering sectors such as legal, healthcare, finance, and e-commerce, enabling highly accurate text classification, named entity recognition, sentiment analysis, and question answering within your domain.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">92%</h3>
                        <p class="text">Domain NLP Precision</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-8.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-5.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">4. RLHF & Instruction Tuning</h3>
                <div class="tp-service-faq-body">
                  <p>We apply Reinforcement Learning from Human Feedback (RLHF) and instruction tuning techniques to align AI model behaviour with your preferred outputs, tone, and safety requirements, ensuring your fine-tuned models respond accurately, consistently, and in line with your brand and compliance standards.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">3x</h3>
                        <p class="text">Output Consistency Gain</p>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-6.jpg') }}" alt=""></div>
                      <div class=""><img src="{{ asset('assets/imgs/service/service-des-7.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="tp-service-details-footer">
          <div class="container">
            <div class="img-wrapper">
              <img src="{{ asset('assets/imgs/service/service-details-3.jpg') }}" alt="">
              <img src="{{ asset('assets/imgs/service/service-details-4.jpg') }}" alt="">
            </div>
            <h2 class="title">Use Cases</h2>
            <p>AI Model Fine-Tuning allows businesses to take the power of world-class foundation models and adapt them precisely to their own data, language, and industry context. Whether you need a legal document classifier that understands your contract structure, a vision model trained on your manufacturing line, or a language model that speaks in your brand voice, fine-tuning delivers the accuracy and specificity that generic models simply cannot match.</p>
          </div>
        </div>
      </section>
      <!-- Service area end -->


      <!-- How we work area start -->
      <section class="tp-how-work-area plr-50">
        <div class="tp-how-work-inner">
          <div class="title-wrap">
            <h2 class="sub-title">How We Work</h2>
            <h3 class="sec-title-2 esf actova-word">
              Model fine-tuning, delivered with <span>accuracy and intent.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Discover</h3>
              <p>
                We review your existing data, identify the most suitable foundation model for your use case, and define the fine-tuning objectives, evaluation criteria, and success metrics aligned to your business goals.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Design & Build</h3>
              <p>
                We prepare and annotate your training data, configure the fine-tuning pipeline, and train the model using techniques such as LoRA, RLHF, or supervised fine-tuning, validating performance at every stage against your target benchmarks.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Optimise</h3>
              <p>
                We evaluate the fine-tuned model against held-out test sets, apply further refinements to address edge cases, and deploy the final model with ongoing monitoring to ensure it maintains accuracy as your data and requirements evolve.
              </p>
            </div>
          </div>

          <div class="tp-watch-video">
            <div class="text-wrap">
              <p>Watch Full Process Video -</p>
            </div>
            <div class="video-wrap">
              <div class="tp-video-popup-wrapper">
                <a href="https://www.youtube.com/" class="tp-video-popup"><i
                    class="fal fa-play"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- How we work area end -->


      <!-- FAQ area start -->
      <section class="tp-faq-area-2 pt-140 pb-140">
        <div class="container">
          <div class="tp-faq-inner-2">
            <div class="title-wrap">
              <p class="rating">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M13.9634 5.09658C13.9185 4.95809 13.834 4.83583 13.7202 4.74498C13.6064 4.65413 13.4685 4.5987 13.3235 4.58557L9.2821 4.21867L7.68493 0.479344C7.56699 0.204616 7.29869 0.0273438 7.00004 0.0273438C6.70138 0.0273438 6.43297 0.204616 6.3158 0.479344L4.71863 4.21867L0.676602 4.58557C0.380273 4.61292 0.129362 4.81362 0.036665 5.09658C-0.0085039 5.2352 -0.0120174 5.38402 0.0265597 5.52461C0.0651368 5.6652 0.14411 5.79139 0.253696 5.88754L3.30868 8.56629L2.40793 12.5336C2.34203 12.8253 2.45523 13.127 2.69729 13.3019C2.82406 13.3941 2.97684 13.4438 3.13362 13.4437C3.26801 13.4437 3.39988 13.4072 3.51515 13.3381L7.00004 11.2544L10.4843 13.3381C10.6093 13.4129 10.7535 13.4493 10.899 13.4429C11.0445 13.4365 11.1849 13.3874 11.3028 13.3019C11.5448 13.127 11.6581 12.8253 11.5922 12.5336L10.6914 8.56632L13.7464 5.88757C13.856 5.79142 13.935 5.66524 13.9735 5.52464C14.0121 5.38405 14.0086 5.23522 13.9634 5.09661V5.09658Z"
                    fill="#A1FF75" />
                </svg>
                4.5 Average Rating
              </p>
              <h2 class="sec-title-2">Frequently Ask & <br> Question</h2>
            </div>
            <div class="tp-faq-wrapper-2">
              <div class="tp-faq-list">

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What is AI model fine-tuning and why do I need it?</h3>
                  <div class="tp-faq-body">
                    <p>Fine-tuning adapts a pre-trained foundation model to your specific data, domain, and task requirements. Rather than building a model from scratch, fine-tuning leverages the knowledge already embedded in large models and refines it to perform with high accuracy on your particular business use case, saving significant time and cost.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How much data do I need to fine-tune a model?</h3>
                  <div class="tp-faq-body">
                    <p>Data requirements vary depending on the model type and task complexity. For many NLP fine-tuning tasks, a few hundred to a few thousand labelled examples can yield strong results. For vision models, more data is typically required. We assess your available data during the discovery phase and advise on whether augmentation or additional annotation is needed.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Which foundation models do you work with?</h3>
                  <div class="tp-faq-body">
                    <p>We work with a wide range of foundation models including GPT, LLaMA, Mistral, BERT, RoBERTa, T5, CLIP, ResNet, and YOLO variants. We select the most appropriate base model based on your use case, data type, performance requirements, and deployment constraints.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Will my proprietary data remain secure during fine-tuning?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. Data security is a core part of our process. We work within your preferred infrastructure, whether cloud-based or on-premise, and apply strict access controls, data handling protocols, and confidentiality agreements to ensure your proprietary data is protected throughout the fine-tuning engagement.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How long does the fine-tuning process take?</h3>
                  <div class="tp-faq-body">
                    <p>Timelines depend on the complexity of the task, the volume of training data, and the model being fine-tuned. Lightweight NLP fine-tuning projects can be completed in one to two weeks, while more complex vision or multimodal fine-tuning engagements may take four to eight weeks including data preparation, training, and evaluation cycles.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can you fine-tune models we have already built or sourced externally?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We regularly work with models that were developed in-house or acquired from third-party providers. Our team conducts a thorough model audit, identifies performance gaps, and applies targeted fine-tuning or instruction tuning techniques to improve accuracy, consistency, and alignment with your current business requirements.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


@endsection