<?php

// if user clicked register button

    // read data from the form
    $userName = $_POST['txtUserName'];
    $email = $_POST['txtEmail'];
    $address = $_POST['txtAddress'];
    $postalCode = $_POST['txtPostal'];
    $contactNo = $_POST['txtContact'];	
    $paymentMethod = $_POST['txtPayment'];
    $accountNo = $_POST['txtAccountNo'];
	$pass = $_POST['txtPass'];
	$cpass = $_POST['txtcPass'];

    include "../../connection/dbconfig.php";

    $sql = "";

    // if user clicked save button, cjange sql to insert query
    if (isset($_POST['btnSave'])) {
        // register the user
        //  php source code to EXECUTE INSERT INTO Query
        $sql = "INSERT INTO `users` (`user_name`, `email`, `address`, `postal_code`, `contact_number`,`account_number`, `password`, `payment_method`) "
                . "VALUES ('$userName', '$email', '$address', '$postalCode', '$contactNo', '$accountNo', '$pass', '$paymentMethod');";
    }
   
   if ($pass != $cpass){
        header("location: ../userLogin.php?notMatch");
   }
   else if ($conn->query($sql) === TRUE) { // successfully added
        header("location: ../userLogin.php?success");
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;		
	}

?>