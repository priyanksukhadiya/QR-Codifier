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
    <title>FAQs - QR Codifier | QR Code Generator
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
                        <h3 class="text-white fw-bolder">FAQs</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        class='link-secondary link-opacity-75-hover text-decoration-none'
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>


            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="accordion" id="accFAQ">

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#coll2" aria-expanded="true" aria-controls="coll2">How to
                                            scan a QR Code?</button>
                                    </h2>
                                    <div id="coll2" class="accordion-collapse collapse show"
                                        aria-labelledby="accHead2" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>Nowadays, the newer versions of smartphones have an integrated QR
                                                    Code reader in the phone camera such as Bixby Vision for Samsung and
                                                    the iOS 11 operating system for Apple. But no worries. If your phone
                                                    does not have a QR Code reader, there are a plethora of options in
                                                    the app stores that are easy to download and use with just the touch
                                                    of a button. We prepared a guide for Android and iOS to make it
                                                    easier as well.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll3" aria-expanded="false"
                                            aria-controls="coll3">What is a Static and Dynamic QR Code?</button>
                                    </h2>
                                    <div id="coll3" class="accordion-collapse collapse"
                                        aria-labelledby="accHead3" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <h4>Static QR Code</h4>
                                                <p>
                                                    A Static QR Code contains information that is fixed and uneditable
                                                    once the Code has been generated. They are great for personal use
                                                    and for QR Code API, a key to creating large batches of Codes for
                                                    employee IDs, event badges, technical product documentation, and
                                                    much more.
                                                    <br>
                                                    On the other hand, and because of their fixed nature, they are not
                                                    ideal for businesses or marketing campaigns as Static Codes do not
                                                    track metrics or allow for editing post creation.
                                                </p>

                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>WiFi</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Make it easier for your friends and family to connect to your
                                                            home network, or for guests to access your business WiFi
                                                            with a simple scan of this QR Code.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>Bitcoin</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>By turning your Bitcoin or other crypto address into a QR
                                                            Code, you will smooth out your cryptocurrency transactions,
                                                            with the option of adding a label indicating the receiver
                                                            and amount requested.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>Plain Text</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Display up to 300 characters and the chance to offer your
                                                            customers any message in any language, regardless of
                                                            internet access.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>vCard</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>If you have printed business cards, share your email address,
                                                            phone number, website URL and your company details instantly
                                                            with a simple scan of a vCard Code.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>Email</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>You can provide customers with a convenient way to contact
                                                            you with this Code. A pre-filled message can be sent with
                                                            the simple tap of a button, with customers having the option
                                                            of also editing before sending it.</p>
                                                    </div>
                                                </div>


                                                <h4>Dynamic QR Code</h4>
                                                <p>On the other hand, Dynamic QR Codes allow you to update, edit and
                                                    change the type of the QR Code however many times you need, which
                                                    makes them the best fit for business and marketing purposes.
                                                    <br>
                                                    As we mentioned earlier when explaining the QR Code basics, the more
                                                    information you input into a Static QR Code, the bigger and more
                                                    complex the structure becomes. For a Dynamic Code, however, the
                                                    content you present to scanners is not directly contained in the
                                                    Code, but instead has a short redirection URL assigned to it. That
                                                    means the code remains small and is easier to integrate into your
                                                    print material and packaging design.
                                                    <br>
                                                    Capturing and measuring your advertising statistics each time a
                                                    Dynamic Code is scanned is, perhaps, the best feature for optimizing
                                                    marketing campaigns. You can have access to when, where, and with
                                                    what device a scan took place. You can add campaign info like
                                                    medium, start and end date, print run and you can even reset scans
                                                    and download results as a CSV report.
                                                </p>

                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>App Store</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Linking to multiple app stores with just one scan, it makes
                                                            the promotion and download of your mobile apps much more
                                                            efficient by reaching a wider target audience, regardless of
                                                            the scanner’s cellular operating system.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>PDF</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Digital magazines, brochures, eBooks, with this Code you can
                                                            simultaneously boost your marketing, save on printing costs,
                                                            and offer customers the chance to save and share documents
                                                            all from the palm of their hand.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>Social Media</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Share all of your social media platforms on a mobile-friendly
                                                            landing page. Whether it’s Twitter, Snapchat, YouTube or
                                                            Instagram, your audience can choose which platform to follow
                                                            you on.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>Coupon</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Remove the hassle of couponing for your customers with this
                                                            Code. With one scan, they can save your promotion to their
                                                            mobile devices, share it on social media or by email, and
                                                            redeem it with ease at your nearest location or online
                                                            store.</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <strong>Business Page</strong>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p>Let your audience get to know you a little better at their
                                                            own convenience. If you don’t have a website, then this QR
                                                            Code is the perfect, mobile-friendly platform to let
                                                            customers know your mission statement, how to reach you,
                                                            your physical store locations, opening hours and how to find
                                                            you with Google Maps. </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll4" aria-expanded="false"
                                            aria-controls="coll4">What is a QR code and why do I need one?</button>
                                    </h2>
                                    <div id="coll4" class="accordion-collapse collapse"
                                        aria-labelledby="accHead4" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>A QR code stands for ‘Quick Response Code’ and is a 2-dimensional
                                                    barcode type invented by Denso Wave in 1994. You can get more
                                                    information at Wikipedia. Today QR codes are used a lot to give a
                                                    digital dimension to a product or flyer that leads to a URL.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll5" aria-expanded="false"
                                            aria-controls="coll5">Can I switch from a static to a dynamic QR
                                            code?</button>
                                    </h2>
                                    <div id="coll5" class="accordion-collapse collapse"
                                        aria-labelledby="accHead5" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>No, once you select and make a static QR we cannot change it to a
                                                    Dynamic QR code. Static and dynamic QR codes are two different QR
                                                    code types.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead6">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll6" aria-expanded="false"
                                            aria-controls="coll6">How many times can my can my dynamic QR been
                                            scanned?</button>
                                    </h2>
                                    <div id="coll6" class="accordion-collapse collapse"
                                        aria-labelledby="accHead6" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>You can scan your dynamic QR codes as many times as you like until
                                                    your paid subscription expires.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead7">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll7" aria-expanded="false"
                                            aria-controls="coll7">Can I delete a dynamic QR code?</button>
                                    </h2>
                                    <div id="coll7" class="accordion-collapse collapse"
                                        aria-labelledby="accHead7" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>Yes, if you use it for less than 8 scans you can still delete it on
                                                    the track data page.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead8">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll8" aria-expanded="false"
                                            aria-controls="coll8">My QR code is not working, what can I do?</button>
                                    </h2>
                                    <div id="coll8" class="accordion-collapse collapse"
                                        aria-labelledby="accHead8" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>There are many reasons why a QR code is not working correctly. First
                                                    check your entered data. Sometimes there are little typos in your
                                                    URL that break your QR code. Make sure that there is enough contrast
                                                    between the background and foreground of the QR code. The foreground
                                                    should always be darker than the background.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead9">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll9" aria-expanded="false"
                                            aria-controls="coll9"> Can I save QR codes as a template and can I delete a
                                            template?</button>
                                    </h2>
                                    <div id="coll9" class="accordion-collapse collapse"
                                        aria-labelledby="accHead9" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>Yes, you can make a template, this saves you time next time you make
                                                    a QR code and you can easily delete your templates. Simply hover
                                                    over the template and a cross will appear to delete the template.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead10">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll10" aria-expanded="false"
                                            aria-controls="coll10">What is the best format for the logo of the QR
                                            code?</button>
                                    </h2>
                                    <div id="coll10" class="accordion-collapse collapse"
                                        aria-labelledby="accHead10" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>You can add a logo to your QR code; however it is important that your
                                                    logo is in a square format otherwise it might look stretched. It is
                                                    also important to note whether you upload your logo in JPEG or PNG
                                                    format. It is recommended to have a logo around 500KB to 1 MB.</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead11">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll11" aria-expanded="false"
                                            aria-controls="coll11">What is the best format for the logo of the QR
                                            code?</button>
                                    </h2>
                                    <div id="coll11" class="accordion-collapse collapse"
                                        aria-labelledby="accHead11" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>You can add a logo to your QR code; however it is important that your
                                                    logo is in a square format otherwise it might look stretched. It is
                                                    also important to note whether you upload your logo in JPEG or PNG
                                                    format. It is recommended to have a logo around 500KB to 1 MB.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead12">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll12" aria-expanded="false"
                                            aria-controls="coll12">Which colors should I avoid using in QR
                                            codes?</button>
                                    </h2>
                                    <div id="coll12" class="accordion-collapse collapse"
                                        aria-labelledby="accHead12" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>Light colors, such as yellow and pastel colors are not good for
                                                    scanning, so, it is best to use darker colors and a white
                                                    background.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead13">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll13" aria-expanded="false"
                                            aria-controls="coll13">How many free static QR codes can I make?</button>
                                    </h2>
                                    <div id="coll13" class="accordion-collapse collapse"
                                        aria-labelledby="accHead13" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>You can make as many static QR codes as you want; your QR code will
                                                    never expire and will be valid for a lifetime.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead14">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll14" aria-expanded="false"
                                            aria-controls="coll14">Can I make a File QR Code for a PDF, JPEG, PNG,
                                            Word, Excel?</button>
                                    </h2>
                                    <div id="coll14" class="accordion-collapse collapse"
                                        aria-labelledby="accHead14" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>You can make a file QR code as a PDF QR Code, Word QR Code, Excel QR
                                                    code or Video QR Code for your business, you can also make a Jpeg QR
                                                    code or a PNG QR code or any other image file.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead15">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll15" aria-expanded="false"
                                            aria-controls="coll15">Can a QR code have multiple links?</button>
                                    </h2>
                                    <div id="coll15" class="accordion-collapse collapse"
                                        aria-labelledby="accHead15" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>Yes, you can store multiple links in a single QR code. The Multi URL
                                                    QR code enables you to embed and redirect to multiple links based on
                                                    the time of scanning, the language synced in the device used in
                                                    scanning, the location of the scanner, and the total number of
                                                    scans.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead16">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll16" aria-expanded="false"
                                            aria-controls="coll16">Does QR Codifier QR code have ads?</button>
                                    </h2>
                                    <div id="coll16" class="accordion-collapse collapse"
                                        aria-labelledby="accHead16" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>We carry ads, but we are a professional QR software company. You can
                                                    remove ads by getting premium plan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead17">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll17" aria-expanded="false"
                                            aria-controls="coll17">If my subscription expires and I pay again will my
                                            data still be there?</button>
                                    </h2>
                                    <div id="coll17" class="accordion-collapse collapse"
                                        aria-labelledby="accHead17" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>Yes, if you pay to the same account then your data will still be
                                                    there.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead18">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll18" aria-expanded="false"
                                            aria-controls="coll18">Can a Wi-Fi QR code be dynamic?</button>
                                    </h2>
                                    <div id="coll18" class="accordion-collapse collapse"
                                        aria-labelledby="accHead18" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>No Wi-Fi QR codes can only be static as the user when he scans has no
                                                    internet connection. For dynamic QR codes the user needs to be
                                                    connected to the internet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead19">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll19" aria-expanded="false"
                                            aria-controls="coll19">Are the created qr codes expiring?</button>
                                    </h2>
                                    <div id="coll19" class="accordion-collapse collapse"
                                        aria-labelledby="accHead19" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>They do not expire and will work forever! QR Codes created with QR
                                                    Codifier are static and do not stop working after a certain time.
                                                    You just can’t edit the content of the QR Codes again.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead20">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll20" aria-expanded="false"
                                            aria-controls="coll20">Is there a scan limit for the QR codes?</button>
                                    </h2>
                                    <div id="coll20" class="accordion-collapse collapse"
                                        aria-labelledby="accHead20" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>There is no limit and the created QR code will work forever. Scan it
                                                    is many times as you wish!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="accHead21">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#coll21" aria-expanded="false"
                                            aria-controls="coll21">Can I use the generated QR Codes for commercial
                                            purposes?</button>
                                    </h2>
                                    <div id="coll21" class="accordion-collapse collapse"
                                        aria-labelledby="accHead21" data-bs-parent="#accFAQ">
                                        <div class="accordion-body">
                                            <div>
                                                <p>Yes, all QR codes you created with this QR generator are free and can
                                                    be used for whatever you want.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

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
                            href='about-us.php' title='create pdf qr code'>create pdf qr code</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='pdf qr code generator free'>pdf qr code generator free</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code creator'>QR code creator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Barcode generator'>Barcode generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='features.php' title='Free QR code generator'>Free QR code generator</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code scanner'>QR code scanner</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Dynamic QR codes'>Dynamic QR codes</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='Custom QR codes'>Custom QR codes</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='about-us.php' title='QR code reader'>QR code reader</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code software'>QR code software</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code design'>QR code design</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code marketing'>QR code marketing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='features.php' title='QR code tracking'>QR code tracking</a>
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
                            href='features.php' title='Best free QR code generator online'>Best free QR code
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
                            href='features.php' title='QR code generator for WiFi access and sharing'>QR code
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
                            href='about-us.php' title='Custom QR code generator with logo'>Custom QR code generator
                            with logo</a>
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
                            href='about-us.php' title='QR code maker'>QR code maker</a>
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
                            href='features.php' title='Dynamic URL QR code generator for digital marketing'>Dynamic
                            URL QR code generator for digital marketing</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='index.php' title='QR code generator with tracking and analytics for URLs'>QR code
                            generator with tracking and analytics for URLs</a>
                        <a class="btn btn-outline-secondary btn-sm rounded-pill shadow-sm border-0 py-0 mb-1"
                            href='about-us.php' title='QR code generator for offline URL sharing'>QR code generator
                            for offline URL sharing</a>
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
                            href='about-us.php' title='File-to-QR code converter'>File-to-QR code converter</a>
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
                            href='about-us.php' title='PDF-to-Barcode generator'>PDF-to-Barcode generator</a>
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
