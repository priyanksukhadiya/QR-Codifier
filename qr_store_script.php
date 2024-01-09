<?php
require_once 'db-connection.php';

if (!isset($_SESSION['username'])) {
    echo 'User not logged in.';
    exit();
}
// if (!isset($_SESSION['authenticated'])) {
//     header("HTTP/1.1 403 Forbidden");
//     exit("Access denied");
// }
$userID = $_SESSION['username']; // Adjust this based on your actual session variable

// Check if the user ID exists in the users table
// $user_check_query = "SELECT * FROM users WHERE id = '$userID'";
$user_id_get = "SELECT `id` FROM `users` WHERE `username` = '$userID'";
$result = $conn->query($user_id_get);

// print_r($result);
if ($result->num_rows == 0) {
    // User doesn't exist, handle this case accordingly
    echo "Error: User doesn't exist or invalid user ID.";
} else {
    while ($row = $result->fetch_assoc()) {
        // Access the data from $row
        // echo '<br>User ID: ' .$row['id'] ;
        $userID = $row['id'];
        // Access other columns as needed
    }
    // Assuming you have the generated QR code and other necessary information available
    $title = $_POST['title'] ?? '';
    $data = $_POST['data'] ?? '';
    echo $data;
    $qrCodeData = 'Generated QR Code Data';
    $qrDataUrl = $_POST['imageData'] ?? '';
    $qrTag = $_POST['tag'] ?? '';
    $qrType = 'URL' ?? '';

    // Insert data into the qrcodes table
    $qrdata_insert_sql = "INSERT INTO `qrcodes` (`id`, `user_id`, `title`,`data`, `qr_code`, `qr_type`,`tags`, `short_url`, `created_at`, `status`) VALUES (NULL, $userID, '$title','$data', '$qrDataUrl', '$qrType','$qrTag', 'None', current_timestamp(), 'Active')";

    if ($conn->query($qrdata_insert_sql) === true) {
        // Registration successful, set username in session
        echo "<script>alert('QR Stored Successfully');</script>";
        // Redirect to a new page or display a success message
    } else {
        echo 'Error: Unable to insert data into qrcodes table. SQL Error: ' . $conn->error;
        echo "<script>alert('QR Stored Failed');</script>";
        // Handle the error
    }
}
?>
