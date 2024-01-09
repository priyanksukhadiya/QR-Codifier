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
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>QR Codifier Panel</title>

    <meta name="X-CSRF-TOKEN" content="d16f2b7bc5bf3500010459d2b2746aa04a6e68ff5e65c9689de2e9524a176aff">
    <link rel="stylesheet" href="css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="be/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="be/css/adminlte.min.css">
    <script src="fe/js/qrious.min.js"></script>


</head>
<!-- layout-navbar-fixed layout-footer-fixed -->

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link d-flex">
                <img src="fe/logo.svg" alt="App Logo" class="brand-image rounded bg-light elevation-3"
                    style="max-height: 42px;">
                <div style="line-height:1;">QR Codifier <br><small>Panel</small></div>
            </a>
            <div class='p-3'>
                <h5 class="font-weight-bolder mb-0 text-white"><?php echo $username; ?></h5>
                <small class='text-muted'>Username</small>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="dash.php" class="nav-link">
                                <i class="far fa-newspaper nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="qrs.php" class="nav-link">
                                <i class="fas fa-certificate nav-icon"></i>
                                <p>QR Codes</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class='nav-link text-danger' href="logout.php">
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">


                <div class='container-fluid'>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="card p-3">

                                <h4 class="">Create QR Code</h4>

                                <form id="createQRForm" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="csrf_test_name"
                                        value="3925462988a149adb6af1b777bc3c1a6a22405ad137bb5c52a49abf783a0c1f9"> <input
                                        type="hidden" name="type" id="type" value="text">

                                    <h5 class="mb-3 mt-4 font-weight-bold">Content</h5>

                                    <div class="form-row mb-3">
                                        <div class="form-group col-md-6">
                                            <label>QR Title</label>
                                            <input class="form-control" type="text" placeholder="Enter QR Title"
                                                id="title" name="title" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Tag</label>
                                            <select class="custom-select" name="tags" id="tags"
                                                onchange="tagsupdateSelectedClass()">
                                                <option disable="">Selecte Tag</option>
                                                <option value="automotive" class="selected">Automotive</option>
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


                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5 active"
                                                id="pills-text-tab" data-toggle="pill" data-target="#pills-text"
                                                type="button" role="tab" aria-controls="pills-text"
                                                aria-selected="true" data-type="text">Text</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-url-tab" data-toggle="pill" data-target="#pills-url"
                                                type="button" role="tab" aria-controls="pills-url"
                                                aria-selected="false" data-type="url">URL</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-sms-tab" data-toggle="pill" data-target="#pills-sms"
                                                type="button" role="tab" aria-controls="pills-sms"
                                                aria-selected="false" data-type="sms">SMS</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-call-tab" data-toggle="pill" data-target="#pills-call"
                                                type="button" role="tab" aria-controls="pills-call"
                                                aria-selected="false" data-type="call">Call</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-email-tab" data-toggle="pill" data-target="#pills-email"
                                                type="button" role="tab" aria-controls="pills-email"
                                                aria-selected="false" data-type="email">Email</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-geo-tab" data-toggle="pill" data-target="#pills-geo"
                                                type="button" role="tab" aria-controls="pills-geo"
                                                aria-selected="false" data-type="geo">Geo Location</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-wifi-tab" data-toggle="pill" data-target="#pills-wifi"
                                                type="button" role="tab" aria-controls="pills-wifi"
                                                aria-selected="false" data-type="wifi">WiFi</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-event-tab" data-toggle="pill" data-target="#pills-event"
                                                type="button" role="tab" aria-controls="pills-event"
                                                aria-selected="false" data-type="event">Event</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-pdf-tab" data-toggle="pill" data-target="#pills-pdf"
                                                type="button" role="tab" aria-controls="pills-pdf"
                                                aria-selected="false" data-type="pdf">PDF</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-audio-tab" data-toggle="pill" data-target="#pills-audio"
                                                type="button" role="tab" aria-controls="pills-audio"
                                                aria-selected="false" data-type="audio">Audio</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-video-tab" data-toggle="pill" data-target="#pills-video"
                                                type="button" role="tab" aria-controls="pills-video"
                                                aria-selected="false" data-type="video">Video</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-image-tab" data-toggle="pill" data-target="#pills-image"
                                                type="button" role="tab" aria-controls="pills-image"
                                                aria-selected="false" data-type="image">Image</button>
                                        </li>
                                        <li class="nav-item m-1" role="presentation">
                                            <button class="nav-link border py-1 px-3 rounded-pill fs-5"
                                                id="pills-upi-tab" data-toggle="pill" data-target="#pills-upi"
                                                type="button" role="tab" aria-controls="pills-upi"
                                                aria-selected="false" data-type="upi">UPI</button>
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
                                                    <input class="form-control" type="url"
                                                        placeholder="Enter URL" id="qr_url" name="qr_url">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-sms" role="tabpanel"
                                            aria-labelledby="pills-sms-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-12">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Recipient Number (Only digits accepted.)"
                                                        id="qr_sms_mob" name="qr_sms_mob" pattern="[0-9]+">
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
                                                        id="qr_call" name="qr_call" pattern="[0-9+_\-() ]+">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-email" role="tabpanel"
                                            aria-labelledby="pills-email-tab">
                                            <div class="form-row mb-3">
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="email"
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
                                                    <select class="custom-select" name="qr_wifi_security"
                                                        id="qr_wifi_security" onchange="updateSelectedClass()">
                                                        <option value="wpa2" class="selected">WPA2</option>
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
                                                        placeholder="Enter Event Start Date & Time"
                                                        id="qr_event_start_datetime" name="qr_event_start_datetime">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter Event End Date & Time"
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
                                                        name="qr_pdf_title">
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
                                                        name="qr_audio_title">
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
                                                        name="qr_video_title">
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
                                                        name="qr_image_title">
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


                                    <a class="btn btn-light text-decoration-none shadow rounded-pill mb-3 mt-4 font-weight-bold"
                                        role="button" data-toggle="collapse" href="#collapseCustom"
                                        aria-expanded="false" aria-controls="collapseCustom">Customization</a>

                                    <div class="collapse" id="collapseCustom">

                                        <div class="form-row mb-3">
                                            <div class="form-group col-md-6">
                                                <label for="label">QR Code Label Text</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter Label Text" id="label" name="label">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="size">QR Size</label>
                                                <select class="custom-select" id="size" name="size">
                                                    <option value="150">150x150px</option>
                                                    <option value="300">300x300px</option>
                                                    <option selected="" value="500">500x500px</option>
                                                    <option value="900">900x900px</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="margin">QR Margin</label>
                                                <select class="custom-select" id="margin" name="margin">
                                                    <option value="15">15px</option>
                                                    <option selected="" value="30">30px</option>
                                                    <option value="50">50px</option>
                                                    <option value="90">90px</option>
                                                </select>
                                            </div>
                                            <!--<div class="form-group col-md-6">-->
                                            <!--    <label for="rounded">Radius of Rounded QR Code Eye</label>-->
                                            <!--    <input class="form-control" type="text" placeholder="Enter Rounded Radius" id="rounded" name="rounded">-->
                                            <!--</div>-->
                                            <!--<div class="form-group col-md-6">-->
                                            <!--    <label for="rounded">Error Correction Level</label>-->
                                            <!--    <select class="form-select" id='ecl' name='ecl'>-->
                                            <!--        <option value="L">Low (7%)</option>-->
                                            <!--        <option value="M">Medium (15%)</option>-->
                                            <!--        <option value="Q">Quartile (25%)</option>-->
                                            <!--        <option value="H">High (30%)</option>-->
                                            <!--    </select>-->
                                            <!--</div>-->
                                            <div class="form-group col-12">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="logo"
                                                        id="logo">
                                                    <label class="custom-file-label" for="logo">Upload Logo
                                                        Image</label>
                                                </div>
                                            </div>
                                            <!--<div class="form-group col-12">-->
                                            <!--    <select class="form-select">-->
                                            <!--        <option value="L">Low (7%)</option>-->
                                            <!--        <option value="M">Medium (15%)</option>-->
                                            <!--        <option value="Q">Quartile (25%)</option>-->
                                            <!--        <option value="H">High (30%)</option>-->
                                            <!--    </select>-->
                                            <!--</div>-->
                                        </div>

                                    </div>


                                    <div class="form-row">
                                        <div class="col mb-3">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="is_dynamic_qr" name="is_dynamic_qr">
                                                <label class="custom-control-label" for="is_dynamic_qr">Dynamic
                                                    QR</label>
                                            </div>
                                        </div>
                                        <div class="col mb-3">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="is_analytics_active" name="is_analytics_active">
                                                <label class="custom-control-label"
                                                    for="is_analytics_active">Analytics</label>
                                            </div>
                                        </div>
                                        <div class="col mb-3">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="is_gps_location" name="is_gps_location">
                                                <label class="custom-control-label" for="is_gps_location">GPS</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="is_active"
                                                id="is_active" checked="">
                                            <label class="custom-control-label" for="is_active">Check to Show</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 px-0">
                                        <button type="submit"
                                            class="btn btn-primary btn-sm shadow-sm">Create</button>
                                    </div>
                                    <div style="display:none"><label>Fill This Field</label><input type="text"
                                            name="honeypot" value=""></div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Download QR Modal -->
                <div class="modal fade" id="downloadQR" tabindex="-1" role="dialog" aria-labelledby="downloadQR"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="downloadQRLabel">Download QR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row text-center">
                                    <div class="col-12"><img class="img-fluid rounded shadow p-4" src=""
                                            id="view_qr"></div>
                                    <div class="col-12"><a class="btn btn-success rounded-pill shadow" href=""
                                            id="download_qr" download="">Download</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>QR Admin v</b> 1.0.0-rc
            </div>
            <strong>Copyright &copy; 2022 <a href="https://quancore.in/" target="_blank">Quancore
                    Softech</a>.</strong> All rights reserved.
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="http://localhost/qr-codifier/be/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/qr-codifier/be/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost/qr-codifier/be/js/adminlte.min.js"></script>
    <!-- AdminLTE demo -->
    <script src="http://localhost/qr-codifier/be/js/demo.js"></script>
    <!-- Sweet Alert 2 -->
    <script src="http://localhost/qr-codifier/npm/sweetalert"></script>
    <script src="http://localhost/qr-codifier/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    <script src="http://localhost/qr-codifier/fe/js/sweetalert.min.js"></script>
    <script src="http://localhost/qr-codifier/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="http://localhost/qr-codifier/fe/js/app.min.js"></script>
    <script>
        // var form = $('#createQRForm')
        // $('#createQRForm button[data-toggle="pill"]').on('shown.bs.tab', function(event) {
        //     // event.target // newly activated tab
        //     // event.relatedTarget // previous active tab
        //     let _type = $(event.target).data('type')
        //     form.find('input#type').val(_type);

        //     if (['url', 'pdf', 'audio', 'video', 'image'].includes(_type)) {
        //         form.find("#is_dynamic_qr").prop('checked', true); // Checks it
        //     } else {
        //         form.find("#is_dynamic_qr").prop('checked', false); // Unchecks it
        //     }
        // })

        // Create QR Code
        // $('#createQRForm').submit(function(e) {
        //     e.preventDefault();
        //     var form = $(this);
        //     var postData = new FormData(form[0]);
        //     $.ajax({
        //             url: 'http://localhost/qr-codifier/qr/store',
        //             type: "POST",
        //             data: postData,
        //             processData: false,
        //             contentType: false
        //         })
        //         .done(function(data) {
        //             if (data.status == true) {
        //                 swal("Success!", data.message, data.type);
        //                 if (data.qr) {
        //                     $("#downloadQR").find("#view_qr").attr("src", data.qr)
        //                     $("#downloadQR").find("#download_qr").attr("href", data.qr)
        //                     $('#downloadQR').modal('show')
        //                     $("<a>").attr("href", data.qr).attr("download", "qr.png").appendTo("body").click()
        //                         .remove();
        //                 } else {
        //                     // location.reload()
        //                 }
        //             } else {
        //                 swal("Oops", data.message, data.type);
        //             }
        //         })
        //         .fail(function() {
        //             swal("Oops", "We couldn't connect to the server!", "error");
        //         });
        // })

        var selectedTagValue; // Declare a global variable
        // Tags Dropdown Selected
        function tagsupdateSelectedClass() {
            var selectElement = document.getElementById("tags");
            var selectedOption = selectElement.options[selectElement.selectedIndex];

            // Remove the class from all options
            for (var i = 0; i < selectElement.options.length; i++) {
                selectElement.options[i].classList.remove("selected");
            }

            // Add the class to the selected option
            selectedOption.classList.add("selected");
            selectedTagValue = selectedOption.value;
        }
        // WIFI Dropdown Selected
        function updateSelectedClass() {
            var selectElement = document.getElementById("qr_wifi_security");
            var selectedOption = selectElement.options[selectElement.selectedIndex];

            // Remove the class from all options
            for (var i = 0; i < selectElement.options.length; i++) {
                selectElement.options[i].classList.remove("selected");
            }

            // Add the class to the selected option
            selectedOption.classList.add("selected");
        }


        $(document).ready(function() {

            var view_qr = document.getElementById('view_qr');
            var form = $('#createQRForm');
            var formSubmitted = false;

            var qrElements = {
                title: $('#title'),
                text: $('#qr_text'),
                url: $('#qr_url'),
                smsMob: $('#qr_sms_mob'),
                smsBody: $('#qr_sms_body'),
                call: $('#qr_call'),
                emailAddress: $('#qr_email_address'),
                emailSubject: $('#qr_email_subject'),
                emailBody: $('#qr_email_body'),
                geoLatitude: $('#qr_geo_latitude'),
                geoLongitude: $('#qr_geo_longitude'),
                wifiSSID: $('#qr_wifi_ssid'),
                wifiPassword: $('#qr_wifi_password'),
                wifiSecurity: $('#qr_wifi_security'),
                eventTitle: $('#qr_event_title'),
                eventDescription: $('#qr_event_description'),
                eventLocation: $('#qr_event_location'),
                eventStartDatetime: $('#qr_event_start_datetime'),
                eventEndDatetime: $('#qr_event_end_datetime'),
                upiID: $('#upi_id'),
                upiAmount: $('#upi_amount'),
                upiNote: $('#upi_note'),
                pdf: $('#qr_pdf'), // Add the PDF input field
                image: $('#qr_image'), // Add the image input field
                video: $('#qr_video'), // Add the video input field
                audio: $('#qr_audio'), // Add the audio input field


                pdf_url: $('#qr_pdf_url'), // Add the audio input field
                audio_url: $('#qr_audio_url'), // Add the audio input field
                video_url: $('#qr_video_url'), // Add the audio input field
                image_url: $('#qr_image_url'), // Add the audio input field
            };





            form.submit(function(e) {
                e.preventDefault();

                // if (!validateForm()) {
                if (!validateForm()) {
                    swal("Oops", "Invalid input detected!", "error", {
                        timer: 5000
                    });
                    setTimeout(() => {
                        location.reload();
                    }, 6000);
                    return;
                }

                // Clear existing QR code container
                view_qr.innerHTML = '';

                // Check if the selected type is 'pdf', 'image', 'video', or 'audio'
                var selectedType = '';
                if ($('#qr_pdf').prop('files').length > 0) {
                    selectedType = 'pdf';
                } else if ($('#qr_image').prop('files').length > 0) {
                    selectedType = 'image';
                } else if ($('#qr_video').prop('files').length > 0) {
                    selectedType = 'video';
                } else if ($('#qr_audio').prop('files').length > 0) {
                    selectedType = 'audio';
                }

                console.log("selectedType = " + selectedType);

                if (selectedType === 'pdf' || selectedType === 'image' || selectedType === 'video' ||
                    selectedType === 'audio') {
                    var fileElement = qrElements[selectedType];
                    var file = fileElement[0].files[0];

                    if (file) {
                        uploadFileToWordPress(file, function(uploadedFileUrl) {
                            // Use the uploadedFileUrl to generate QR code
                            var qrData = generateQRData(uploadedFileUrl);

                            var qr = new QRious({
                                value: qrData,
                                size: 560
                            });

                            console.log("qrData = " + qrData);

                            if (formSubmitted) {
                                showErrorAndReload();
                            } else {
                                showSuccessMessage(qr);
                            }

                            // Set the flag to true after the first form submission
                            formSubmitted = true;
                        });
                    } else {
                        // Handle the case where no file is uploaded
                        swal("Oops", "Please upload a " + selectedType.toUpperCase() + " file!", "error", {
                            timer: 5000
                        });
                    }
                } else {
                    // Generate QR code without file for other types
                    var qrData = generateQRData();

                    var qr = new QRious({
                        value: qrData,
                        size: 560
                    });

                    console.log("qrData = " + qrData);

                    if (formSubmitted) {
                        showErrorAndReload();
                    } else {
                        showSuccessMessage(qr);
                    }

                    // Set the flag to true after the first form submission
                    formSubmitted = true;
                }
            });


            function uploadFileToWordPress(file, callback) {
                // Show loading message
                Swal.fire({
                    title: "Please Wait!!",
                    html: "We Are Generating QRCode.",
                    didOpen: () => {
                        Swal.showLoading();
                    },
                });

                var formData = new FormData();
                formData.append('name', file.name);
                formData.append('action', 'upload-attachment');
                formData.append('_wpnonce', '7115597002');
                formData.append('async-upload', file);

                // Use the same URL for all file types
                // var uploadUrl = 'https://qr-generator.alakmalak.ca/wp-admin/async-upload.php';

                $.ajax({
                    type: 'POST',
                    url: "https://qr-generator.alakmalak.ca/wp-admin/async-upload.php",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        const responseObject = JSON.parse(response);
                        const {
                            data: {
                                url: uploadedFileUrl
                            }
                        } = responseObject;

                        if (uploadedFileUrl) {
                            // Close loading message
                            Swal.close();
                            console.log("Uploaded File URL:", uploadedFileUrl);
                            callback(uploadedFileUrl); // Pass the uploadedFileUrl to the callback
                        } else {
                            console.error("Error: 'url' property not found in 'data' object.");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            function validateForm() {
                // Add your validation logic here
                return true; // Return true if the form is valid, false otherwise
            }

            function generateQRData(uploadedFileUrl) {
                var wifiData = (qrElements.wifiSSID.val().trim() !== '' && qrElements.wifiPassword.val().trim() !==
                        '' && qrElements.wifiSecurity.val().trim() !== '') ? 'WIFI:S:' + qrElements.wifiSSID.val() +
                    ';T:' + qrElements.wifiSecurity.val() + ';P:' + qrElements.wifiPassword.val() + ';' : '';

                var eventData = (qrElements.eventTitle.val().trim() !== '' && qrElements.eventDescription.val()
                        .trim() !== '' && qrElements.eventLocation.val().trim() !== '' && qrElements
                        .eventStartDatetime.val().trim() !== '' && qrElements.eventEndDatetime.val().trim() !== ''
                    ) ?
                    'BEGIN:VEVENT' +
                    '\nSUMMARY:' + qrElements.eventTitle.val() +
                    '\nLOCATION:' + qrElements.eventLocation.val() +
                    '\nDESCRIPTION:' + qrElements.eventDescription.val() +
                    '\nDTSTART;TZID=Asia/Kolkata:' + qrElements.eventStartDatetime.val().replace(/[-:]/g, '') +
                    '00Z' +
                    '\nDTEND;TZID=Asia/Kolkata:' + qrElements.eventEndDatetime.val().replace(/[-:]/g, '') + '00Z' +
                    '\nEND:VEVENT' :
                    '';

                var upiData = (qrElements.upiID.val().trim() !== '' && qrElements.upiAmount.val().trim() !== '' &&
                        qrElements.upiNote.val().trim() !== '') ?
                    'upi://pay?pa=' + qrElements.upiID.val() + '&am=' + qrElements.upiAmount.val() + '&tn=' +
                    qrElements.upiNote.val() + '&cu=INR' :
                    '';

                var qrData = qrElements.url.val().trim() !== '' ? qrElements.url.val() :
                    (qrElements.smsBody.val().trim() !== '') ? 'SMSTO:' + qrElements.smsMob.val() + ':' + qrElements
                    .smsBody.val() :
                    (qrElements.call.val().trim() !== '') ? 'tel:' + qrElements.call.val() :
                    (qrElements.emailAddress.val().trim() !== '') ? 'mailto:' + qrElements.emailAddress.val() +
                    '?subject=' + qrElements.emailSubject.val() + '&body=' + qrElements.emailBody.val() :
                    (qrElements.geoLatitude.val().trim() !== '' && qrElements.geoLongitude.val().trim() !== '') ?
                    'geo:' + qrElements.geoLatitude.val() + ',' + qrElements.geoLongitude.val() :
                    wifiData !== '' ? wifiData :
                    eventData !== '' ? eventData :
                    upiData !== '' ? upiData :
                    uploadedFileUrl ? uploadedFileUrl :
                    (qrElements.pdf_url.val().trim() !== '') ? '' + qrElements.pdf_url.val() :
                    (qrElements.audio_url.val().trim() !== '') ? '' + qrElements.audio_url.val() :
                    (qrElements.video_url.val().trim() !== '') ? '' + qrElements.video_url.val() :
                    (qrElements.image_url.val().trim() !== '') ? '' + qrElements.image_url.val() :
                    qrElements.text.val();

                return qrData;
            }

            function showErrorAndReload() {
                swal("Oops", "We couldn't connect to the server!", "error", {
                    timer: 5000
                });
                setTimeout(() => {
                    location.reload();
                }, 6000);
            }

            function showSuccessMessage(qr) {
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "QR Code Has Been Successfully Generated!!",
                    showConfirmButton: true,
                });

                if (view_qr.src) {
                    view_qr.src = qr.toDataURL();


                    // Title Value Get
                    var titleValue = document.getElementById('title').value;

                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/qr-codifier/qr_store_script.php',
                        data: {
                            title: titleValue,
                            imageData: view_qr.src,
                            tag: selectedTagValue
                        },
                        success: function(response) {
                            console.log('Image data sent to the server successfully.');
                        },
                        error: function(error) {
                            console.error('Error sending image data to the server:', error);
                        }
                    });


                    $("#downloadQR").find("#view_qr").attr("src", view_qr.src);
                    $("#downloadQR").find("#download_qr").attr("href", view_qr.src);
                    downloadQRMdl = new bootstrap.Modal('#downloadQR');
                    downloadQRMdl.show();
                    $("<a>").attr("href", view_qr.src).attr("download", "qr.png").appendTo("body").click().remove();
                    $("#view_qr").attr("src", view_qr.src);
                }
            }
        });

        $('#downloadQR').on('hidden.bs.modal', function(event) {
            location.reload()
        })
    </script>
</body>

</html>
