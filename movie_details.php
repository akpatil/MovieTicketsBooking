<html>
<body background="includes/snow.jpg">
<div style="float: right">
<form name=user_action method=post action=cust_action.php>
<select name=user_select onchange=user_action.submit()>
<option value=null SELECTED>Welcome
<?php 
echo $_COOKIE['username']; 
?> 
</option>
<option value="sign_out">Sign Out</option>
<option value="accounts">Accounts</option>
</select>
</form>
</div>
<?php
$link = mysql_connect("localhost","root","")
  or die(mysql_error());
mysql_select_db("adbms") 
  or die (mysql_error());

$query="SELECT  movie_id,movie_name FROM movies";
$result=mysql_query($query, $link) or die(mysql_error());

while($row=mysql_fetch_array($result)){
	$movie_id=$row['movie_id'];
	$movie_name=$row['movie_name'];
}
	

     
$review_table_headings=<<<EOD
  <tr>
    <th>Date of Review</th>
    <th>Review Title</th>
    <th>Reviewer Name</th>
    <th>Movie Review Comments</th>
    <th>Rating</th>
  </tr>
EOD;

$review_query = "SELECT * FROM reviews WHERE review_movie_id ='" . $_GET['movie_id'] . "' ORDER BY review_date DESC";
          
$review_result = mysql_query($review_query, $link) 
  or die(mysql_error());

while($review_row = mysql_fetch_array($review_result)) {
  $review_flag =1;
  $review_title[] = $review_row['review_name'];
  $reviewer_name[] = ucwords($review_row['review_reviewer_name']);
  $review[] = $review_row['review_comment'];
  $review_date[] = $review_row['review_date'];
  $review_rating[] = generate_ratings($review_row['review_rating']);
}

$i = 0;
$review_details = '';
while ($i<sizeof($review)) {
  $review_details .=<<<EOD
  <tr>
    <td width="15%" valign="top" align="center">$review_date[$i]</td>
    <td width="15%" valign="top">$review_title[$i]</td>
    <td width="10%" valign="top">$reviewer_name[$i]</td>
    <td width="50%" valign="top">$review[$i]</td>
    <td width="10%" valign="top" align="center">$review_rating[$i]</td>
  </tr>
EOD;
  $i++;
}


$page_start =<<<EOD
<html>
<head>
<title>Details and Reviews for: $movie_name</title>
</head>
<body>
EOD;


if ($review_flag) {
  $movie_details .=<<<EOD
<table width="95%" border="0" cellspacing="2" 
       cellpadding="20" align="center">
  $review_table_headings
  $review_details
</table>
EOD;
}

$page_end =<<<EOD
</body>
</html>     
EOD;
$detailed_movie_info =<<<EOD
     $page_start
     $movie_details
     $page_end
EOD;

echo $detailed_movie_info;
mysql_close();

function generate_ratings($review_rating) {
  $movie_rating = '';
  for($i=0; $i<$review_rating; $i++) {
    $movie_rating .= "<img src=\"includes/rating_star2.gif\">&nbsp;";
  }
  return $movie_rating;
}

?>
</body>
</html>