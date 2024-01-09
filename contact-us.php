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
    <title>Contact Us - QR Codifier | QR Code Generator
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
                        <h3 class="text-white fw-bolder">Contact Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        class='link-secondary link-opacity-75-hover text-decoration-none'
                                        href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </section>

            <section class="" style="padding:90px 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pb-5">

                            <div class="card w-100 shadow-sm rounded-3 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Address</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">QR Codifier</h6>
                                    <p class="card-text">INDIA</p>
                                </div>
                            </div>

                            <div class="card w-100 shadow-sm rounded-3 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Email</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">24 X 7 online support</h6>
                                    <a class="card-link text-decoration-none text-dark"
                                        href="mailto:info@qr-codifier.com">info@qr-codifier.com</a>
                                </div>
                            </div>


                            <div class="card w-100 shadow-sm rounded-3 mb-3">
                                <div class="card-body">
                                    <h5 class="card-title fw-bolder">Follow Us</h5>
                                    <a class="card-link text-muted" href="javascript:;" target="_blank"
                                        rel="no-follow"><i class="fab fa-facebook"></i></a>
                                    <a class="card-link text-muted" href="javascript:;" target="_blank"
                                        rel="no-follow"><i class="fab fa-instagram"></i></a>
                                    <a class="card-link text-muted" href="javascript:;" target="_blank"
                                        rel="no-follow"><i class="fab fa-linkedin"></i></a>
                                    <a class="card-link text-muted" href="javascript:;" target="_blank"
                                        rel="no-follow"><i class="fab fa-twitter"></i></a>
                                    <a class="card-link text-muted" href="javascript:;" target="_blank"
                                        rel="no-follow"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>

                            <div class="w-100 py-3 mb-2">
                                <a class="btn btn-dark rounded-pill shadow me-3" href="index.php">Create QR Code</a>
                                <a class="btn btn-light rounded-pill shadow me-3" href="login.php">Login or
                                    Register</a><br>
                            </div>
                            <a class="link-secondary" href="faqs.php">If you have any question, please go to
                                <strong>FAQs</strong></a>

                        </div>
                        <div class="col-md-6">
                            <div class="card w-100 shadow bg-light rounded-3 mb-3 p-4">
                                <h2 class='fw-bold mb-4'>Need Help, Contact Us</h2>
                                <form id="contactForm">
                                    <input type="hidden" name="csrf_test_name"
                                        value="9fb2f1b2eb5c98ee873391ddc37867fd04b3b236708664861bd5215d3b1b67a2">
                                    <input type='hidden' name="form_name" value="Contact">
                                    <!--<div class="form-floating mb-3">-->
                                    <!--  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">-->
                                    <!--  <label for="floatingInput">Email address</label>-->
                                    <!--</div>-->

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            aria-describedby="nameHelp" plaeholder="Enter full name">
                                        <div id="nameHelp" class="form-text">Alpha Numeric Characters Only.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email ID</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                aria-describedby="emailHelp" placeholder="Enter email id"
                                                required="">
                                            <div id="emailHelp" class="form-text">We'll never share your email with
                                                anyone else.</div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="mob" class="form-label">Mobile Number</label>
                                            <input type="text" class="form-control" id="mob" name="mob"
                                                aria-describedby="mobHelp" placeholder="Enter mobile number"
                                                required="">
                                            <div id="mobHelp" class="form-text">Add country code, Ex. 91XXXXXXXXXX
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Enter subject">
                                    </div>
                                    <div class="mb-3">
                                        <label for="messageTextarea" class="form-label">Message</label>
                                        <textarea class="form-control" id="messageTextarea" name="message" rows="2" placeholder='Enter your message'></textarea>
                                    </div>
                                    <!--<div class="mb-3 form-check">-->
                                    <!--  <input type="checkbox" class="form-check-input" id="is_agree">-->
                                    <!--  <label class="form-check-label" for="is_agree" name='is_agree'>Accept Terms &amp; Conditions.</label>-->
                                    <!--</div>-->
                                    <button type="submit"
                                        class="btn btn-dark rounded-pill shadow px-4">Submit</button>
                                    <div style="display:none"><label>Fill This Field</label><input type="text"
                                            name="honeypot" value=""></div>
                                </form>

                                <!--<select class="form-select" aria-label="Default select example">-->
                                <!--  <option selected>Open this select menu</option>-->
                                <!--  <option value="1">One</option>-->
                                <!--  <option value="2">Two</option>-->
                                <!--  <option value="3">Three</option>-->
                                <!--</select>-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="" style="padding:30px 0 60px 0;">
                <div class="container">
                    <div class="row">
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.805566735415!2d72.92323649703468!3d20.373438285873686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce2c01246603%3A0xca6d49eb7baace15!2sVapi%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1678885453736!5m2!1sen!2sin"
                                width="100%" height="450" class='rounded-5 shadow' style="border:0;"
                                allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                form = $(this)
                e.preventDefault();
                $.ajax({
                    url: 'http://localhost/qr-codifier/contact-us',
                    type: "post",
                    data: $(this).serialize(),
                }).done(function(data) {
                    if (data.status == true) {
                        Swal.fire("Success!", data.message, data.type);
                        form[0].reset()
                        setTimeout(location.reload(), 10000);
                    } else {
                        Swal.fire("Failed!", data.message, data.type);
                        setTimeout(location.reload(), 10000);
                    }
                });
            });
        });
    </script>
</body>

</html>
