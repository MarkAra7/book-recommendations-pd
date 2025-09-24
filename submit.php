<?php
require_once 'Review.php';

$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$database = "book_review_24092025";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";



$fullname = $_POST["fname"]." ".$_POST["lname"];




  $review = new Review($fullname,$_POST["name"],$_POST["desc"],$_POST["limenis"]);
$sql = "INSERT INTO book_review (full_name, book_title, review_text,rating)
VALUES ('$review->full_name', '$review->book_title', '$review->review_text' ,'$review->rating')";
    

if ($conn->query($sql) === TRUE) {
  echo "\nNew record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<br>
<a href="index.html">Add Another One</a>
<br>
<a href="list.php">List</a>