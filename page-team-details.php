<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>CD Softech | Delivery Model</title>
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
          <h1 class="title">Delivery Model</h1>
          <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Delivery Model</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Team Details Start-->
  <section class="team-details">
    <div class="container pt-120 pb-100">
      <div class="team-details__top pb-70">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__top-left">
              <div class="team-details__top-img"> <img src="images/resource/team-details.jpg" alt="">
                <div class="team-details__big-text"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__top-right">
              <div class="team-details__top-content">
                <div class="h3 team-details__top-name">CD Softech</div>
                <p class="team-details__top-title">Product, Design & Engineering Team</p>
                <p class="team-details__top-text-1">A senior technology partner for businesses building secure, measurable digital products.</p>
                <div class="team-details-contact mb-30">
                  <div class="h5 mb-0">Email Address</div>
                  <div class=""><span>info@cdsoftech.com</span></div>
                </div>
                <div class="team-details-contact mb-30">
                  <div class="h5 mb-0">Phone Number</div>
                  <div class=""><span>+91 97217 89498</span></div>
                </div>
                <div class="team-details-contact">
                  <div class="h5 mb-0">Web Address</div>
                  <div class=""><span>cdsoftech.com</span></div>
                </div>
                <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="team-details__bottom pt-100">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__bottom-left">
              <div class="h4 team-details__bottom-left-title">Our Delivery Approach</div>
              <p class="team-details__bottom-left-text">Product, design, and engineering squads work through discovery, planning, design, development, testing, launch, and ongoing support in focused delivery cycles.</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__bottom-right">
              <div class="team-details__progress">
                <div class="team-details__progress-single">
                  <div class="h4 team-details__progress-title">Client Satisfaction</div>
                  <div class="bar">
                    <div class="bar-inner count-bar" data-percent="97%">
                      <div class="count-text">97%</div>
                    </div>
                  </div>
                </div>
                <div class="team-details__progress-single">
                  <div class="h4 team-details__progress-title">Launch Readiness</div>
                  <div class="bar">
                    <div class="bar-inner count-bar" data-percent="98.7%">
                      <div class="count-text">98.7%</div>
                    </div>
                  </div>
                </div>
                <div class="team-details__progress-single">
                  <div class="h4 team-details__progress-title">Sprint Velocity</div>
                  <div class="bar marb-0">
                    <div class="bar-inner count-bar" data-percent="42%">
                      <div class="count-text">+42%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Team Details End--> 

  <!--Contact Details Start-->
  <section class="team-contact-form">
    <div class="container pt-120 pb-120">
      <div class="sec-title text-center">
        <h2 class="section-title__title">Talk to CD Softech About Your Next Digital Project</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
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
              <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
            </div>
            <div class="mb-3 text-center">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="theme-btn btn-style-three" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
              <button type="reset" class="theme-btn btn-style-three"><span class="btn-title">Reset</span></button>
            </div>
          </form>
          <!-- Contact Form Validation-->
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->

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
<script src="js/gsap.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/splitType.js"></script>
<script src="js/gsap-scroll-smoother.js"></script>
<script src="js/ScrollSmoother.min.js"></script>
<script src="js/gsap-scroll-to-plugin.js"></script>
<script src="js/SplitText.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/wow.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/knob.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/custom-gsap.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/script.js"></script>
<!-- form submit -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script src="js/contact-form-script.js"></script>
</body>
</html>
