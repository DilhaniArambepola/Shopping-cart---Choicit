
<?php 
	// reads data from the parameters(Data sent by the login form)
	$uname = $_POST['txtUsername'];
	$pass = $_POST['txtPass'];
	
	// assume database has username=admin & pwd=123
	if($uname=="admin" && $pass=="123"){
		
		// redirect user to home page
		header("location: ../index.php");
	}else{
		// redirect user to login page with error
		header("location: ../adminLogin.php?error");
	}
?>