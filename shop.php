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
                    <?php $subTitle = 'Shop' ?>
                    <!-- breadcrumb area start -->
                    <?php include './partials/breadcrumb.php' ?>
                    <!-- breadcrumb area end -->

                    <!-- price area start -->
                    <section id="paket-ai" class="price-area price-tab pt-140 pb-140">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-10">
                                    <div class="section-area text-center mb-45">
                                        <span class="section-subtitle tp_fade_left">Paket Harga
                                        </span>
                                        <h2
                                            class="section-title tp_title_slideup mb-0 section-title tp_title_slideup-big">
                                            Paket AI Terjangkau untuk
                                            UMKM Indonesia</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="price-switch-wrapper">
                                        <label class="toggler toggler--is-active" id="filt-monthly">Paket
                                            Implementasi</label>
                                        <div class="toggle">
                                            <input type="checkbox" id="switcher" class="tp-check">
                                            <b class="switch"></b>
                                        </div>
                                        <label class="toggler yearly-pack" id="filt-yearly">Paket
                                            Maintenance<span class="amount-offer">Opsional</span></label>
                                    </div>
                                </div>
                            </div>
                            <div id="monthly" class="wrapper-full">
                                <div class="row align-items-end">
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left">
                                        <div class="price-item price-item-1">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Konsultasi Gratis</h5>
                                                </h5>
                                                <h2 class="price-item-amount-title">Gratis</h2>
                                                <p>Tanpa biaya tersembunyi

                                                </p>
                                                <div>
                                                    <a class="price-item-btn"
                                                        href="https://wa.me/628132551155?text=Halo%20CORE,%20saya%20ingin%20mulai%20konsultasi%20AI."
                                                        target="_blank" rel="noopener noreferrer">
                                                        Mulai Konsultasi <i class="fa-light fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>Konsultasi AI strategy untuk UMKM</li>
                                                <li>Demo aplikasi AI</li>
                                                <li class="not-abatable">Analysis kebutuhan bisnis</li>
                                                <li class="not-abatable">Roadmap implementasi AI</li>
                                                <li class="not-abatable">Support via WhatsApp</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left"
                                        data-delay=".8">
                                        <div class="price-item active">
                                            <div class="price-item-option">
                                                <span>Paling Populer</span>
                                            </div>
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Standard Plan</h5>
                                                <div class="price-item-amount"><del>Rp 3Jt</del>
                                                    <h2 class="price-item-amount-title">Rp 2Jt</h2><span
                                                        class="amount-offer">33%</span>
                                                </div>
                                                <p>Paket Implementasi Lengkap</p>
                                                <span class="price-item-offer">Sudah include training
                                                </span>
                                                <div>
                                                    <a class="price-item-btn"
                                                        href="https://wa.me/628132551155?text=Halo%20CORE,%20saya%20ingin%20mulai%20konsultasi%20AI."
                                                        target="_blank" rel="noopener">
                                                        Pilih Paket <i class="fa-light fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <ul class="price-item-list">
                                                <li>AI Chatbot untuk customer service</li>
                                                <li>Otomasi inventory management</li>
                                                <li>Analytics dashboard</li>
                                                <li class="not-abatable">Training & onboarding</li>
                                                <li class="not-abatable">Support WhatsApp 24/7</li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left"
                                        data-delay="1.1">
                                        <div class="price-item">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">UMKM Professional</h5>

                                                <div class="price-item-amount">
                                                    <del>Rp 6Jt</del>
                                                    <h2 class="price-item-amount-title">Rp 4Jt</h2>
                                                    <span class="amount-offer">-33%</span>
                                                </div>

                                                <p>Paket Implementasi + Setup</p>
                                                <span class="price-item-offer">Include custom integration</span>

                                                <div>
                                                    <a class="price-item-btn"
                                                        href="https://wa.me/628132551155?text=Halo%20CORE,%20saya%20ingin%20mulai%20konsultasi%20AI."
                                                        target="_blank" rel="noopener">
                                                        Pilih Paket <i class="fa-light fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <ul class="price-item-list">
                                                <li>Semua fitur UMKM Starter</li>
                                                <li>Advanced AI automation</li>
                                                <li>Multi-platform integration</li>
                                                <li>Predictive analytics</li>
                                                <li class="not-abatable">Dedicated account manager</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 tp_fade_left" data-fade-from="left"
                                        data-delay="1.4">
                                        <div class="price-item">
                                            <div class="price-item-head">
                                                <h5 class="price-item-title">Corporate Enterprise</h5>

                                                <div class="price-item-amount">
                                                    <del>Rp 10Jt</del>
                                                    <h2 class="price-item-amount-title">Rp 7Jt</h2>
                                                    <span class="amount-offer">-30%</span>
                                                </div>

                                                <p>Paket Enterprise Lengkap</p>
                                                <span class="price-item-offer">Include 6 bulan support</span>

                                                <a class="price-item-btn"
                                                    href="https://wa.me/628132551155?text=Halo%20CORE,%20saya%20ingin%20hubungi%20sales%20untuk%20Corporate%20Enterprise.%20Mohon%20informasi%20lengkapnya."
                                                    target="_blank" rel="noopener noreferrer">
                                                    Hubungi Sales <i class="fa-light fa-angle-right"></i>
                                                </a>
                                            </div>

                                            <ul class="price-item-list">
                                                <li>Semua fitur Professional</li>
                                                <li>Custom AI model training</li>
                                                <li>White-label solution</li>
                                                <li>API access & integrations</li>
                                                <li>On-premise deployment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="hourly" class="wrapper-full hide">
                                <div class="row justify-content-center align-items-stretch g-4">
                                    <!-- Starter -->
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="price-item h-100">
                                            <div class="price-item-head text-center">
                                                <h5 class="price-item-title">Starter Maintenance</h5>

                                                <div class="price-item-amount">
                                                    <h2 class="price-item-amount-title">Rp 400rb</h2>
                                                </div>

                                                <p>/Bulan maintenance dasar</p>

                                                <a class="price-item-btn"
                                                    href="https://wa.me/628132551155?text=Halo%20CORE,%20saya%20minat%20Starter%20Maintenance.%20Mohon%20detailnya."
                                                    target="_blank" rel="noopener noreferrer">
                                                    Pilih Paket <i class="fa-light fa-angle-right"></i>
                                                </a>
                                            </div>

                                            <ul class="price-item-list">
                                                <li>Bug fixes &amp; security patches</li>
                                                <li>Monthly system updates</li>
                                                <li>Email support (48 jam)</li>
                                                <li>Basic performance monitoring</li>
                                                <li>Monthly backup (1x/bulan)</li>
                                                <li class="not-abatable">WhatsApp support</li>
                                                <li class="not-abatable">Custom integration support</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Professional (Most Popular) -->
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="price-item active h-100">
                                            <div class="price-item-option"><span>Most Popular</span></div>

                                            <div class="price-item-head text-center">
                                                <h5 class="price-item-title">Professional Maintenance</h5>

                                                <div class="price-item-amount">
                                                    <h2 class="price-item-amount-title">Rp 800rb</h2>
                                                </div>

                                                <p>/Bulan maintenance professional</p>

                                                <a class="price-item-btn"
                                                    href="https://wa.me/628132551155?text=Halo%20CORE,%20saya%20minat%20Professional%20Maintenance.%20Mohon%20detailnya."
                                                    target="_blank" rel="noopener noreferrer">
                                                    Pilih Paket <i class="fa-light fa-angle-right"></i>
                                                </a>
                                            </div>

                                            <ul class="price-item-list">
                                                <li>Semua fitur Starter Maintenance</li>
                                                <li>Priority email support (24 jam)</li>
                                                <li>WhatsApp support (jam kerja)</li>
                                                <li>Weekly backup (4x/bulan)</li>
                                                <li>Advanced performance monitoring</li>
                                                <li>Minor feature updates</li>
                                                <li>Database optimization (monthly)</li>
                                                <li class="not-abatable">24/7 phone support</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Enterprise -->
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="price-item h-100">
                                            <div class="price-item-head text-center">
                                                <h5 class="price-item-title">Enterprise Maintenance</h5>

                                                <div class="price-item-amount">
                                                    <h2 class="price-item-amount-title">Rp 1.5jt</h2>
                                                </div>

                                                <p>/Bulan maintenance enterprise</p>

                                                <a class="price-item-btn"
                                                    href="https://wa.me/628132551155?text=Halo%20CORE,%20saya%20minat%20Enterprise%20Maintenance.%20Mohon%20detailnya."
                                                    target="_blank" rel="noopener noreferrer">
                                                    Pilih Paket <i class="fa-light fa-angle-right"></i>
                                                </a>
                                            </div>

                                            <ul class="price-item-list">
                                                <li>Semua fitur Professional Maintenance</li>
                                                <li>24/7 phone &amp; WhatsApp support</li>
                                                <li>Daily backup (30x/bulan)</li>
                                                <li>Real-time monitoring &amp; alerts</li>
                                                <li>Custom integration support</li>
                                                <li>Dedicated account manager</li>
                                                <li>SLA guarantee (99.9% uptime)</li>
                                                <li>Emergency hotfix deployment</li>
                                                <li>Quarterly strategy consultation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- price area end -->
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