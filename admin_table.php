<?php
mysql_connect('localhost','root','');
$create_db="CREATE DATABASE IF NOT EXISTS adbms";
mysql_query($create_db) or die(mysql_error());
mysql_select_db("adbms");
$query="CREATE TABLE IF NOT EXISTS admin_pwd_info(
        username varchar(20) NOT NULL,
        password varchar(20) NOT NULL,
        first_name varchar(20) NOT NULL,
        last_name varchar(20) NOT NULL,
        ID INT(10) NOT NULL auto_increment,
        PRIMARY KEY (id))";
mysql_query($query) or die(mysql_error());        
?>  