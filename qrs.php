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
                            <h1>QRs</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="http://localhost/qr-codifier/dash.php">Home</a></li>
                                <li class="breadcrumb-item active">QRs</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">


                <div class='container-fluid'>

                    <!--<button class="btn btn-primary btn-sm shadow-sm mb-3" data-target="#createQR" data-toggle="modal">Create QR</button>-->

                    <div class="table-responsive p-0">
                        <div id="qrTB_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="qrTB_length">
                                        <label>Show
                                            <select name="qrTB_length" aria-controls="qrTB"
                                                class="custom-select custom-select-sm form-control form-control-sm"
                                                fdprocessedid="ikwbz2">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="qrTB_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                class="form-control form-control-sm" placeholder=""
                                                aria-controls="qrTB"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    // $loggedInUserID = $_SESSION['username'];
                                    // echo $username;

                                    $user_id_get = "SELECT `id` FROM `users` WHERE `username` = '$username'";
                                    $result = $conn->query($user_id_get);
                                    while ($row = $result->fetch_assoc()) {
                                        // Access the data from $row
                                        // echo '<br>User ID: ' .$row['id'] ;
                                        $userID = $row['id'];
                                        // Access other columns as needed
                                    }
                                    // Query to retrieve QR code data for the logged-in user
                                    $qrcodes_query = "SELECT * FROM `qrcodes` WHERE `user_id` = '$userID'";
                                    $result = $conn->query($qrcodes_query);
                                    if ($result && $result->num_rows > 0) {
                                        // print_r($result);
                                    ?>
                                    <table id="qrTB" class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>QR Code</th>
                                                <th>QR Type</th>
                                                <!--<th>Tags</th>-->
                                                <th>Short URL</th>
                                                <th>Create At</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $count = 1;
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?= $count ?></td>
                                                <td><?= $row['title'] ?></td>
                                                <td><img class="img-fluid elevation-3 rounded" style="height:60px;"
                                                        loading="lazy" src="<?= $row['qr_code'] ?>"></td>
                                                <td><?= $row['qr_type'] ?></td>
                                                <td><?= $row['short_url'] ?></td>
                                                <td><?= $row['created_at'] ?></td>
                                                <td><span class="text-success"><i class="fas fa-check"></i></span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm m-1"
                                                        href="http://localhost/qr-codifier/view_qr.php?id=<?= $row['id'] ?>"
                                                        target="_blank" rel="noopener"
                                                        title="View <?= $row['title'] ?>">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="btn btn-outline-danger btn-sm m-1 deleteQRBtn delQR"
                                                        data-uuid="<?= $row['id'] ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                                $count++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php
                                        } else {
                                            echo "No QR codes found for this user.";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="qrTB_info" role="status" aria-live="polite">
                                        Showing 1 to 3 of 3 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="qrTB_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="qrTB_previous"><a href="#" aria-controls="qrTB"
                                                    data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="qrTB" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="qrTB_next"><a
                                                    href="#" aria-controls="qrTB" data-dt-idx="2"
                                                    tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Create QR Modal -->
                <div class="modal fade" id="createQR" tabindex="-1" role="dialog" aria-labelledby="createQR"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createQRLabel">Create QR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="newQRForm" method="post" enctype="multipart/form-data">


                                    <div style="display:none"><label>Fill This Field</label><input type="text"
                                            name="honeypot" value=""></div>
                                </form>

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
    <script src="be/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="be/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="be/js/adminlte.min.js"></script>
    <!-- AdminLTE demo -->
    <script src="be/js/demo.js"></script>
    <!-- Sweet Alert 2 -->
    <script src="npm/sweetalert"></script>
    <script>
        var form = $('#createQRForm')
        $('#createQRForm button[data-toggle="pill"]').on('shown.bs.tab', function(event) {
            // event.target // newly activated tab
            // event.relatedTarget // previous active tab
            let _type = $(event.target).data('type')
            form.find('input#type').val(_type);

            if (['url', 'pdf', 'audio', 'video', 'image'].includes(_type)) {
                form.find("#is_dynamic_qr").prop('checked', true); // Checks it
            } else {
                form.find("#is_dynamic_qr").prop('checked', false); // Unchecks it
            }
        })

        // Delete QR Code
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

        // Create QR Code
        $('#createQRForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var postData = new FormData(form[0]);
            $.ajax({
                    url: 'http://localhost/qr-codifier/qr/store',
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false
                })
                .done(function(data) {
                    if (data.status == true) {
                        swal("Success!", data.message, data.type);
                        if (data.qr) {
                            $("#downloadQR").find("#view_qr").attr("src", data.qr)
                            $("#downloadQR").find("#download_qr").attr("href", data.qr)
                            $('#downloadQR').modal('show')
                            $("<a>").attr("href", data.qr).attr("download", "qr.png").appendTo("body").click()
                                .remove();
                        } else {
                            // location.reload()
                        }
                    } else {
                        swal("Oops", data.message, data.type);
                    }
                })
                .fail(function() {
                    swal("Oops", "We couldn't connect to the server!", "error");
                });
        })

        $('#downloadQR').on('hidden.bs.modal', function(event) {
            location.reload()
        })
    </script>
</body>

</html>
