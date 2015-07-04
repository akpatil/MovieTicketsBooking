<html>
<body background="includes/snow.jpg">
<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
$option_selected=$_POST['user_select'];
$uname=$_COOKIE['username'];
if($option_selected=='sign_out')
{
setcookie ("user", $uname, time() - 3600);
echo"Congratulations user $uname You have successfully logged off";
echo " <a href=\"front_page.php\">Resign In</a> ";
}
else
{
echo " <div style=\"float: right\">
<form name=user_action method=post action=cust_action.php>
<select name=user_select onchange=user_action.submit()>
<option value=null SELECTED>Welcome $uname 
</option>
<option value=\"sign_out\">Sign Out</option>
<option value=\"accounts\">Accounts</option>
</select>
</form>
</div> ";
echo "<br><br><br><br><h1 align=\"center\">My Transactions</h1>";	
echo "
<table cellpadding='10' cellspacing='10' align=\"center\">
<tr>
<th>Booking No</th>
<th>Movie Booked</th>
<th>Ticket No</th>
<th>Time of Booking</th>
</tr>";

$query4=mysql_query("select * from $uname");

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

}
?>
</body>
</html>