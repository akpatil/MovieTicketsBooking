<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
?>
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
<br><br><br><br><br>
<p align="center"><b>Please Re-Confirm Your Movie Selection</b></p>
<?php
$carry=$_COOKIE['username'];
?>
<form action=booking_process.php method='post'>
<table cellpadding='10' cellspacing='10' align="center">
 <tr>
 <td>
 <select name="value">
   <?php
 $n=0;
 $query=mysql_query("select movie_name from movies");
while($row=mysql_fetch_array($query))
{
	$n=$n+1;
	$movie_name=$row['movie_name'];
	echo "<option value=$n>$n.$movie_name</option>";
}
 ?>
</select>
</td> 
 </tr>
 
 <tr>
<td colspan='2' align='center'>
<input type='submit' name='submit' value='submit'></td>
</tr>
</table>
</form>

</body>
</html>