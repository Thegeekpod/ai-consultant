@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset("assets/imgs/hero/about-bg.jpg") }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title">FAQ’s</h1>
              <p class="tp-breadcrumb"><a href="{{ route("home") }}">Home</a> <span></span> FAQ’s</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->


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
              <h2 class="sec-title-2">Frequently Asked <br> Questions</h2>
            </div>
            <div class="tp-faq-wrapper-2">
              <div class="tp-faq-list">
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What is AI Consultant?</h3>
                  <div class="tp-faq-body">
                    <p>AI Consultant is a next-generation AI agency and technology provider built to empower businesses of every size. We help automate repetitive workflows, generate high-quality content, deliver deep data insights, and provide real-time decision support.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Who can benefit from AI Consultant services?</h3>
                  <div class="tp-faq-body">
                    <p>Our services are designed for startups, SMEs, and enterprises looking to leverage artificial intelligence for growth. Whether you need process automation, custom AI models, or strategic consulting, we have a solution for you.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What technologies do you specialize in?</h3>
                  <div class="tp-faq-body">
                    <p>We specialize in state-of-the-art AI architectures including Transformers (LLMs), CNNs for vision, RNNs for time-series, and custom Generative AI solutions tailored to specific business needs.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Do you offer custom pricing?</h3>
                  <div class="tp-faq-body">
                    <p>Yes, we provide flexible pricing models based on the complexity and scale of the project. Contact us for a personalized quote or a free strategy call.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Can AI Consultant integrate with my existing tools?</h3>
                  <div class="tp-faq-body">
                    <p>Absolutely. Our AI solutions are designed to be "interoperable," meaning they can integrate seamlessly with your existing CRM, ERP, and communication platforms like Slack, Gmail, and Discord.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">How do I get started?</h3>
                  <div class="tp-faq-body">
                    <p>You can start by booking a free strategy call through our contact page. Our experts will analyze your needs and provide a roadmap for your AI transformation journey.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->

@endsection
