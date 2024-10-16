<!doctype html>
<html class="no-js" <?php echo language_attributes()?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo( 'title-tag' )?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <?php wp_head()?>
</head>

<body>
    <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader-content">
               <div class="tp-preloader-logo">
                  <div class="tp-preloader-circle">
                     <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round">
                        </circle>
                        <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                     </svg>
                  </div>
                  <img src="assets/img/logo/favicon.png" alt="">
               </div>
               <p class="tp-preloader-subtitle">Loading...</p>
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- search area start -->
   <div class="search-popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search-wrapper">
                  <div class="search-top d-flex justify-content-between align-items-center">
                     <div class="search-logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo-white.png" alt="">
                        </a>
                     </div>
                     <div class="search-close">
                        <button type="button" class="search-close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round"></path>
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search-form">
                     <form action="#">
                        <div class="search-input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search area start -->

   <!-- start offcanvas area  -->
   <div class="tp-offcanvas">
      <div class="tp-offcanvas-wrapper">
         <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-50">
            <div class="tp-offcanvas-logo">
               <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
            <div class="tp-offcanvas-close">
               <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
            </div>
         </div>
         <div class="tp-offcanvas-menu d-xl-none mb-50">
            <nav></nav>
         </div>
         <div class="tp-offcanvas-content mb-50 d-none d-xl-block">
            <h2 class="tp-offcanvas-title">Hello There!</h2>
            <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
         </div>
         <div class="tp-offcanvas-gallery mb-50">
            <a class="popup-image" href="assets/img/footer/f-4-1.jpg">
               <img src="assets/img/footer/f-4-1.jpg" alt="">
            </a>
            <a class="popup-image" href="assets/img/footer/f-4-2.jpg">
               <img src="assets/img/footer/f-4-2.jpg" alt="">
            </a>
            <a class="popup-image" href="assets/img/footer/f-4-3.jpg">
               <img src="assets/img/footer/f-4-3.jpg" alt="">
            </a>
            <a class="popup-image" href="assets/img/footer/f-4-4.jpg">
               <img src="assets/img/footer/f-4-4.jpg" alt="">
            </a>
         </div>
         <div class="tp-offcanvas-info mb-50">
            <h3 class="tp-offcanvas-sm-title">Information</h3>
            <span><a href="#">+ 4 20 7700 1007</a></span>
            <span><a href="#">hello@exdos.com</a></span>
            <span><a href="#">Avenue de Roma 158b, Lisboa</a></span>
         </div>
         <div class="tp-offcanvas-social mb-50">
            <h3 class="tp-offcanvas-sm-title">Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
         </div>
      </div>
   </div>
   <div class="tp-offcanvas-overlay"></div>
   <!-- start offcanvas end  -->

   <!-- Back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <i class="fa-regular fa-angle-up"></i>
      </button>
   </div>
   <!-- Back to top end -->

   <header class="tp-header-height">
      <!-- header area start -->
      <div class="tp-header-area tp-header-style-2 tp-header-style-3">
         <div class="tp-header-wrapp">
            <div class="tp-header-top-area black-bg d-none d-md-block">
               <div class="container">
                  <div class="tp-header-top-wrapp">
                     <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 col-6">
                           <div class="tp-header-info d-flex align-items-center">
                              <div class="tp-header-info-social">
                                 <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                 <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                 <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-8 d-none d-md-block">
                           <div class="tp-header-info tp-header-info-bg d-flex align-items-center justify-content-end">
                              <h3 class="tp-header-info-text tp-header-info-center">
                                 <a href="#"><i class="fa-light fa-location-dot"></i> The queens walk, TSV 3456</a>
                              </h3>
                              <h3 class="tp-header-info-text">
                                 <a href="mailto:needhelp@mail.com">
                                    <i class="fa-light fa-envelope"></i> needhelp@mail.com
                                 </a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-header-bottom-area white-bg">
               <div id="header-sticky" class="tp-header-bottom-area header-3">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-6 col-md-5 col-sm-6 col-6">
                           <div class="tp-main-logo">
                              <a href="index.html">
                                 <img src="assets/img/logo/logo.png" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="col-xl-7 d-none d-xl-block">
                           <div class="tp-main-menu d-flex justify-content-end">
                              <nav class="tp-main-menu-content tp-mobile-menu-active">
                                 <ul>
                                    <li class="has-dropdown"><a href="index.html">Home</a></li>
                                    <li class="has-dropdown"><a href="index.html">Pages</a>
                                       <ul class="sub-menu">
                                          <li><a href="about.html">About Us</a></li>
                                          <li><a href="team.html">Team</a></li>
                                          <li><a href="team-details.html">Team Details</a></li>
                                          <li><a href="portfolio.html">Portfolio</a></li>
                                          <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                          <li><a href="error.html">Error</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="index.html">Service</a>
                                       <ul class="sub-menu">
                                          <li><a href="service.html">Service</a></li>
                                          <li><a href="service-details.html">Service Details</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="index.html">Shop</a>
                                       <ul class="sub-menu">
                                          <li><a href="shop.html">Shop</a></li>
                                          <li><a href="shop-details.html">Shop Details</a></li>
                                          <li><a href="cart.html">Cart</a></li>
                                          <li><a href="checkout.html">Checkout</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="blog-sidebar.html">Blog</a>
                                       <ul class="sub-menu">
                                          <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                          <li><a href="blog-details.html">Blog Details</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-7 col-sm-6 col-6">
                           <div class="tp-header-bottom-right d-flex align-items-center justify-content-end">
                              <div class="tp-header-bottom-icon d-none d-xl-block">
                                 <ul>
                                    <li>
                                       <div class="tp-header-icon">
                                          <button class="search-open-btn">
                                             <span>
                                                <i class="flaticon-search"></i>
                                             </span>
                                          </button>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tp-header-bottom-action d-flex align-items-center">
                                 <div class="tp-header-bottom-btn">
                                    <a href="contact.html" class="tp-theme-btn btn-black">EXPLORE MORE</a>
                                 </div>
                              </div>
                              <div class="tp-main-menu-bars d-block d-xl-none">
                                 <button class="tp-offcanvas-toogle">
                                    <i class="far fa-bars"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header area end -->
   </header>