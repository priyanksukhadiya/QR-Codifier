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
    <title>About Us - QR Codifier | QR Code Generator
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
                        <li class="nav-item"><a href="contact-us.php" class="nav-link px-3 fw-semibold">Contact Us</a></li>
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
                        <h3 class="text-white fw-bolder">About Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        class='link-secondary link-opacity-75-hover text-decoration-none'
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
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
                                <h3>About Us</h3>
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
                                <p>This QR code generator is a gift to the Internet community brought to you by Andreas
                                    Haerter and Andreas Wolf. QR codes created on qr-codifier.com are completely free of
                                    charge (commercial and print usage allowed, including advertising). Many other sites
                                    charge similar services and/or do not respect your privacy. Therefore we have to
                                    count on the support of our users.</p>
                                <p>The easiest way to help us to keep this online for free is to link to us on your
                                    website or to recommend us on Facebook, Twitter or Instagram. Or buy us a coffee.
                                    :-)</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-8 text-center mx-auto mb-3">
                            <h3 class='fw-semibold'>The Professional QR Code Management Platform</h3>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <h5>Dynamic QR Codes</h5>
                            <p class='text-muted'>Edit and change your QR codes anytime.</p>

                            <h5>Scan Statistics</h5>
                            <p class='text-muted'>Track your QR codes and get insights about scans.</p>

                            <h5>Bulk Creation and Editing</h5>
                            <p class='text-muted'>Create and edit many QR codes in no time.</p>

                            <h5>Campaign Folders</h5>
                            <p class='text-muted'>Structure and organize your QR codes in campaign folders.</p>

                            <h5>More Design Options</h5>
                            <p class='text-muted'>Create transparent QR codes and reusable design templates.</p>
                            <div class="w-100 py-3 mb-2">
                                <a class="btn btn-dark rounded-pill shadow me-3" href="index.php">Create QR Code</a>
                                <a class="btn btn-light rounded-pill shadow me-3" href="login.php">Login or
                                    Register</a><br>
                            </div>
                            <a class="link-secondary" href="features.php">Know More Features of QR Code</a>

                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <img src="fe/image/about/5.jpg" class="img-fluid rounded-5 shadow p-3"
                                alt="qr-codifier-about">
                        </div>
                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;background-color: var(--bs-gray-200);">
                <div class="container">
                    <div class="row">
                        <div class="col-8 text-center mx-auto mb-3">
                            <h3 class='fw-semibold'>Get Started</h3>
                            <p>Create your custom QR Code with Logo</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card bg-light rounded-0 shadow w-100 h-100">
                                <div class="card-body">
                                    <h5>Set QR Content</h5>
                                    <p>Select a content type at the top for your QR code (URL, Text, Email...). After
                                        selecting your type you will see all available options. Enter all fields that
                                        should appear when scanning your QR code. Make sure everything you enter is
                                        correct because you can’t change the content once your QR code is printed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card bg-light rounded-0 shadow w-100 h-100">
                                <div class="card-body">
                                    <h5>Customize Design</h5>
                                    <p>You want your QR code to look unique? Set a custom color and replace the standard
                                        shapes of your QR code. The corner elements and the body can be customized
                                        individually. Add a logo to your QR code. Select it from the gallery or upload
                                        your own logo image. You can also start with one of the templates from the
                                        template gallery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card bg-light rounded-0 shadow w-100 h-100">
                                <div class="card-body">
                                    <h5>Generate QR Code</h5>
                                    <p>Set the pixel resolution of your QR code with the slider. Click the "Create QR
                                        Code"-button to see your qr code preview. Please make sure your QR code is
                                        working correctly by scanning the preview with your QR Code scanner. Use a high
                                        resolution setting if you want to get a png code with print quality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2 my-md-3">
                            <div class="card bg-light rounded-0 shadow w-100 h-100">
                                <div class="card-body">
                                    <h5>Download Image</h5>
                                    <p>Now you can download the image files for your QR code as .png or .svg, .pdf, .eps
                                        vector graphic. If you want a vector format with the complete design please
                                        choose .svg. SVG is working in software like Adobe Illustrator or Inkscape. The
                                        logo and design settings currently only work for .png and .svg files.</p>
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
                            href='faqs.php' title='create pdf qr code'>create pdf qr code</a>
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
                            href='faqs.php' title='QR code reader'>QR code reader</a>
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
                            href='features.php' title='Dynamic URL QR code generator for digital marketing'>Dynamic
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
