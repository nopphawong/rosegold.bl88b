<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <?php
    $uri = \Config\Services::uri();
    $request = \Config\Services::request();
    ?>
    <?php if (trim($uri->getPath()) != '/') : ?>
        <?php print_r(trim($uri->getPath())) ?>
        <!-- Bootstrap 4 -->
        <?= link_tag('assets/css/bootstrap.min.css') ?>
        <!-- Common CSS -->
        <?= link_tag('assets/css/common.css?v=1.0.7') ?>
        <!-- Desktop CSS -->
        <?= link_tag('assets/css/desktop_common.css') ?>
        <!-- Lobby CSS -->
        <?= link_tag('assets/css/lobby.css?v=1.1.5') ?>
    <?php endif; ?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom Bootrap -->
    <?= link_tag('assets/css/bs_modify.css?v=1.0.0') ?>
    <!-- Rose Gold CSS -->
    <?= link_tag('assets/css/rosegold.css?v=1.0.1') ?>
    <!-- All CSS -->
    <?= link_tag('assets/css/all.min.css') ?>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Sweetalert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?= script_tag('assets/js/dialog.js?v=1.0.0') ?>
    <!-- Toastr -->
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <!-- Loader CSS -->
    <?= link_tag('assets/css/loader.css') ?>
    <!-- Day JS -->
    <script src=" https://cdn.jsdelivr.net/npm/dayjs@1.11.8/dayjs.min.js"></script>


</head>

<body>
    <div id="loader-area">
        <div id="loader">
            <div id="shadow"></div>
            <div id="box"></div>
        </div>
    </div>