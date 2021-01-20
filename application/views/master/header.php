<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/debly.png">
    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">

    <!-- icons - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/fontawesome-all.css">

    <!-- slider & carousel - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">

    <!-- animation - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/splitting.css">

    <!-- magnific popup - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/magnific-popup.css">

    <!-- custom - css include -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">

</head>


<body class="home_digital_marketing">


    <div class="body_wrap">


        <!-- backtotop - start -->
        <div id="thetop"></div>
        <div id="backtotop">
            <a href="#" id="scroll">
                <i class="fal fa-arrow-up"></i>
                <i class="fal fa-arrow-up"></i>
            </a>
        </div>
        <!-- backtotop - end -->

        <!-- header_section - start
            ================================================== -->
        <?php if ($id == 1) { ?>
        <header id="header_section" class="header_section sticky_header d-flex align-items-center clearfix">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-md-12">
                        <div class="brand_logo">
                            <a href="<?= base_url() ?>" class="brand_link">
                                <!-- Logo Petama -->
                                <img src="<?= base_url() ?>assets/images/logo/debly-name.png" width="150"
                                    alt="logo_not_found">
                                <!-- Logo Kedua -->
                                <img src="<?= base_url() ?>assets/images/logo/debly-name.png" width="150"
                                    alt="logo_not_found">
                            </a>
                            <button type="button" class="menu_btn">
                                <i class="fal fa-bars"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <nav class="main_menu ul_li_center clearfix">
                            <ul class="clearfix">
                                <li class="active menu_item_has_child">
                                    <a href="<?= base_url() ?>">Beranda</a>
                                </li>
                                <li class="menu_item_has_child">
                                    <a href="<?= base_url() ?>singkat">Histori
                                        Tautan</a>
                                </li>
                                <li class=" menu_item_has_child">
                                    <a href="#">Layanan Lain</a>
                                    <ul class="submenu">
                                        <li><a href="">Youtube Converter (<i>Maintenance</i>)</a></li>
                                        <li><a href="">Twibbon Maker (<i>Maintenance</i>)</a></li>
                                    </ul>

                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-2 col-md-12">
                        <a href="<?= base_url() ?>login" class="btn bg_default_brinjal float-right">Masuk</a>
                    </div>
                </div>
        </header>
        <?php } else if ($id == 0) { ?>
        <header id="header_section" class="header_section text-white sticky_header d-flex align-items-center clearfix">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-md-12">
                        <div class="brand_logo">
                            <a href="<?= base_url() ?>" class="brand_link">
                                <!-- Logo Petama -->
                                <img src="<?= base_url() ?>assets/images/logo/debly-name-1.png" width="150"
                                    alt="logo_not_found">
                                <!-- Logo Kedua -->
                                <img src="<?= base_url() ?>assets/images/logo/debly-name.png" width="150"
                                    alt="logo_not_found">
                            </a>
                            <button type="button" class="menu_btn">
                                <i class="fal fa-bars"></i>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <nav class="main_menu ul_li_center clearfix">
                            <ul class="clearfix">
                                <li class="menu_item_has_child">
                                    <a href="<?= base_url() ?>">Beranda</a>
                                </li>
                                <li class="menu_item_has_child">
                                    <a href="<?= base_url() ?>singkat">Histori
                                        Tautan</a>
                                </li>
                                <li class="menu_item_has_child">
                                    <a href="#">Layanan Lain</a>
                                    <ul class="submenu">
                                        <li><a href="">Youtube Converter (<i>Maintenance</i>)</a></li>
                                        <li><a href="">Twibbon Maker (<i>Maintenance</i>)</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-2 col-md-12">
                        <a href="<?= base_url() ?>login" class="btn btn_border border_white float-right">Masuk</a>
                    </div>
                </div>
        </header>
        <?php } ?>
        <!-- mobile sidebar menu - start -->
        <div class="sidebar-menu-wrapper">
            <div id="mobile_menu" class="mobile_menu">

                <div class="brand_logo mb-50 clearfix">
                    <a href="<?= base_url() ?>" class="brand_link">
                        <img src="<?= base_url() ?>assets/images/logo/debly.png" width="65" alt="logo_not_found">
                    </a>
                    <span class="close_btn"><i class="fal fa-times"></i></span>
                </div>

                <div class="mobile_menu_dropdown menu_list ul_li_block mp_balancing mb-50 clearfix">
                    <ul class="clearfix">
                        <li>
                            <a href="<?= base_url() ?>">Beranda</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>singkat">Histori
                                Tautan</a>
                        </li>

                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Layanan
                                Lain</a>
                            <ul class="dropdown-menu">
                                <li><a href="">Youtube Converter (<i>Maintenance</i>)</a></li>
                                <li><a href="">Twibbon Maker (<i>Maintenance</i>)</a></li>
                        </li>
                    </ul>
                </div>

                <a href="<?= base_url() ?>login" class="btn bg_default_blue">Masuk</a>

            </div>
            <div class="overlay"></div>
        </div>
        <!-- mobile sidebar menu - end -->

        <!-- header_section - end
			================================================== -->