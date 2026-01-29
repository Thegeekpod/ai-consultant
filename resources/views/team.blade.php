@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset("assets/imgs/hero/about-bg.jpg") }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title">Our Team Page</h1>
              <p class="tp-breadcrumb"><a href="{{ route("home") }}">Home</a> <span></span> Our Team</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->


      <!-- Team area start -->
      <section class="tp-team-area tp-team-page-area pt-140 pb-140">
        <div class="tp-container">
          <div class="tp-team-inner">
            <div class="tp-ap-team-title-wrap">
              <h3 class="sec-title-2 actova-word">
                Meet With Our Legends
              </h3>
            </div>
            <div class="tp-team-grid">
              <div class="tp-team-card tp-fade-animation" data-delay="0.6">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-1.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Mr. Hanrry Robertson</a></h3>
                <p>Founder of Actova</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="0.8">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-4.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Ruby Steele Bentley</a></h3>
                <p>Co-Founder of Actova</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="1">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-3.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Ava Monroe Archer</a></h3>
                <p>Chef Marketing Officer</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="1.2">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-5.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Mr. Jack Morgan</a></h3>
                <p>Senior Product Desigenr</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="0.6">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-6.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Mr. Alex Mitchel</a></h3>
                <p>Sr. Software Engineer</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="0.8">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-7.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Robertson Michael V.</a></h3>
                <p>Lead Data Scientist</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="1">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-8.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Alexander Benjamin R.</a></h3>
                <p>Machine Learning Engineer</p>
              </div>
              <div class="tp-team-card tp-fade-animation" data-delay="1.2">
                <div class="image">
                  <img src="{{ asset("assets/imgs/team/team-member-9.png") }}" alt="Team Member">
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <h3 class="title"><a href="{{ route("team-details") }}">Mrs. Harper Olivia</a></h3>
                <p>Customer Success Manager</p>
              </div>
            </div>
            <div class="join-team">
              <p>Want to join our mission? Explore careers at Actova. <a href="{{ route("contact") }}">
                  Join Actova Team
                  <svg width="13" height="13" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9.19046 4.93104C8.3253 4.93104 7.6215 5.63484 7.6215 6.5C7.6215 7.36516 8.3253 8.06896 9.19046 8.06896C10.0556 8.06896 10.7594 7.36516 10.7594 6.5C10.7594 5.63484 10.0556 4.93104 9.19046 4.93104ZM6.5008 5.60346C7.36597 5.60346 8.06977 4.89965 8.06977 4.03449C8.06977 3.16933 7.36597 2.46553 6.5008 2.46553C5.63564 2.46553 4.93184 3.16933 4.93184 4.03449C4.93184 4.89965 5.63564 5.60346 6.5008 5.60346ZM3.81115 3.13793C4.67631 3.13793 5.38011 2.43412 5.38011 1.56896C5.38011 0.703803 4.67631 0 3.81115 0C2.94599 0 2.24219 0.703803 2.24219 1.56896C2.24219 2.43412 2.94599 3.13793 3.81115 3.13793ZM6.5008 7.39654C5.63564 7.39654 4.93184 8.10035 4.93184 8.96551C4.93184 9.83067 5.63564 10.5345 6.5008 10.5345C7.36597 10.5345 8.06977 9.83067 8.06977 8.96551C8.06977 8.10035 7.36597 7.39654 6.5008 7.39654ZM3.81115 9.86207C2.94599 9.86207 2.24219 10.5659 2.24219 11.431C2.24219 12.2962 2.94599 13 3.81115 13C4.67631 13 5.38011 12.2962 5.38011 11.431C5.38011 10.5659 4.67631 9.86207 3.81115 9.86207Z" />
                  </svg>
                </a></p>
            </div>
          </div>
        </div>
      </section>
      <!-- Team area end -->


      <!-- Footer area start -->
@endsection
