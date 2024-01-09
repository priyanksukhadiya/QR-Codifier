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
    <title>Terms and Conditions - QR Codifier</title>

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
                        <h3 class="text-white fw-bolder">Terms &amp; Conditions</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        class='link-secondary link-opacity-75-hover text-decoration-none'
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Terms &amp; Conditions</li>
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
                                <p>Please read the following terms and conditions very carefully as your use of service
                                    is subject to your acceptance of and compliance with the following terms and
                                    conditions ("Terms").</p>
                                <p>
                                    By subscribing to or using any of our services you agree that you have read,
                                    understood and are bound by the Terms, regardless of how you subscribe to or use the
                                    services. If you do not want to be bound by the Terms, you must not subscribe to or
                                    use our services.</p>
                                <p>
                                    In these Terms, references to "you", "User" shall mean the end user accessing the
                                    Website, its contents and using the Services offered through the Website. "Service
                                    Providers" mean independent third party service providers, and "we", "us" and "our"
                                    shall mean QR Codifier, its franchisor, affiliates and partners.</p>
                                <br>
                                <h4>Introduction</h4>
                                <ul style="list-style:decimal;">
                                    <li>www.qr-codifier.com website ("Website") is an Internet based content by Quancore
                                        Softech. A company incorporated under the laws of India.</li>
                                    <li>Use of the Website is offered to you conditioned on acceptance without
                                        modification of all the terms, conditions and notices contained in these Terms,
                                        as may be posted on the Website from time to time. QR Codifier its sole
                                        discretion reserves the right not to accept a User from registering on the
                                        Website without assigning any reason thereof.</li>
                                </ul>
                                <h4>User Account, Password, and Security</h4>
                                <p>You will receive a password and account designation upon completing the Website's
                                    registration process. You are responsible for maintaining the confidentiality of the
                                    password and account, and are fully responsible for all activities that occur under
                                    your password or account. You agree to (a) immediately notify QR Codifier of any
                                    unauthorized use of your password or account or any other breach of security, and
                                    (b) ensure that you exit from your account at the end of each session. QR Codifier
                                    cannot and will not be liable for any loss or damage arising from your failure to
                                    comply with this Section.</p>
                                <h4>Limited User</h4>
                                <p>
                                    The User agrees and undertakes not to reverse engineer, modify, copy, distribute,
                                    transmit, display, perform, reproduce, publish, license, create derivative works
                                    from, transfer, or sell any information or software obtained from the Website.
                                    Limited reproduction and copying of the content of the Website is permitted provided
                                    that QR Codifier name is stated as the source and prior written permission of QR
                                    Codifier is sought. For the removal of doubt, it is clarified that unlimited or
                                    wholesale reproduction, copying of the content for commercial or non-commercial
                                    purposes and unwarranted modification of data and information within the content of
                                    the Website is not permitted.</p>
                                <h4>User Conduct and Rules</h4>
                                <p>
                                    You agree and undertake to use the Website and the Service only to post and upload
                                    messages and material that are proper. By way of example, and not as a limitation,
                                    you agree and undertake that when using a Service, you will not:</p>
                                <ul style="list-style:decimal;">
                                    <li>Defame, abuse, harass, stalk, threaten or otherwise violate the legal rights of
                                        others</li>
                                    <li>Publish, post, upload, distribute or disseminate any inappropriate, profane,
                                        defamatory, infringing, obscene, indecent or unlawful topic, name, material or
                                        information;</li>
                                    <li>Upload files that contain software or other material protected by intellectual
                                        property laws unless you own or control the rights thereto or have received all
                                        necessary consents; 4. upload or distribute files that contain viruses,
                                        corrupted files, or any other similar software or programs that may damage the
                                        operation of the Website or another's computer;</li>
                                    <li>Conduct or forward surveys, contests, pyramid schemes or chain letters;</li>
                                    <li>Download any file posted by another user of a Service that you know, or
                                        reasonably should know, cannot be legally distributed in such manner;</li>
                                    <li>Falsify or delete any author attributions, legal or other proper notices or
                                        proprietary designations or labels of the origin or source of software or other
                                        material contained in a file that is uploaded;</li>
                                    <li>Violate any code of conduct or other guidelines, which may be applicable for or
                                        to any particular Service;</li>
                                    <li>Violate any applicable laws or regulations for the time being in force in or
                                        outside India; and </li>
                                    <li>Violate any of the terms and conditions of this Agreement or any other terms and
                                        conditions for the use of the Website contained elsewhere here in.</li>
                                    <li>Exploit any of the services. We reserve the right to deprive individual
                                        customers of our Cash on Delivery payment option. Moreover, we might refuse any
                                        of our services, terminate accounts, and/or cancel orders at our discretion,
                                        including but not limited to, if we believe that customer conduct violates
                                        applicable law or is harmful to our interests.</li>
                                    <li>You shall not make any derogatory, defamatory, abusive, inappropriate, profane
                                        or indecent statement/s and/or comment/s about QR Codifier, its associates and
                                        partners on any property owned by QR Codifier.</li>
                                </ul>

                                <h4>Intellectual Property Rights</h4>
                                <p>
                                    Unless otherwise indicated or anything contained to the contrary or any proprietary
                                    material owned by a third party and so expressly mentioned, QR Codifier owns all
                                    Intellectual Property Rights to and into the Website, including, without limitation,
                                    any and all rights, title and interest in and to copyright, related rights, patents,
                                    utility models, trademarks, trade names, service marks, designs, know-how, trade
                                    secrets and inventions (whether patentable or not), goodwill, source code, meta
                                    tags, databases, text, content, graphics, icons, and hyperlinks. You acknowledge and
                                    agree that you shall not use, reproduce or distribute any content from the Website
                                    belonging to QR Codifier without obtaining authorization from QR Codifier.</p>
                                <p>
                                    Not with standing the foregoing, it is expressly clarified that you will retain
                                    ownership and shall solely be responsible for any content that you provide or upload
                                    when using any Service, including any text, data, information, images, photographs,
                                    music, sound, video or any other material which you may upload, transmit or store
                                    when making use of our various Service. However, with regard to the product
                                    customization Service (as against other Services like blogs and forums) you
                                    expressly agree that by uploading and posting content on to the Website for public
                                    viewing and reproduction/use of your content by third party users, you accept the
                                    User whereby you grant a non-exclusive license for the use of the same.</p>
                                <h4>Links to Third Party Sites</h4>
                                <p>
                                    The Website may contain links to other websites ("Linked Sites"). The Linked Sites
                                    are not under the control of QR Codifier or the Website and QR Codifier is not
                                    responsible for the contents of any Linked Site, including without limitation any
                                    link contained in a Linked Site, or any changes or updates to a Linked Site. QR
                                    Codifier is not responsible for any form of transmission, whatsoever, received by
                                    you from any Linked Site. QR Codifier is providing these links to you only as a
                                    convenience, and the inclusion of any link does not imply endorsement by QR Codifier
                                    or the Website of the Linked Sites or any association with its operators or owners
                                    including the legal heirs or assigns thereof. The users are requested to verify the
                                    accuracy of all information on their own before undertaking any reliance on such
                                    information.</p>
                                <h4>Disclaimer Of Warranties/Limitation Of Liability</h4>
                                <p>
                                    QR Codifier has endeavored to ensure that all the information on the Website is
                                    correct, but QR Codifier neither warrants nor makes any representations regarding
                                    the quality, accuracy or completeness of any data, information, product or Service.
                                    In no event shall QR Codifier be liable for any direct, indirect, punitive,
                                    incidental, special, consequential damages or any other damages resulting from: (a)
                                    the use or the inability to use the Services;(b) unauthorized access to or
                                    alteration of the user's transmissions or data;(c) any other matter relating to the
                                    services; including, without limitation, damages for loss of use, data or profits,
                                    arising out of or in any way connected with the use or performance of the Website or
                                    Service. Neither shall QR Codifier be responsible for the delay or inability to use
                                    the Website or related services, the provision of or failure to provide Services, or
                                    for any information, software, products, services and related graphics obtained
                                    through the Website, or otherwise arising out of the use of the website, whether
                                    based on contract, tort, negligence, strict liability or otherwise. Further, QR
                                    Codifier shall not be held responsible for non-availability of the Website during
                                    periodic maintenance operations or any unplanned suspension of access to the website
                                    that may occur due to technical reasons or for any reason beyond QR Codifier
                                    control. The user understands and agrees that any material and/or data downloaded or
                                    otherwise obtained through the Website is done entirely at their own discretion and
                                    risk and they will be solely responsible for any damage to their computer systems or
                                    loss of data that results from the download of such material and/or data.
                                </p>
                                <h4>Indemnification </h4>
                                <p>
                                    You agree to indemnify, defend and hold harmless QR Codifier from and against any
                                    and all losses, liabilities, claims, damages, costs and expenses (including legal
                                    fees and disbursements in connection therewith and interest chargeable thereon)
                                    asserted against or incurred by QR Codifier that arise out of, result from, or may
                                    be payable by virtue of, any breach or non-performance of any representation,
                                    warranty, covenant or agreement made or obligation to be performed by you pursuant
                                    to these Terms.
                                </p>
                                <p>All disputes are subjected to Vapi Jurisdiction Only.</p>
                                <h4> Contacting Us </h4>
                                <p>
                                    We will address any questions, comments and concerns about our online privacy and
                                    policy. Please write to us at info@qr-codifier.com </p>

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
