<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Login Page</title>
<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="../css/Styles.css">

<style>
	body{
		background-image:url(../images/banners/SALE_1.gif);}
	img{
		opacity:0.3;
	}
</style>
</head>

<body>
 <?php
    $uName = "";
    $email = "";
    $address = "";
    $postalCode = "";
    $contactNo = "";
	$payment = "";
    $accountNo = "";	
    $pass = "";
    $cpass = "";	

    if (isset($_GET['id'])) {
        // dbconfig.php file contains database connection codes
        include '../connection/dbconfig.php';
       $sql = "SELECT user_ID,user_name,email,address,postal_code,contact_number,account_number,password,payment_method "
                . "FROM users where user_ID='" . $_GET['id'] . "';";
        // execute the query and stores the 
        //returned records in $result variable
        $result = $conn->query($sql);
        // checks whether result has one or more rows
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $uName = $row['user_name'];
                $email = $row['email'];
                $address = $row['address'];
                $postalCode = $row['postal_code'];
                $contactNo = $row['contact_number'];				
                $payment = $row['payment_method'];
                $accountNo =  $row['account_number'];  
				$pass = $row['password'];             
				}
        }
    }
    ?>

<div class="header-outer">
  <div class="header-inner">
    <div class="logo">
      <h1>ChoiCit</h1>
      <p>Smart & stylish for mom and baby</p>
    </div>
   </div>
  </div>
<div class="ulogin-content">
	<div class="ulogin-inner">
    	<h2>Registration</h2>
    </div><br>
<div class="formbox1">
<form id="box1" method="post" action="logic/save-user.php">
	<div class="uLogin-detail">
    	<div class="user-left">
   		 <label>User Name : </label>
        </div>
        <div class="user-right">
    	 <input type="text" name="txtUserName" id="txtUserName" placeholder="Name" required class="form-control input-md">
        </div>
    </div>
	<div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Email : </label>
        </div>
        <div class="user-right">
    	 <input type="email" name="txtEmail" id="txtEmail" placeholder="email" required class="form-control input-md">
        </div>
    </div>
    <div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Address : </label>
        </div>
        <div class="user-right">
    	 <input type="text" name="txtAddress" id="txtAddress" placeholder="address" required class="form-control input-md">
        </div>
    </div>
    <div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Postal code : </label>
        </div>
        <div class="user-right">
    	 <input type="text" name="txtPostal" id="txtPostal" placeholder="postalCode" required class="form-control input-md">
        </div>
    </div>   
    <div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Contact Number : </label>
        </div>
        <div class="user-right">
    	 <input type="text" name="txtContact" id="txtContact" placeholder="contact number" required class="form-control input-md">
        </div>
    </div>
       <div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Payment Method : </label>
        </div>
        <div class="user-right">
    	 <input type="text" name="txtPayment" id="txtPayment" placeholder="payment method" required class="form-control input-md">
        </div>
    </div>
    <div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Account Number : </label>
        </div>
        <div class="user-right">
    	 <input type="text" name="txtAccountNo" id="txtAccountNo" placeholder="account number" required class="form-control input-md">
        </div>
    </div>
    <div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Password : </label>
        </div>
        <div class="user-right">
    	 <input type="password" name="txtPass" id="txtPass" placeholder="password" required class="form-control input-md">
        </div>
    </div>
    <div class="uLogin-detail">
    	<div class="user-left">
   		 <label>Confirm Password : </label>
        </div>
        <div class="user-right">
    	 <input type="password" name="txtcPass" id="txtcPass" placeholder="confirm password" required class="form-control input-md">
        </div>
    </div>                
    
	<input class="btn btn-submit admin-btn" type="submit" name="btnSave" id="btnSave" value="Save" />
                              <?php
                            // if url has a parameter success
                            if (isset($_GET['success'])) {
                                ?>   
                                <div class="alert alert-success">Thank you..<br>Your details Saved Successfully..</div>

                            <?php }
                            ?>    
         <?php 
	  	// if url has the parameter 'error'
	  	if(isset($_GET['notMatch'])){
			?>
            <div class="alert alert-warning">Confirm your password again.</div>
		<?php
        }
	  ?>

</form>
</div>
</div>

</body>
</html>