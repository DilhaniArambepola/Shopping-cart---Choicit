<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Baby Socks</title>
<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7/css/bootstrap.min.css">
</head>

<body>
 <?php
    $prodName = "";
    $prodPrice = "";
    $prodShipping = "";
    $prodQty = "";
    $prodImg = "";
    $prodDescription = "";	
    $prodId = "";

    if (isset($_GET['id'])) {
        // dbconfig.php file contains database connection codes
        include '../connection/dbconfig.php';
       $sql = "SELECT socks_ID,socks_name,Selling_price,Shipping_cost,prodQty,Prod_img,Prod_Description "
                . "FROM baby_socks where socks_ID='" . $_GET['id'] . "';";
        // execute the query and stores the 
        //returned records in $result variable
        $result = $conn->query($sql);
        // checks whether result has one or more rows
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $prodName = $row['socks_name'];
                $prodPrice = $row['Selling_price'];
                $prodQty = $row['prodQty'];
                $prodShipping = $row['Shipping_cost'];
                $prodDescription = $row['Prod_Description'];				
                $prodImg = $row['Prod_img'];
                $prodId =  $row['socks_ID'];            
				}
        }
    }
    ?>

            <!-- Main Header -->
            <?php include 'templates/header.php'; ?>
            <div id="container">
            <!-- Left side column. contains the logo and sidebar -->
            <div>
            <?php include 'templates/sidebar.php'; ?>
			</div>
            <!-- Content Wrapper. Contains page content -->
            <div id="content">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add Baby Socks<br>
                        <small>You can add new baby socks from this form</small>
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">

                     <form class="form-horizontal" method="post" enctype="multipart/form-data" action="logic/save-socks.php">
                        <fieldset>
					
                    		 <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txtProdID">Baby socks ID</label>  
                                <div class="col-md-4">
                                    <input id="txtProdID" value="<?php echo $prodId ?>" name="txtProdID" type="text" placeholder="" class="form-control input-md" required>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txtProdName">Socks Name</label>  
                                <div class="col-md-4">
                                    <input id="txtProdName" value="<?php echo $prodName ?>" name="txtProdName" type="text" placeholder="" class="form-control input-md" required>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txtPrice">Sellling Price</label>  
                                <div class="col-md-4">
                                    <input id="txtPrice" value="<?php echo $prodPrice ?>" name="txtPrice" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txtShipping">Shipping Cost</label>  
                                <div class="col-md-4">
                                    <input id="txtShipping" value="<?php echo $prodShipping ?>" name="txtShipping" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            
                                                        <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txtShipping">Product Description</label>  
                                <div class="col-md-4">
                                    <input id="txtDescription" value="<?php echo $prodDescription ?>" name="txtDescription" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txtProdQty">Available Quantity</label>  
                                <div class="col-md-4">
                                    <input id="txtProdQty" value="<?php echo $prodQty ?>" name="txtProdQty" type="text" placeholder="" class="form-control input-md">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="txtImage">Product Image</label>  
                                <div class="col-md-4">
                                    <input id="txtImage" name="txtImage" type="file" placeholder="" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="btnSave"></label>
                                <div class="col-md-4">
                                    
                                    <input type="hidden" name="hiddentId" value="<?php echo $prodId ?>">
                                    <?php
                                    // if url has a parameter success
                                    if (!isset($_GET['id'])) {
                                        ?>   
                                        <button id="btnSave" type="submit" name="btnSave" class="btn btn-primary">Save</button>
                                    <?php } else { ?>
                                        <button id="btnUpdate" type="submit" name="btnUpdate" class="btn btn-warning">Update</button>

                                    <?php }
                                    ?>    
                                </div>
                            </div>


                            <?php
                            // if url has a parameter success
                            if (isset($_GET['success'])) {
                                ?>   
                                <div class="alert alert-success">Product Saved Successfully..</div>

                            <?php }
                            ?>

                        </fieldset>
                    </form>


                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
<?php include"../template/footer.php" ?>


        </div>

</body>
</html>