<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festivee Dreams Photography</title>
    <link rel="icon" href="assets/images/main-logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>

    </style>
</head>

<body>
    <button id="scrollToTopBtn" onclick="scrollToTop()"><img src="assets/images/up-arrow.svg" alt="img" width="24px"
            height="24px" class="uparrow"></button>

    <!-- xxl 1400 -1200
  xl 1200 -992
  lg 992 -768
  md 768 -576
  sm 576 -480
  xs 480 -320 -->
    <!-- header part -->
    <div>
        <section class="header-section header-section-two p_t_20 p_b_20 p_t_10_sm  p_b_10_sm  ">
            <div class="wrapper-fluid">
                <div class="top-header">
                    <div class="head-left">
                        <div class="main-left">
                            <div class="menu" onclick="openNav()" title="Menu">
                                <img src="assets/images/menu-black.png" alt="Menubar">
                            </div>
                            <div class="social-media">
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/festiveedreams/" title="Instagram" target="_blank">
                                            <img src="assets/images/black-inst.png" alt="img">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/profile.php?id=100094607981753"
                                             title="Facebook" target="_blank">
                                            <img src="assets/images/facebook-black.png" alt="img">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="head-center">
                        <a href="index.php" title="Festivee Dreams">
                            <img src="assets/images/logo-2.png" alt="Festivee Dreams">
                        </a>
                    </div>
                    <div class="head-right">
                        <div class="head-btn">
                            <ul>
                                <li>
                                    <a href="tel:+91 975 000 3054" title="Call Us">Call +91 975 000 3054</a>
                                </li>
                                <li>
                                    <a href="enquiry.php" class="btn outline-btn1 outline-hover"><span>Enquire
                                            now</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="mobile_btn">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" title="Call Now">
                                        <img src="assets/images/call-me.png" alt="Call Now">
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- <div class="col_3 col_2_lg col_3_md col_1_sm g_30 a_i_c">
        <div class="col_1">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
          </div>
          <div class="left-header">
            <ul class="d_f a_i_c g_20">
              <li>
                <a href="javascript:void(0)" onclick="openNav()" id="toggle-button"><img
                    src="assets/images/bar-icon.png" alt="img"></a>
              </li>
              <li>
                <a href="javascript:void(0)"><img src="assets/images/instagram-white.png" alt="img"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col_1 t_a_c d_f j_c_s_a">
          <div class="center-header ">
            <img src="assets/images/logo-content.png" alt="img">
          </div>
        </div>
        <div class="col_1">
          <div class="right-header  ">
            <ul class="d_f a_i_c g_20 f_r">
              <li>
                <a href="javascript:void(0);">Call +91 975 000 30 54</a>
              </li>
              <li>
                <a href="javascript:void(0);" class="btn outline-btn1">Enquire now</a>
              </li>
            </ul>
          </div>
        </div>
      </div> -->

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.php" title="Home"> <img src="assets/images/home.png" alt="img"></a>
                    <a href="about.php" title="About Us">About Us</a>
                    <button class="dropdown-btn highlight" title="Services">Services
                        <img src="assets/images/down-arrow.png" class="fa-caret-down" alt="img">
                    </button>
                    <div class="sub-dropdown">
                        <a href="wedding.php" title="Wedding">Wedding</a>
                        <a href="portfolio.php" title="Portfolio">Portfolio</a>
                        <a href="outdoor.php" title="Outdoor" class="highlight">Outdoor</a>
                        <a href="corporate-events.php" title="Corporate Events">Corporate Events</a>
                    </div>
                    <a href="enquiry.php" title="Enquiry"> Enquiry</a>
                    <a href="contact-us.php" title="Contact Us"> Contact Us</a>
                    <br>
                    <div class="social-media-nav">
                        <h3>Social Media </h3>
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/festiveedreams/" title="Instagram" target="_blank">
                                    <img src="assets/images/instagram-white.png" alt="img">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=100094607981753"  title="Facebook" target="_blank">
                                    <img src="assets/images/facebook-white.png" alt="img">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- header part -->
    <!-- Breadcrumb part -->
    <div>
        <section class="breadcrumb-section breadcrumb-services section_margin">
            <div class="wrapper">
                <div class="col_1 col_1_lg col_1_sm g_30 ">
                    <div class="col_1">
                        <div class="breadcrumb-part">
                            <div class="breadcrumb-img" data-aos="fade-left" data-aos-duration="1000">
                                <img src="assets/images/new-img/Out Door/Out Door 4/ROB02171.jpg" alt="img">
                            </div>
                            <h1 class="breadcrumb-title" data-aos="fade-down" data-aos-duration="1000">
                                Outdoor
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Breadcrumb part -->
    <!-- service page part -->
    <section class="services-section section_margin">
        <div class="wrapper-fluid ">
            <div class="col_3 col_3_lg col_2_sm g_20 g_15_mb ">
                <div class="col_1" data-aos="fade-down" data-aos-duration="1000">
                    <div class="service-inner">
                        <a href="outdoor-details-1.php">
                            <div class="service-img">
                                <img src="assets/images/new-img/Out Door/Out Door 1/01.jpg">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title"> Priyanka & Venk </h4>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col_1" data-aos="fade-down" data-aos-duration="2000">
                    <div class="service-inner">
                        <a href="outdoor-details-2.php">
                            <div class="service-img">
                                <img src="assets/images/new-img/Out Door/Out Door 2/05.jpg" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Priyanka & Venk

                                </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col_1" data-aos="fade-down" data-aos-duration="3000">
                    <div class="service-inner">
                        <a href="outdoor-details-3.php">
                            <div class="service-img">
                                <img src="assets/images/new-img/Out Door/Out Door 3/(37).jpg" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Priyanka & Venk
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col_1" data-aos="fade-down" data-aos-duration="1000">
                    <div class="service-inner">
                        <a href="outdoor-details-4.php">
                            <div class="service-img">
                                <img src="assets/images/new-img/Out Door/Out Door 4/ROB02146.jpg" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Priyanka & Venk </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col_1" data-aos="fade-down" data-aos-duration="2000">
                    <div class="service-inner">
                        <a href="outdoor-details-5.php">
                            <div class="service-img">
                                <img src="assets/images/new-img/Out Door/Out Door 5/(3).jpg" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Priyanka & Venk </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col_1" data-aos="fade-down" data-aos-duration="3000">
                    <div class="service-inner">
                        <a href="outdoor-details-6.php">
                            <div class="service-img">
                                <img src="assets/images/new-img/Out Door/Out Door 6/13.jpg" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title"> Priyanka & Venk </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col_1" data-aos="fade-down" data-aos-duration="1000">
                    <div class="service-inner">
                        <a href="outdoor-details-7.php">
                            <div class="service-img">
                                <img src="assets/images/new-img/Out Door/Out Door 7/13.jpg" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Priyanka & Venk </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col_1"  data-aos="fade-down" data-aos-duration="2000">
                    <div class="service-inner">
                        <a href="outdoor-details.php">
                            <div class="service-img">
                                <img src="assets/images/new/outdoor/(37).jpg" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Priyanka & Venk </h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col_1" data-aos="fade-down" data-aos-duration="3000">
                    <div class="service-inner">
                        <a href="outdoor-details.php">
                            <div class="service-img">
                                <img src="assets/images/pic-9.png" alt="img">
                            </div>
                            <div class="service-content">
                                <h4 class="service-title">Priyanka & Venk </h4>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- service page part -->

    <!-- footer section -->
    <?php include 'footer.php' ?>
    <!-- footer section -->

    <!-- js -->
    <!-- Swiper JS -->


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>