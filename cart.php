<?php include 'logic/odcart.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping cart | Choicit</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include 'template/header.php' ?>
<?php include 'template/sidebar.php' ?>
<div class="main-content">
<center>
<h2>Order details</h2>
<div class="table-responsive">
	<table class="table table-bordered">
    	<tr>
        	<th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
        </tr>
        <?php 
			if(!empty($_SESSION["shopping_cart"]))
			{
				$total = 0;
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
		?>
            <tr>
            	<td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_quantity"]; ?></td>
                <td>Rs.<?php echo $values["item_price"]; ?></td>
                <td><?php echo number_format($values["item_quantity"]* $values["item_price"],2); ?></td>
                <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
			<?php	
				$total = $total + ($values["item_quantity"]* $values["item_price"]);
				}
			?>
            <tr>
            	<td colspan = "3" align="right">Total</td>
                <td align="right">Rs.<?php echo number_format($total, 2); ?></td>    
            </tr>	
		<?php	}
		?>
    </table>
   </div>
</center>
</div>
<?php include 'template/footer.php' ?>
</body>
</html>