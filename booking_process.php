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
<?php

mysql_connect("localhost","root","");
mysql_select_db("adbms");
$carry=$_COOKIE['username'];

$value=$_POST['value'];
$movie_name=mysql_query("select m_name from movie_counter where t_id=$value");
while($row=mysql_fetch_array($movie_name))
{
	$movie_name_saved=$row['m_name'];
}
$query =mysql_query("update movie_counter set m_tickets=m_tickets-1 where t_id = $value");
$tic_num=mysql_query("select m_tickets from movie_counter where t_id=$value");
while($row=mysql_fetch_array($tic_num))
{
	$tic_num_saved=$row['m_tickets'];
}
$date = date('Y-m-d H:i:s');



$to=mysql_query("select c_mail from customer where c_user=$carry");
$subject="This is to notify you of your recent booking";
$message="This email is to inform you that a ticket of $movie_name was booked from your account.";
$headers = "From: me@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

$query2=mysql_query("insert into $carry values('','$movie_name_saved','$tic_num_saved','$date')");

mail($to,$subject,$message,$headers);

echo "Congratulations....U just booked a movie.<br>";

echo "
<table cellpadding='10' cellspacing='10'>
<tr>
<th>Booking No</th>
<th>Movie Booked</th>
<th>Ticket No</th>
<th>Time of Booking</th>
</tr>";

$query4=mysql_query("select * from $carry");

while($row=mysql_fetch_array($query4))
{
	$book_id=$row['cl_id'];
	$book_name=$row['cl_movie_name'];
	$book_ticket=$row['cl_ticket_no'];
	$book_time=$row['cl_time'];
	
	echo "<tr>
	<td>$book_id</td>
	<td>$book_name</td>
	<td>$book_ticket</td>
	<td>$book_time</td>
	</tr>";
}

?>
</table>
</body>
</html>