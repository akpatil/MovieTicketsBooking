<?php
mysql_connect('localhost','root','');
mysql_select_db('adbms');
session_start();
$uname = "";
$pword = "";
$errorMessage = "";

$uname = $_POST['cust_user'];
$pword = $_POST['cust_pwd'];

$SQL = "SELECT * FROM customer WHERE c_user = '$uname' AND c_pwd = '$pword'";
$result = mysql_query($SQL);

$count = mysql_num_rows($result);

if ($count==1) 
{
	echo "login successful $uname";
	setcookie('username',$uname,time() + (86400 * 7));
	header("Location:index.php");
	
	
	
}
else {

echo "login failure";
header("Location: cust_login.php");

}



?>