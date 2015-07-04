<html>
<head>
<title>Customer  DB Edit</title>
</head>
<body>

<?php

mysql_connect('localhost','root','');
mysql_select_db('adbms');

if ($_POST['cust_name']=='' && $_POST['cust_user']=='' && $_POST['cust_pwd']=='' && $_POST['cust_mail']=='')
{
	header('Location:cust_insert.php');
}
else
{
$query="INSERT INTO customer (c_id, c_name, c_user, c_pwd, c_mail) VALUES ('','". $_POST['cust_name'] ."','". $_POST['cust_user'] ."','". $_POST['cust_pwd'] ."','". $_POST['cust_mail'] ."')";
$result=mysql_query("$query") or die(mysql_error());
echo "$result";
$name=$_POST['cust_name'];
$query2="CREATE TABLE $name 
(
 cl_id int (10) NOT NULL AUTO_INCREMENT,
 cl_movie_name varchar(30) NOT NULL,
 cl_ticket_no int(100),
 cl_time DATETIME NOT NULL,
 PRIMARY KEY(cl_id)
 )";
mysql_query("$query2") or die (mysql_error());
echo "Thank you for registering. Please click the following link to re-sign-in for your security";
}
?>
<a href='cust_login.php'>Sign In</a>
</body>
</html>