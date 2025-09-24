<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$database = "book_review_24092025";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";




echo "Dati Vieksmigi saņemti"



?>
<a href="index.html">Back</a>