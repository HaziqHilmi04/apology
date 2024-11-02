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

// Insert the reply into the database
if (isset($_POST['reply'])) {
    $reply = $_POST['reply'];
    $sql = "INSERT INTO replies (reply_text) VALUES ('$reply')";

    if ($conn->query($sql) === TRUE) {
        echo "Reply saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
