<?php

mysql_connect("localhost","root","");
mysql_select_db("adbms") or die (mysql_error());

$insert="CREATE TABLE customer
(c_id int(10) NOT NULL auto_increment,
 c_name varchar(30) NOT NULL,
 c_user varchar(30) NOT NULL,
 c_pwd varchar(30) NOT NULL,
 c_mail varchar(30) NOT NULL,
 PRIMARY KEY (c_id))";
 
 mysql_query($insert) or die (mysql_error());
 
?>