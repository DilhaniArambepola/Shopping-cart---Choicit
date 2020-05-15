<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View baby Suits</title>
<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7/css/bootstrap.min.css">
</head>

<body>
 	<?php include 'templates/header.php'; ?>
       <div id="container">
            <!-- Left side column. contains the logo and sidebar -->
        <?php include 'templates/sidebar.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <div id="content">
                    <h1>
                        View All baby Suits<br>
                        <small>You can view all baby suits in the store</small>
                    </h1>

                <!-- Main content -->
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>Suit Id</th>
                            <th>Suit Name</th>
                            <th>Price</th>
                            <th>Shipping</th>
                            <th>Available Qty</th>
                            <th>Description</th>                                                        
                            <th>Actions</th>
                        </tr>
                        <?php
                        // dbconfig.php file contains database connection codes
                        include '../connection/dbconfig.php';
                         $sql = "SELECT boys_ID,boys_name,Selling_price,Shipping_cost,prodQty,Prod_Description,Prod_img FROM baby_boys;";
                        // execute the query and stores the 
                        //returned records in $result variable
                        $result = $conn->query($sql);
                        // checks whether result has one or more rows
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['boys_ID']  ?></td>
                                    <td><?php echo $row['boys_name']  ?></td>
                                    <td><?php echo $row['Selling_price']  ?></td>
                                    <td><?php echo $row['Shipping_cost']  ?></td>
                                    <td><?php echo $row['prodQty']  ?></td>
                                    <td><?php echo $row['Prod_Description']  ?></td>
                                    <td><a href="add-BabyCloths.php?id=<?php echo  $row['boys_ID']; ?>">Edit</a></td>
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

            <!-- Main Footer -->
            <?php include '../template/footer.php'; ?>


        </div>
</body>
</html>
