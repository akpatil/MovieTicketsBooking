<html>
<title>Movie_Entry</title>
<body>
<form action='movie_process.php' method='post'>
<table border='0' cellspacing='1' cellpading='3' align='center'>
<tr>

<td width='50%'>Movie Name</td>
<td width='50%'>
<input type='text' name='movie_name'></td>
</tr>


<tr>
<td>Movie Type</td>
<td width='50%'>
<select name='movie_type'>
<option value='' selected>Select a movie type..</option>
<option value='inspiring'>Inspiring</option>
<option value='action'>Action</option>
<option value='comedy'>Comedy</option>
<option value='fiction'>Fiction</option>
<option value='other'>Other</option>
</select>
</td>
</tr>

<tr>
<td width='50%'>Movie Actor</td>
<td width='50%'>
<input type='text' name='actor'>
</td>
</tr>

<tr>
<td width='50%'>Movie Director</td>
<td width='50%'>
<input type='text' name='director'>
</td>
</tr>

<tr>
<td width=50%'>Movie Reviews</td>
<td width='50%'>
<input type='text' name='review'>
</td>
</tr>

<tr>
<td width=50%'>Theatre Name</td>
<td width='50%'>
<input type='text' name='t_name'>
</td>
</tr>

<tr>
<td width=50%'>Theatre Location</td>
<td width='50%'>
<input type='text' name='T_loc'>
</td>
</tr>

<tr>
<td colspan='2' align='center'>
<input type='submit' name='submit' value='submit'>
</table>
</body>
</html>