<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
$query="INSERT INTO screen values
('1','1'),('2','2')";
mysql_query("$query");
?>