<!DOCTYPE html>
<html lang="en">


<?php include './partials/head.php' ?>

<body>

    <!-- Cursor start -->
    <?php include './partials/Cursor_start.php' ?>
    <!-- Cursor end -->

    <!-- modal-search-start -->
    <?php include './partials/modal-search-start.php' ?>
    <!-- modal-search-end -->

    <!-- back to top start -->
    <?php include './partials/back_to_start.php' ?>
    <!-- back to top end -->

    <!-- sidebar-information-area-start -->
    <?php include './partials/sidebar_information.php' ?>`
    <!-- sidebar-information-area-end -->

    <div class="has-smooth" id="has_smooth"></div>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="body-wrapper">
                <header class="h5_header-area">
                    <div class="h5_header-top d-sm-flex align-items-center d-none">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="h5_header-top-text">
                                        <p>Create an account to avail a 34% bonus discount at checkout.</p>
                                        <a href="#">Learn More<i class="fa-light fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                                    <div class="h5_header-top-right">
                                        <div class="h5_header-top-language">
                                            <select name="language"
                                                class="h5_header-top-language-option has-nice-select">
                                                <option value="id" selected>Indonesian</option>
                                                <option value="en">English</option>
                                            </select>
                                        </div>
                                        <div class="h5_header-top-currency">
                                            <select name="currency"
                                                class="h5_header-top-currency-option has-nice-select">
                                                <option value="idr" selected>IDR</option>
                                                <option value="usd">$USD</option>
                                            </select>
                                        </div>
                                        <div class="h5_header-top-account">
                                            <a href="#">
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.0127 8C8.94569 8 10.5127 6.433 10.5127 4.5C10.5127 2.567 8.94569 1 7.0127 1C5.0797 1 3.5127 2.567 3.5127 4.5C3.5127 6.433 5.0797 8 7.0127 8Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M13.026 15C13.026 12.291 10.331 10.1 7.013 10.1C3.695 10.1 1 12.291 1 15"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                My Account
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h5_header-bottom header-sticky">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-2 col-lg-2 col-4">
                                    <div class="h5_header-logo">
                                        <a href="index.php"><img src="assets/images/logo/logo-core.png"
                                                alt="Image Not Found"></a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 d-none d-lg-block text-center">
                                    <div class="h5_header-menu ">
                                        <nav class="h5_header-nav-menu" id="mobile-menu">
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About CORE</a></li>
                                                <li><a href="shop.php">Shop</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-8">
                                    <div class="h5_header-action-wrap d-flex align-items-center justify-content-end">
                                        <div class="h5_header-action d-none d-sm-flex">
                                            <div class="h5_header-action-inner">
                                                <a class="h5_header-action-search" href="javascript:void(0)"
                                                    data-bs-toggle="modal" data-bs-target="#search-modal"><i
                                                        class="fa-light fa-search"></i></a>
                                                <a href="cart.php" class="h5_header-action-cart"><i
                                                        class="fa-light fa-shopping-bag"></i><span>12</span></a>
                                            </div>
                                            <a href="#" class="h5_header-action-btn">
                                                Get Started<i class="fa-light fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="header-menu-bar d-lg-none ml-10">
                                            <span class="header-menu-bar-icon side-toggle">
                                                <i class="fa-light fa-bars"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <main>
                    <?php $subTitle = 'Our Blog' ?>
                    <!-- breadcrumb area start -->
                    <?php include './partials/breadcrumb.php' ?>
                    <!-- breadcrumb area end -->

                    <!-- blog area start -->
                    <section class="h2_blog-area pt-105 pb-140 bg-white">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <div class="h2_section-area text-center mb-50">
                                        <span class="h2_section-subtitle">Our Blog</span>
                                        <h2 class="h2_section-title mb-0">Our Latest News</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left">
                                    <div class="h2_blog-item mb-35">
                                        <div class="h2_blog-img w_img mb-25">
                                            <a href="blog-trend-ai.php"><img
                                                    src="assets/images/blog/innerPage/ai-trend.png"
                                                    alt="Image Not Found"></a>
                                        </div>
                                        <div class="h2_blog-content">
                                            <div class="h2_blog-content-meta">
                                                <span><a href="#">Creative</a></span>
                                                <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                                            </div>
                                            <h4 class="h2_blog-content-title">
                                                <a href="blog-trend-ai.php">Tren Teknologi AI 2025: Peluang untuk UMKM
                                                    Indonesia</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".4">
                                    <div class="h2_blog-item mb-35">
                                        <div class="h2_blog-img w_img mb-25">
                                            <a href="blog-auto-wflow.php"><img
                                                    src="assets/images/blog/innerPage/flow.jpeg"
                                                    alt="Image Not Found"></a>
                                        </div>
                                        <div class="h2_blog-content">
                                            <div class="h2_blog-content-meta">
                                                <span><a href="#">Ai</a></span>
                                                <span><i class="fa-light fa-calendar-days"></i>June 18, 2024</span>
                                            </div>
                                            <h4 class="h2_blog-content-title">
                                                <a href="blog-auto-wflow.php">Platform Automasi Workflow yang Fleksibel
                                                    dan
                                                    Open Source</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".6">
                                    <div class="h2_blog-item mb-35">
                                        <div class="h2_blog-img w_img mb-25">
                                            <a href="blog-auto-wflow.php"><img
                                                    src="assets/images/blog/innerPage/etika.png"
                                                    alt="Image Not Found"></a>
                                        </div>
                                        <div class="h2_blog-content">
                                            <div class="h2_blog-content-meta">
                                                <span><a href="#">Animation</a></span>
                                                <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                                            </div>
                                            <h4 class="h2_blog-content-title">
                                                <a href="blog-auto-wflow.php">Etika AI: Tantangan dan Solusi di Era
                                                    Digital</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".8">
                                    <div class="h2_blog-item mb-35">
                                        <div class="h2_blog-img w_img mb-25">
                                            <a href="blog-dig-umkm.php"><img
                                                    src="assets/images/blog/innerPage/umkm&AI.jpeg"
                                                    alt="Image Not Found"></a>
                                        </div>
                                        <div class="h2_blog-content">
                                            <div class="h2_blog-content-meta">
                                                <span><a href="#">Creative</a></span>
                                                <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                                            </div>
                                            <h4 class="h2_blog-content-title">
                                                <a href="blog-dig-umkm.php">Digitalisasi UMKM: Workflow Otomatis Biar
                                                    Lebih Kompetitif</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1">
                                    <div class="h2_blog-item mb-35">
                                        <div class="h2_blog-img w_img mb-25">
                                            <a href="blog-5-kesalahan.php"><img
                                                    src="assets/images/blog/innerPage/false.png"
                                                    alt="Image Not Found"></a>
                                        </div>
                                        <div class="h2_blog-content">
                                            <div class="h2_blog-content-meta">
                                                <span><a href="#">Ai</a></span>
                                                <span><i class="fa-light fa-calendar-days"></i>June 18, 2024</span>
                                            </div>
                                            <h4 class="h2_blog-content-title">
                                                <a href="blog-5-kesalahan.php">5 Kesalahan UMKM Saat Menggunakan
                                                    Teknologi
                                                    dan Cara Menghindarinya</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- blog area end -->
                </main>

                <!-- footer area start -->
                <?php include './partials/footer.php' ?>
                <!-- footer area end -->

            </div>
        </div>
    </div>

    <!-- jQuery Js -->
    <?php include './partials/script.php' ?>

</body>

</html>