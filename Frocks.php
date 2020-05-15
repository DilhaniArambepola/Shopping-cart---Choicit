<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Frocks</title>
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
                        Frocks<br>
                        <small>You can choose your Frock here..</small>
                    </h1>

                    <table class="table table-bordered table-hover table-striped">
                        <?php
                        // dbconfig.php file contains database connection codes
                        include 'connection/dbconfig.php';
                        $sql = "SELECT Frock_ID,Frock_name,Selling_price,Prod_img,Prod_Description FROM frocks;";
                        // execute the query and stores the 
                        //returned records in $result variable
                        $result = $conn->query($sql);
                        // checks whether result has one or more rows
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><img class="view-img" src="images/Frocks/<?php echo $row['Prod_img']; ?>"></td>
                                    <td><?php echo $row['Frock_name']  ?></td>
                                    <td><?php echo $row['Selling_price']  ?></td>
                                    <td><?php echo $row['Prod_Description']  ?></td>
                                    <td><input type="image" src="images/icons/add-to-cart.png" width="166" height="36"/></td>                            
                                </tr>
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
