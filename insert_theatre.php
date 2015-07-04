<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
$query="INSERT INTO theatre values
('','EROS','CHURCHGATE'),('','BIG CINEMA','ANDHERI')";
mysql_query("$query");
?>