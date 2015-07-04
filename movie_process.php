<html>
<head>
<title>Movie  DB Edit</title>
</head>
<body>

<?php

mysql_connect('localhost','root','');
mysql_select_db('adbms');

if ($_POST['movie_type']=='Select a movie type..' && $_POST['movie_name']=='' && $_POST['actor']=='' && $_POST['director']=='')
{
	header('Location:movie_insert.php');
}
$query="INSERT INTO movies (movie_id, movie_name, movie_type, movie_leadactor, movie_director, movie_review) VALUES ('','". $_POST['movie_name'] ."','". $_POST['movie_type'] ."','". $_POST['actor'] ."','". $_POST['director'] ."','". $_POST['review'] ."')";
mysql_query("$query") or die(mysql_error());

$movies=$_POST['movie_name'];

$querys="SELECT  movie_id FROM movies";
$result=mysql_query($querys) or die(mysql_error());
$num_movies=mysql_num_rows($result);



$query2="INSERT INTO theatre (t_id,t_name,t_loc) VALUES ('$num_movies','".$_POST['t_name']."','".$_POST['T_loc']."')";
mysql_query($query2) or die(mysql_error());


$query3="INSERT INTO movie_counter (m_id,t_id,m_name,m_tickets) VALUES ('$num_movies','$num_movies','$movies','100')";
mysql_query($query3) or die(mysql_error());

?>
<p>Your request has been processed</p><br>
<a href="movie_insert.php">Insert more movies</a><br>
<a href="front_page.php">Go to home page</a> 
</body>
</html>