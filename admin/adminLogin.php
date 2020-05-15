<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Login Page</title>
<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="../css/Styles.css">

<style>
	body{
		background-image:url(../images/banners/admin-img.jpg);}
	img{
		opacity:0.3;
	}
</style>
</head>

<body>
<div class="header-outer">
  <div class="header-inner">
    <div class="logo">
      <h1>ChoiCit</h1>
      <p>Nature Stays in the Lap Of Luxury</p>
    </div>
   </div>
  </div>
<div class="login-content">
	<div class="login-inner">
    	<h2>Admin Login</h2>
    </div><br>
<div class="formbox1">
<form id="box1" method="post" action="logic/login.php">
    <label>User Name : </label>
    <input type="text" name="txtUsername" id="uname">
    <br><br>
    <label>Password<span>..</span> : </label>
    <input type="password" name="txtPass" id="pass">
    
	<input class="btn btn-submit admin-btn" type="submit" name="btnLogin" id="btnLogin" value="Login" />
          <?php 
	  	// if url has the parameter 'error'
	  	if(isset($_GET['error'])){
			?>
			<p style="color:#FFF">Invalid username or password</p>
		<?php
        }
	  ?>
</form>
</div>
</div>

</body>
</html>