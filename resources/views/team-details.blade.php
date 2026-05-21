@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset("assets/imgs/hero/about-bg.jpg") }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title">AI Consulting Experts</h1>
              <p class="tp-breadcrumb"><a href="{{ route("home") }}">Home</a> <span></span> Our Team</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->


      <!-- Team details area start -->
      <section class="tp-team-details-area pt-140 pb-140">
        <div class="container">
          <div class="tp-team-details-inner">
            <div class="tp-team-details-img">
              <img src="{{ asset("assets/imgs/team/avick-kr-dey.webp") }}" alt="Image">
            </div>
            <div class="tp-team-details">
              <h2 class="name">Prof. Dr. Avick kr. Dey</h2>
              <div class="designation">CEO of AI Consultant</div>
              <p class="quote">“ My mission is to deliver AI solutions that solve real business problems and support practical implementation.”</p>
              <p>I am the Founder of AI Consultant, specializing in AI consulting, automation, and custom AI development. With over a decade of experience in machine learning and enterprise AI systems, I focus on building solutions that are scalable and impactful for businesses.</p>
              <h3 class="title">Skill & Experiences</h3>
              <ul class="skills-list">
                <li><a href="#">
                    <span class="icon">
                      <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.7136 8.10795L9.98763 15.785C9.94263 15.866 9.86163 15.92 9.76263 15.92H0.492631C0.312631 15.92 0.195631 15.731 0.267631 15.569L3.89463 8.10795C3.93063 8.03595 3.93063 7.96395 3.89463 7.89195L0.285631 0.430956C0.204631 0.268956 0.321631 0.0799561 0.510631 0.0799561H9.78063C9.87063 0.0799561 9.96063 0.133956 10.0056 0.214956L13.7316 7.89195C13.7496 7.96395 13.7496 8.03595 13.7136 8.10795Z" />
                      </svg>
                    </span>
                    Neural Architecture Design.
                  </a></li>
                <li><a href="#">
                    <span class="icon">
                      <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.7136 8.10795L9.98763 15.785C9.94263 15.866 9.86163 15.92 9.76263 15.92H0.492631C0.312631 15.92 0.195631 15.731 0.267631 15.569L3.89463 8.10795C3.93063 8.03595 3.93063 7.96395 3.89463 7.89195L0.285631 0.430956C0.204631 0.268956 0.321631 0.0799561 0.510631 0.0799561H9.78063C9.87063 0.0799561 9.96063 0.133956 10.0056 0.214956L13.7316 7.89195C13.7496 7.96395 13.7496 8.03595 13.7136 8.10795Z" />
                      </svg>
                    </span>
                    Natural Language Processing (NLP).
                  </a></li>
                <li><a href="#">
                    <span class="icon">
                      <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.7136 8.10795L9.98763 15.785C9.94263 15.866 9.86163 15.92 9.76263 15.92H0.492631C0.312631 15.92 0.195631 15.731 0.267631 15.569L3.89463 8.10795C3.93063 8.03595 3.93063 7.96395 3.89463 7.89195L0.285631 0.430956C0.204631 0.268956 0.321631 0.0799561 0.510631 0.0799561H9.78063C9.87063 0.0799561 9.96063 0.133956 10.0056 0.214956L13.7316 7.89195C13.7496 7.96395 13.7496 8.03595 13.7136 8.10795Z" />
                      </svg>
                    </span>
                    Enterprise-Grade AI Systems.
                  </a></li>
                <li><a href="#">
                    <span class="icon">
                      <svg width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M13.7136 8.10795L9.98763 15.785C9.94263 15.866 9.86163 15.92 9.76263 15.92H0.492631C0.312631 15.92 0.195631 15.731 0.267631 15.569L3.89463 8.10795C3.93063 8.03595 3.93063 7.96395 3.89463 7.89195L0.285631 0.430956C0.204631 0.268956 0.321631 0.0799561 0.510631 0.0799561H9.78063C9.87063 0.0799561 9.96063 0.133956 10.0056 0.214956L13.7316 7.89195C13.7496 7.96395 13.7496 8.03595 13.7136 8.10795Z" />
                      </svg>
                    </span>
                    AI Ethics & ML Deployment
                  </a></li>
              </ul>
              
              <h3 class="title">Social Media</h3>
              <ul class="tp-social-media">
                <li>
                  <a href="https://www.linkedin.com/in/iavick/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/iavick/"><i class="fab fa-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Team details area end -->

                <!-- Team area start -->
      <section class="tp-team-area pb-140">
        <div class="tp-container">
          <div class="tp-team-inner">
            <div class="tp-ap-team-title-wrap">
              <h3 class="sec-title-2 actova-word">
                Meet AI Consulting Experts
              </h3>
            </div>
            <div class="tp-team-grid">
              <div class="tp-team-card tp-fade-animation" data-delay="0.6">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/tapas-d-paul.webp") }}" alt="Team Member">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Tapas Paul')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Tapas Paul</a></h3>
                <p><b>AI consultant specializing</b> in practical business automation solutions.</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="0.8">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team//supriyo-day.webp") }}" alt="AI Consultant">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Supriyo Dey')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Supriyo Dey</a></h3>
                <p><b>AI consultant specializing</b> in AI development & integration solutions.</p>
              </div>

                <div class="tp-team-card tp-fade-animation" data-delay="1">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/pradipta-bhuia.webp") }}" alt="AI Developer">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Pradipta Bhuian')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Pradipta Bhuian</a></h3>
                <p><b>AI consultant and developer</b> with expertise in building scalable AI systems.</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="1.2">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/jyoti-mishra.webp") }}" alt="AI Consultant">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Jyoti Mishra')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Jyoti Mishra</a></h3>
                <p><b>>AI consultant helping</b> businesses leverage AI for growth and productivity.</p>
              </div>
                <div class="tp-team-card tp-fade-animation" data-delay="1">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/abhijit-bag.webp") }}" alt="AI Developer">
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Pradipta Bhuian')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Abhijit Bag</a></h3>
                <p><b>AI consultant skilled</b> in applying AI to solve real-world business problems.</p>
              </div>
                <div class="tp-team-card tp-fade-animation" data-delay="1">
                <div class="image">
                  <a href="https://www.linkedin.com/in/dmartell/" target="_blank" rel="noopener noreferrer nofollow">
                    <img src="{{ asset('assets/imgs/team/dam-martell.webp') }}" alt="Dan Martell">
                    </a>
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Pradipta Bhuian')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Dan Martell</a></h3>
                <p>Widely recognized <b>entrepreneur and AI consultant</b>, helping businesses scale with smart technology and systems.</p>
              </div>
                <div class="tp-team-card tp-fade-animation" data-delay="1">
                <div class="image">
                  <a href="https://www.instagram.com/realrileybrown" target="_blank" rel="noopener noreferrer nofollow">
                    <img src="{{ asset('assets/imgs/team/riley-brown.webp') }}" alt="Riley Brown">
                    </a>
                  <ul class="social-media" style="width: 160px; border-radius: 30px;">
                    <li style="width: 100%; height: 40px;">
                      <a href="javascript:void(0)" onclick="openConsultantPopup('Pradipta Bhuian')" style="width: 100%; height: 100%; border-radius: 30px; font-size: 14px; font-weight: 600;">
                        Contact Expert
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Riley Brown</a></h3>
                <p>Popular <b>AI educator and entrepreneur</b> known for helping people build apps and businesses using AI tools.</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Footer area start -->
@endsection
