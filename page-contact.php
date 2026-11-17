<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>CD Softech | Contact</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
  <link rel="icon" href="images/favicon.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
  <div class="page-wrapper">

    <?php include __DIR__ . '/preloader.php'; ?>


    <!-- Back-to-top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Back-to-top start -->

    <!-- header-style-one-->
    <?php include __DIR__ . '/header.php'; ?>
    <!--End header-style-one -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/resource/page-title.jpg);">
      <div class="auto-container">
        <div class="title-outer text-center">
          <h1 class="title">Contact</h1>
          <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Contact Details Start-->
  <section class="contact-details">
    <div class="container pt-110 pb-70">
      <div class="row">
        <div class="col-xl-7 col-lg-6">
          <div class="sec-title black">
            <h2>Feel free to write</h2>
          </div>
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" action="includes/sendmail.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
            </div>
            <div class="mb-5">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="theme-btn btn-style-three" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>

              <button type="reset" class="theme-btn btn-style-three" data-loading-text="Please wait..."><span class="btn-title">Reset</span></button>
              
            </div>
          </form>
          <!-- Contact Form Validation-->
        </div>
        <div class="col-xl-5 col-lg-6">
          <div class="contact-details__right">
            <div class="sec-title black">
              <h2>Get in touch with us</h2>
              <div class="text">Tell us about your goals, timeline, and budget. CD Softech can help plan your next web, mobile, AI, cloud, ERP/CRM, or cybersecurity project.</div>
            </div>
            <ul class="list-unstyled contact-details__info">
              <li>
                <div class="icon">
                  <span class="fa-classic fa-light fa-phone-plus"></span>
                </div>
                <div class="text">
                  <div class="h6 mb-1">Have any question?</div>
                  <a href="tel:+919721789498">+91 97217 89498</a>
                </div>
              </li>
              <li>
                <div class="icon">
                  <span class="fal fa-envelope"></span>
                </div>
                <div class="text">
                  <div class="h6 mb-1">Write email</div>
                  <a href="mailto:info@cdsoftech.com">info@cdsoftech.com</a>
                </div>
              </li>
              <li>
                <div class="icon">
                  <span class="fal fa-location-arrow"></span>
                </div>
                <div class="text">
                  <div class="h6 mb-1">Visit anytime</div>
                  <span>Near Deokali Bypass, Shri Ayodhya Dham, Ayodhya, Uttar Pradesh 224001, India</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->

  <!-- Map Section-->
  <section class="map-section">
    <iframe  class="map w-100"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Deokali%20Bypass,%20Ayodhya,%20Uttar%20Pradesh%20224001&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
  </section>
  <!--End Map Section-->

    <!-- start footer-style-two -->
    <section class="main-footer footer-style-two">
      <div class="bg-image"><img src="images/resource/footer2-1.png" alt=""></div>
      <div class="auto-container">
        <div class="upper-box">
          <div class="row gx-4 align-items-center">
            <div class="col-lg-3">
              <div class="logo"><img src="images/logo-cd-softech.svg" alt=""></div>
            </div>
            <div class="col-xl-8 offset-xl-1 col-lg-9">
              <div class="info-box">
                <div class="info">
                  <i class="icon fa-solid fa-phone"></i>
                  <div class="content">
                    <span class="number one">+91 97217 89498</span>
                    <span class="number">+91 94546 00594</span>
                  </div>
                </div>
                <div class="info">
                  <i class="icon fa-solid fa-clock"></i>
                  <div class="content">
                    <span>Mon - Fri</span>
                    <span class="time"> 9.00 am - 8.00pm </span>
                  </div>
                </div>
                <div class="info">
                  <i class="icon fa-solid fa-location-dot"></i>
                  <div class="content">
                    <span class="location">Ayodhya, Uttar Pradesh 224001, India</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="widgets-section">
          <div class="row gx-4">

            <!-- Footer Column -->
            <div class="footer-column col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
              <div class="footer-widget about-widget wow fadeInLeft">
                <div class="image"><img src="images/resource/footer2-1.jpg" alt=""></div>
              </div>
            </div>

            <!-- Footer Column -->
            <div class="footer-column col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="400ms">
              <div class="footer-widget links-widget">
                <div class="h5 widget-title">Company</div>
                <div class="widget-content">
                  <ul class="user-links">
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-and-conditions.php">Terms &amp; Conditions</a></li>
                    <li><a href="refund-policy.php">Refund Policy</a></li>
                    <li><a href="cookies-policy.php">Cookies Policy</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="sitemap.php">Sitemap</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Footer Column -->
            <div class="footer-column col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="600ms">
              <div class="footer-widget links-widget style-two">
                <div class="h5 widget-title">Our Solutions</div>
                <div class="widget-content">
                  <ul class="user-links">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">UI/UX Design</a></li>
                    <li><a href="#">Mobile <br>Application</a></li>
                    <li><a href="#">Cloud Service</a></li>
                    <li><a href="#">Cyber Security </a></li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Footer Column -->
            <div class="footer-column col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="800ms">
              <div class="footer-widget subscribe-widget">
                <div class="h3 widget-title">Subscribe to Newsletter</div>
                <div class="from-clt">
                  <input type="email" name="email" id="email" placeholder="Enter Email" required="">
                  <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
                <div class="social-icon">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="footer-bottom wow fadeInUp" data-wow-delay="600ms">
          <div class="inner-container">
            <p>© Copyright 2026 CD Softech. All rights reserved.</p>
            <ul class="social-icon">
              <li>
                <a href="#">
                  <i class="fa-brands fa-facebook-f"></i>
                  <span>Facebook</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-twitter"></i>
                  <span>Twitter</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-linkedin-in"></i>
                  <span>Linkedin</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-youtube"></i>
                  <span>youtube</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- end footer-style-two -->


</div>
<!-- End Page Wrapper -->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/knob.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/splitType.js"></script>
<script src="js/gsap-scroll-smoother.js"></script>
<script src="js/gsap-scroll-to-plugin.js"></script>
<script src="js/SplitText.min.js"></script>
<script src="js/custom-gsap.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/script.js"></script>
<!-- form submit -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script src="js/contact-form-script.js"></script>
</body>
</html>
