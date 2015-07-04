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
<?php
if ($_POST['movie_title']=='' && $_POST['reviewer_name']=='' && $_POST['reviewer_comment']==''&& $_POST['movie_rate']=='')
{
	header('Location:add_review.php');
}
$date = date('Y-m-d H:i:s');
$query="INSERT INTO reviews (review_movie_id,review_date, review_name, review_reviewer_name, review_comment,review_rating) VALUES ('".$_POST['movie_id']."','$date','".$_POST['movie_title']."','". $_POST['reviewer_name'] ."','". $_POST['reviewer_comment'] ."','". $_POST['movie_rate'] ."')";
$result=mysql_query("$query") or die(mysql_error());
echo "Congratulations...!! Your review was posted successfully";
?>
<a href="index.php">Go back to home page</a>
</body>