<?php
$query=mysql_query("select movie_name from movies where movie_id='n'");
while($row=mysql_fetch_array($query))
{
	$arr[]=array($row['movie_name']);
}
?>

<html>
<body>
<form action=booking_process.php method='post'>
<table cellpadding='10' cellspacing='10' align=\"center\">
 <tr>
 <td>
 <?php
 foreach($arr as $array)
 echo "<select name=\"value\">
 <option value=\"1\">$array['movie_name']</option>
  <option value=\"2\">$array</option>
  <option value=\"3\">$array</option>
  <option value=\"4\">BLACK IN MEN</option>
</select>
</td> 
 </tr>
 
 <tr>
<td colspan='2' align='center'>
<input type='submit' name='submit' value='submit'></td>
</tr>
</table>
</form> ";
?>
</body>
</html>