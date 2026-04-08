@extends('layouts.app')

@section('content')


      <!-- Hero area start -->
      <section class="tp-hero-area-2" id="tp-wave-animation">
        <div class="tp-hero-wrapper-2">
          <div class="content">
            <h1 class="title">MLOps & Model Deployment<br> Services for Businesses</h1>
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


      <!-- Service area start -->
      <section class="tp-service-details-area pt-140 pb-130">
        <div class="tp-service-details-header">
          <div class="container">
            <div class="title-wrap">
              <h2 class="sub-title">MLOps Solutions</h2>
              <h3 class="sec-title-3 actova-word">
                From experiment to production, <span>we deploy and manage AI models that perform at scale.</span>
              </h3>
            </div>
            <div class="what-we-offer">What We Offer</div>
          </div>
        </div>

        <div class="tp-service-faq-wrapper">
          <div class="tp-service-faq-list">

            <div class="tp-service-faq-item">
              <div class="container">
                <h3 class="tp-service-faq-title">1. CI/CD Pipelines for ML Models</h3>
                <div class="tp-service-faq-body">
                  <p>We build automated CI/CD pipelines tailored for machine learning, enabling continuous training, testing, versioning, and deployment of models with minimal manual intervention and maximum reliability.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">10x</h3>
                        <p class="text">Faster Deployments</p>
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
                <h3 class="tp-service-faq-title">2. Model Monitoring & Drift Detection</h3>
                <div class="tp-service-faq-body">
                  <p>We implement real-time monitoring systems that track model performance, detect data drift, and trigger automated retraining workflows to keep your models accurate and production-ready over time.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">99%</h3>
                        <p class="text">Model Uptime</p>
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
                <h3 class="tp-service-faq-title">3. Model Versioning & Experiment Tracking</h3>
                <div class="tp-service-faq-body">
                  <p>We set up end-to-end experiment tracking and model registry systems using tools like MLflow and Weights and Biases, giving your team full visibility into every training run, metric, and model version across the lifecycle.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">100%</h3>
                        <p class="text">Version Traceability</p>
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
                <h3 class="tp-service-faq-title">4. Scalable Cloud & Edge Deployment</h3>
                <div class="tp-service-faq-body">
                  <p>We deploy models to cloud platforms including AWS SageMaker, Azure ML, and GCP Vertex AI, as well as edge environments for low-latency use cases, ensuring your AI operates reliably wherever it is needed most.</p>
                  <div class="body-content">
                    <div class="left-content">
                      <div class="icon"><img src="{{ asset('assets/imgs/service/service-icon-12.png') }}" alt="Icon"></div>
                      <div class="tp-service-faq-counter">
                        <h3 class="tp-counter-active number">&lt;40ms</h3>
                        <p class="text">Inference Latency</p>
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
            <p>MLOps and Model Deployment bridges the gap between <a href="/services/ai-development" style="text-decoration: underline; font-weight: 600;">AI development</a> and real-world business value. Whether you are deploying a fraud detection model, a demand forecasting system, or a computer vision pipeline for quality control, we ensure your models are production-grade, continuously monitored, and built to scale with your business over time.</p>
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
              MLOps, delivered with <span>structure and scale.</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Step-01</div>
              <h3 class="title">Discover</h3>
              <p>
                We assess your existing model development workflows, infrastructure, and deployment gaps to define a clear MLOps strategy aligned with your production requirements.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-02</div>
              <h3 class="title">Design & Build</h3>
              <p>
                We engineer your full MLOps stack, including training pipelines, model registries, CI/CD automation, and deployment infrastructure across cloud or edge environments.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Step-03</div>
              <h3 class="title">Optimise</h3>
              <p>
                We continuously monitor model health, detect performance degradation, and retrain or redeploy as needed to keep your AI systems accurate, stable, and business-ready.
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
                  <h3 class="tp-faq-title">What is MLOps and why does it matter?</h3>
                  <div class="tp-faq-body">
                    <p>MLOps combines machine learning with DevOps principles to streamline the deployment, monitoring, and management of AI models in production. It ensures your models remain reliable, reproducible, and continuously improving rather than degrading silently after launch.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Which MLOps tools and platforms do you work with?</h3>
                  <div class="tp-faq-body">
                    <p>We work with a wide range of MLOps tools including MLflow, Kubeflow, Weights and Biases, DVC, and cloud-native services such as AWS SageMaker, Azure Machine Learning, and Google Vertex AI, selecting the right stack based on your team and infrastructure.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How do you handle model degradation over time?</h3>
                  <div class="tp-faq-body">
                    <p>We implement automated monitoring for data drift, concept drift, and performance degradation. When thresholds are breached, our pipelines trigger alerts and can initiate automated retraining and redeployment workflows to restore model accuracy without manual intervention.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can you deploy models to both cloud and on-premise environments?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We support cloud, on-premise, hybrid, and edge deployment depending on your latency, data governance, and infrastructure requirements. Our team designs the deployment architecture during the discovery phase to match your operational constraints.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you support model retraining and lifecycle management?</h3>
                  <div class="tp-faq-body">
                    <p>Yes. We design full model lifecycle management systems covering data ingestion, retraining schedules, A/B testing of new model versions, and controlled rollouts, ensuring your models evolve safely and continuously improve with new data.</p>
                  </div>
                </div>

                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What level of involvement do we need from our internal team?</h3>
                  <div class="tp-faq-body">
                    <p>We work flexibly depending on your team capacity. We can operate as a fully embedded MLOps partner, a project-based delivery team, or in an advisory capacity to upskill and support your internal data science team throughout the engagement.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


@endsection