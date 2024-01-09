<?php
require_once 'db-connection.php';

// $username = $_SESSION['username'];
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Ensure the form fields are present
//     if (isset($_POST['email'], $_POST['password'])) {
//         // Sanitize user input
//         $email = $_POST['email'];
//         $password = $_POST['password'];

//         // Fetch user data from the database based on the provided email
//         $sql = "SELECT * FROM users WHERE email = '$email'";
//         $result = $conn->query($sql);

//         if ($result->num_rows === 1) {
//             $row = $result->fetch_assoc();
//             // Verify the password
//             if (password_verify($password, $row['password_hash'])) {
//                 // Password is correct, set username in session
//                 $_SESSION['username'] = $row['username'];
//                 // Redirect to dashboard
//                 header('Location: dash.php');
//                 exit();
//             } else {
//                 echo 'Incorrect email or password.'; // Password does not match
//             }
//         } else {
//             echo 'User not found.'; // No user with the provided email
//         }
//     } else {
//         echo 'Invalid form data.'; // Form fields missing
//     }
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Ensure the form is submitted
//     if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['password_confirm'])) {
//         // Validate and sanitize user input
//         $username = $_POST['username'];
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         $password_confirm = $_POST['password_confirm'];

//         // Perform additional validation here if needed

//         // Check if passwords match
//         if ($password !== $password_confirm) {
//             echo "<script>alert('Passwords do not match.');</script>";
//             // Handle the error - display an error message or redirect back to the registration page
//         } else {
//             // Passwords match, proceed to insert into the database
//             // Hash the password before storing it
//             $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//             // Insert data into the database
//             // $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
//             $insert_sql = "INSERT INTO `users` (`id`, `username`, `email`, `password_hash`, `created_at`) VALUES (NULL, '$username', '$email', '$hashed_password', current_timestamp())";

//             if ($conn->query($insert_sql) === true) {
//                 // Registration successful, set username in session
//                 $_SESSION['username'] = $username;
//                 // Redirect to a new page or display a success message
//                 header('Location: dash.php');
//                 exit();
//             } else {
//                 echo 'Error: ' . $insert_sql . '<br>' . $conn->error;
//                 // Handle the error
//             }
//         }
//     } else {
//         // Handle invalid form submission
//         echo 'Invalid form data.';
//     }
// }

?>
<!DOCTYPE html>
<html lang="en-IN" dir="ltr" itemscope="" itemtype="http://schema.org/WebPage" prefix="og: https://ogp.me/ns#">

<head prefix="baseURL: http://localhost/qr-codifier/ns#">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>QR Codifier - The Ultimate Free Custom QR Code Generator for Business and Marketing</title>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="css2?family=Bakbak+One&family=Figtree:wght@300;400;500;600;700;800;900&family=Flow+Block&family=Flow+Circular&family=Flow+Rounded&family=Radio+Canada:wght@300;400;600&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="fe/fonts/fontawesome-free-6.2.0/css/all.min.css">
    <link rel="stylesheet" href="fe/css/app.min.css">
    <script src="fe/js/qrious.min.js"></script>

</head>

<body>
    <div class="site_wrapper">
        <header class="navbar navbar-expand-md bg-light border-bottom fixed-top ">
            <div class="container">
                <a href="index.php"
                    class="navbar-brand d-flex align-items-center mb-0 me-md-auto text-dark text-decoration-none">
                    <img class="img-fluid rounded me-3" style="height:60px;" src="fe/logo.svg"
                        alt="qr-codifier-qr-code-generator-logo">
                    <span class="fs-4 fw-bolder">QR Codifier</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks"
                    aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarLinks">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link px-3 fw-semibold">Home</a></li>
                        <li class="nav-item"><a href="features.php" class="nav-link px-3 fw-semibold">Features</a></li>
                        <li class="nav-item"><a href="faqs.php" class="nav-link px-3 fw-semibold">FAQs</a></li>
                        <li class="nav-item"><a href="about-us.php" class="nav-link px-3 fw-semibold">About Us</a></li>
                        <li class="nav-item"><a href="contact-us.php" class="nav-link px-3 fw-semibold">Contact Us</a>
                        </li>
                        <?php
                        // Check if the user is not logged in
                        if (!isset($_SESSION['username'])) { ?>
                        <li class="nav-item"><a href="register.php"
                                class="btn btn-outline-dark shadow-sm rounded-pill ms-0 ms-md-3 px-3">Signup</a></li>
                        <li class="nav-item"><a href="login.php"
                                class="btn btn-dark shadow-sm rounded-pill ms-0 ms-md-3 px-3">Login</a></li>
                        <?php 
                            // Redirect to the login page or display an error message
                        } else { ?>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-secondary shadow-sm rounded-pill ms-0 ms-md-3 px-3 dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['username']; ?> </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="dash.php">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="index.php">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <?php }
                        ?>
                    </ul>
                </div>

            </div>
        </header>

        <main>
            <section class="" style="padding:120px 0 60px 0;background-color: var(--bs-gray-800);">
                <div class="col-md-9 mx-auto">
                    <div class="card p-3 m-2">

                        <h1 class="">Generate QR Code</h1>

                        <form id="createQRForm" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="csrf_test_name"
                                value="6ebaf568a56db8955d88053ca185e710f5bbb6ec3eb744fdc16eb5bc59e6e74f"> <input
                                type="hidden" name="type" id="type" value="text">

                            <h5 class="mb-3 mt-4 fw-bold">Content</h5>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">QR Title</label>
                                    <input class="form-control" type="text" placeholder="Enter QR Title"
                                        id="title" name="title" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tag</label>
                                    <select class="form-select" name="tags" id="tags"
                                        onchange="tagsupdateSelectedClass()">
                                        <option value="automotive" class="selected">Automotive</option>
                                        <option value="manufacturing">Manufacturing</option>
                                        <option value="services">Services</option>
                                        <option value="finance">Finance</option>
                                        <option value="careers">Careers</option>
                                        <option value="education">Education</option>
                                        <option value="events">Events</option>
                                        <option value="family and relationships">Family and Relationships</option>
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
                                        <option value="religion and spirituality">Religion &amp; Spirituality</option>
                                        <option value="science">Science</option>
                                        <option value="shopping">Shopping</option>
                                        <option value="sports">Sports</option>
                                        <option value="style and fashion">Style &amp; Fashion</option>
                                        <option value="technology and computing">Technology &amp; Computing</option>
                                        <option value="travel">Travel</option>
                                        <option value="gaming">Gaming</option>
                                    </select>
                                </div>
                            </div>


                            <ul class="nav nav-pills overflow-auto flex-nowrap mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5 active"
                                        id="pills-text-tab" data-bs-toggle="pill" data-bs-target="#pills-text"
                                        type="button" role="tab" aria-controls="pills-text"
                                        aria-selected="true" data-type="text">Text</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-url-tab" data-bs-toggle="pill" data-bs-target="#pills-url"
                                        type="button" role="tab" aria-controls="pills-url"
                                        aria-selected="false" data-type="url">URL</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-sms-tab" data-bs-toggle="pill" data-bs-target="#pills-sms"
                                        type="button" role="tab" aria-controls="pills-sms"
                                        aria-selected="false" data-type="sms">SMS</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-call-tab" data-bs-toggle="pill" data-bs-target="#pills-call"
                                        type="button" role="tab" aria-controls="pills-call"
                                        aria-selected="false" data-type="call">Call</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-email-tab" data-bs-toggle="pill" data-bs-target="#pills-email"
                                        type="button" role="tab" aria-controls="pills-email"
                                        aria-selected="false" data-type="email">Email</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-geo-tab" data-bs-toggle="pill" data-bs-target="#pills-geo"
                                        type="button" role="tab" aria-controls="pills-geo"
                                        aria-selected="false" data-type="geo">Geo Location</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-wifi-tab" data-bs-toggle="pill" data-bs-target="#pills-wifi"
                                        type="button" role="tab" aria-controls="pills-wifi"
                                        aria-selected="false" data-type="wifi">WiFi</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-event-tab" data-bs-toggle="pill" data-bs-target="#pills-event"
                                        type="button" role="tab" aria-controls="pills-event"
                                        aria-selected="false" data-type="event">Event</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-pdf-tab" data-bs-toggle="pill" data-bs-target="#pills-pdf"
                                        type="button" role="tab" aria-controls="pills-pdf"
                                        aria-selected="false" data-type="pdf">PDF</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-audio-tab" data-bs-toggle="pill" data-bs-target="#pills-audio"
                                        type="button" role="tab" aria-controls="pills-audio"
                                        aria-selected="false" data-type="audio">Audio</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video"
                                        type="button" role="tab" aria-controls="pills-video"
                                        aria-selected="false" data-type="video">Video</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-image-tab" data-bs-toggle="pill" data-bs-target="#pills-image"
                                        type="button" role="tab" aria-controls="pills-image"
                                        aria-selected="false" data-type="image">Image</button>
                                </li>
                                <li class="nav-item text-nowrap m-1 mb-2" role="presentation">
                                    <button
                                        class="btn btn-outline-secondary border-0 shadow-sm py-1 px-3 rounded-pill fs-5"
                                        id="pills-upi-tab" data-bs-toggle="pill" data-bs-target="#pills-upi"
                                        type="button" role="tab" aria-controls="pills-upi"
                                        aria-selected="false" data-type="upi">UPI</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-text" role="tabpanel"
                                    aria-labelledby="pills-text-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <textarea class="form-control" name="qr_text" id="qr_text" rows="3" placeholder="Enter Text"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-url" role="tabpanel"
                                    aria-labelledby="pills-url-tab">
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="url" placeholder="Enter URL"
                                                id="qr_url" name="qr_url">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-sms" role="tabpanel"
                                    aria-labelledby="pills-sms-tab">
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Recipient Number (Only digits accepted.)"
                                                id="qr_sms_mob" name="qr_sms_mob" pattern="[0-9]+">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text" placeholder="Enter SMS Body"
                                                id="qr_sms_body" name="qr_sms_body">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-call" role="tabpanel"
                                    aria-labelledby="pills-call-tab">
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Contact Number with Country Code(Eg.: +91XXXXXXXXXX)"
                                                id="qr_call" name="qr_call" pattern="[0-9+_\-() ]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-email" role="tabpanel"
                                    aria-labelledby="pills-email-tab">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="email"
                                                placeholder="Enter Email Address" id="qr_email_address"
                                                name="qr_email_address">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Email Subject" id="qr_email_subject"
                                                name="qr_email_subject">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text" placeholder="Enter Email Body"
                                                id="qr_email_body" name="qr_email_body">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-wifi" role="tabpanel"
                                    aria-labelledby="pills-wifi-tab">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text" placeholder="Enter WiFi SSID"
                                                id="qr_wifi_ssid" name="qr_wifi_ssid">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter WiFi Password" id="qr_wifi_password"
                                                name="qr_wifi_password">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <select class="form-select" name="qr_wifi_security" id="qr_wifi_security"
                                                onchange="updateSelectedClass()">
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
                                    <div class="row mb-3">
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Geo Latitude" id="qr_geo_latitude"
                                                name="qr_geo_latitude">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Geo Longitude" id="qr_geo_longitude"
                                                name="qr_geo_longitude">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Geo Altitude" id="qr_geo_altitude"
                                                name="qr_geo_altitude">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-event" role="tabpanel"
                                    aria-labelledby="pills-event-tab">
                                    <div class="row mb-3">
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Event Title" id="qr_event_title"
                                                name="qr_event_title">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Event Decription" id="qr_event_description"
                                                name="qr_event_description">
                                        </div>
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Event Location" id="qr_event_location"
                                                name="qr_event_location">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Event Start Date & Time"
                                                id="qr_event_start_datetime" name="qr_event_start_datetime">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Event End Date & Time" id="qr_event_end_datetime"
                                                name="qr_event_end_datetime">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-upi" role="tabpanel"
                                    aria-labelledby="pills-upi-tab">
                                    <div class="row mb-3">
                                        <div class="mb-3 col-md-12">
                                            <input class="form-control" type="text" placeholder="Enter URL"
                                                id="upi_id" name="upi_id">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-pdf" role="tabpanel"
                                    aria-labelledby="pills-pdf-tab">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text" placeholder="Enter PDF Title"
                                                id="qr_pdf_title" name="qr_pdf_title">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <!-- <label for="qr_pdf_url">PDF URL</label> -->
                                            <input class="form-control" type="text" placeholder="Enter PDF URL"
                                                id="qr_pdf_url" name="qr_pdf_url">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="qr_pdf"
                                                    id="qr_pdf">
                                                <!--<label class="input-group-text" for="qr_pdf">Choose File</label>-->
                                                <small>Max Size: 5MB</small>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-audio" role="tabpanel"
                                    aria-labelledby="pills-audio-tab">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Audio Title" id="qr_audio_title"
                                                name="qr_audio_title">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <!-- <label for="qr_audio_url">Audio URL</label> -->
                                            <input class="form-control" type="text" placeholder="Enter Audio URL"
                                                id="qr_audio_url" name="qr_audio_url">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="qr_audio"
                                                    id="qr_audio">
                                                <!--<label class="input-group-text" for="qr_audio">Choose File</label>-->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-video" role="tabpanel"
                                    aria-labelledby="pills-video-tab">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Video Title" id="qr_video_title"
                                                name="qr_video_title">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <!-- <label for="qr_video_url">Video URL</label> -->
                                            <input class="form-control" type="text" placeholder="Enter Video URL"
                                                id="qr_video_url" name="qr_video_url">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="qr_video"
                                                    id="qr_video">
                                                <!--<label class="input-group-text" for="qr_video">Choose File</label>-->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-image" role="tabpanel"
                                    aria-labelledby="pills-image-tab">

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <input class="form-control" type="text"
                                                placeholder="Enter Image Title" id="qr_image_title"
                                                name="qr_image_title">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <!-- <label for="qr_image_url">Image URL</label> -->
                                            <input class="form-control" type="text" placeholder="Enter Image URL"
                                                id="qr_image_url" name="qr_image_url">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <div class="input-group">
                                                <input type="file" class="form-control" name="qr_image"
                                                    id="qr_image">
                                                <!--<label class="input-group-text" for="qr_image">Choose File</label>-->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <a class="btn btn-light text-decoration-none shadow rounded-pill mb-3 mt-4 fw-bold"
                                role="button" data-bs-toggle="collapse" href="#collapseCustom"
                                aria-expanded="false" aria-controls="collapseCustom">Customization</a>

                            <div class="collapse" id="collapseCustom">

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="label">QR Code Label Text</label>
                                        <input class="form-control" type="text" placeholder="Enter Label Text"
                                            id="label" name="label">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="size">QR Size</label>
                                        <select class="form-select" id="size" name="size">
                                            <option value="150">150x150px</option>
                                            <option value="300">300x300px</option>
                                            <option selected="" value="500">500x500px</option>
                                            <option value="900">900x900px</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="margin">QR Margin</label>
                                        <select class="form-select" id="margin" name="margin">
                                            <option value="15">15px</option>
                                            <option selected="" value="30">30px</option>
                                            <option value="50">50px</option>
                                            <option value="90">90px</option>
                                        </select>
                                    </div>
                                    <!--<div class="mb-3 col-md-6">-->
                                    <!--    <label class="form-label" for="rounded">Radius of Rounded QR Code Eye</label>-->
                                    <!--    <input class="form-control" type="text" placeholder="Enter Rounded Radius" id="rounded" name="rounded">-->
                                    <!--</div>-->
                                    <!--<div class="mb-3 col-md-6">-->
                                    <!--    <label class="form-label" for="rounded">Error Correction Level</label>-->
                                    <!--    <select class="form-select" id='ecl' name='ecl'>-->
                                    <!--        <option value="L">Low (7%)</option>-->
                                    <!--        <option value="M">Medium (15%)</option>-->
                                    <!--        <option value="Q">Quartile (25%)</option>-->
                                    <!--        <option value="H">High (30%)</option>-->
                                    <!--    </select>-->
                                    <!--</div>-->
                                    <div class="mb-3 col-12">
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="logo"
                                                id="logo">
                                            <label class="input-group-text" for="logo">Upload Image</label>
                                        </div>
                                    </div>
                                    <!--<div class="mb-3 col-12">-->
                                    <!--    <select class="form-select">-->
                                    <!--        <option value="L">Low (7%)</option>-->
                                    <!--        <option value="M">Medium (15%)</option>-->
                                    <!--        <option value="Q">Quartile (25%)</option>-->
                                    <!--        <option value="H">High (30%)</option>-->
                                    <!--    </select>-->
                                    <!--</div>-->
                                </div>

                            </div>

                            <div class="row" id="chkBoxRow">
                                <div class="col mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" role="switch" class="form-check-input"
                                            id="is_dynamic_qr" name="is_dynamic_qr">
                                        <label class="form-check-label" for="is_dynamic_qr">Dynamic QR</label>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" role="switch" class="form-check-input"
                                            id="is_analytics_active" name="is_analytics_active">
                                        <label class="form-check-label" for="is_analytics_active">Analytics</label>
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" role="switch" class="form-check-input"
                                            id="is_gps_location" name="is_gps_location">
                                        <label class="form-check-label" for="is_gps_location">GPS</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="is_active" id="is_active"
                                        checked="">
                                    <label class="form-check-label" for="is_active">Check to Show</label>
                                </div>
                            </div>

                            <div class="col-sm-12 px-0">
                                <button type="submit" class="btn btn-dark btn-lg shadow rounded-pill">Generate
                                    QR</button>
                            </div>
                            <div style="display:none"><label>Fill This Field</label><input type="text"
                                    name="honeypot" value=""></div>
                        </form>

                    </div>
                </div>

                <!-- Download QR Modal -->
                <div class="modal fade" id="downloadQR" tabindex="-1" role="dialog" aria-labelledby="downloadQR"
                    aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-sm-down" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="downloadQRLabel">Download QR</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row text-center">
                                    <div class="col-12 mb-3"><img class="img-fluid rounded shadow p-md-4 p-0"
                                            src="" id="view_qr"></div>
                                    <div class="col-12 mb-3"><a class="btn btn-success rounded-pill shadow"
                                            href="" id="download_qr" download="">Download</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Login QR Modal -->
                <div class="modal fade" id="loginQR" tabindex="-1" role="dialog" aria-labelledby="loginQR"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="loginQRLabel">Login</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="loginForm" action="" method="post">
                                    <input type="hidden" name="csrf_test_name"
                                        value="695fe9539e866fa0369be9c49b9c934cf25eaad7055c93c8aa7d594463ff9313">
                                    <!-- Email -->
                                    <div class="mb-2">
                                        <input type="email" class="form-control" name="email" inputmode="email"
                                            autocomplete="email" placeholder="Email Address" required="">
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-2">
                                        <input type="password" class="form-control" name="password" inputmode="text"
                                            autocomplete="current-password" placeholder="Password" required="">
                                    </div>
                                    <!-- Remember me -->
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="remember" class="form-check-input">
                                            Remember me? </label>
                                    </div>
                                    <div class="d-grid col-12 col-md-8 mx-auto m-3">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <p class="text-center">Forgot your password? <a href="login/magic-link.php">Use a
                                            Login Link</a></p>
                                    <div style="display:none"><label>Fill This Field</label><input type="text"
                                            name="honeypot" value=""></div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#signupQR"
                                    data-bs-toggle="modal">Signup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Signup QR Modal -->
                <div class="modal fade" id="signupQR" tabindex="-1" role="dialog" aria-labelledby="signupQR"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="signupQRLabel">Signup</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="signupForm" action="" method="post">
                                    <input type="hidden" name="csrf_test_name"
                                        value="a80d3cf949294c302d0b7d8c1311d399330c7f7dd2f3b058b1edcd0ceb72d3c6">
                                    <!-- Email -->
                                    <div class="mb-2">
                                        <input type="email" class="form-control" name="email" inputmode="email"
                                            autocomplete="email" placeholder="Email Address" required="">
                                    </div>
                                    <!-- Username -->
                                    <div class="mb-4">
                                        <input type="text" class="form-control" name="username" inputmode="text"
                                            autocomplete="username" placeholder="Username" required="">
                                    </div>
                                    <!-- Password -->
                                    <div class="mb-2">
                                        <input type="password" class="form-control" name="password" inputmode="text"
                                            autocomplete="new-password" placeholder="Password" required="">
                                    </div>
                                    <!-- Password (Again) -->
                                    <div class="mb-5">
                                        <input type="password" class="form-control" name="password_confirm"
                                            inputmode="text" autocomplete="new-password"
                                            placeholder="Password (again)" required="">
                                    </div>
                                    <div class="d-grid col-12 col-md-8 mx-auto m-3">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>

                                    <div style="display:none"><label>Fill This Field</label><input type="text"
                                            name="honeypot" value=""></div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#loginQR"
                                    data-bs-toggle="modal">Login</button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <section class="" style="padding:90px 0;background-color: var(--bs-gray-200);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <img src="fe/image/about/5.jpg" class="img-fluid rounded-5 shadow p-3"
                                alt="qr-codifier-about" loading="lazy">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div>
                                <h2 class="fw-normal">QR Code Generator</h2>
                                <h4 class="fw-bold">Here’s a few basics to get you started.</h4>
                                <p>You can generate free QR codes on this website. A QR code is a two dimensional
                                    barcode that stores information in black and white dots (called data pixels or “QR
                                    code modules”). Besides the black and white version, you can also create a colored
                                    QR code. For these codes to work without problems, make sure the contrast is
                                    sufficient and the result is not a negative (in terms of color). To make your QR
                                    code even better, you can also get a QR code with logo.</p>
                                <p>Able to store up to 7089 digits or 4296 characters, including punctuation marks and
                                    special characters, the Code can equally encode words and phrases such as internet
                                    addresses. One thing to always keep in mind, especially when it comes to designing
                                    the Static QR Codes aesthetic is that the more data is added, the more the size
                                    increases and its structure becomes more complex.</p>
                                <p>Even when damaged, the QR Code’s structure data keys include duplications. It is
                                    thanks to these redundancies that allow up to 30% of the Code structure to take
                                    damage without affecting its readability on scanners. </p>
                                <a class="btn btn-dark rounded-pill shadow me-3 mt-4" href="about-us.php">Know more
                                    about <strong>QR Codifier</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-sm-4 mb-md-5">
                            <h3>The QR Code: A Brief History</h3>
                            <p>In 1994, DENSO WAVE, a subsidiary manufacturing company, required a better, faster,
                                stronger technology to the Barcode to process higher amounts of characters and to aid
                                them in tracking vehicles and parts. Masahiro Hara with a team of two, undertook the
                                task of developing what we now know and recognize as the QR Code.</p>
                            <p>Some of the most challenging problems for Hara and his team were figuring out a way to
                                make 2D codes read as fast as possible, while preventing false recognition once the
                                shape of the position detection pattern was added. It needed to be unique, which meant
                                the development team spent the better part of a year doing a survey of the white to
                                black areas’ ratio after reducing them to patterns on printed material. The results?
                                They identified the ideal ratio as 1:1:3:1:1.</p>
                            <p>By identifying this number, they were able to determine the black and white areas in the
                                position detection pattern which enabled the Code to be detected regardless of the
                                scanning angle. In short, this unique ratio simply meant you could scan it from up,
                                down, left or right.</p>
                            <p>Though the initially targeted field for QR Code use was the manufacturing industry, with
                                the rise of smartphone use and the fact that it remained without a patent meant it
                                became an open-source technology, available to anyone and everyone.</p>
                            <p>You can now find QR Codes stylishly delivering great amounts of information and
                                redefining the print to digital marketing scene.</p>
                        </div>
                        <div class="col-12 mb-3 mb-md-0">
                            <img src="fe/image/home/2018-08-30-image-2-p.webp" class="img-fluid shadow rounded-5 p-3"
                                alt="anatomy-image" loading="lazy">
                        </div>
                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;background-color: var(--bs-gray-200);">
                <div class="container">
                    <div class="row">
                        <div class="col-8 text-center mx-auto mb-3">
                            <h2 class='fw-bold'>The anatomy of a QR Code</h2>
                            <p>It’s the 90s and you have just ejected your video cassette, leaving the square TV screen
                                in a state of static white noise. Visually, that is what comes to mind when some people
                                look at the QR Code. A complex matrix of black and white squares. Though looking like a
                                pixelated image, each one of those squares is actually a marker serving a greater
                                function in the information-sharing capabilities of the Code.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-6 mb-3">
                            <div>
                                <h4>Positioning detection markers</h4>
                                <p>Located at three corners of each code, it allows a scanner to accurately recognize
                                    the Code and read it at high speed, while indicating the direction in which the Code
                                    is printed. They essentially help quickly identify the presence of a QR Code in an
                                    image and it's orientation.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <img class="img-fluid rounded-5 shadow mx-auto"
                                src="fe/image/home/anatomy/positioning.bmp"
                                alt="The three positioning markings indicate the direction in which the Code is printed"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-6 mb-3">
                            <div>
                                <h4>Alignment markings</h4>
                                <p>Smaller than the position detection markers, they help straighten out QR Codes drawn
                                    on a curved surface. And, the more information a Code stores, the larger it is and
                                    the more alignment patterns it requires.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <img class="img-fluid rounded-5 shadow mx-auto" src="fe/image/home/anatomy/alignment.png"
                                alt=" Alignment marking to help with the QR Code orientation" loading="lazy">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-6 mb-3">
                            <div>
                                <h4>Timing pattern</h4>
                                <p>Alternating black/white modules on the QR Code with the idea of accurately helping
                                    configure the data grid. Using these lines, the scanner determines how large the
                                    data matrix is.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <img class="img-fluid rounded-5 shadow mx-auto" src="fe/image/home/anatomy/timing.png"
                                alt="The timing pattern is used by the scanner determines how large the data matrix is"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-6 mb-3">
                            <div>
                                <h4>Version information</h4>
                                <p>With currently 40 different QR Code versions, these markers specify the one that is
                                    being used. The most common ones are versions 1 to 7.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <img class="img-fluid rounded-5 shadow mx-auto" src="fe/image/home/anatomy/version.png"
                                alt="The version information signifies the QR Code version that is being used"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-6 mb-3">
                            <div>
                                <h4>Format information</h4>
                                <p>The format patterns contain information about the error tolerance and the data mask
                                    pattern and make it easier to scan the Code.</p>

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <img class="img-fluid rounded-5 shadow mx-auto" src="fe/image/home/anatomy/format.png"
                                alt="The format patterns contain information about the error tolerance and the data mask pattern"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-6 mb-3">
                            <div>
                                <h4>Data and error correction keys</h4>
                                <p>The error correction mechanism inherent in the QR Code structure is where all your
                                    data is contained, also sharing the space with the error correction blocks that
                                    allow up to 30% of the Code to be damaged.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <img class="img-fluid rounded-5 shadow mx-auto" src="fe/image/home/anatomy/data.png"
                                alt="The data and error correction keys that hold the actual data inside the QR Code"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center mt-3">
                        <div class="col-md-6 mb-3">
                            <div>
                                <h4>Quiet zone</h4>
                                <p>This is similar to the importance of white space in design, that is it offers
                                    structure and improves comprehension. For whom or what you may ask? For the scanning
                                    program. In order to distinguish the QR Code from its surroundings, the quiet zone
                                    is vital.</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <img class="img-fluid rounded-5 shadow mx-auto" src="fe/image/home/anatomy/quiet-zone.png"
                                alt="The quiet zone is important for the scanning program in order to distinguish the QR Code from its surroundings"
                                loading="lazy">
                        </div>
                    </div>

                </div>
            </section>

        </main>


        <footer class="bg-light"> <!--mt-auto sticky-bottom-->
            <div class="container">
                <ul class="nav justify-content-center pb-3">
                    <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="contact-us.php" class="nav-link px-2 text-muted">Contact Us</a>
                    </li>
                    <li class="nav-item"><a href="disclaimer.php" class="nav-link px-2 text-muted">Disclaimer</a>
                    </li>
                    <li class="nav-item"><a href="privacy-policy.php" class="nav-link px-2 text-muted">Privacy
                            Policy</a></li>
                    <li class="nav-item"><a href="terms-conditions.php" class="nav-link px-2 text-muted">Terms
                            &amp; Conditions</a></li>
                </ul>
                <div class="row align-items-center border-top py-3"> <!---->
                    <div class="col-lg-8 d-flex justify-content-lg-start justify-content-center align-items-center">
                        <a href="index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <img class="img-fluid rounded" style="height:32px;" src="fe/logo.svg"
                                alt="qr-codifier-qr-code-generator-logo">
                        </a>
                        <span class="mb-3 mb-md-0 text-muted">&copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> QR Codifier. All Rights Reserved. Developed &amp; Managed By <a
                                class="text-decoration-none text-dark fw-semibold" href="https://quancore.in/"
                                target="_blank" hreflang="en-in">Quancore</a>
                        </span>
                    </div>
                    <div class="col-lg-4">
                        <ul class="nav d-flex justify-content-lg-end justify-content-center list-unstyled">
                            <li class=""><a class="text-muted" href="javascript:;" target="_blank"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="ms-3"><a class="text-muted" href="javascript:;" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                            <li class="ms-3"><a class="text-muted" href="javascript:;" target="_blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="ms-3"><a class="text-muted" href="javascript:;" target="_blank"><i
                                        class="fab fa-linkedin"></i></a></li>
                            <li class="ms-3"><a class="text-muted" href="javascript:;" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->
    </div>
    <!--end sitewraper-->

    <script src="ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="fe/js/app.min.js"></script>



    <script type="text/javascript">
        $('#getQuoteForm').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var postData = new FormData(form[0]);
            $.ajax({
                url: 'https://qr-codifier.com/form-submit',
                type: "POST",
                data: postData,
                processData: false,
                contentType: false
            }).done(function(data) {
                if (data.status == true) {
                    Swal.fire("Success!", data.message, data.type);
                    // setTimeout(function() {$('#bulkCardQuote').modal('hide');}, 3000);
                    form[0].reset()
                }
                if (data.status == false) {
                    if (data.error == true) {
                        Swal.fire("Enter Proper Value!", data.message, data.type);
                    } else {
                        Swal.fire("Oops!", data.message, data.type);
                    }
                }
            });

        });

        $('#newsletterForm').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: 'https://qr-codifier.com/newsletter-submit',
                type: "POST",
                data: form.serialize()
            }).done(function(data) {
                if (data.status == true) {
                    Swal.fire("Success!", data.message, data.type);
                    // setTimeout(function() {$('#bulkCardQuote').modal('hide');}, 3000);
                    form[0].reset()
                }
                if (data.status == false) {
                    if (data.error == true) {
                        Swal.fire("Enter Proper Value!", data.message, data.type);
                    } else {
                        Swal.fire("Oops!", data.message, data.type);
                    }
                }
            });
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // Dynamic Qr Checkbox Value Add
        // document.addEventListener("DOMContentLoaded", function() {
        //     var checkbox = document.getElementById("is_gps_location");

        //     checkbox.addEventListener("change", function() {
        //         if (this.checked) {
        //             this.classList.add("selected");
        //         } else {
        //             this.classList.remove("selected");
        //         }
        //     });
        // });


        <?php
        if(!isset($_SESSION['username'])){ ?>
        var loginMdl = new bootstrap.Modal('#loginQR')
        var form = $('#createQRForm')
        var chkBoxRow = $('#chkBoxRow')
        const rowChkBoxes = document.querySelectorAll('#chkBoxRow input[type="checkbox"]')

        // document.addEventListener("DOMContentLoaded", function(e) {
        rowChkBoxes.forEach(function(rowChkBox) {
            rowChkBox.addEventListener('change', event => {
                if (rowChkBox.checked) {
                    loginMdl.show()
                }
            })
        })
        // })

        const pillEls = document.querySelectorAll('#createQRForm button[data-bs-toggle="pill"]')
        pillEls.forEach(function(pillEl) {
            pillEl.addEventListener('shown.bs.tab', event => {

                let _type = $(event.target).data('type')
                form.find('input#type').val(_type);

                if (['url', 'pdf', 'audio', 'video', 'image'].includes(_type)) {
                    form.find("#is_dynamic_qr").prop('checked', true); // Checks it
                } else {
                    form.find("#is_dynamic_qr").prop('checked', false); // Unchecks it
                }

                if (['url', 'pdf', 'audio', 'video', 'image'].includes(_type)) {
                    loginMdl.show()
                }
            })
        })

        const loginQR = document.getElementById('loginQR')
        loginQR.addEventListener('hidden.bs.modal', event => {
            const triggerPillEl = document.querySelector('#createQRForm button[data-bs-target="#pills-text"]')
            bootstrap.Tab.getInstance(triggerPillEl).show()

            rowChkBoxes.forEach(function(rowChkBox) {
                rowChkBox.checked = false;
            })
        })
        const signupQR = document.getElementById('signupQR')
        signupQR.addEventListener('hidden.bs.modal', event => {
            const triggerPillEl = document.querySelector('#createQRForm button[data-bs-target="#pills-text"]')
            bootstrap.Tab.getInstance(triggerPillEl).show()

            rowChkBoxes.forEach(function(rowChkBox) {
                rowChkBox.checked = false;
            })
        })
        <?php }else{
            // echo '<p>Baby No Script Required</p>';
        }
        ?>

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

                    // console.log("qrData = " + qrData);

                    if (formSubmitted) {
                        showErrorAndReload();
                    } else {
                        showSuccessMessage(qr, qrData);
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

            function showSuccessMessage(qr, qrData) {
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
                            data: qrData,
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
            // location.reload()
        })

        // Login
        // $('#loginForm').submit(function(e) {
        //     e.preventDefault();
        //     $.ajax({
        //             url: 'https://qr-codifier.com/ajax_login',
        //             type: "POST",
        //             data: $(this).serialize(),
        //         })
        //         .done(function(data) {
        //             if (data.status == true) {
        //                 swal("Success!", data.message, data.type);
        //                 loginMdl = new bootstrap.Modal('#loginQR')
        //                 loginMdl.hide()
        //             } else {
        //                 data.errors.forEach(function(error) {
        //                     error += error + '\n\r'
        //                 })
        //                 swal("Oops", data.message, data.type);
        //             }
        //         })
        //         .fail(function() {
        //             swal("Oops", "We couldn't connect to the server!", "error");
        //         })
        //         .always(function() {
        //             setTimeout(location.reload(), 6000)
        //         });
        // })

        // Signup
        // $('#signupForm').submit(function(e) {
        //     e.preventDefault();
        //     $.ajax({
        //             url: 'https://qr-codifier.com/ajax_register',
        //             type: "POST",
        //             data: $(this).serialize(),
        //         })
        //         .done(function(data) {
        //             if (data.status == true) {
        //                 swal("Success!", data.message, data.type);
        //                 signupMdl = new bootstrap.Modal('#signupQR')
        //                 signupMdl.hide()
        //             } else {
        //                 data.errors.forEach(function(error) {
        //                     error += error + '\n\r'
        //                 })
        //                 swal("Oops", data.message, data.type);
        //             }
        //         })
        //         .fail(function() {
        //             swal("Oops", "We couldn't connect to the server!", "error");
        //         })
        //         .always(function() {
        //             setTimeout(location.reload(), 6000)
        //         });
        // })
    </script>
</body>

</html>
