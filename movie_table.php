<?php

mysql_connect("localhost","root","");

mysql_select_db("adbms");

$query="CREATE TABLE IF NOT EXISTS movies
        (movie_id int(10) NOT NULL auto_increment,
		 movie_name varchar(50) NOT NULL,
		 movie_type varchar(20) NOT NULL,
		 movie_leadactor varchar(30) NOT NULL,
		 movie_director varchar(30) NOT NULL,
		 movie_review varchar(500) NOT NULL,
		 PRIMARY KEY (movie_id))";
		 
mysql_query($query);

$insert="INSERT INTO MOVIES (movie_id, movie_name, movie_type,    movie_leadactor, movie_director, movie_review) VALUES ('','JHA.TWO','Action','Smith More','Mars Perreira','To begin with ;this movie has nothing to do with the actor nor the producer. This movie is all about a crazy guy with his obsession of being better than SRK led to him saving the world with his ultimate powers of desi Jhattu'),
('','BARFI','Silent...LOL','RodRoy','Ben Varghese','PS. No Comments -Femina'),
('','THE INCREDIBLE HALKAT','Action','Tyson','Ajit Pan','A cheap remake of the incredible hulk by our great indian producers. This is a story of a guy who fell of the ledge into green smudge while dancing with his gf in a yet unknown location thats how the great HULKAT was born'),
('','BLACK IN MEN','Action/Comedy','RodRoy Ajit Pan Tyran ','Clinton','This is a story of a group of young men working for a secret organization to make this world a better place with their mission :BOMB XIE ')";

mysql_query($insert) or die (mysql_error());

?>