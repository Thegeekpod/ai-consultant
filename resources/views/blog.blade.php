@extends('layouts.app')

@section('content')

      <section class="tp-breadcrumb-area">
        <div class="tp-container">
          <div class="tp-breadcrumb-wrapper">
            <img src="{{ asset("assets/imgs/hero/about-bg.jpg") }}" alt="Image">
            <div class="tp-breadcrumb-content">
              <h1 class="tp-breadcrumb-title">Blog Page</h1>
              <p class="tp-breadcrumb"><a href="{{ route("home") }}">Home</a> <span></span> Blog Page</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero area end -->


      <!-- Blog area start -->
      <section class="tp-blog-standard-area pt-140 pb-140">
        <div class="container">
          <div class="tp-blog-standard-wrapper">
            <div class="tp-blog-standard-list">
              <div class="tp-blog-item">
                <a href="{{ route("blog-details") }}" class="thumb">
                  <img src="{{ asset("assets/imgs/blog/blog-post-1.jpg") }}" alt="Thumbnail">
                </a>
                <ul class="meta">
                  <li>10 July, 25</li>
                  <li>2 min read</li>
                </ul>
                <h2 class="title">
                  <a href="{{ route("blog-details") }}"> Why Every Business Needs an AI Strategy </a>
                </h2>
                <p>Generative AI has rapidly evolved beyond simple text responses. The next wave goes further — creating
                  images, videos, music, and even building entire applications.</p>
              </div>
              <div class="tp-blog-item">
                <a href="{{ route("blog-details") }}" class="thumb">
                  <img src="{{ asset("assets/imgs/blog/blog-post-2.jpg") }}" alt="Thumbnail">
                </a>
                <ul class="meta">
                  <li>10 July, 25</li>
                  <li>2 min read</li>
                </ul>
                <h2 class="title">
                  <a href="{{ route("blog-details") }}"> Should You Hire an AI Agency or Build In House </a>
                </h2>
                <p>Generative AI has rapidly evolved beyond simple text responses. The next wave goes further — creating
                  images, videos, music, and even building entire applications.</p>
              </div>
              <div class="tp-blog-item">
                <a href="{{ route("blog-details") }}" class="thumb">
                  <img src="{{ asset("assets/imgs/blog/blog-post-3.jpg") }}" alt="Thumbnail">
                </a>
                <ul class="meta">
                  <li>10 July, 25</li>
                  <li>2 min read</li>
                </ul>
                <h2 class="title">
                  <a href="{{ route("blog-details") }}"> How to Automate Customer Support With AI </a>
                </h2>
                <p>Generative AI has rapidly evolved beyond simple text responses. The next wave goes further — creating
                  images, videos, music, and even building entire applications.</p>
              </div>
              <div class="tp-blog-item">
                <a href="{{ route("blog-details") }}" class="thumb">
                  <img src="{{ asset("assets/imgs/blog/blog-post-4.jpg") }}" alt="Thumbnail">
                </a>
                <ul class="meta">
                  <li>10 July, 25</li>
                  <li>2 min read</li>
                </ul>
                <h2 class="title">
                  <a href="{{ route("blog-details") }}"> A Simple Guide to Starting With AI Automation </a>
                </h2>
                <p>Generative AI has rapidly evolved beyond simple text responses. The next wave goes further — creating
                  images, videos, music, and even building entire applications.</p>
              </div>
              <div class="tp-blog-item">
                <a href="{{ route("blog-details") }}" class="thumb">
                  <img src="{{ asset("assets/imgs/blog/blog-post-5.jpg") }}" alt="Thumbnail">
                </a>
                <ul class="meta">
                  <li>10 July, 25</li>
                  <li>2 min read</li>
                </ul>
                <h2 class="title">
                  <a href="{{ route("blog-details") }}"> How AI Improves the Retail Experience </a>
                </h2>
                <p>Generative AI has rapidly evolved beyond simple text responses. The next wave goes further — creating
                  images, videos, music, and even building entire applications.</p>
              </div>

              <div class="tp-blog-pagination-wrapper">
                <div class="prev-post">
                  <a href="{{ route("blog-details") }}">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M0.324184 10.6784L4.72403 15.0783C4.93148 15.2786 5.20933 15.3895 5.49774 15.387C5.78614 15.3845 6.06203 15.2688 6.26597 15.0649C6.46991 14.8609 6.58559 14.585 6.5881 14.2966C6.59061 14.0082 6.47974 13.7304 6.27937 13.5229L3.75606 10.9996H17.6002C18.7671 10.9996 19.8862 10.536 20.7113 9.71092C21.5364 8.88579 22 7.76667 22 6.59976V1.09996C22 0.808233 21.8841 0.528454 21.6778 0.322171C21.4715 0.115889 21.1918 0 20.9 0C20.6083 0 20.3285 0.115889 20.1223 0.322171C19.916 0.528454 19.8001 0.808233 19.8001 1.09996V6.59976C19.8001 7.18322 19.5683 7.74278 19.1557 8.15534C18.7432 8.56791 18.1836 8.79968 17.6002 8.79968H3.75606L6.27827 6.27747C6.47864 6.07002 6.58951 5.79217 6.587 5.50376C6.58449 5.21535 6.46881 4.93947 6.26487 4.73553C6.06093 4.53159 5.78504 4.41591 5.49664 4.4134C5.20823 4.41089 4.93038 4.52176 4.72292 4.72213L0.323084 9.12197C0.220648 9.22415 0.139378 9.34553 0.0839252 9.47916C0.0284729 9.6128 -7.05719e-05 9.75606 -7.05719e-05 9.90074C-7.05719e-05 10.0454 0.0284729 10.1887 0.0839252 10.3223C0.139378 10.456 0.220648 10.5773 0.323084 10.6795L0.324184 10.6784Z"
                        fill="#020202" />
                    </svg>
                  </a>
                </div>
                <div class="tp-blog-pagination">
                  <ul>
                    <li><a class="active" href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                  </ul>
                </div>
                <div class="next-post">
                  <a href="#">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M21.6758 10.6784L17.276 15.0783C17.0685 15.2786 16.7907 15.3895 16.5023 15.387C16.2139 15.3845 15.938 15.2688 15.734 15.0649C15.5301 14.8609 15.4144 14.585 15.4119 14.2966C15.4094 14.0082 15.5203 13.7304 15.7206 13.5229L18.2439 10.9996H4.39984C3.23293 10.9996 2.11381 10.536 1.28868 9.71092C0.463553 8.88579 0 7.76667 0 6.59976V1.09996C0 0.808233 0.115888 0.528454 0.322171 0.322171C0.528453 0.115889 0.808233 0 1.09996 0C1.39169 0 1.67147 0.115889 1.87775 0.322171C2.08403 0.528454 2.19992 0.808233 2.19992 1.09996V6.59976C2.19992 7.18322 2.4317 7.74278 2.84426 8.15534C3.25683 8.56791 3.81639 8.79968 4.39984 8.79968H18.2439L15.7217 6.27747C15.5214 6.07002 15.4105 5.79217 15.413 5.50376C15.4155 5.21535 15.5312 4.93947 15.7351 4.73553C15.9391 4.53159 16.215 4.41591 16.5034 4.4134C16.7918 4.41089 17.0696 4.52176 17.2771 4.72213L21.6769 9.12197C21.7794 9.22415 21.8606 9.34553 21.9161 9.47916C21.9715 9.6128 22.0001 9.75606 22.0001 9.90074C22.0001 10.0454 21.9715 10.1887 21.9161 10.3223C21.8606 10.456 21.7794 10.5773 21.6769 10.6795L21.6758 10.6784Z"
                        fill="#020202" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="tp-blog-sidebar">
              <div class="tp-blog-widget-search">
                <form action="#">
                  <input type="search" name="s" placeholder="Search Keyword">
                  <span class="search-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M18.9007 17.5991L16.3065 15.014C17.7129 13.2767 18.3989 11.0659 18.2232 8.83754C18.0475 6.60922 17.0234 4.53328 15.3622 3.03778C13.7009 1.54228 11.5291 0.741256 9.29467 0.79988C7.0602 0.858504 4.93341 1.77231 3.35286 3.35286C1.77231 4.93341 0.858504 7.0602 0.79988 9.29467C0.741256 11.5291 1.54228 13.7009 3.03778 15.3622C4.53328 17.0234 6.60922 18.0475 8.83754 18.2232C11.0659 18.3989 13.2767 17.7129 15.014 16.3065L17.5991 18.9007C17.6843 18.9866 17.7857 19.0548 17.8974 19.1014C18.0091 19.1479 18.1289 19.1719 18.2499 19.1719C18.3709 19.1719 18.4907 19.1479 18.6024 19.1014C18.7141 19.0548 18.8155 18.9866 18.9007 18.9007C18.9866 18.8155 19.0548 18.7141 19.1014 18.6024C19.1479 18.4907 19.1719 18.3709 19.1719 18.2499C19.1719 18.1289 19.1479 18.0091 19.1014 17.8974C19.0548 17.7857 18.9866 17.6843 18.9007 17.5991ZM2.66655 9.54155C2.66655 8.1818 3.06976 6.85259 3.82519 5.722C4.58063 4.59141 5.65436 3.71023 6.9106 3.18987C8.16684 2.66952 9.54918 2.53337 10.8828 2.79865C12.2164 3.06392 13.4414 3.7187 14.4029 4.68019C15.3644 5.64167 16.0192 6.86668 16.2844 8.2003C16.5497 9.53392 16.4136 10.9163 15.8932 12.1725C15.3729 13.4287 14.4917 14.5025 13.3611 15.2579C12.2305 16.0133 10.9013 16.4165 9.54155 16.4165C7.71818 16.4165 5.9695 15.6922 4.68019 14.4029C3.39087 13.1136 2.66655 11.3649 2.66655 9.54155Z"
                        fill="#020202" />
                    </svg>
                  </span>
                </form>
              </div>
              <div class="tp-blog-widget-lposts">
                <h3 class="tp-blog-widget-title">Latest Post</h3>
                <div class="lposts-list">
                  <div class="lpost-item">
                    <div class="categories">
                      <a href="#">AI Copilot</a>
                    </div>
                    <h3 class="title"><a href="{{ route("blog-details") }}">AI-Powered Automation: Scaling Businesses Without
                        Limits</a></h3>
                    <p class="date">10 July, 25</p>
                  </div>
                  <div class="lpost-item">
                    <div class="categories">
                      <a href="#">SaaS Application</a>
                    </div>
                    <h3 class="title"><a href="{{ route("blog-details") }}">How AI Co-Pilots Are Transforming Everyday
                        Workflows</a></h3>
                    <p class="date">10 July, 25</p>
                  </div>
                  <div class="lpost-item">
                    <div class="categories">
                      <a href="#">Help Desk</a>
                    </div>
                    <h3 class="title"><a href="{{ route("blog-details") }}">Beyond ChatGPT: What’s Next for Generative AI?</a>
                    </h3>
                    <p class="date">10 July, 25</p>
                  </div>
                </div>
              </div>
              <div class="tp-blog-widget-category">
                <h3 class="tp-blog-widget-title">Category</h3>
                <ul>
                  <li><a href="#">Healthcare AI</a></li>
                  <li><a href="#">Speech Recognition</a></li>
                  <li><a href="#">Deep Learning</a></li>
                  <li><a href="#">Customer Support</a></li>
                  <li><a href="#">Fintech AI</a></li>
                  <li><a href="#">Manufacturing AI</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog area end -->


      <!-- Footer area start -->
@endsection
