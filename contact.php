<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php' ?>

<body>

    <!-- Cursor start -->
    <?php include './partials/Cursor_start.php' ?>
    <!-- Cursor end -->

    <!-- back to top start -->
    <?php include './partials/back_to_start.php' ?>
    <!-- back to top end -->

    <!-- modal-search-start -->
    <?php include './partials/modal-search-start.php' ?>
    <!-- modal-search-end -->

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
                    <?php $subTitle = 'Contacts' ?>
                    <!-- breadcrumb area start -->
                    <?php include './partials/breadcrumb.php' ?>
                    <!-- breadcrumb area end -->

                    <!-- contact area start -->
                    <section class="contact-area pt-140 pb-140">
                        <div class="container">
                            <!-- Header -->
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-7 col-lg-9">
                                    <div class="inner_section-area mb-50 text-center">
                                        <span class="inner_section-subtitle tp_subtitle_anim">LET’S TALK</span>
                                        <h2 class="inner_section-title tp_title_slideup mb-30">
                                            Hubungi tim ahli AI kami<br>untuk konsultasi bisnis Anda.
                                        </h2>
                                        <p>Chat with us.<br><strong>Monday - Sunday, available 24/7</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 Kolom Kontak -->
                            <div class="row">
                                <!-- Chat -->
                                <div class="col-lg-4 col-md-6 mb-30 tp_fade_left" data-fade-from="left">
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-comments"></i></div>
                                        <div class="contact-content">
                                            <h4 class="contact-content-title">Chat with us</h4>
                                            <p>Tersedia 24/7 via WhatsApp & Email</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Call -->
                                <div class="col-lg-4 col-md-6 mb-30 tp_fade_left" data-fade-from="left" data-delay=".4">
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-phone"></i></div>
                                        <div class="contact-content">
                                            <h4 class="contact-content-title">Give us a call</h4>
                                            <a href="tel:+628132551155">+62 813-255-1155</a><br>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-4 col-md-6 mb-30 tp_fade_left" data-fade-from="left" data-delay=".8">
                                    <div class="contact-item">
                                        <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                                        <div class="contact-content">
                                            <h4 class="contact-content-title">Email with us</h4>
                                            <a href="mailto:info@getcore.id">info@getcore.id</a><br>
                                            <a href="mailto:support@getcore.id">support@getcore.id</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Map + Form -->
                            <div class="contact-bottom pt-105">
                                <div class="row">
                                    <!-- Map -->
                                    <div class="col-lg-6">
                                        <div class="contact-bottom-left">
                                            <div class="inner_section-area mb-50">
                                                <span class="inner_section-subtitle tp_subtitle_anim">GET IN
                                                    TOUCH</span>
                                                <h2 class="inner_section-title tp_title_slideup mb-0">
                                                    Connect with & ignite <br> the conversation!
                                                </h2>
                                            </div>
                                            <div class="contact-map tp_fade_right">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.123456789012!2d110.3600000!3d-7.7890000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57b5d6abcdef%3A0x1234567890abcdef!2sJl.%20Polisi%20Istimewa%20No.1a%2C%20Muja%20Muju%2C%20Umbulharjo%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta%2055165!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                <div class="mt-3">
                                                    <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Polisi+Istimewa+No.1a,+Muja+Muju,+Kec.+Umbulharjo,+Kota+Yogyakarta,+Daerah+Istimewa+Yogyakarta+55165"
                                                        target="_blank" rel="noopener noreferrer">Buka di Google
                                                        Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form -->
                                    <div class="col-lg-6 tp_fade_left">
                                        <div class="contact-form mt-40 mt-lg-0">
                                            <h3 class="contact-form-title">Jadwalkan Konsultasi AI Gratis</h3>
                                            <p class="mb-30">Dapatkan konsultasi gratis untuk mengimplementasikan AI
                                                dalam bisnis UMKM Anda.</p>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="contact-form-item mb-25">
                                                            <input type="text" placeholder="Nama Lengkap">
                                                            <i class="fa-light fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                                        <div class="contact-form-item mb-25">
                                                            <input type="email" placeholder="Email Anda">
                                                            <i class="fa-light fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="contact-form-item mb-25">
                                                            <input type="text" placeholder="Nomor WhatsApp">
                                                            <i class="fa-light fa-phone"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="contact-form-item mb-25">
                                                            <textarea name="message"
                                                                placeholder="Ceritakan kebutuhan bisnis Anda"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="contact-form-item pt-10">
                                                            <button type="submit">Kirim Permintaan Konsultasi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- contact area end -->
                </main>

                <!-- footer area start -->
                <?php include './partials/footer.php' ?>
                <!-- footer area end -->

            </div>
        </div>
    </div>


    <!-- jQuery Js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/meanmenu.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/chroma.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/backtotop.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>