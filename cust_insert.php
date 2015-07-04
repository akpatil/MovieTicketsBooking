<html>
<title>Customer registration form</title>

 <body background="includes/snow.jpg">
 <h1 align='center'>CUSTOMER REGISTRATION</h1>
 <form action='cust_process.php' method='POST' >
 <table border='0' cellspacing='1' cellpading='3' align='center'>
 <tr>
 <td width='50%'>NAME:</td>
 <td width='50%'>
 <input type='text' name='cust_name'></td>
 </tr>
 <tr>
  <td width='50%'>USERNAME:</td>
 <td width='50%'>
 <input type='text' name='cust_user'></td>
 </tr>
 <tr>
  <td width='50%'>PASSWORD:</td>
 <td width='50%'>
 <input type='text' name='cust_pwd'></td>
 </tr>
 <tr>
  <td width='50%'>EMAIL:</td>
 <td width='50%'>
 <input type='text' name='cust_mail'></td>
 </tr>
 <tr>
<td colspan='2' align='center'>
<input type='submit' name='submit' value='submit'>
 </table>
 </body>
</html>