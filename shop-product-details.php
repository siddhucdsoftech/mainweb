<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>CD Softech | Shop</title>
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
          <h1 class="title">Product Deatils</h1>
          <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Product Deatils</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Product Details Start-->
  <section class="product-details pt-120">
    <div class="container pb-70">
      <div class="row">
        <div class="col-lg-6 col-xl-6">
          <div class="bxslider">
            <div class="slider-content">
              <figure class="image-box"><a href="images/resource/products/product-details.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/products/product-details.jpg" alt=""></a></figure>
              <div class="slider-pager">
                <ul class="thumb-box">
                  <li> <a class="active" data-slide-index="0" href="#">
                    <figure><img src="images/resource/products/product-details.jpg" alt=""></figure>
                    </a> </li>
                  <li> <a data-slide-index="1" href="#">
                    <figure><img src="images/resource/products/product-details2.jpg" alt=""></figure>
                    </a> </li>
                  <li> <a data-slide-index="2" href="#">
                    <figure><img src="images/resource/products/product-details3.jpg" alt=""></figure>
                    </a> </li>
                </ul>
              </div>
            </div>
            <div class="slider-content">
              <figure class="image-box"><a href="images/resource/products/product-details2.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/products/product-details2.jpg" alt=""></a></figure>
              <div class="slider-pager">
                <ul class="thumb-box">
                  <li> <a class="active" data-slide-index="0" href="#">
                    <figure><img src="images/resource/products/product-details.jpg" alt=""></figure>
                    </a> </li>
                  <li> <a data-slide-index="1" href="#">
                    <figure><img src="images/resource/products/product-details2.jpg" alt=""></figure>
                    </a> </li>
                  <li> <a data-slide-index="2" href="#">
                    <figure><img src="images/resource/products/product-details3.jpg" alt=""></figure>
                    </a> </li>
                </ul>
              </div>
            </div>
            <div class="slider-content">
              <figure class="image-box"><a href="images/resource/products/product-details3.jpg" class="lightbox-image" data-fancybox="gallery"><img src="images/resource/products/product-details3.jpg" alt=""></a></figure>
              <div class="slider-pager">
                <ul class="thumb-box">
                  <li> <a class="active" data-slide-index="0" href="#">
                    <figure><img src="images/resource/products/product-details.jpg" alt=""></figure>
                    </a> </li>
                  <li> <a data-slide-index="1" href="#">
                    <figure><img src="images/resource/products/product-details2.jpg" alt=""></figure>
                    </a> </li>
                  <li> <a data-slide-index="2" href="#">
                    <figure><img src="images/resource/products/product-details3.jpg" alt=""></figure>
                    </a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 product-info">
          <div class="product-details__top">
            <div class="h3 product-details__title">Backpack <span>$76.00</span> </div>
          </div>
          <div class="product-details__reveiw">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <span>2 Customer Reviews</span>
          </div>
          <div class="product-details__content">
            <p class="product-details__content-text1">Aliquam hendrerit a augue insuscipit. Etiam
              aliquam massa quis des mauris commodo venenatis ligula commodo leez sed blandit
              convallis dignissim onec vel pellentesque neque.</p>
            <p class="product-details__content-text2"><strong>REF.</strong> 4231/406 <br />
              Available in store</p>
          </div>

          <div class="product-details__quantity">
            <div class="h3 product-details__quantity-title">Choose quantity</div>
            <div class="quantity-box">
              <button type="button" class="sub"><i class="fa fa-minus"></i></button>
              <input type="number" id="1" value="1" />
              <button type="button" class="add"><i class="fa fa-plus"></i></button>
            </div>
          </div>


          <div class="product-details__buttons">
            <div class="product-details__buttons-1">
              <a href="shop-cart.php" class="theme-btn btn-style-three">Add to Cart</a>
            </div>
            <div class="product-details__buttons-2">
              <a href="shop-product-details.php" class="theme-btn btn-style-three">Add to Wishlist</a>
            </div>
          </div>
          <div class="product-details__social">
            <div class="title mt-10">
              <div class="h3">Share with friends</div>
            </div>
            <ul class="social-icon-one product-share">
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Product Details End-->

  <!--Product Description Start-->
  <section class="product-description">
    <div class="container pt-0 pb-90">
      <div class="product-discription">
        <div class="tabs-box">
          <div class="tab-btn-box text-center">
            <ul class="tab-btns tab-buttons clearfix">
              <li class="tab-btn active-btn" data-tab="#tab-1">Description</li>
              <li class="tab-btn" data-tab="#tab-2">Reviews</li>
            </ul>
          </div>
          <div class="tabs-content">
            <div class="tab active-tab" id="tab-1">
              <div class="text">
                <div class="h3 product-description__title">Description</div>
                <p class="product-description__text1">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci
                  phaedrum. There are many variations of passages of Lorem Ipsum available, but the majority have
                  alteration in some injected or words which don't look even slightly believable. If you are going to
                  use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrang hidden in the
                  middle of text.
                </p>
                <div class="product-description__list">
                  <ul class="list-unstyled">
                    <li>
                      <p><span class="fa fa-arrow-right"></span> Nam at elit nec neque suscipit gravida.</p>
                    </li>
                    <li>
                      <p><span class="fa fa-arrow-right"></span> Aenean egestas orci eu maximus tincidunt.</p>
                    </li>
                    <li>
                      <p><span class="fa fa-arrow-right"></span> Curabitur vel turpis id tellus cursus laoreet.
                      </p>
                    </li>
                  </ul>
                </div>
                <p class="product-description__tex2">All the Lorem Ipsum generators on the Internet tend to repeat
                  predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                  dictionary of over 200 Latin words, combined with a handful of model sentence structures, to
                  generate Lorem Ipsum which looks reasonable.
                </p>
              </div>
            </div>
            <div class="tab" id="tab-2">
              <div class="customer-comment">
                <div class="row clearfix">
                  <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                    <div class="single-comment-box">
                      <div class="inner-box">
                        <figure class="comment-thumb"><img src="images/resource/testi-thumb1-1.png" alt=""></figure>
                        <div class="inner">
                          <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                          </ul>
                          <div class="h5">Jon D. William, <span>10 Jan, 2023 . 4:00 pm</span></div>
                          <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 comment-column">
                    <div class="single-comment-box">
                      <div class="inner-box">
                        <figure class="comment-thumb"><img src="images/resource/testi-thumb1-2.png" alt=""></figure>
                        <div class="inner">
                          <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                          </ul>
                          <div class="h5">Aleesha Brown, <span>12 Feb, 2023 . 8:00 pm</span></div>
                          <p>Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment-box">
                <div class="h3">Add Your Comments</div>
                <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                  <div class="mb-3">
                    <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                  </div>
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
                  <div class="col-lg-12 col-md-12 col-sm-12 column">
                    <div class="review-box clearfix">
                      <p>Your Review</p>
                      <ul class="rating clearfix">
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 column">
                    <div class="form-group clearfix">
                      <div class="custom-controls-stacked">
                        <label class="custom-control material-checkbox">
                          <input type="checkbox" class="material-control-input">
                          <span class="material-control-indicator"></span>
                          <span class="description">Save my name, email, and website in this browser for the next time I comment.</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <input name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="theme-btn btn-style-three" data-loading-text="Please wait..."><span class="btn-title">Submit Comment</span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Product Description End-->

  <section class="related-product">
    <div class="container pt-0 pb-90">
      <div class="h3">Related Products</div>
      <div class="row clearfix">
        <div class="col">
          <!--MixitUp Galery-->
          <div class="mixitup-gallery">
            <div class="filter-list row">
              <!--Product Block-->
              <div class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/resource/products/1.jpg" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="shop-product-details.php">Headphone</a></div>
                    <span class="price">$32.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix dairy meat fruit col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/resource/products/2.jpg" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="shop-product-details.php">Lagage</a></div>
                    <span class="price">$32.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix pantry fruit vagetables col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/resource/products/3.jpg" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="shop-product-details.php">Watch</a></div>
                    <span class="price">$32.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix dairy pantry meat vagetables col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="shop-product-details.php"><img src="images/resource/products/8.jpg" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="shop-product-details.php">SD Card</a></div>
                    <span class="price">$32.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="shop-product-details.php" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="shop-cart.php" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
