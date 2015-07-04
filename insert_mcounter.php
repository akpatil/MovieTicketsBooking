<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
$query="INSERT INTO movie_counter (m_id,t_id,m_name,m_tickets) VALUES
('1','1','chennai','100'),('2','2','khan','100')";
mysql_query("$query") or die(mysql_error());
?>