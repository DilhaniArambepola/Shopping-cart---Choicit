<?php

// if user clicked register button

    // read data from the form
    $id = $_POST['txtProdID'];	
    $prodName = $_POST['txtProdName'];
    $price = $_POST['txtPrice'];
    $shipping = $_POST['txtShipping'];
    $qty = $_POST['txtProdQty'];
    $description = $_POST['txtDescription'];	
    $pid = $_POST['hiddentId'];
    $prodImg = $_FILES["txtImage"]["name"];	
	
	    // upload image to the server
    $target_dir = "../../images/Babies/toys/";
    $target_file = $target_dir . basename($_FILES["txtImage"]["name"]);

    // save image in upload directory
    move_uploaded_file($_FILES["txtImage"]["tmp_name"], $target_file);

    include "../../connection/dbconfig.php";

    $sql = "";

    // if user clicked save button, cjange sql to insert query
    if (isset($_POST['btnSave'])) {
        // register the user
        //  php source code to EXECUTE INSERT INTO Query
        $sql = "INSERT INTO `toys` (`toy_ID`,`toy_name`, `Selling_price`, `Shipping_cost`, `prodQty`, `prod_img`,`prod_Description`) "
                . "VALUES ('$id','$prodName', '$price', '$shipping', '$qty', '$prodImg', '$description');";
    }
    // if user clicked update button, change sql to update query
    if (isset($_POST['btnUpdate'])) {
        // register the user
        //  php source code to EXECUTE INSERT INTO Query
        $sql = "UPDATE `toys` SET `toy_ID`='$pid', `toy_name`='$prodName', `Selling_price`='$price', `Shipping_cost`='$shipping', `prodQty`='$qty', `prod_Description`= '$description' WHERE `toy_ID`='$pid';";
    }
    

    if ($conn->query($sql) === TRUE) { // successfully added
        header("location: ../add-Toys.php?success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>