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
    <?php include './partials/sidebar_information.php' ?>
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
                    <?php $subTitle = 'About CORE' ?>
                    <!-- breadcrumb area start -->
                    <?php include './partials/breadcrumb.php' ?>
                    <!-- breadcrumb area end -->

                    <!-- about area start -->
                    <section class="h2_about-area pt-140 pb-100">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="h2_about-img mb-40">
                                        <img src="assets/images/about/home2/bg.png" alt="Image Not Found"
                                            class="inner-img-1 tp_fade_right">
                                        <img src="assets/images/about/home2/bg-2.png" alt="Image Not Found"
                                            class="inner-img-2 tp_fade_bottom">
                                        <img src="assets/images/about/home2/shape.png" alt="Image Not Found"
                                            class="inner-img-shape">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="h2_about-content mb-40">
                                        <div class="inner_section-area mb-40">
                                            <span class="inner_section-subtitle tp_subtitle_anim">About CORE</span>
                                            <h2
                                                class="inner_section-title tp_title_slideup inner_section-title tp_title_slideup-big mb-25">
                                                Tentang Getcore
                                            </h2>
                                            <p class="inner_section-text tp_fade_bottom">
                                                CORE adalah platform AI modern yang dikembangkan oleh Getcore untuk
                                                membantu bisnis dan UMKM bertransformasi secara digital. Kami
                                                menyediakan solusi chatbot, automasi, analitik, dan integrasi
                                                multi-platform yang mudah digunakan dan scalable.
                                            </p>
                                            <p class="inner_section-text mt-10 tp_fade_bottom">
                                                Getcore berkomitmen menghadirkan teknologi AI yang relevan, aman, dan
                                                terjangkau untuk semua kalangan. Dengan tim ahli dan dukungan 24/7, kami
                                                siap menjadi mitra digital Anda dalam meningkatkan efisiensi, pelayanan,
                                                dan pertumbuhan bisnis.
                                            </p>
                                        </div>
                                        <a href="#" class="theme-btn-2 tp_fade_bottom">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- about area end -->

                    <!-- assistant area start -->
                    <section class="h4_assistant-area">
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-xl-6">
                                    <div class="h4_assistant-wrap">
                                        <ul class="nav nav-tabs h4_assistant-top" id="myTab" role="tablist">
                                            <li class="nav-item tp_has_fade_anim" data-fade-from="bottom"
                                                role="presentation">
                                                <a href="#" class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home-tab-pane" role="tab"
                                                    aria-controls="home-tab-pane" aria-selected="true">01. Solusi
                                                    Chatbot</a>
                                            </li>
                                            <li class="nav-item tp_has_fade_anim" data-fade-from="bottom"
                                                data-delay=".8" role="presentation">
                                                <a href="#" class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile-tab-pane" role="tab"
                                                    aria-controls="profile-tab-pane" aria-selected="false">02. Track
                                                    Analytics</a>
                                            </li>
                                            <li class="nav-item tp_has_fade_anim" data-fade-from="bottom"
                                                data-delay="1.1" role="presentation">
                                                <a href="#" class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#contact-tab-pane" role="tab"
                                                    aria-controls="contact-tab-pane" aria-selected="false">03. Dukungan
                                                    Bahasa</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">
                                                <div class="h4_assistant-content">
                                                    <h3 class="h4_assistant-content-title tp_has_text_reveal_anim">
                                                        Solusi Analitik CORE untuk Keputusan Tepat.</h3>
                                                    <p class="tp_fade_bottom">CORE membantu UMKM memantau performa dan
                                                        membuat keputusan berbasis data melalui dashboard analitik yang
                                                        sederhana dan informatif.</p>
                                                    <a href="#" class="tp_fade_bottom"><img
                                                            src="assets/images/assistant/home4/search.png" alt="">Mulai
                                                        Sekarang<i class="fa-light fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                aria-labelledby="profile-tab" tabindex="0">
                                                <div class="h4_assistant-content">
                                                    <h3 class="h4_assistant-content-title tp_has_text_reveal_anim">
                                                        Solusi Analitik CORE untuk Keputusan Tepat.</h3>
                                                    <p class="tp_fade_bottom">CORE membantu UMKM memantau performa dan
                                                        membuat keputusan berbasis data melalui dashboard analitik yang
                                                        sederhana dan informatif.</p>
                                                    <a href="#" class="tp_fade_bottom"><img
                                                            src="assets/images/assistant/home4/search.png" alt="">Mulai
                                                        Sekarang<i class="fa-light fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                                aria-labelledby="contact-tab" tabindex="0">
                                                <div class="h4_assistant-content">
                                                    <h3 class="h4_assistant-content-title tp_has_text_reveal_anim">
                                                        Solusi Analitik CORE untuk Keputusan Tepat.</h3>
                                                    <p class="tp_fade_bottom">CORE membantu UMKM memantau performa dan
                                                        membuat keputusan berbasis data melalui dashboard analitik yang
                                                        sederhana dan informatif.</p>
                                                    <a href="#" class="tp_fade_bottom"><img
                                                            src="assets/images/assistant/home4/search.png" alt="">Mulai
                                                        Sekarang<i class="fa-light fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="h4_assistant-img bg-default"
                                        data-background="assets/images/assistant/home4/bg.png">
                                        <img src="assets/images/assistant/home4/1.png" alt="" class="tp_fade_left">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- assistant area end -->

                    <!-- feature area start -->
                    <section class="inner_feature-area pt-140 pb-140">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-5 col-md-6">
                                    <div class="inner_feature-content mb-50 mb-md-0">
                                        <div class="inner_section-area mb-20">
                                            <span class="inner_section-subtitle tp_subtitle_anim">Keunggulan</span>
                                            <h2 class="inner_section-title tp_title_slideup mb-30">
                                                Keunggulan CORE untuk Bisnis Anda</h2>
                                            <p class="inner_section-text tp_fade_bottom">We've done it carefully and
                                                simply. Combined with the ingredients makes for beautiful landings.</p>
                                        </div>
                                        <ul class="inner_feature-content-list tp_fade_bottom">
                                            <li>Integrasi Mudah</li>
                                            <li>Otomasi Cerdas</li>
                                            <li>Keamanan Terjamin</li>
                                        </ul>
                                        <a href="#" class="theme-btn-2 tp_fade_bottom">Pelajari Lebih Lanjut</a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6">
                                    <div class="inner_feature-img tp_fade_left">
                                        <img src="assets/images/feature/innerPage/1.png" alt="Image Not Found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- feature area end -->

                    <!-- faq area start -->
                    <section class="h3_faq-area pt-135 pb-110">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-7">
                                    <div class="inner_section-area text-center mb-50">
                                        <h2 class="inner_section-title tp_title_slideup mb-0">Pertanyaan yang Sering
                                            Diajukan
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="h3_faq-wrap">
                                <div class="h3_faq-content">
                                    <div class="accordion" id="Expp">
                                        <div class="row">
                                            <div class="col-xl-6 tp_has_fade_anim" data-fade-from="bottom">
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">Apakah CORE
                                                            bisa menulis konten panjang?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#Expp">
                                                        <div class="accordion-body">CORE menyediakan generator konten
                                                            berbasis AI yang dapat membantu membuat outline hingga
                                                            artikel panjang. Hasilnya tetap bisa diedit sesuai gaya
                                                            brand Anda.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">Apa itu
                                                            platform CORE?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#Expp">
                                                        <div class="accordion-body">CORE adalah platform AI untuk UMKM:
                                                            chatbot, otomasi, analitik, dan integrasi multi‑platform
                                                            untuk membantu operasi harian lebih efisien.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false"
                                                            aria-controls="collapseThree">Bagaimana alur kerja AI di
                                                            CORE?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#Expp">
                                                        <div class="accordion-body">Data Anda diproses aman; model
                                                            memanfaatkan prompt, aturan, dan integrasi sistem untuk
                                                            menghasilkan respons/analitik sesuai konteks bisnis.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 tp_has_fade_anim" data-fade-from="bottom"
                                                data-delay=".8">
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                            aria-expanded="false" aria-controls="collapseFour">Bagaimana
                                                            AI berdampak pada operasional bisnis?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFour" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFour" data-bs-parent="#Expp">
                                                        <div class="accordion-body">AI membantu otomasi tugas berulang
                                                            (FAQ, admin, ringkas laporan) sehingga tim fokus pada
                                                            keputusan strategis dan pelayanan pelanggan.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingFive">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseFive">Bahasa
                                                            apa saja yang didukung?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseFive" class="accordion-collapse collapse"
                                                        aria-labelledby="headingFive" data-bs-parent="#Expp">
                                                        <div class="accordion-body">CORE mendukung multi‑bahasa termasuk
                                                            Indonesia dan Inggris. Ketersediaan bahasa lain dapat
                                                            disesuaikan sesuai kebutuhan.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingSix">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                            aria-expanded="false" aria-controls="collapseSix">Apa
                                                            manfaat utama AI untuk UMKM?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSix" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSix" data-bs-parent="#Expp">
                                                        <div class="accordion-body">Peningkatan efisiensi, biaya
                                                            operasional lebih rendah, layanan pelanggan lebih cepat, dan
                                                            insight data untuk keputusan yang lebih baik.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item mb-30">
                                                    <h2 class="accordion-header" id="headingSeven">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                                            aria-expanded="false" aria-controls="collapseSeven">Apakah
                                                            CORE bisa menulis konten panjang?
                                                        </button>
                                                    </h2>
                                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                                        aria-labelledby="headingSeven" data-bs-parent="#Expp">
                                                        <div class="accordion-body">Ya, dengan fitur penulisan konten,
                                                            CORE dapat membantu membuat artikel panjang; Anda tetap
                                                            mengkurasi hasil akhir.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- faq area end -->

                    <!-- testimonial area start -->
                    <section class="testimonial-area pb-40 fix">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <div class="section-area text-center">
                                        <span class="section-subtitle tp_fade_left">TESTIMONI KLIEN</span>
                                        <h2 class="section-title tp_title_slideup mb-0">CORE Dipercaya oleh 30+ UMKM di
                                            Indonesia</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slider utama -->
                        <div class="testimonial-active swiper pb-60 pt-20 tp_has_fade_anim" data-fade-from="bottom">
                            <div class="swiper-wrapper roll-slider">

                                <!-- 1 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-head">
                                            <div class="testimonial-head-img">
                                                <img src="assets/images/testimonial/andi-pratama.jpg"
                                                    alt="Foto klien: Andi Pratama">
                                            </div>
                                            <div class="testimonial-head-info">
                                                <h6>Andi Pratama</h6>
                                                <span>Pemilik Coffee Shop • Jakarta</span>
                                            </div>
                                        </div>
                                        <ul class="testimonial-rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p>Platform analytics CORE memberi insight customer yang detail. Implementasi
                                            mudah, support via WhatsApp cepat sekali!</p>
                                    </div>
                                </div>

                                <!-- 2 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-head">
                                            <div class="testimonial-head-img">
                                                <img src="assets/images/testimonial/ratna-dewi.jpg"
                                                    alt="Foto klien: Ratna Dewi">
                                            </div>
                                            <div class="testimonial-head-info">
                                                <h6>Ratna Dewi</h6>
                                                <span>Pemilik Toko Online • Fashion</span>
                                            </div>
                                        </div>
                                        <ul class="testimonial-rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p>Recommendation system dari CORE menaikkan cross-selling hingga 200%.
                                            Personalisasi bikin pelanggan makin puas.</p>
                                    </div>
                                </div>

                                <!-- 3 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-head">
                                            <div class="testimonial-head-img">
                                                <img src="assets/images/testimonial/sari-wijaya.png"
                                                    alt="Foto klien: Sari Wijaya">
                                            </div>
                                            <div class="testimonial-head-info">
                                                <h6>Sari Wijaya</h6>
                                                <span>Owner Warung Makan Keluarga</span>
                                            </div>
                                        </div>
                                        <ul class="testimonial-rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p>CORE membantu kami otomasi inventory & prediksi stok. Admin hemat 5 jam kerja
                                            per hari—nggak pernah kehabisan bahan lagi.</p>
                                    </div>
                                </div>

                                <!-- 4 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-head">
                                            <div class="testimonial-head-img">
                                                <img src="assets/images/testimonial/budi-santoso.jpg"
                                                    alt="Foto klien: Budi Santoso">
                                            </div>
                                            <div class="testimonial-head-info">
                                                <h6>Budi Santoso</h6>
                                                <span>Direktur Operasional • CV Sejahtera</span>
                                            </div>
                                        </div>
                                        <ul class="testimonial-rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p>Sejak pakai CORE, produktivitas naik 150%. Customer service 24/7 tanpa perlu
                                            tambah staff. Timnya responsif!</p>
                                    </div>
                                </div>

                                <!-- 5 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-head">
                                            <div class="testimonial-head-img">
                                                <img src="assets/images/testimonial/maya-indah.png"
                                                    alt="Foto klien: Maya Putri">
                                            </div>
                                            <div class="testimonial-head-info">
                                                <h6>Maya Putri</h6>
                                                <span>Founder • Studio Kreatif</span>
                                            </div>
                                        </div>
                                        <ul class="testimonial-rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p>Chatbot CORE mengurangi tiket email 60%. Integrasinya lancar ke website &
                                            WhatsApp bisnis kami.</p>
                                    </div>
                                </div>

                                <!-- 6 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-head">
                                            <div class="testimonial-head-img">
                                                <img src="assets/images/testimonial/bambang-hermawan.jpg"
                                                    alt="Foto klien: Dimas Hakim">
                                            </div>
                                            <div class="testimonial-head-info">
                                                <h6>Dimas Hakim</h6>
                                                <span>Owner • Distribusi Sembako</span>
                                            </div>
                                        </div>
                                        <ul class="testimonial-rating">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <p>Forecast permintaan dari CORE bikin stok lebih presisi. Loss karena
                                            kadaluarsa turun drastis.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- testimonial area end -->


                    <!-- blog area start -->
                    <section class="h2_blog-area pb-140">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6">
                                    <div class="inner_section-area text-center mb-50">
                                        <span class="inner_section-subtitle tp_subtitle_anim">Blog Kami</span>
                                        <h2
                                            class="inner_section-title tp_title_slideup mb-0 inner_section-title tp_title_slideup-big">
                                            Tulisan Terbaru</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left">
        <div class="blog-item mb-30">
            <div class="blog-img">
                <a href="blog-trend-ai.php"><img src="assets/images/blog/innerPage/ai-trend.png" alt=""></a>
            </div>
            <div class="blog-content">
                <div class="blog-content-meta">
                    <a href="#">Creative</a>
                    <span><i class="fa-light fa-calendar-days"></i>September 18, 2025</span>
                </div>
                <h4 class="blog-content-title">
                    <a href="blog-trend-ai.php">Tren Teknologi AI 2025: Peluang untuk UMKM Indonesia</a>
                </h4>
                <a href="blog-trend-ai.php" class="blog-content-btn">Pelajari Lebih Lanjut<i class="fa-light fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay=".8">
        <div class="blog-item mb-30">
            <div class="blog-img">
                <a href="blog-auto-wflow.php"><img src="assets/images/blog/innerPage/flow.jpeg" alt=""></a>
            </div>
            <div class="blog-content">
                <div class="blog-content-meta">
                    <a href="#">Animation</a>
                    <span><i class="fa-light fa-calendar-days"></i>June 18, 2024</span>
                </div>
                <h4 class="blog-content-title">
                    <a href="blog-auto-wflow.php">Platform Automasi Workflow yang Fleksibel dan Open Source</a>
                </h4>
                <a href="blog-auto-wflow.php" class="blog-content-btn">Pelajari Lebih Lanjut<i class="fa-light fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-6 tp_fade_left" data-fade-from="left" data-delay="1.1">
        <div class="blog-item mb-30">
            <div class="blog-img">
                <a href="blog-etika-ai.php"><img src="assets/images/blog/innerPage/etika.png" alt=""></a>
            </div>
            <div class="blog-content">
                <div class="blog-content-meta">
                    <a href="#">Creative</a>
                    <span><i class="fa-light fa-calendar-days"></i>April 18, 2024</span>
                </div>
                <h4 class="blog-content-title">
                    <a href="blog-etika-ai.php">Etika AI: Tantangan dan Solusi di Era Digital</a>
                </h4>
                <a href="blog-etika-ai.php" class="blog-content-btn">Pelajari Lebih Lanjut<i class="fa-light fa-angle-right"></i></a>
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

