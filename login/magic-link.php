<?php
require_once '../db-connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate email (you can add more validation)
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        echo 'Please provide a valid email address.';
        exit();
    }
    // echo $email;

    // Check if the email exists in the database
    $email = mysqli_real_escape_string($conn, $email); // Escape input for security
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) === 0) {
        echo 'Unable to verify the email address matches the email on record.';
        exit();
    }

    // Generate a random token for the magic link
    $token = bin2hex(random_bytes(16)); // Generating a random token

    // You can include additional information like IP address, device, date/time, etc.
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $deviceInfo = $_SERVER['HTTP_USER_AGENT'];
    $currentDateTime = date('Y-m-d H:i:s');

    // Compose email content
    $emailSubject = 'Your Login Link';
    $emailFrom = 'From: QR Codifier <info@qr-codifier.com>';
    $emailMessage = "Here is your login link: https://qr-codifier.com/login/verify-magic-link?token=$token\n\n";
    $emailMessage .= "Some information about the person:\n";
    $emailMessage .= "IP Address: $ipAddress\n";
    $emailMessage .= "Device: $deviceInfo\n";
    $emailMessage .= "Date: $currentDateTime";

    // Send email
    if (mail($email, $emailSubject, $emailMessage, $emailFrom)) {
        echo 'Use a Login Link. Check your email!';
    } else {
        echo 'Failed to send the email. Please try again later.';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Use a Login Link </title>

    <!-- Bootstrap core CSS -->
    <link href="../npm/bootstrap%405.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-light">

    <main role="main" class="container">

        <div class="container d-flex justify-content-center p-5">
            <div class="card col-12 col-md-5 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-5">Use a Login Link</h5>


                    <form action="" method="post">
                        <input type="hidden" name="csrf_test_name"
                            value="5a6ffc2eafb5949537d69a9622f71d0de09388dfa36bf7027e4fe94e6391f043">
                        <!-- Email -->
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="floatingEmailInput" name="email"
                                autocomplete="email" placeholder="Email Address" value="" required="">
                            <label for="floatingEmailInput">Email Address</label>
                        </div>

                        <div class="d-grid col-12 col-md-8 mx-auto m-3">
                            <button type="submit" class="btn btn-primary btn-block">Send</button>
                        </div>

                        <div style="display:none"><label>Fill This Field</label><input type="text" name="honeypot"
                                value=""></div>
                    </form>

                    <p class="text-center"><a href="../login.php">Back to Login</a></p>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
