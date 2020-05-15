<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include"template/header.php" ?>
<div class="content-outer">
  <div class="fetured-wrapper">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/banners/banner1.jpg" style="width:100%; height:350px;">
      </div>

      <div class="item">
        <img src="images/banners/banner-2.jpg" style="width:100%; height:400px;">
      </div>
    
      <div class="item">
        <img src="images/banners/banner-1.jpg" style="width:100%; height:400px;">
      </div>
      
      <div class="item">
        <img src="images/banners/banner.jpg" style="width:100%; height:350px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div> 
  <div class="content-wrapper">
  <?php include"template/sidebar.php" ?>
    <div class="main-content">
    <h1 id="latest">Latest Product </h1>
      <div class="product-wrapper">
        <img class="product" src="images/front/weddingSaree.jpg"/>
        <h2>Sarees</h2>
        <div class="price-tag"><a href="WeddingSarees.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper">
        <img class="product" src="images/Frocks/prom-dresses.gif" alt="saree image"/>
        <h2>Frocks</h2>
        <div class="price-tag"><a href="Frocks.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper last-product">
	  <img src="images/front/trouser.jpg" height="262"/>
        <h2>Trousers</h2>
        <div class="price-tag"><a href="DenimTrousers.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      
      <div class="product-wrapper">
      <img class="product" src="images/front/longSkirt.jpg"/>
        <h2>Skirts</h2>
        <div class="price-tag"><a href="LongSkirts.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper">
      <img class="product" src="images/front/accessaries.jpg"/>
        <h2>Accessaries</h2>
        <div class="price-tag"><a href="Accessaries.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper last-product">
      <img src="images/Babies/frocks/babyFrocks.gif" height="262"/>
        <h2>Baby Frocks</h2>
        <div class="price-tag"><a href="Baby-girls.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      
      <div class="product-wrapper">
      <img class="product"  src="images/front/babySuit.jpg"/>
        <h2>Suits for baby boys</h2>
        <div class="price-tag"><a href="Baby-boys.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper">
      <img class="product" src="images/front/toy.jpg"/>
        <h2>Toys</h2>
        <div class="price-tag"><a href="Toys.php"> Available Items</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper last-product">
      <img src="images/Babies/strollers/cart.gif" height="262"/>
        <h2>Strollers</h2>
        <div class="price-tag"><a href="Strollers.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>

      <div class="product-wrapper">
      <img class="product"  src="images/front/playpen.jpg"/>
        <h2>Playpen</h2>
        <div class="price-tag"><a href="Playpen.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper">
      <img class="product" src="images/front/babyPanel.jpg"/>
        <h2>Panels</h2>
        <div class="price-tag"><a href="Baby-Panels.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
      </div>
      <div class="product-wrapper last-product">
      <img src="images/front/socks.jpg" height="262"/>
        <h2>Baby Socks</h2>
        <div class="price-tag"><a href="Socks.php"> Available Designs</a></div>
        <div class="readmore">More &gt;&gt;</div> 
    </div>
  </div>
</div>
<?php include"template/footer.php" ?>
</body>
</html>
