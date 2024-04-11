
@extends('layouts.app')

@section('content')

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
        <div class="container">
      {{-- <h2 style="font-size: 20px;">UNILAG ARTISAN - <span>CONNECT WITH AN ARTISAN</span><br>TODAY!</h2> --}}
     <p style="font-size: 28px;">Do You Need An Artisan? Not To Worry, We're Here For You </p>

      <div>
        <a href="homepage" class="btn-get-started scrollto">Get Started</a>
        {{-- <a href="#portfolio" class="btn-projects scrollto">Our Projects</a> --}}
      </div><br>

      <p style="font-size: 20px;">Are You An Artisan? Register to connect with Students in need</p>

      <div>
        <a href="/register" class="btn-projects scrollto">Register</a>
        <a href="/login" class="btn-get-started scrollto">Log In</a>
      </div><br>
    </div>
    </div>

    <div class="hero-slider swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>What do we have to offer?</h2>

            <ul>
              <li><i class="bi bi-check-circle"></i> Effective Artisans with respectible reputations.</li>
              <li><i class="bi bi-check-circle"></i> Artisans are around You, Just Call up</li>
              <li><i class="bi bi-check-circle"></i> You get to negotiate the price you are to pay</li>
              <li><i class="bi bi-check-circle"></i> No online transactions, i.e., the sole aim of the app is to connect Artisans with their customers.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
          <p>Below are some of the Artisans jobs available at your disposal</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href=""> Electricians </a></h4>
              <p class="description">Fix the Cables, hot plates, light bulbs, socket plugs, inspect circuit breakers in the hostels. And so much more.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href=""> Carpenters </a></h4>
              <p class="description">Help fix your hostel doors, build new storage lockers, and so much more.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Hair Stylist</a></h4>
              <p class="description">Make and/or cut your hair from the nearest hair stylist in your hostel.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Others</a></h4>
              <p class="description">Several other Artisans including Food Vendors, materials, and basically anything being sold in respective hostels.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Reviews from some of our Users</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                   A Very Nice application, it was quick to pick up locations of the electricians I desperately needed
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Trillions</h3>
                <h4>ENI-NJOKU G314</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">ABOUT THE DEVELOPER</h3>
            <p class="cta-text">I'm NEWTON, a Year 1 Physics Education student with indepth Knowledge of Backend development. I started Unilag Artisans to ease marketing
                 for the students within the vicinity of the hostels, with the high hopes of expanding to other parts of the school, Lecture halls maybe.
                 Want to know more about me? Click on the provided button. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://newton09.netlify.app/">MY PORTFOLIO</a>
          </div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p style="text-align: center;">REACH OUT TO US ANYTIME</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>UNILAG, AKOKA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:08140902526">08140902526</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:adebesinnewton99@gmail.com">adebesinnewton99@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong> <a href="https://newton09.netlify.app/">NEWTON</a></strong> All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

@endsection










