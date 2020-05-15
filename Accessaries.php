<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accessaries</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="SpryAssets/SpryMenuBarHorizontal.css">
<link rel="stylesheet" type="text/css" href="css/Styles.css">
</head>

<body>
 	<?php include 'template/header.php'; ?>
<div class="content-outer">
  <div class="content-wrapper">
            <!-- Content Wrapper. Contains page content -->
    <?php include 'template/sidebar.php'; ?>
      <div class="main-content">
            <!-- main-content-->
                    <h1>
                        Accessaries<br>
                        <small>You can find your beautiful accessary world from here..</small>
                    </h1>

                    <table class="table table-bordered table-hover table-striped">
                        <?php
                        // dbconfig.php file contains database connection codes
                        include 'connection/dbconfig.php';
                        $sql = "SELECT Accessary_ID,Accessary_name,Selling_price,Prod_img,Prod_Description FROM accessaries;";
                        // execute the query and stores the 
                        //returned records in $result variable
                        $result = $conn->query($sql);
                        // checks whether result has one or more rows
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                <form method="post" action="cart.php?action=add&id=<?php echo $row['id']; ?>">                                
                                    <td><img class="view-img" src="images/accessaries/<?php echo $row['Prod_img']; ?>"></td>
                                    <td><?php echo $row['Accessary_name']  ?></td>
                                    <td style="color:#F00">Rs.<?php echo $row['Selling_price']  ?></td>
                                    <td><?php echo $row['Prod_Description']  ?></td>
                                    <td><input type="submit" name="add-to-cart" class="btn btn-success" value="Add to cart" formtarget="_new"></td>                            		<td><input type="text" name="quantity" class="form-control" value="1"></td>
                                    <input type="hidden" name="hidden_name" value="<?php echo $row['Accessary_name']; ?>"/>
                                 <input type="hidden" name="hidden_price" value="<?php echo $row['Selling_price']; ?>"/>
                                </tr>
                                </form>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>

                    </table>

                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
		</div>
            <!-- Main Footer -->
            <?php include 'template/footer.php'; ?>
        </div>
</body>
</html>
