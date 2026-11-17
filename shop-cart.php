<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>CD Softech | Cart</title>
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
          <h1 class="title">Cart</h1>
          <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Cart</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--cart Start-->
    <section>
      <div class="container pt-120 pb-100">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped table-bordered tbl-shopping-cart">
                  <thead>
                  <tr>
                    <th></th>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr class="cart_item">
                    <td class="product-remove"><a title="Remove this item" class="remove" href="#">×</a></td>
                    <td class="product-thumbnail"><a href="#"><img alt="product" src="images/resource/products/1.jpg"></a></td>
                    <td class="product-name"><a href="shop-product-details.php">Winter Black Jacket</a>
                    <ul class="variation">
                      <li class="variation-size">Size: <span>Medium</span></li>
                    </ul></td>
                    <td class="product-price"><span class="amount">$36.00</span></td>
                    <td class="product-quantity">
                      <div class="product-details__quantity">
                        <div class="quantity-box">
                          <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                          <input type="text" id="1" value="1" />
                          <button type="button" class="add"><i class="fa fa-plus"></i></button>
                        </div>
                      </div>
                    </td>
                    <td class="product-subtotal"><span class="amount">$36.00</span></td>
                  </tr>
                  <tr class="cart_item">
                    <td class="product-remove"><a title="Remove this item" class="remove" href="#">×</a></td>
                    <td class="product-thumbnail"><a href="#"><img alt="product" src="images/resource/products/2.jpg"></a></td>
                    <td class="product-name"><a href="shop-product-details.php">Swan Crop V-Neck Tee</a>
                    <ul class="variation">
                      <li class="variation-size">Size: <span>Small</span></li>
                    </ul></td>
                    <td class="product-price"><span class="amount">$115.00</span></td>
                    <td class="product-quantity">
                      <div class="product-details__quantity">
                        <div class="quantity-box">
                          <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                          <input type="text" id="2" value="1" />
                          <button type="button" class="add"><i class="fa fa-plus"></i></button>
                        </div>
                      </div>
                    </td>
                    <td class="product-subtotal"><span class="amount">$115.00</span></td>
                  </tr>
                  <tr class="cart_item">
                    <td class="product-remove"><a title="Remove this item" class="remove" href="#">×</a></td>
                    <td class="product-thumbnail"><a href="#"><img alt="product" src="images/resource/products/3.jpg"></a></td>
                    <td class="product-name"><a href="shop-product-details.php">Blue Solid Casual Shirt</a>
                    <ul class="variation">
                      <li class="variation-size">Size: <span>Large</span></li>
                    </ul></td>
                    <td class="product-price"><span class="amount">$68.00</span></td>
                    <td class="product-quantity">
                      <div class="product-details__quantity">
                        <div class="quantity-box">
                          <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                          <input type="number" id="3" value="1" />
                          <button type="button" class="add"><i class="fa fa-plus"></i></button>
                        </div>
                      </div>
                    </td>
                    <td class="product-subtotal"><span class="amount">$68.00</span></td>
                  </tr>
                  <tr class="cart_item">
                    <td colspan="3">
                    <form class="row g-3 coupon-form">
                      <div class="col-auto">
                      <input type="text" name="coupon_code" class="input-text form-control mr-1" id="coupon_code" value="" placeholder="Coupon code">
                      </div>
                      <div class="col-auto">
                      <button type="submit" class="apply-button" name="apply_coupon" value="Apply Coupon"><span class="btn-title">Apply Coupon</span></button>
                      </div>
                    </form>
                    </td>
                    <td colspan="2">&nbsp;</td>
                    <td>
                      <button type="button" class="theme-btn btn-style-three" data-loading-text="Please wait..."><span class="btn-title">Update Cart</span></button>
                      </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-12 mt-30">
              <div class="row">
                <div class="col-md-5">
                  <div class="h4">Calculate Shipping</div>
                  <form class="form" action="#">
                    <div class="mb-10">
                      <select class="form-control">
                      <option>Select Country</option>
                      <option>Australia</option>
                      <option>UK</option>
                      <option>USA</option>
                      </select>
                    </div>
                    <div class="mb-10"><input type="text" class="form-control" placeholder="State/country" value=""></div>
                    <div class="mb-10"><input type="text" class="form-control" placeholder="Postcod/zip" value=""></div>
                    <div class="mb-30">
                      <button type="button" class="theme-btn btn-style-three" data-loading-text="Please wait..."><span class="btn-title">Update Totals</span></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-5">
                  <div class="h4">Cart Totals</div>
                  <table class="table table-bordered cart-total">
                    <tbody>
                      <tr>
                      <td>Cart Subtotal</td>
                      <td>$180.00</td>
                      </tr>
                      <tr>
                      <td>Shipping and Handling</td>
                      <td>$70.00</td>
                      </tr>
                      <tr>
                      <td>Order Total</td>
                      <td>$250.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <button type="button" class="theme-btn btn-style-three" data-loading-text="Please wait..."><span class="btn-title">Proceed to Checkout</span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--cart Start-->

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
<script src="js/mixitup.js"></script>
<script src="js/flatpickr.js"></script>
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
