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



$fullname = $_POST["fname"]." ".$_POST["lname"];
// echo $fullname;
$bookTitle = $_POST["name"];
$bookReview = $_POST["desc"];
$rating = $_POST["limenis"];
$sql = "INSERT INTO book_review (full_name, book_title, review_text,rating)
VALUES ('$fullname', '$bookTitle', '$bookReview' ,'$rating')";


if ($conn->query($sql) === TRUE) {
  echo "\nNew record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<a href="index.html">Back</a>