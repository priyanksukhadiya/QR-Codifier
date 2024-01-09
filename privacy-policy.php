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
    <title>Privacy Policy - QR Codifier</title>

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
                    </ul>
                </div>

            </div>
        </header>


        <main>
            <section class="bg-dark" style="padding:150px 0 60px 0;">
                <div class="container">
                    <div class="row">
                        <h3 class="text-white fw-bolder">Privacy Policy</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        class='link-secondary link-opacity-75-hover text-decoration-none'
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div>
                                <p>Welcome to <strong>QR Codifier</strong>! With this privacy policy, we declare a
                                    promise to the privacy and security of our users and visitors. </p>
                                <p>
                                    The following text states how the site collects users' information and uses them
                                </p>
                                <p>
                                    Our privacy policy will be constantly improved. Along with the expansion of the
                                    site's service, we will update the policy accordingly. At the time of your
                                    registration as a member of the site, you have agreed to use and disclose your
                                    personal information in accordance with the privacy policy.
                                </p>

                                <h4>Username and password</h4>
                                <p>
                                    When you intend to register as a member, you are required to choose an user name and
                                    set password. You will need the password to log your account in to the site. If you
                                    accidently leak the password, you may lose your personal identification information,
                                    which may lead to adverse consequences for you. In order to ensure the safety of
                                    your account, when you change your password, we will send related link to your
                                    registered email address. The password can only be changed by clicking the link.
                                </p>


                                <h4>Registration information</h4>
                                <p>
                                    When you are registering as a member of QR Codifier, you will be required to fill in
                                    related registration information, including user's true name nationality, phone
                                    number, email address, company name and company website, etc. In addition, if you
                                    are registered as an exhibitor, you will be required to provide complete company
                                    verification information, which contains company name business license, address,
                                    phone number, website and brief introduction of company's products and service, etc.
                                    QR Codifier obtains member statistics through registration information. We will use
                                    these statistics to classify our members, such as products, industries and
                                    countries, so as to provide new service and opportunities to our members to the
                                    point.
                                    The site will inform you of these new service and opportunities by mails.
                                </p>

                                <h4>Your use behavior</h4>
                                <p>
                                    We track IP address to identify the authenticity of the users' identity, product
                                    displaying and inquiry interaction, in order to ensure the security and meet other
                                    requirements by national laws. If there is no security issue found, the site will
                                    delete the IP address we collected sixty days later. We also track daily page
                                    visiting datas, which reflect the site's traffic and helps us make plans for future
                                    development and improve our service (e.g., add website servers). Other datas from
                                    your daily product displaying and inquiry interaction will be used to analyze and
                                    classify the members, which helps us provide new service and opportunities to our
                                    members to the point. The site will inform you of these new service and
                                    opportunities by mails.<br><br>

                                    <b>Automatic information collection:</b><br>
                                    QR Codifier may automatically receive and record your browser and computer
                                    information, which includes your IP address, cookies information, software and
                                    hardware features and record of the webpage you browsed.
                                </p>

                                <h4>The use of cookies</h4>
                                <p>
                                    Cookies are small datas which sent to your browser and stored in your computer when
                                    you use the site, if you didn't refuse to accept cookies. We use cookies to store
                                    the related information about your visit to our site. When you first visit or repeat
                                    visit QR Codifier, we can identify you and provide you with better service based on
                                    the analysis of these datas. You have right to choose to accept or reject cookies.
                                    You can modify your browser's settings to reject them, but we need to remind you
                                    that you may not be able to use part of our website that relies on cookies due to
                                    your rejection of these cookies.
                                </p>

                                <h4>Disclosure and use of information</h4>
                                <p>
                                    We're not going to provide, sell, rent, share or trade users' personal information
                                    to any unrelated third parties. However, for your better use of the service of QR
                                    Codifier platform, QR Codifier associated companies and other organizations
                                    (hereinafter refer to as other service), you agree and authorize QR Codifier to
                                    transfer your personal information to QR Codifier associated companies and other
                                    organizations which you agreed to be served by, or QR Codifier can obtain your
                                    personal information from QR Codifier associated companies and other organizations
                                    which you've been served by. We will carry out comprehensive statistics analysis on
                                    the datas of your company's and your identity, product displaying and inquiry
                                    interaction on the site. In addition, QR Codifier may disclosure the statistics to
                                    the advertising party based on appropriate purpose and use. But in these cases, we
                                    will not disclosure any information which may be used to identify users' personal
                                    identity. However, those information which can be obtained based on analysis of
                                    username and other free-to-disclosure data are not subject to this restriction.
                                </p>
                                <ul style="list-style:decimal;">
                                    <li>You agree that we can disclose or use your personal information to identify and
                                        (or) to confirm your identity, or to resolve the dispute, or to help ensure site
                                        security, limit fraud and illegal or other criminal activities, to guarantee our
                                        service quality.</li>
                                    <li>You agree that we may disclose or use your personal information to protect the
                                        security of your life and property or in need of avoiding serious infringement
                                        of the legitimate rights and interests of others or public interests.</li>
                                    <li>You agree that we can disclose or use your personal information to improve our
                                        service and make it further meets your requirements, so that you can get a
                                        better using experience on our platform.</li>
                                    <li>You agree to receive electronic communication messages from us. We will
                                        communicate with you in various ways,such mails, shortmessages, push
                                        notification or issuing notice and messages (e.g., our message box) through the
                                        site or other QR Codifier associated organization service. You also agree that
                                        all the agreements, notification or other published information that we send to
                                        you via emails are equally legal effective as those in the form of writing on
                                        paper as required by the law. If we send you the notification or messages
                                        through emails or other electronic forms, it will be deemed that you have
                                        received all the agreements, statement and other published information.</li>
                                </ul>

                                <p>
                                    Our site published the product information and business opportunities provided by
                                    our users. And other users can see and inquire about these information on the site.
                                    <br>
                                    When we are obliged by law or in accordance with the requirements of the government
                                    as well as the obliges, in order to identify suspicious infringement of users'
                                    rights, we will disclose your information with good intensions.
                                </p>

                                <h4>Storage and exchange of information</h4>
                                <p>
                                    The collected user information and data will be stored on the server of QR Codifier
                                    platform and its associated companies.
                                </p>

                                <h4>External links</h4>
                                <p>
                                    This site contains links to other websites. QR Codifieris not responsible for the
                                    privacy protection of these sites. We may increase websites of business partners or
                                    shared brands at any time if necessary.
                                </p>
                                <h4>Children's Privacy </h4>
                                <p>
                                    Protecting the privacy of every minor is especially important to us. The Site is not
                                    structured to attract minor children under eighteen (18) years. Accordingly, we do
                                    not intend to collect Personal Information from anyone we know to be under 18 years.
                                </p>
                                <h4>Third Party Links</h4>
                                <p>
                                    As a matter of convenience to you, the Site may provide links and hyperlinks to
                                    third party advertisements as well as provide links and hyperlinks to external
                                    Internet sites. The listing of an external site does not imply endorsement of such
                                    site by us. We do not make any representations regarding the availability and
                                    performance of the Site or any of the external sites which could be provided. If You
                                    click on any advertising banner, sponsor link, or other external link from the Site,
                                    your browser may automatically direct you to a new browser window that is not hosted
                                    or controlled by us and we are not responsible for the content, terms of use,
                                    privacy policies and practices of other websites functionality, or technological
                                    safety of these external sites.
                                </p>


                                <h4>Displayed product information</h4>
                                <p>
                                    The company and product information you displayed will be shown in public areas on
                                    the site, which is accessible to all the users. Please note that all the information
                                    displayed in these areas will be public.Careful consideration is recommended when
                                    you display your personal and product information.
                                </p>

                                <h4>Contacting Us </h4>
                                <p>
                                    We will address any questions, comments and concerns about our online privacy and
                                    policy. Please write to us at info@qr-codifier.com
                                </p>

                            </div>
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
