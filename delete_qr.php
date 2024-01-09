<?php
require_once 'db-connection.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    echo 'User not logged in.';
    exit();
}
// if (!isset($_SESSION['authenticated'])) {
//     header("HTTP/1.1 403 Forbidden");
//     exit("Access denied");
// }

// Check for connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Perform deletion query, ensure to check the ownership of the QR code
$userID = $_SESSION['username'];

$user_id_get = "SELECT `id` FROM `users` WHERE `username` = '$userID'";
$result = $conn->query($user_id_get);

// print_r($result);
if ($result->num_rows == 0) {
    // User doesn't exist, handle this case accordingly
    echo "Error: User doesn't exist or invalid user ID.";
} else {
    while ($row = $result->fetch_assoc()) {
        // Access the data from $row
        echo '<br>User ID: ' . $row['id'];
        $userID = $row['id'];
        // Access other columns as needed
    }
}

// Assuming the QR code ID and user ID are sent via POST request
$qrId = $_POST['qrId'];

$deleteQuery = "DELETE FROM `qrcodes` WHERE `id` = $qrId AND `user_id` = '$userID'";

if ($conn->query($deleteQuery) === true) {
    echo 'QR code deleted successfully';
} else {
    echo 'Error deleting QR code: ' . $conn->error;
}

$conn->close();
?>
