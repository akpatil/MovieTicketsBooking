<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
$query="CREATE TABLE IF NOT EXISTS movie_counter
(
m_id int(10) NOT NULL,
t_id int(10) NOT NULL, 
m_name varchar(30) NOT NULL,
m_tickets int(100) NOT NULL,
constraint FK_MOVIE_COUNTER
foreign key (t_id)
references theatre(t_id),
PRIMARY KEY (m_id)
)";
mysql_query("$query") or die(mysql_error());
?>