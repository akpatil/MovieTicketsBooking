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
$link=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("adbms") or die (mysql_error());
$query="SELECT  movie_id,movie_name,movie_type,movie_leadactor,movie_director,movie_review FROM movies";
$result=mysql_query($query, $link) or die(mysql_error());
$num_movies=mysql_num_rows($result);

$movie_header=<<<ABC
<h2><center>MOVIE REVIEW DATABASE</center><h2>
<table width="70%" border="1" cellpadding="2" cellspacing="2" align="center">
<th> MOVIE ID </th>
<th> MOVIE NAME </th>
<th> MOVIE TYPE </th>
<th> MOVIE ACTOR </th>
<th> MOVIE DIRECTOR </th>
<th> MOVIE REVIEW </th>
ABC;

$movie_details='';
while($row=mysql_fetch_array($result)){
	$movie_id=$row['movie_id'];
	$movie_name=$row['movie_name'];
	$movie_type=$row['movie_type'];
	$movie_leadactor=$row['movie_leadactor'];
	$movie_director=$row['movie_director'];
	$movie_review=$row['movie_review'];
	
$movie_details .=<<<ABC
<tr>
<td>$movie_id</td>
<td><a href="movie_details.php?movie_id=$movie_id"title="Find out more about $movie_name">$movie_name</td>
<td>$movie_type</td>
<td>$movie_leadactor</td>
<td>$movie_director</td>
<td>$movie_review</td>	
</tr>
ABC;
}

$movie_details .=<<<ABC
<tr>
<td>&nbsp;</td>
</tr>
<td>TOTAL: $num_movies Movies</td>
</tr>
ABC;

$movie_footer="</table>";

$movie =<<<ABC
$movie_header
$movie_details
$movie_footer
ABC;

echo "There are $num_movies movies in our database";
echo $movie;
?>
</body>
</html>