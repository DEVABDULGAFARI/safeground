 <?php include('server2.php') ?>
<?php
if (isset($_SESSION['username'])) {
  	header("location: home.php");
  }
?>
<!DOCTYPE html>
 <html>
 <head>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
	 <title>SafeGround</title>
	 <meta charset="UTF-8"/>
	 <link rel="stylesheet" href="index.css" type="text/css"/>
 </head>
	 <body>
<?php if (isset($_COOKIE['browser_token'])) {
echo $_COOKIE['browser_token'];
}
else {
echo "Bye Bye";
}
?>
<table class="header" style= "padding:5px;width:100%;"><tr><td width= "42%"><big>SafeGround</big></td><td width= "58%"><form action="reg/index.php"><button type="submit" class="body" style= "padding:10px;background:darkblue;margin:0px;color:white;float:right;">Create New Account</button></form></td></tr></table>
<div  class="body" style= "background:whitesmoke;color: black;border:1px solid gray;">
Welcome to SafeGround Social Media Site By Afolabi AbdulGafari Kajogbola.</div>
<?php include('errors.php'); ?>
<div  class="body">
<form method="post" action="./">
	<div  class="input" style= "border:0px;">
	<label><b>Email Address or Phone Number</b></label>
	<input type= "text" name= "username"></br>
	<label><b>Password</b></label>
	<input type= "password" name= "password"></br><center>
	<button type="submit" class="button" style= "width:97%;margin:5px;padding:18px;margin-bottom:10px;" name="login">Login In</button></center></div>
	<center>or</center></form>
	<center><button  class="body" style= "padding:10px;background:darkblue;margin:0px;color:white;width:60%;margin-top:10px">Create New Account</button></center></br>
	<center><a href= "">Forget Password</a></center>
	</div>
<table  class="footer" style= "width:100%;">
<tr>
	<td width= "50%"><a href= ""><b>English (UK)</b></a></td><td width= "50%"><a href= "">Hausa</a></td>
</tr>
<tr>
	<td width= "50%"><a href= "">French</a></td><td width= "50%"><a href= "">Yoruba</a></td>
</tr>
<tr>
	<td width= "50%"><a href= "">Espanol</a></td><td width= "50%"><a href= "">English (US)</a></td>
</tr>
<tr>
	<td width= "50%"><b><font color= "black">SafeGround Inc</b></font></td><td width= "50%"></td>
</tr></table>

</body>
 </html>