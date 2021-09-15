<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$num = $_POST['num'];
$msg = $_POST['msg'];



$sql = "INSERT INTO contact (full_name, email, num, msg)
VALUES ('$full_name', '$email', '$num', '$msg')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>