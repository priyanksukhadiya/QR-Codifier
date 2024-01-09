<?php
require_once 'db-connection.php';

?>
<!DOCTYPE html>
<html lang="en-IN" dir="ltr" itemscope="" itemtype="http://schema.org/WebPage" prefix="og: https://ogp.me/ns#">

<head prefix="baseURL: http://localhost/qr-codifier/ns#">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>Features - QR Codifier | QR Code Generator
    </title>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="css2?family=Bakbak+One&family=Figtree:wght@300;400;500;600;700;800;900&family=Flow+Block&family=Flow+Circular&family=Flow+Rounded&family=Radio+Canada:wght@300;400;600&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="fe/fonts/fontawesome-free-6.2.0/css/all.min.css">
    <link rel="stylesheet" href="fe/css/app.min.css">
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
                        <!-- <li class="nav-item">
                            <div class="btn-group">
                                <button type="button"
                                    class="btn btn-secondary shadow-sm rounded-pill ms-0 ms-md-3 px-3 dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Priyanksalakmalak </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="dash.php">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="index.php">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>
                </div>

            </div>
        </header>


        <main>
            <section class="bg-dark" style="padding:150px 0 60px 0;">
                <div class="container">
                    <div class="row">
                        <h3 class="text-white fw-bolder">Features</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        class='link-secondary link-opacity-75-hover text-decoration-none'
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Features</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>


            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-8 text-center mx-auto mb-3">
                            <h3 class="fw-semibold">Common uses of QR Codes</h3>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Boost app downloads</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">QR Code example on a billboard ad for a
                                        retail company</h6>
                                    <p class="card-text">Chick-fil-A saw a 14% boost in downloads of their mobile app
                                        by advertising it on digital signage with a QR Code. By linking to multiple app
                                        stores, the App Store QR Code makes it easy for customers to download your app
                                        by linking to Apple App Store, Google Play Store or Amazon Appstore. From the
                                        mobile-friendly page, you can also include a link to a video trailer or website
                                        with a personalized button.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Redeeming coupons made easy</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">QR Code idea on a large poster inside a
                                        retail shop</h6>
                                    <p class="card-text">It’s the holiday season and you have a big sale to promote.
                                        The Coupon QR Code is perfect to help you optimize your coupon campaign by
                                        allowing customers to simply scan and instantly save or use your coupon. They
                                        can email it to themselves and share it with friends on social media or anywhere
                                        online. By saving it to their phone, customers never forget to bring their
                                        coupons to be redeemed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Get more followers</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">QR Code example on a store window of a
                                        restaurant</h6>
                                    <p class="card-text">If you want to make sure people are up to date on their
                                        favorite platforms with all your latest news, add a Social Media QR Code to your
                                        storefront window or flyers. With just one scan, they can directly connect to
                                        either your Twitter or Instagram.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Give voice to your customers</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">QR Code idea on a table tent in a hotel
                                        room</h6>
                                    <p class="card-text">There is often no easy way to receive feedback from customers,
                                        and even when they do give it, businesses are often left with a pile of forms to
                                        sort through and organize. But that is no longer necessary. With the Feedback QR
                                        Code, you now have a convenient way to collect customer reviews and information
                                        directly to your chosen email address. Divided into categories and
                                        subcategories, you can easily update the information any time based on the
                                        product or service you want to hear the most about.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Amplify your events</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">QR Code idea on a billboard ad to promote
                                        a new book launch</h6>
                                    <p class="card-text">With the Event QR Code, you can help your event marketing
                                        efforts succeed in generating more attendees. By offering additional information
                                        with the Code, you ensure potential leads can save your event dates on their
                                        favorite mobile calendar, link to Google Maps for directions, and register or
                                        purchase tickets in advance in order to simplify planning.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-8 text-center mx-auto mb-3">
                            <h3 class="fw-semibold">QR Codifier benefits you’ll enjoy across Premium</h3>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Foster brand loyalty</h5>
                                    <p class="card-text">Customize or create your own short URL to build brand
                                        awareness.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Unleash your style</h5>
                                    <p class="card-text">Use brand colors and add company logo to stand out from your
                                        competition.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Collaborate securely</h5>
                                    <p class="card-text">Invite other team members, complete with their own logins.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Measure success</h5>
                                    <p class="card-text">Track where, when, and how many people scan your QR Codes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Print in high-quality</h5>
                                    <p class="card-text">Your QR Codes stay in high-resolution no matter what.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 my-2 my-md-3">
                            <div class="card w-100 h-100 border-0 shadow rounded-5">
                                <div class="card-body">
                                    <h5 class="card-title">Keep organized</h5>
                                    <p class="card-text">Label your QR Codes, create folders, and add campaign info to
                                        keep them nice and tidy.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;background-color: var(--bs-gray-200);">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <img src="fe/image/about/5.jpg" class="img-fluid rounded-5 shadow p-3"
                                alt="qr-codifier-about">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div>
                                <h2 class='fw-bold mb-4'>The QR Code</h2>
                                <p>2D barcodes (a group of barcodes the QR code belongs to) are comparable to common,
                                    one-dimensional bar codes as they are e.g. used on the product packaging at the
                                    grocery store. However, QR graphics are able to store much more data, they can
                                    include over 3000 characters on a very small space. To create one, the information
                                    gets encoded according to ISO/IEC 18004:2006 by a QR generator like ours. The high
                                    data density compared to simple barcodes, the licensing policy of the QR developer /
                                    creator Denso Wave plus the wide availability of reading software has helped the QR
                                    code to establish itself and pushed technically comparable 2D codes out of the
                                    market .</p>
                                <p>The most prominent use-case for QR code is the area of mobile marketing. Because
                                    there is free QR code software to read QR codes for almost every smartphone with a
                                    camera (e.g. iPhone, Google Android, Blackberry, Symbian), QR codes are used as a
                                    link between offline media such as paper and websites. The user just needs to scan
                                    the code instead of typing long, unpleasant web addresses. The intended use of QR
                                    codes and for devices without Internet access is mostly limited to the import of
                                    business contacts and address data (vCards), trigger phone calls or text messages .
                                    In particular, QR code business cards are perfect to enable others an easy and
                                    typo-free import of your own contact details. Just print a vCard QR code on your
                                    business card.</p>

                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <div>

                                <h4 class='fw-semibold mt-3'>QR Code with Logo / Image</h4>
                                <p>With QR Codifier it is very simple and straightforward to add a logo to your QR Code.
                                    The QR codes are still readable. Every QR code can have an error correction up to
                                    30%. This means 30% of the QR code (excluding the corner elements) can be removed
                                    and the QR code is still working. We can put a logo image on the QR code that covers
                                    up to 30%. To get more scans with every QR code you generate, you can upload an
                                    image or logo using the QR Codifier and customize your QR code design. Branded QR
                                    codes get up to 40% more scans than traditional black and white QR codes. As a way
                                    for people to trust your QR code more, adding a logo to it is a necessity for
                                    brands. The QR code standard includes a sophisticated error correction technique
                                    (Reed–Solomon error correction). Therefore, it is possible to style some parts of QR
                                    codes.</p>

                                <h4 class='fw-semibold mt-3'>QR Code with Design / Style</h4>
                                <p>Make your QR code look really unique with our design and color options. You can
                                    customize the shape and form of the corner elements and the body of the QR code. You
                                    can also set your own colors for all QR code elements. Add a gradient color to the
                                    QR code body and make it really stand out. Attractive QR codes can increase the
                                    amount of scans. Beside QR codes with logo, there are also so called Design QR
                                    codes. QR codes with design are even more modified, they provide a more artsy look
                                    than just an image-logo placed in the center of a QR code. The increased
                                    attractiveness of QR codes with design invites your users to scan the code even more
                                    than with a simple logo.</p>

                                <h4 class='fw-semibold mt-3'>Track Data</h4>
                                <p>Data is an important part of your business operations, without it you will lose many
                                    opportunities for your enterprise endeavors. With dynamic QR codes you can always
                                    track important scanning information and adjust all your campaigns instantly by
                                    updating its content. You can track data as time of scan, number of scan, location
                                    and device type (iPhone/ android).</p>

                                <h4 class='fw-semibold mt-3'>Dynamic QR Codes</h4>
                                <p>If you use QR codes to expand your marketing scope, then the use of Dynamic QR codes
                                    is the best QR code type that you can apply! With it, you can instantly change the
                                    URL or content behind your QR code without needing to create a new set of codes.
                                    Thus, making it a great investment that saves you money and time on printing. Many
                                    brands already use dynamic QR codes for A/B marketing and to update their marketing
                                    campaigns when they need.</p>

                                <h4 class='fw-semibold mt-3'>High Resolution QR Codes for Print</h4>
                                <p>QR Codifier offers print quality QR codes with high resolutions. When creating your
                                    QR code set the pixel size to the highest resolution to create .png files in print
                                    quality. You can also download vector formats like .svg, .eps, .pdf for best
                                    possible quality. We recommend the .svg format because it includes all design
                                    settings and gives you the perfect print format that can be used with most vector
                                    graphic software.</p>

                                <h4 class='fw-semibold mt-3'>Free for commercial usage</h4>
                                <p>All generated QR codes are 100% free and can be used for whatever you want. This
                                    includes all commercial purposes.</p>

                                <div class="w-100 py-3 mb-2">
                                    <a class="btn btn-dark rounded-pill shadow me-3" href="index.php">Create QR
                                        Code</a>
                                    <a class="btn btn-light rounded-pill shadow me-3" href="login.php">Login or
                                        Register</a><br>
                                </div>
                                <a class="link-secondary" href="faqs.php">If you have any question, please go to
                                    <strong>FAQs</strong></a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-8 text-center mx-auto mb-3">
                            <h3 class='fw-semibold'>Get Started</h3>
                            <p class="text-muted">Create your custom QR Code with Logo</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Update your QR Codes dynamically</h5>
                                    <p class="text-muted">Your marketing campaigns are evolving and your QR Codes
                                        cannot be pointing to the same destination URL forever. Update them in real-time
                                        without having to reprint them.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Track QR Code scans</h5>
                                    <p class="text-muted">Analyze the scan location of your QR Codes to improve global
                                        campaigns. Beaconstac’s QR Code generator adds a layer of accuracy by enabling
                                        GPS location.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Create QR Codes as a bulk operation</h5>
                                    <p class="text-muted">Upload a list of upto 2,000 URLs to the QR Code generator and
                                        instantly download QR Codes for them. Not just that, you can perform a list of
                                        bulk operations on your QR Codes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Organize & manage QR Codes your way</h5>
                                    <p class="text-muted">Beaconstac’s QR Code generator allows you to sort and filter
                                        QR Codes based on teams, campaigns, stages, or anything that helps you organize
                                        work better.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Improve performance with scan scores</h5>
                                    <p class="text-muted">Beaconstac’s QR Code solution makes sure you never deploy a
                                        QR Code that doesn’t scan. With real-time scannability scores, you always know
                                        when you approach low scannability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Extend global reach with multilingual QR</h5>
                                    <p class="text-muted">Deliver QR Code information in the user’s preferred language
                                        - English, Spanish, French, or anything else. Works best for global brands
                                        addressing a global audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Protect your users with safe QR Codes</h5>
                                    <p class="text-muted">The Beaconstac shield identifies inconsistencies in user scan
                                        behavior, detects phishing URLs, and maintains data sanity. We’re the only SOC-2
                                        compliant QR solution on the planet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card rounded-5 shadow border-0 w-100 h-100">
                                <div class="card-body">
                                    <h5 class=''>Manage your brand assets in one place</h5>
                                    <p class="text-muted">We understand a single account can be used by multiple team
                                        members or even different teams. Maintain brand consistency by uploading shared
                                        assets that can be re-used.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 p-3">
                            <p>Keep your contact details always up-to-date without reprinting and redistributing your
                                business cards. QR Codes on business cards make it seamless for your users to get in
                                touch with you. It’s as easy as scan - save details - contact.</p>

                            <p>In addition to delivering your contact details, you can also use a QR Code on your
                                business card linking to:</p>
                            <ul>
                                <li>Your business page or website</li>
                                <li>Your Facebook or other social media pages</li>
                                <li>A video content that can be bookmarked</li>
                                <li>A lead generation form</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <section class="" style="padding:60px 0;background-color: var(--bs-gray-300);">
            <div class="container">
                <div class="row">
                    <div class='col-12'>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='qr code generator free online'>qr code generator free online</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='free qr code generator no sign up'>free qr code generator no sign
                            up</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='best free qr code generator'>best free qr code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='faqs.php' title='create pdf qr code'>create pdf qr code</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='pdf qr code generator free'>pdf qr code generator free</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code creator'>QR code creator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Barcode generator'>Barcode generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='about-us.php' title='Free QR code generator'>Free QR code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code scanner'>QR code scanner</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Dynamic QR codes'>Dynamic QR codes</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Custom QR codes'>Custom QR codes</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='faqs.php' title='QR code reader'>QR code reader</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code software'>QR code software</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code design'>QR code design</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code marketing'>QR code marketing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='about-us.php' title='QR code tracking'>QR code tracking</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code analytics'>QR code analytics</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code printing'>QR code printing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Bulk QR code generation'>Bulk QR code generation</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Mobile marketing with QR codes'>Mobile marketing with QR codes</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='free qr code generator'>free qr code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='text qr code generator'>text qr code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='URL qr code generator'>URL qr code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='file qr code generator'>file qr code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='pdf qr code generator'>pdf qr code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='image qr code generator'>image qr code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='about-us.php' title='Best free QR code generator online'>Best free QR code
                            generator online</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Custom QR code generator for business'>Custom QR code generator
                            for business</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Dynamic QR code generator for marketing campaigns'>Dynamic QR code
                            generator for marketing campaigns</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with logo and design customization'>QR code
                            generator with logo and design customization</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Bulk QR code generator for product labeling'>Bulk QR code
                            generator for product labeling</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php'
                            title='High-resolution QR code generator for print materials'>High-resolution QR code
                            generator for print materials</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with analytics and tracking features'>QR code
                            generator with analytics and tracking features</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for mobile app downloads'>QR code generator for
                            mobile app downloads</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for event ticketing and registration'>QR code
                            generator for event ticketing and registration</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for contactless payments'>QR code generator for
                            contactless payments</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='about-us.phptitle='QR code generator for WiFi access and sharing'>QR code
                            generator for WiFi access and sharing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Offline QR code generator for secure data transfer'>Offline QR
                            code generator for secure data transfer</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for social media links and sharing'>QR code
                            generator for social media links and sharing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php'
                            title='Multi-language QR code generator for global audience'>Multi-language QR code
                            generator for global audience</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Reliable QR code generator for enterprise use'>Reliable QR code
                            generator for enterprise use</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Free QR code generator for website'>Free QR code generator for
                            website</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='faqs.php' title='Custom QR code generator with logo'>Custom QR code generator with
                            logo</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='High-quality QR code generator online'>High-quality QR code
                            generator online</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Dynamic QR code generator for marketing'>Dynamic QR code generator
                            for marketing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with tracking and analytics'>QR code generator
                            with tracking and analytics</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Offline QR code generator for secure data transfer'>Offline QR
                            code generator for secure data transfer</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Bulk QR code generator for product labeling'>Bulk QR code
                            generator for product labeling</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with advanced features'>QR code generator with
                            advanced features</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for mobile apps'>QR code generator for mobile
                            apps</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Professional QR code generator for business'>Professional QR code
                            generator for business</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='faqs.php' title='QR code maker'>QR code maker</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Barcode generator'>Barcode generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code creator'>QR code creator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code scanner'>QR code scanner</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code printer'>QR code printer</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code software'>QR code software</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code designer'>QR code designer</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code marketing'>QR code marketing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code analytics'>QR code analytics</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Text-to-QR code converter'>Text-to-QR code converter</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Text-to-Barcode generator'>Text-to-Barcode generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for text messages'>QR code generator for text
                            messages</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Custom URL QR code generator for links'>Custom URL QR code
                            generator for links</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='about-us.php' title='Dynamic URL QR code generator for digital marketing'>Dynamic
                            URL QR code generator for digital marketing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with tracking and analytics for URLs'>QR code
                            generator with tracking and analytics for URLs</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='faqs.php' title='QR code generator for offline URL sharing'>QR code generator for
                            offline URL sharing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for URL shortening'>QR code generator for URL
                            shortening</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='URL-to-QR code converter'>URL-to-QR code converter</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for links'>QR code generator for links</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='URL-to-Barcode generator'>URL-to-Barcode generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for digital marketing'>QR code generator for
                            digital marketing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Custom file QR code generator for digital assets'>Custom file QR
                            code generator for digital assets</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='High-quality file QR code generator online'>High-quality file QR
                            code generator online</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Dynamic file QR code generator for document sharing'>Dynamic file
                            QR code generator for document sharing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with tracking and analytics for files'>QR code
                            generator with tracking and analytics for files</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='faqs.php' title='File-to-QR code converter'>File-to-QR code converter</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for documents'>QR code generator for
                            documents</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='File-to-Barcode generator'>File-to-Barcode generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for file sharing'>QR code generator for file
                            sharing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Custom PDF QR code generator for documents'>Custom PDF QR code
                            generator for documents</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='High-quality PDF QR code generator online'>High-quality PDF QR
                            code generator online</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Dynamic PDF QR code generator for marketing collateral'>Dynamic
                            PDF QR code generator for marketing collateral</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with tracking and analytics for PDFs'>QR code
                            generator with tracking and analytics for PDFs</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='PDF-to-QR code converter'>PDF-to-QR code converter</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for PDF files'>QR code generator for PDF
                            files</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='faqs.php' title='PDF-to-Barcode generator'>PDF-to-Barcode generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator for marketing collateral'>QR code generator for
                            marketing collateral</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Custom image QR code generator for graphics'>Custom image QR code
                            generator for graphics</a>

                    </div>
                </div>
            </div>
        </section>
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
                    <li class="nav-item"><a href="terms-conditions.php" class="nav-link px-2 text-muted">Terms &amp;
                            Conditions</a></li>
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
                url: 'http://localhost/qr-codifier/form-submit',
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
                url: 'http://localhost/qr-codifier/newsletter-submit',
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
</body>

</html>
