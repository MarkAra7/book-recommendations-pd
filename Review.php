<?php

class Review{

    // Nomainiju uz public ,lai varetu datus dabut ara bez getter un setter
    //[::1]:50382 [200]: POST /submit.php - Uncaught Error: Cannot access private property Review::$book_title in C:\Users\User\MarkussArājums\book-recommendations-pd\submit.php:27
//Stack trace:
//0 {main}
 // thrown in C:\Users\User\MarkussArājums\book-recommendations-pd\submit.php on line 27
    public string $full_name  ;    
    public string $book_title   ;   
   public string  $review_text  ; 
   public int  $rating;
 function __construct($full_name,$book_title,$review_text,$rating){
    $this->full_name =$full_name;
     $this->book_title =$book_title;
    $this->review_text =$review_text;
    $this->rating =$rating;
 }

 
}

