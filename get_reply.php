<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apology_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the latest reply
$sql = "SELECT reply_text FROM replies ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['reply_text'];
} else {
    echo "No replies yet.";
}

$conn->close();
?>
