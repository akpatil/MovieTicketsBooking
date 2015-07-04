<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
$query="insert into customer values ('','guest','guest','null','null')";
mysql_query("$query");
?>