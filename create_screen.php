<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
$query="CREATE TABLE screen
(
s_id int(10),
t_id int(10),
constraint FK_SCREEN
foreign key (t_id) 
references theatre (t_id),
constraint PK_SCREEN
primary key (s_id)
)";
mysql_query("$query");
?>