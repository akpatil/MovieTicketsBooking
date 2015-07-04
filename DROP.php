<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms") or die(mysql_error());
$QUERY="DROP TABLE ajax";
mysql_query($QUERY);
?>