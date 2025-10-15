<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php' ?>

<body>

    <!-- Cursor start -->
    <<?php include './partials/cursor_start.php' ?> <!-- Cursor end -->

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
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M13.026 15C13.026 12.291 10.331 10.1 7.013 10.1C3.695 10.1 1 12.291 1 15"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round" />
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
                                                    <li class="menu-has-child">
                                                        <a href="index.php">Home</a>

                                                    </li>
                                                    <li><a href="about.php">About CORE</a></li>

                                                    <li class="menu-has-child">
                                                        <a href="shop.php">Shop</a>

                                                    </li>
                                                    <li class="menu-has-child">
                                                        <a href="blog.php">Blog</a>

                                                    </li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-8">
                                        <div
                                            class="h5_header-action-wrap d-flex align-items-center justify-content-end">
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
                        <?php $subTitle = "Cart" ?>
                        <!-- breadcrumb area start -->
                        <?php include './partials/breadcrumb.php' ?>
                        <!-- breadcrumb area end -->

                        <!-- cart area (products removed - using pricing list below) -->

                        <!-- cart area end -->
                        <!-- pricing area start (list with icons) -->
                        <section class="price-area price-tab pt-40 pb-80">
                            <div class="container">
                                <div class="inner_section-area text-center mb-40">
                                    <h2 class="inner_section-title mb-0 tp_title_slideup">Pilih Paket</h2>
                                </div>

                                <div class="table-responsive cart-wrap mb-60">
                                    <table class="table cart-table tp_fade_bottom price-list-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="first">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col" class="end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product">
                                                    <img src="assets/images/shop/common/cirrus.png" alt="Standard"
                                                        style="width:64px;height:64px;object-fit:cover;border-radius:8px;">
                                                    <h6>Standard Plan <p class="mb-0 small text-muted">Paket
                                                            Implementasi Lengkap</p>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6><del class="text-muted">Rp 3Jt</del> <span class="d-block">Rp
                                                            2Jt <small class="text-success">(33% off)</small></span>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <a class="price-item-btn" href="#">Pilih Paket</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product">
                                                    <img src="assets/images/shop/common/discover.png" alt="UMKM"
                                                        style="width:64px;height:64px;object-fit:cover;border-radius:8px;">
                                                    <h6>UMKM Professional <p class="mb-0 small text-muted">Paket
                                                            Implementasi + Setup</p>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6><del class="text-muted">Rp 6Jt</del> <span class="d-block">Rp
                                                            4Jt <small class="text-success">(-33%)</small></span></h6>
                                                </td>
                                                <td>
                                                    <a class="price-item-btn" href="#">Pilih Paket</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product">
                                                    <img src="assets/images/shop/common/shop-details.png"
                                                        alt="Enterprise"
                                                        style="width:64px;height:64px;object-fit:cover;border-radius:8px;">
                                                    <h6>Corporate Enterprise <p class="mb-0 small text-muted">Paket
                                                            Enterprise Lengkap</p>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6><del class="text-muted">Rp 10Jt</del> <span class="d-block">Rp
                                                            7Jt <small class="text-success">(-30%)</small></span></h6>
                                                </td>
                                                <td>
                                                    <a class="price-item-btn" href="#">Hubungi Sales</a>
                                                </td>
                                            </tr>

                                            <!-- maintenance header row -->
                                            <tr>
                                                <td colspan="3"><strong>Maintenance Packages</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="product">
                                                    <img src="assets/images/shop/common/admin-1.png" alt="Starter"
                                                        style="width:64px;height:64px;object-fit:cover;border-radius:8px;">
                                                    <h6>Starter Maintenance <p class="mb-0 small text-muted">/Bulan
                                                            maintenance dasar</p>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6>Rp 400rb</h6>
                                                </td>
                                                <td>
                                                    <a class="price-item-btn" href="#">Pilih Paket</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product">
                                                    <img src="assets/images/shop/common/admin-2.png" alt="Professional"
                                                        style="width:64px;height:64px;object-fit:cover;border-radius:8px;">
                                                    <h6>Professional Maintenance <p class="mb-0 small text-muted">/Bulan
                                                            maintenance professional</p>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6>Rp 800rb <span class="badge bg-primary ms-2">Most Popular</span>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <a class="price-item-btn" href="#">Pilih Paket</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product">
                                                    <img src="assets/images/shop/common/admin-3.png" alt="Enterprise"
                                                        style="width:64px;height:64px;object-fit:cover;border-radius:8px;">
                                                    <h6>Enterprise Maintenance <p class="mb-0 small text-muted">/Bulan
                                                            maintenance enterprise</p>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6>Rp 1.5jt</h6>
                                                </td>
                                                <td>
                                                    <a class="price-item-btn" href="#">Pilih Paket</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <!-- pricing area end -->

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