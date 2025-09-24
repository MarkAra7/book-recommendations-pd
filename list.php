<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$database = "book_review_24092025";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$ratingarray = array(1=>"Nelasāma", 2=>"Slikta", 3=>"Viduvēja",4=>"Laba",5=>"Lieliska");
$sql = "SELECT  full_name, book_title,review_text,rating FROM book_review";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    


    echo "<br>" ."FULL NAME: " . $row["full_name"]."<br>". "Book Title: " . $row["book_title"]."<br>"."Review Text: ".$row["review_text"]."<br>"."Review: ". $ratingarray[$row["rating"]]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();


?>
<a href="index.html">Add</a>


