<?php

mysql_connect("localhost","root","");
mysql_select_db("adbms");

$query=mysql_query("select c_name from customer where c_name= \"guest\" ");
while($row=mysql_fetch_array($query))
{
	$username=$row['c_name'];
}

setcookie('username','guest');
?>