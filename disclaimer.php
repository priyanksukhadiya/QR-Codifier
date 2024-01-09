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
    <title>Disclaimer - QR Codifier</title>
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
                        <h3 class="text-white fw-bolder">Disclaimer</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        class='link-secondary link-opacity-75-hover text-decoration-none'
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="text-justify">
                                <p style="color:#333;font-size: 1.2em;">
                                    The information contained in this website is for general information purposes only.
                                    The information is provided by QR Codifier, a property of QR Codifier. While we
                                    endeavor to keep the information up to date and correct, we make no representations
                                    or warranties of any kind, express or implied, about the completeness, accuracy,
                                    reliability, suitability or availability with respect to the website or the
                                    information, products, services, or related graphics contained on the website for
                                    any purpose. Any reliance you place on such information is therefore strictly at
                                    your own risk.
                                </p>
                                <p style="color:#333;font-size: 1.2em;">
                                    In no event will we be liable for any loss or damage including without limitation,
                                    indirect or consequential loss or damage, or any loss or damage whatsoever arising
                                    from loss of data or profits arising out of, or in connection with, the use of this
                                    website.
                                </p>
                                <p style="color:#333;font-size: 1.2em;">
                                    Through this website you are able to link to other websites which are not under the
                                    control of QR Codifier. We have no control over the nature, content and availability
                                    of those sites. The inclusion of any links does not necessarily imply a
                                    recommendation or endorse the views expressed within them.
                                </p>
                                <p style="color:#333;font-size: 1.2em;">
                                    Every effort is made to keep the website up and running smoothly. However, QR
                                    Codifier takes no responsibility for, and will not be liable for, the website being
                                    temporarily unavailable due to technical issues beyond our control.
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
                    <li class="nav-item"><a href="terms-conditions.php class="nav-link px-2 text-muted">Terms &amp;
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
