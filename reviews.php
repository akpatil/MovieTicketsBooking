<?php
$connect = mysql_connect("localhost", "root", "") or die ("Hey loser, check your server connection.");
mysql_select_db("adbms");


$reviews = "CREATE TABLE IF NOT EXISTS reviews (
  review_movie_id int(50), 
  review_date datetime NOT NULL, 
  review_name varchar(255) NOT NULL, 
  review_reviewer_name varchar(255) NOT NULL, 
  review_comment varchar(255) NOT NULL, 
  review_rating int(11) NOT NULL default 0)";

$results = mysql_query($reviews)
  or die (mysql_error());


?>
