<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View Users</title>
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
                        View All Users<br>
                        <small>You can view all users</small>
                    </h1>

                <!-- Main content -->
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>email</th>
                            <th>Address</th>
                            <th>Postal code</th>
                            <th>Contact No</th>  
                            <th>Payment method</th>                                                  
                            <th>Account Number</th>
                        </tr>
                        <?php
                        // dbconfig.php file contains database connection codes
                        include '../connection/dbconfig.php';
                         $sql = "SELECT user_ID,user_name,email,address,postal_code,contact_number,payment_method,account_number FROM users;";
                        // execute the query and stores the 
                        //returned records in $result variable
                        $result = $conn->query($sql);
                        // checks whether result has one or more rows
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['user_ID']  ?></td>
                                    <td><?php echo $row['user_name']  ?></td>
                                    <td><?php echo $row['email']  ?></td>
                                    <td><?php echo $row['address']  ?></td>
                                    <td><?php echo $row['postal_code']  ?></td>
                                    <td><?php echo $row['contact_number']  ?></td>
                                    <td><?php echo $row['payment_method']  ?></td>
                                    <td><?php echo $row['account_number']  ?></td>
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
