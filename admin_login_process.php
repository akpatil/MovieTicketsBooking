<?php

mysql_connect("localhost","root","");
mysql_select_db("adbms");

$uname = $_POST['admin_user'];
$pword = $_POST['admin_pwd'];

$SQL = "SELECT * FROM admin WHERE a_user = '$uname' AND a_pwd = '$pword'";
$result = mysql_query($SQL);

$count = mysql_num_rows($result);

if ($count==1) 
{
	header("Location:movie_insert.php");
}
else {

echo "login failure";
header("Location: front_page.php");

}

?>