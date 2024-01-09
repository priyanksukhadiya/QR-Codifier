<?php
require_once 'db-connection.php';

// If the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ensure the form fields are present
        if (isset($_POST['email'], $_POST['password'])) {
            // Sanitize user input
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Fetch user data from the database based on the provided email
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                // Verify the password
                if (password_verify($password, $row['password_hash'])) {
                    // Password is correct, set username in session
                    $_SESSION['username'] = $row['username'];
                    // Redirect to dashboard
                    header('Location: dash.php');
                    exit();
                } else {
                    echo 'Incorrect email or password.'; // Password does not match
                }
            } else {
                echo 'User not found.'; // No user with the provided email
            }
        } else {
            echo 'Invalid form data.'; // Form fields missing
        }
    }
    
} else {
    header('Location: dash.php');
    exit();
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login </title>

    <!-- Bootstrap core CSS -->
    <link href="npm/bootstrap%405.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="bg-light">

    <main role="main" class="container">

        <div class="d-flex justify-content-center my-3 p-0 p-sm-3 p-md-5">
            <div class="card col-12 col-md-5 shadow">
                <div class="card-body p-4">
                    <div class="col-9 col-md-4 mx-auto text-center">
                        <a href="index.php"><img class="img-fluid p-3" src="fe/logo.svg" alt="QR Codifier Logo"></a>
                    </div>
                    <h2 class="fw-bold text-center">QR Codifier</h2>

                    <h5 class="card-title text-center my-3">Login</h5>



                    <form action="" method="post">
                        <input type="hidden" name="csrf_test_name"
                            value="9465d3f8f9307dc644795a5fb9b4793b2e99a709f5ee1e510de02987f8d29475">
                        <!-- Email -->
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" inputmode="email"
                                autocomplete="email" placeholder="Email Address" value="" required="">
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

                        <p class="text-center">Forgot your password? <a href="login/magic-link.php">Use a Login
                                Link</a></p>

                        <p class="text-center">Need an account? <a href="register.php">Register</a></p>

                        <div style="display:none"><label>Fill This Field</label><input type="text" name="honeypot"
                                value=""></div>
                    </form>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
