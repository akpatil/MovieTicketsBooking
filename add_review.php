<html>
<body background="includes/snow.jpg">
<?php
mysql_connect("localhost","root","");
mysql_select_db("adbms");
?>
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
<h1 align="center">Add Reviews</h1>

<form action="review_process.php" method="post">
<table border='0' cellspacing='1' cellpading='3' align='center'>
 <tr>
 <td width='50%'>Select Movie</td>
 <td>
 <select name="movie_id">
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
<td width='50%'>Review Title</td>
<td width='50%'>
<input type='text' name='movie_title'></td>
</tr>
<tr>
<td width='50%'>Your name</td>
<td width='50%'>
<input type='text' name='reviewer_name'></td>
</tr>
<tr>
<td width='50%'>Comments</td>
<td width='50%'>
<input type='text' name='reviewer_comment'></td>
</tr>
<tr>
<td width='50%'>Rating [In numbers only]</td>
<td width='50%'>
<input type='text' name='movie_rate'></td>
</tr>

<tr>
<td colspan='2' align='center'>
<input type='submit' name='submit' value='submit'>
</tr>
</table>
</form>
</body>
</html>