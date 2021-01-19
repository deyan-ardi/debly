<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo/debly.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url() ?>assets/css/dashboard.css" rel="stylesheet" />
</head>

<body id="body" data-id="<?= $id ?>">
    <div class="wrapper">
        <div class="sidebar" data-image="<?= base_url() ?>assets/images/dashboard/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        <?= ucfirst($group[0]['first_name']); ?>
                    </a>
                </div>
                <ul class="nav">
                    <?php if ($nav == 1) { ?>
                    <li class="nav-item active">
                        <?php } else { ?>
                    <li class="nav-item">
                        <?php } ?>
                        <a class="nav-link" href="<?=base_url()?>user/dashboard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <?php if ($nav == 2) { ?>
                    <li class="nav-item active">
                        <?php } else { ?>
                    <li class="nav-item">
                        <?php } ?>
                        <a class="nav-link" href="<?=base_url()?>user/tautan">
                            <i class="nc-icon nc-notes"></i>
                            <p>Singkat Tautan</p>
                        </a>
                    </li>
                    <?php if ($nav == 3) { ?>
                    <li class="nav-item active">
                        <?php } else { ?>
                    <li class="nav-item">
                        <?php } ?>
                        <a class="nav-link" href="<?= base_url() ?>user/profil">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Profil Pengguna</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url() ?>auth/logout">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Keluar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">