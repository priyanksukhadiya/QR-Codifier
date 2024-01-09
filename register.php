<?php
require_once 'db-connection.php';

// If the user is not logged in, redirect to login page
if (!isset($_SESSION['username'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Ensure the form is submitted
        if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['password_confirm'])) {
            // Validate and sanitize user input
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            // Perform additional validation here if needed

            // Check if passwords match
            if ($password !== $password_confirm) {
                echo "<script>alert('Passwords do not match.');</script>";
                // Handle the error - display an error message or redirect back to the registration page
            } else {
                // Passwords match, proceed to insert into the database
                // Hash the password before storing it
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Insert data into the database
                // $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
                $insert_sql = "INSERT INTO `users` (`id`, `username`, `email`, `password_hash`, `created_at`) VALUES (NULL, '$username', '$email', '$hashed_password', current_timestamp())";

                if ($conn->query($insert_sql) === true) {
                    // Registration successful, set username in session
                    $_SESSION['username'] = $username;
                    // Redirect to a new page or display a success message
                    header('Location: dash.php');
                    exit();
                } else {
                    echo 'Error: ' . $insert_sql . '<br>' . $conn->error;
                    // Handle the error
                }
            }
        } else {
            // Handle invalid form submission
            echo 'Invalid form data.';
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

    <title>Register </title>

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

                    <h5 class="card-title text-center my-3">Register</h5>


                    <form action="" method="post">
                        <input type="hidden" name="csrf_test_name"
                            value="e2d12134aa325807a0105896cab92b2b582d55c5a6ec3b90e9892b4e8bdfc665">
                        <!-- Email -->
                        <div class="mb-2">
                            <input type="email" class="form-control" name="email" inputmode="email"
                                autocomplete="email" placeholder="Email Address" value="" required="">
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" inputmode="text"
                                autocomplete="username" placeholder="Username" value="" required="">
                            <small class="form-text text-muted">Alphanumric charecter is allowed only. No Symbols. No
                                Whitespace.</small>
                        </div>

                        <!-- Password -->
                        <div class="mb-2">
                            <input type="password" class="form-control" name="password" inputmode="text"
                                autocomplete="new-password" placeholder="Password" required="">
                        </div>

                        <!-- Password (Again) -->
                        <div class="mb-5">
                            <input type="password" class="form-control" name="password_confirm" inputmode="text"
                                autocomplete="new-password" placeholder="Password (again)" required="">
                        </div>

                        <div class="d-grid col-12 col-md-8 mx-auto m-3">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>

                        <p class="text-center">Already have an account? <a href="login.php">Login</a></p>

                        <div style="display:none"><label>Fill This Field</label><input type="text" name="honeypot"
                                value=""></div>
                    </form>
                </div>
            </div>
        </div>

    </main>

</body>

</html>
