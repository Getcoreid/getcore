<head>
    <meta charset="UTF-8">
    <meta name="description" content="html template">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Asad">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GetCore - Solusi AI Terdepan
        untuk Otomasi Bisnis
        Anda</title>

    <link rel="icon" href="assets/images/getcore.png">
    <link rel="apple-touch-icon" href="assets/images/getcore.png">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/backtotop.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <style>
    /* LIST PAKET → centang hijau */
    .price-item-list li {
        position: relative;
        padding-left: 28px;
        list-style: none;
    }

    .price-item-list li::before {
        /* reset semua gaya dot lama */
        width: auto !important;
        height: auto !important;
        background: none !important;
        border: none !important;
        border-radius: 0 !important;
        box-shadow: none !important;
        display: inline-block !important;
        transform: none !important;

        /* ikon centang */
        content: "✔";
        color: #16a34a;
        /* hijau */
        font-weight: 700;
        font-size: 14px;
        line-height: 1;
        position: absolute;
        left: 0;
        top: 0.25em;
        /* sedikit turun agar sejajar teks */
    }

    /* Jika ada item non-tersedia */
    .price-item-list li.not-abatable::before {
        content: "✖";
        color: #94a3b8;
        /* abu-abu */
        font-weight: 600;
    }

    /* Beberapa tema menambah ::after – kita matikan saja */
    .price-item-list li::after {
        content: none !important;
    }
    </style>

    <style>
    :root {
        --header-offset: 96px;
    }
    </style>

    <style>
    html {
        scroll-behavior: smooth;
    }

    /* sesuaikan 90px dengan tinggi header sticky kamu */
    #paket-ai {
        scroll-margin-top: 90px;
    }
    </style>

    <style>
    /* Warna bintang emas */
    .testimonial-rating i.fa-star {
        color: #f59e0b;
    }

    /* amber-500 */

    /* Rapikan kartu */
    .testimonial-item {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(2, 6, 23, .06);
        padding: 24px;
    }

    .testimonial-head {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 10px;
    }

    .testimonial-head-img img {
        width: 44px;
        height: 44px;
        border-radius: 9999px;
        object-fit: cover;
    }

    /* Subjudul kapsul "TESTIMONI KLIEN" */
    .section-subtitle {
        display: inline-block;
        padding: 8px 16px;
        background: #f1ebff;
        border-radius: 999px;
        font-weight: 600;
        color: #6b4ce6;
    }
    </style>
    <style>
    .blog_details-comment,
    .blog_details-comment-item,
    .comments-area {
        display: none !important;
    }
    </style>

</head>