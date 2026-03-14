@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset('assets/imgs/hero/service-bg.jpg') }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title">AI Readiness Assessment</h1>
              <p class="tp-breadcrumb"><a href="{{ route('home') }}">Home</a> <span></span> AI Readiness Assessment </p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->
      <br>

        <div class="tp-cta-wrapper">
            <div class="cta-content">
              <img src="{{ asset("assets/imgs/others/cta-icon.png") }}" alt="Icon">
              <p>
                Answer 12 questions to understand your readiness for AI adoption.
              </p>
            </div>
            <div class="cta-btn tp-btn-animate">
              <a href="{{ route("contact") }}" class="tp-btn-one">
                <span class="btn-wrap">
                  <span class="text-one">Start Assessment Now</span>
                  <span class="text-two">Start Assessment Now</span>
                </span>
                <span class="btn-icon">
                  <svg width="9" height="13" viewBox="0 0 9 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M7.18965 4.93104C6.32449 4.93104 5.62069 5.63484 5.62069 6.5C5.62069 7.36516 6.32449 8.06896 7.18965 8.06896C8.05481 8.06896 8.75861 7.36516 8.75861 6.5C8.75861 5.63484 8.05481 4.93104 7.18965 4.93104ZM4.5 5.60346C5.36516 5.60346 6.06896 4.89965 6.06896 4.03449C6.06896 3.16933 5.36516 2.46553 4.5 2.46553C3.63484 2.46553 2.93103 3.16933 2.93103 4.03449C2.93103 4.89965 3.63484 5.60346 4.5 5.60346ZM1.81034 3.13793C2.6755 3.13793 3.3793 2.43412 3.3793 1.56896C3.3793 0.703803 2.6755 0 1.81034 0C0.945181 0 0.241379 0.703803 0.241379 1.56896C0.241379 2.43412 0.945181 3.13793 1.81034 3.13793ZM4.5 7.39654C3.63484 7.39654 2.93103 8.10035 2.93103 8.96551C2.93103 9.83067 3.63484 10.5345 4.5 10.5345C5.36516 10.5345 6.06896 9.83067 6.06896 8.96551C6.06896 8.10035 5.36516 7.39654 4.5 7.39654ZM1.81034 9.86207C0.945181 9.86207 0.241379 10.5659 0.241379 11.431C0.241379 12.2962 0.945181 13 1.81034 13C2.6755 13 3.3793 12.2962 3.3793 11.431C3.3793 10.5659 2.6755 9.86207 1.81034 9.86207Z" />
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <br>
      <!-- How we work area start -->
      <section class="tp-how-work-area plr-50">
        <div class="tp-how-work-inner">
          <div class="title-wrap">
            <h2 class="sub-title">Your AI Readiness</h2>
            <h3 class="sec-title-2 esf actova-word">
              Ready to scale faster with<span> Artificial Intelligence?</span>
            </h3>
          </div>

          <div class="tp-how-work-steps">
            <div class="tp-how-work-step">
              <div class="step">Know How</div>
              <h3 class="title">Length of Assessment</h3>
              <p>
                The assessment includes 12 carefully designed questions that evaluate your organization’s current 
                AI readiness across key operational and strategic areas.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Know How</div>
              <h3 class="title">The Format</h3>
              <p>
                All questions are presented in a simple multiple-choice format, making the assessment easy 
                to understand and complete without requiring technical expertise.
              </p>
            </div>
            <div class="tp-how-work-step">
              <div class="step">Know How</div>
              <h3 class="title">The Results</h3>
              <p>
                After the assessment, you receive detailed guidance tailored to your organization, helping 
                you identify strengths, gaps, and the next steps for AI adoption.
              </p>
            </div>
          </div>
          <div class="tp-watch-video">
            <div class="text-wrap">
              <p>Start Your Assessment Now -</p>
            </div>
            <div class="video-wrap">
              <div class="tp-video-popup-wrapper">
                <a href="/contact" class="tp-video-popup"><i
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
                4.8 Average Rating
              </p>
              <h2 class="sec-title-2">Frequently Ask & <br> Question</h2>
            </div>
            <div class="tp-faq-wrapper-2">
              <div class="tp-faq-list">
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What is an AI Readiness Assessment?</h3>
                  <div class="tp-faq-body">
                    <p>An AI Readiness Assessment is a structured evaluation that helps organizations understand how prepared
                       they are to adopt and implement artificial intelligence. It analyzes different aspects such as strategy,
                        data, infrastructure, and organizational readiness to identify strengths and improvement areas.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Who should take the AI Readiness Assessment?</h3>
                  <div class="tp-faq-body">
                    <p>Business leaders, IT decision-makers, digital transformation teams, and organizations exploring AI 
                      adoption can benefit from taking the assessment. It helps any organization understand its current 
                      AI maturity and readiness level.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What kind of questions are included in the assessment?</h3>
                  <div class="tp-faq-body">
                    <p>The assessment includes multiple-choice questions related to business strategy, customer experience, 
                      data readiness, infrastructure, analytics capabilities, and organizational culture around AI.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">What will I receive after completing the assessment?</h3>
                  <div class="tp-faq-body">
                    <p>After completing the assessment, you will receive a personalized report that summarizes your 
                      responses, provides an AI maturity score, and offers recommendations to help your organization
                       move forward with AI adoption.</p>
                  </div>
                </div>
                <div class="tp-faq-item style-2">
                  <h3 class="tp-faq-title">Why is AI readiness important for organizations?</h3>
                  <div class="tp-faq-body">
                    <p>AI readiness ensures that organizations have the right strategy, data, technology, and processes 
                      in place to successfully implement AI solutions and achieve measurable business outcomes. Without
                       proper readiness, many AI initiatives fail to scale or deliver ROI.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- FAQ area end -->


      
@endsection