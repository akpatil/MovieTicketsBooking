<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms") or die(mysql_error());
$query="CREATE TABLE theatre 
 ( t_id int(10) NOT NULL auto_increment,
  t_name varchar(30) NOT NULL,
   t_loc varchar(30) NOT NULL,
	   PRIMARY KEY (t_id))";
mysql_query($query) or die (mysql_error());


?>