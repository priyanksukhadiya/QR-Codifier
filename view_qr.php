<?php
require_once 'db-connection.php';

$username = $_SESSION['username'];
// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page or display an error message
    header('Location: login.php');
    exit(); // Ensure that code stops execution after redirecting
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button:not([disabled]):hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel:not([disabled]):hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger:not([disabled]):hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }

        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading~.swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width:500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
    </style>

    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>QR Codifier Panel</title>

    <meta name="X-CSRF-TOKEN" content="737221b9d786d7fe00698ae660b6052cfbb83d807aac3910c9d3453d076427ce">
    <link rel="stylesheet" href="panel_assets/css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="panel_assets/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="panel_assets/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="be/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="be/css/adminlte.min.css">
</head>
<!-- layout-navbar-fixed layout-footer-fixed -->

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu"
                        href="#"
                        role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://localhost/qr-codifier/" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen"
                        href="#"
                        role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#"
                class="brand-link d-flex">
                <img src="panel_assets/logo.svg" alt="App Logo" class="brand-image rounded bg-light elevation-3"
                    style="max-height: 42px;">
                <div style="line-height:1;">QR Codifier <br><small>Panel</small></div>
            </a>
            <div class="p-3">
                <h5 class="font-weight-bolder mb-0 text-white"><?php echo $username; ?></h5>
                <small class="text-muted">Username</small>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="http://localhost/qr-codifier/dash.php" class="nav-link">
                                <i class="far fa-newspaper nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/qr-codifier/qrs.php" class="nav-link">
                                <i class="fas fa-certificate nav-icon"></i>
                                <p>QR Codes</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link text-danger" href="http://localhost/qr-codifier/logout.php">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout </p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <?php
                        
                $userID = $_SESSION['username'];
                // Get user ID
                $user_id_get = "SELECT `id` FROM `users` WHERE `username` = '$userID'";
                $result = $conn->query($user_id_get);
                
                if ($result->num_rows == 0) {
                    // User doesn't exist, handle this case accordingly
                    echo "Error: User doesn't exist or invalid user ID.";
                } else {
                    while ($row = $result->fetch_assoc()) {
                        // Access the data from $row
                        $userID = $row['id'];
                        // Access other columns as needed
                    }
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                
                        // Fetch data related to the provided ID and current user ID from your database
                        $query = "SELECT * FROM `qrcodes` WHERE `id` = $id AND `user_id` = $userID";
                        $result = $conn->query($query);
                
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            // echo '<pre>';
                            // print_r($row);
                            // echo '</pre>';
                            
                
                        ?>
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?php echo $row['title']; ?> - QR</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="http://localhost/qr-codifier/dash.php">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="http://localhost/qr-codifier/qrs.php">QRs</a></li>
                                <li class="breadcrumb-item active">QR</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">


                <div class="container-fluid">

                    <div class="row mb-4">

                        <!--<div class="mb-3 d-flex justify-content-evenly align-item-center">-->

                        <div class="col-md-6">
                            <h2 class="font-weight-bold"><?php echo $row['title']; ?><small class="ml-1 text-muted"
                                    style="font-size:1rem;">Title</small></h2>
                            <h4><?php echo $row['qr_type']; ?><small class="ml-1 text-muted" style="font-size:0.75rem;">Type</small></h4>
                            <div class="list-group my-3">
                                <a href="#"
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Data Content</h5>
                                    </div>
                                    <p class="mb-1 text-wrap text-break"><strong class="mr-1">Data:</strong><?php echo $row['data']; ?></p>
                                    <p class="mb-0"><strong class="mr-1">Data Type:</strong><?php echo $row['qr_type']; ?></p>
                                </a>
                                <a href="http://localhost/qr-codifier/qr/gzpbbFSYyW3i"
                                    class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Short URL</h5>
                                    </div>
                                    <p class="mb-0">http://localhost/qr-codifier/qr/gzpbbFSYyW3i</p>
                                </a>
                                <!-- <a href="http://localhost/qr-codifier/qr/"
                                        class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Custom Short URL</h5>
                                        </div>
                                        <p class="mb-0">http://localhost/qr-codifier/qr/</p>
                                    </a> -->
                                <a href="javascript:;" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Business Type (Tags)</h5>
                                    </div>
                                    <p class="mb-0"><?php echo $row['tags']; ?></p>
                                </a>
                            </div>



                            <button class="btn btn-danger elevation-3 m-1 deleteQRBtn" id="delQR"
                                data-uuid="<?php echo $row['id']; ?>" fdprocessedid="dxoydp">
                                <i class="fas fa-trash mr-2"></i>Delete</button>
                        </div>


                        <div class="col-md-6 align-self-center text-center">
                            <img src="<?php echo $row['qr_code']; ?>" class="img-fluid shadow rounded mx-auto"
                                alt="<?php echo $row['title']; ?> - Image">

                            <div class="w-100"><a href="<?php echo $row['qr_code']; ?>" target="_blank"
                                    class="btn btn-outline-success elevation-3 m-1 mt-3 mx-auto"
                                    download="<?php echo $row['title']; ?>.png"><i class="fas fa-qrcode mr-2"></i>Download QR</a>
                            </div>
                        </div>


                        <!--</div>-->
                    </div>
                    <!--row end-->


                    <div class="row mb-3">
                        <div class="col-md-12">

                            <div class="card p-2 p-sm-4">
                                <h4 class="font-weight-bold mb-3">Edit QR Code</h4>

                                <form id="editQRForm" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="csrf_test_name"
                                        value="f0fe3b67902bb26bccec61ce154a6ce47834275e3d015c850556ae1572984e06">
                                    <input type="hidden" name="uuid" id="uuid"
                                        value="528e0b9abf42b60eda49f9ff45b68cfa08445f10">
                                    <input type="hidden" name="type" id="type" value="text">

                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label>Title</label>
                                            <input class="form-control" type="text" placeholder="Enter QR Title"
                                                id="title" name="title" value="Alakmalakn Test" required=""
                                                fdprocessedid="pqkma">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Tag</label>
                                            <select class="custom-select" name="tags" value="gaming"
                                                fdprocessedid="ngqv5r">
                                                <option value="automotive">Automotive</option>
                                                <option value="manufacturing">Manufacturing</option>
                                                <option value="services">Services</option>
                                                <option value="finance">Finance</option>
                                                <option value="careers">Careers</option>
                                                <option value="education">Education</option>
                                                <option value="events">Events</option>
                                                <option value="family and relationships">Family and Relationships
                                                </option>
                                                <option value="arts">Arts</option>
                                                <option value="food and drink">Food &amp; Drink</option>
                                                <option value="health">Health</option>
                                                <option value="hobbies and interests">Hobbies &amp; Interests</option>
                                                <option value="home and garden">Home &amp; Garden</option>
                                                <option value="medical health">Medical Health</option>
                                                <option value="movies">Movies</option>
                                                <option value="music and audio">Music and Audio</option>
                                                <option value="news and politics">News and Politics</option>
                                                <option value="personal finance">Personal Finance</option>
                                                <option value="pets">Pets</option>
                                                <option value="pop culture">Pop Culture</option>
                                                <option value="real estate">Real Estate</option>
                                                <option value="religion and spirituality">Religion &amp; Spirituality
                                                </option>
                                                <option value="science">Science</option>
                                                <option value="shopping">Shopping</option>
                                                <option value="sports">Sports</option>
                                                <option value="style and fashion">Style &amp; Fashion</option>
                                                <option value="technology and computing">Technology &amp; Computing
                                                </option>
                                                <option value="travel">Travel</option>
                                                <option value="gaming">Gaming</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label>Custom Short URL (Slug)</label>
                                            <input class="form-control" type="text"
                                                placeholder="Enter Custom Short URL" id="custom_short_url"
                                                name="custom_short_url" value="" fdprocessedid="cynj4">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Domain Name</label>
                                            <input class="form-control" type="text" placeholder="Enter Domain"
                                                id="domain" name="domain" value="" fdprocessedid="fekktg">
                                        </div>
                                    </div>

                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5 active"
                                                id="pills-text-tab" data-toggle="pill" data-target="#pills-text"
                                                type="button" role="tab" aria-controls="pills-text"
                                                aria-selected="true" data-type="text"
                                                fdprocessedid="8dr685">Text</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-url-tab" data-toggle="pill" data-target="#pills-url"
                                                type="button" role="tab" aria-controls="pills-url"
                                                aria-selected="false" data-type="url"
                                                fdprocessedid="cq88b">URL</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-sms-tab" data-toggle="pill" data-target="#pills-sms"
                                                type="button" role="tab" aria-controls="pills-sms"
                                                aria-selected="false" data-type="sms"
                                                fdprocessedid="e0nut">SMS</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-call-tab" data-toggle="pill" data-target="#pills-call"
                                                type="button" role="tab" aria-controls="pills-call"
                                                aria-selected="false" data-type="call"
                                                fdprocessedid="5zwdgd">Call</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-email-tab" data-toggle="pill" data-target="#pills-email"
                                                type="button" role="tab" aria-controls="pills-email"
                                                aria-selected="false" data-type="email"
                                                fdprocessedid="ugdj">Email</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-geo-tab" data-toggle="pill" data-target="#pills-geo"
                                                type="button" role="tab" aria-controls="pills-geo"
                                                aria-selected="false" data-type="geo" fdprocessedid="b6kvwv">Geo
                                                Location</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-wifi-tab" data-toggle="pill" data-target="#pills-wifi"
                                                type="button" role="tab" aria-controls="pills-wifi"
                                                aria-selected="false" data-type="wifi"
                                                fdprocessedid="ryi1tb">WiFi</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-event-tab" data-toggle="pill" data-target="#pills-event"
                                                type="button" role="tab" aria-controls="pills-event"
                                                aria-selected="false" data-type="event"
                                                fdprocessedid="ekqi4j">Event</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-pdf-tab" data-toggle="pill" data-target="#pills-pdf"
                                                type="button" role="tab" aria-controls="pills-pdf"
                                                aria-selected="false" data-type="pdf"
                                                fdprocessedid="wc1lbk">PDF</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-audio-tab" data-toggle="pill" data-target="#pills-audio"
                                                type="button" role="tab" aria-controls="pills-audio"
                                                aria-selected="false" data-type="audio"
                                                fdprocessedid="qefxs">Audio</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-video-tab" data-toggle="pill" data-target="#pills-video"
                                                type="button" role="tab" aria-controls="pills-video"
                                                aria-selected="false" data-type="video"
                                                fdprocessedid="fy68h">Video</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-image-tab" data-toggle="pill" data-target="#pills-image"
                                                type="button" role="tab" aria-controls="pills-image"
                                                aria-selected="false" data-type="image"
                                                fdprocessedid="3opu9j">Image</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-upi-tab" data-toggle="pill" data-target="#pills-upi"
                                                type="button" role="tab" aria-controls="pills-upi"
                                                aria-selected="false" data-type="upi"
                                                fdprocessedid="hlw4dl">UPI</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-text" role="tabpanel"
                                            aria-labelledby="pills-text-tab">
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="qr_text" id="qr_text" rows="3" placeholder="Enter Text"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-url" role="tabpanel"
                                            aria-labelledby="pills-url-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter URL" id="qr_url" name="qr_url">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-sms" role="tabpanel"
                                            aria-labelledby="pills-sms-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Recipient Number" id="qr_sms_mob"
                                                        name="qr_sms_mob">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter SMS Body" id="qr_sms_body"
                                                        name="qr_sms_body">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-call" role="tabpanel"
                                            aria-labelledby="pills-call-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Contact Number with Country Code(Eg.: +91XXXXXXXXXX)"
                                                        id="qr_call" name="qr_call">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-email" role="tabpanel"
                                            aria-labelledby="pills-email-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Email Address" id="qr_email_address"
                                                        name="qr_email_address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Email Subject" id="qr_email_subject"
                                                        name="qr_email_subject">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Email Body" id="qr_email_body"
                                                        name="qr_email_body">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-wifi" role="tabpanel"
                                            aria-labelledby="pills-wifi-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter WiFi SSID" id="qr_wifi_ssid"
                                                        name="qr_wifi_ssid">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter WiFi Password" id="qr_wifi_password"
                                                        name="qr_wifi_password">
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="custom-select" name="qr_wifi_security">
                                                        <option value="wpa2">WPA2</option>
                                                        <option value="wpa">WPA</option>
                                                        <option value="wep">WEP</option>
                                                        <option value="raw">RAW</option>
                                                        <option value="none">None</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-geo" role="tabpanel"
                                            aria-labelledby="pills-geo-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Geo Latitude" id="qr_geo_latitude"
                                                        name="qr_geo_latitude">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Geo Longitude" id="qr_geo_longitude"
                                                        name="qr_geo_longitude">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Geo Altitude" id="qr_geo_altitude"
                                                        name="qr_geo_altitude">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-event" role="tabpanel"
                                            aria-labelledby="pills-event-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Event Title" id="qr_event_title"
                                                        name="qr_event_title">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Event Decription" id="qr_event_description"
                                                        name="qr_event_description">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Event Location" id="qr_event_location"
                                                        name="qr_event_location">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Event Start Date &amp; Time"
                                                        id="qr_event_start_datetime" name="qr_event_start_datetime">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Event End Date &amp; Time"
                                                        id="qr_event_end_datetime" name="qr_event_end_datetime">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-upi" role="tabpanel"
                                            aria-labelledby="pills-upi-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter URL" id="upi_id" name="upi_id">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-pdf" role="tabpanel"
                                            aria-labelledby="pills-pdf-tab">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter PDF Title" id="qr_pdf_title"
                                                        name="qr_pdf_title" value="Alakmalakn Test">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <!-- <label for="qr_pdf_url">PDF URL</label> -->
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter PDF URL" id="qr_pdf_url"
                                                        name="qr_pdf_url">
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            name="qr_pdf" id="qr_pdf">
                                                        <label class="custom-file-label" for="qr_pdf">Choose
                                                            File</label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="pills-audio" role="tabpanel"
                                            aria-labelledby="pills-audio-tab">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Audio Title" id="qr_audio_title"
                                                        name="qr_audio_title" value="Alakmalakn Test">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <!-- <label for="qr_audio_url">Audio URL</label> -->
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Audio URL" id="qr_audio_url"
                                                        name="qr_audio_url">
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            name="qr_audio" id="qr_audio">
                                                        <label class="custom-file-label" for="qr_audio">Choose
                                                            File</label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="pills-video" role="tabpanel"
                                            aria-labelledby="pills-video-tab">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Video Title" id="qr_video_title"
                                                        name="qr_video_title" value="Alakmalakn Test">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <!-- <label for="qr_video_url">Video URL</label> -->
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Video URL" id="qr_video_url"
                                                        name="qr_video_url">
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            name="qr_video" id="qr_video">
                                                        <label class="custom-file-label" for="qr_video">Choose
                                                            File</label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="pills-image" role="tabpanel"
                                            aria-labelledby="pills-image-tab">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Image Title" id="qr_image_title"
                                                        name="qr_image_title" value="Alakmalakn Test">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <!-- <label for="qr_image_url">Image URL</label> -->
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Image URL" id="qr_image_url"
                                                        name="qr_image_url">
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input"
                                                            name="qr_image" id="qr_image">
                                                        <label class="custom-file-label" for="qr_image">Choose
                                                            File</label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-12 px-0">
                                        <button type="submit" class="btn btn-primary btn-sm elevation-3"
                                            fdprocessedid="5guq8g">Update</button>
                                    </div>

                                    <div style="display:none"><label>Fill This Field</label><input type="text"
                                            name="honeypot" value=""></div>
                                </form>
                            </div>



                        </div>
                    </div>
                </div>


                <!-- Generate QR Modal -->
                <div class="modal fade" id="genQR" tabindex="-1" role="dialog" aria-labelledby="genQR"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="genQRLabel">Generate QR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="genQRForm" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="csrf_test_name"
                                        value="94e5a438635cb351487fd80c93a37b611c2fb801ce765dbf81c517d7f4715983">
                                    <input type="hidden" name="uuid" id="uuid"
                                        value="528e0b9abf42b60eda49f9ff45b68cfa08445f10">
                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label for="label">QR Code Label Text</label>
                                            <input class="form-control" type="text" placeholder="Enter Label Text"
                                                id="label" name="label" value="Alakmalakn Test">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="size">Font Size</label>
                                            <input class="form-control" type="text" placeholder="Enter Font Size"
                                                id="size" name="size" value="500">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="margin">Margin</label>
                                            <input class="form-control" type="text" placeholder="Enter Margin"
                                                id="margin" name="margin" value="30">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="rounded">Radius of Rounded QR Code Eye</label>
                                            <input class="form-control" type="text"
                                                placeholder="Enter Rounded Radius" id="rounded" name="rounded"
                                                value="">
                                        </div>
                                        <div class="form-group col-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="logo"
                                                    id="logo">
                                                <label class="custom-file-label" for="logo">Choose Logo
                                                    Image</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12 px-0">
                                        <button type="submit"
                                            class="btn btn-primary btn-sm elevation-3">Generate</button>
                                    </div>

                                    <div style="display:none"><label>Fill This Field</label><input type="text"
                                            name="honeypot" value=""></div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /.content -->
            <?php
                } else {
                        echo 'No QR code found for the provided ID and current user.';
                    }
                }
                }
            ?>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block"><b>QR Modifier</b> 1.0.0-rc</div>
            <strong>Copyright © 2022 <a href="https://quancore.in/" target="_blank">Quancore Softech</a>.</strong> All
            rights reserved.
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3 control-sidebar-content">
                <h5>Customize AdminLTE</h5>
                <hr class="mb-2">
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span>
                </div>
                <h6>Header Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy
                        Offset</span></div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span>
                </div>
                <h6>Sidebar Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                        class="mr-1"><span>Fixed</span></div>
                <div class="mb-1"><input type="checkbox" value="1" checked="checked"
                        class="mr-1"><span>Sidebar Mini</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini
                        MD</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini
                        XS</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy
                        Style</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span>
                </div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child
                        Indent</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on
                        Collapse</span></div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus
                        Auto-Expand</span></div>
                <h6>Footer Options</h6>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div>
                <h6>Small Text Options</h6>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div>
                <div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span>
                </div>
                <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div>
                <h6>Navbar Variants</h6>
                <div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white">
                        <option class="bg-primary">Primary</option>
                        <option class="bg-secondary">Secondary</option>
                        <option class="bg-info">Info</option>
                        <option class="bg-success">Success</option>
                        <option class="bg-danger">Danger</option>
                        <option class="bg-indigo">Indigo</option>
                        <option class="bg-purple">Purple</option>
                        <option class="bg-pink">Pink</option>
                        <option class="bg-navy">Navy</option>
                        <option class="bg-lightblue">Lightblue</option>
                        <option class="bg-teal">Teal</option>
                        <option class="bg-cyan">Cyan</option>
                        <option class="bg-dark">Dark</option>
                        <option class="bg-gray-dark">Gray dark</option>
                        <option class="bg-gray">Gray</option>
                        <option class="bg-light">Light</option>
                        <option class="bg-warning">Warning</option>
                        <option class="bg-white">White</option>
                        <option class="bg-orange">Orange</option>
                    </select></div>
                <h6>Accent Color Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Dark Sidebar Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Light Sidebar Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-fuchsia">Fuchsia</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-maroon">Maroon</option>
                    <option class="bg-orange">Orange</option>
                    <option class="bg-lime">Lime</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-olive">Olive</option>
                </select>
                <h6>Brand Logo Variants</h6>
                <div class="d-flex"></div><select class="custom-select mb-3 border-0">
                    <option>None Selected</option>
                    <option class="bg-primary">Primary</option>
                    <option class="bg-secondary">Secondary</option>
                    <option class="bg-info">Info</option>
                    <option class="bg-success">Success</option>
                    <option class="bg-danger">Danger</option>
                    <option class="bg-indigo">Indigo</option>
                    <option class="bg-purple">Purple</option>
                    <option class="bg-pink">Pink</option>
                    <option class="bg-navy">Navy</option>
                    <option class="bg-lightblue">Lightblue</option>
                    <option class="bg-teal">Teal</option>
                    <option class="bg-cyan">Cyan</option>
                    <option class="bg-dark">Dark</option>
                    <option class="bg-gray-dark">Gray dark</option>
                    <option class="bg-gray">Gray</option>
                    <option class="bg-light">Light</option>
                    <option class="bg-warning">Warning</option>
                    <option class="bg-white">White</option>
                    <option class="bg-orange">Orange</option><a
                        href="http://localhost/qr-codifier/qr/view/528e0b9abf42b60eda49f9ff45b68cfa08445f10#">clear</a>
                </select>
            </div>
        </aside>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="panel_assets/jquery.min.js.download"></script>
    <!-- Bootstrap 4 -->
    <script src="panel_assets/bootstrap.bundle.min.js.download"></script>
    <!-- AdminLTE App -->
    <script src="panel_assets/adminlte.min.js.download"></script>
    <!-- AdminLTE demo -->
    <script src="panel_assets/demo.js.download"></script>
    <!-- Sweet Alert 2 -->
    <script src="panel_assets/sweetalert"></script>

    <script src="panel_assets/ckeditor.js.download"></script>
</body>
<script>
    $(document).ready(function() {
        $('.deleteQRBtn').on('click', function() {
            var qrId = $(this).data('uuid');

            // Ask for confirmation before deleting
            var confirmation = confirm("Are you sure you want to delete this QR code?");

            if (confirmation) {
                // Proceed with deletion
                $.ajax({
                    type: 'POST',
                    url: 'delete_qr.php',
                    data: {
                        qrId: qrId,
                    },
                    success: function(response) {
                        // Handle success, e.g., show a message or refresh the page
                        console.log('QR code deleted');
                        // Redirect to another page after a delay (e.g., 2 seconds)
                        setTimeout(function() {
                            window.location.href =
                                'qrs.php'; // Redirect to a success page
                        }, 1000); // 2000 milliseconds = 2 seconds
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>

</html>
