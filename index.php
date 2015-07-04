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
<h1 align="center">Our Prized Movie Collection</h1>
<b>JHA.TWO</b><br>
<img src="includes/J2.jpg" width=200 height=150></img>
<a href="add_review.php">/Add Reviews/</a>
<a href="table1.php">View Reviews/</a>
<a href="demo2.php">Buy Now/</a><br><br><br><br>
<b>BARFI</b><br>
<img src="includes/BARFI.jpg" width=200 height=150></img>
<a href="add_review.php">/Add Reviews/</a>
<a href="table1.php">View Reviews/</a>
<a href="demo2.php">Buy Now/</a><br><br><br><br>
<b>THE INCREDIBLE HALKAT</b><br>
<img src="includes/HALKAT.jpg" width=200 height=150></img>
<a href="add_review.php">/Add Reviews/</a>
<a href="table1.php">View Reviews/</a>
<a href="demo2.php">Buy Now/</a><br><br><br><br>
<b>BLACK IN MEN</b><br>
<img src="includes/BIM.jpg" width=200 height=150></img>
<a href="add_review.php">/Add Reviews/</a>
<a href="table1.php">View Reviews/</a>
<a href="demo2.php">Buy Now/</a><br><br><br><br>

</body>
</html>
<?php

?>