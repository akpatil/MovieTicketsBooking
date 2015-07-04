<html>
<body background="includes/snow.jpg">
<div style="float: right">
<form name=user_action method=post action=cust_action.php>
<select name=user_select onchange=user_action.submit()>
<option value=null SELECTED>Welcome
<?php 
echo $_COOKIE['username']; 
?> 
</option>
<option value="sign_out">Sign Out</option>
<option value="accounts">Accounts</option>
</select>
</form>
</div>
<h1 align="center">Movie Ticket Counter</h1>
<?php
$carry=$_COOKIE['username'];

mysql_connect("localhost","root","");
mysql_select_db("adbms");



$query=mysql_query("select theatre.t_id, theatre.t_name, theatre.t_loc, movie_counter.m_name, movie_counter.m_tickets from theatre INNER JOIN movie_counter on theatre.t_id=movie_counter.t_id");

echo "
<table cellpadding='10' cellspacing='10'>
<tr>
<th>Theatre no</th>
<th>Theatre name</th>
<th>Theatre location</th>
<th>Movie name</th>
<th>Available tickets</th>
</tr>";



while($row=mysql_fetch_array($query))
{
	
	$Theatre_no=$row['t_id'];
	$Theatre_name=$row['t_name'];
	$Theatre_location=$row['t_loc'];
	$Movie_name=$row['m_name'];
	$Available_tickets=$row['m_tickets'];
	
	echo "<tr>
	<td>$Theatre_no</td>
	<td>$Theatre_name</td>
	<td>$Theatre_location</td>
	<td><a href=demo3.php>$Movie_name<br> BOOK NOW </a></td>
	<td>$Available_tickets</td>
	</tr><br>";
}

?>
</table>
</body>
</html>