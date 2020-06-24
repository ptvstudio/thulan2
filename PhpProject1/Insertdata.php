<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script language="javascript" src="Register.js"></script>    
</head>
<body>
<div class="top-nav-bar">
<div class="search-box">
<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
<i class="fa fa-bars" id="close-btn" onclick="closemenu()"></i>
<a href="index.php.php"><img src="Images/Logo.png" class="logo"></a>
<input type=text class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>          
</div>
</div>
<div class="menu-bar">
<ul>
<li><a href="#"><i class="fa fa-shopping-basket"></i>Cart</a></li>
<li><a href="#">Register</a></li>
<li><a href="#">Log In</a></li>
</ul>    
</div>
<title>Insert data to PostgreSQL with PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}
</style>

</head>
<body>
<h1>INSERT DATA TO DATABASE</h1>
<h2>Enter data into product table</h2>
<ul>
<form name="Insertdata" action="Insertdata.php" method="POST" >
<li>Product ID:</li><li><input type="text" name="productid" /></li>
<li>Product Name:</li><li><input type="text" name="productname" /></li>
<li>Size:</li><li><input type="text" name="sizes" /></li>
<li>Basicprice:</li><li><input type="text" name="basicprice" /></li>
<li>Residual:</li><li><input type="text" name="residual" /></li>
<li><input type="submit" /></li>
</form>
</ul>


<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=users', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
         "host=
ec2-35-172-73-125.compute-1.amazonaws.com
;port=5432;user=tjdbbuqrfdlyyq;password=25ffc0cd7a2f79a8d6cc7e1d560a8f4ae1da44f7dfcfae4a795b7c3fe3cf3915;dbname=d120l5u259o1la",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}


$sql = "INSERT INTO product(productid, productname, sizes, basicprice, residual)" 
        . " VALUES('$_POST[productid]','$_POST[productname]','$_POST[sizes]','$_POST[basicprice]','$_POST[residual]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[productid])) {
   echo "ProductID must be not null";
 }
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>
<section class="footer">
    <div class="container text-center">
    <div class="row">
    <div class="col-md-3">
        <h1>Useful Links</h1>
        <p>Privacy Policy</p>
        <p>Terms of use</p>
        <p>Return Policy</p>
        <p>Discount Coupons</p>
    </div> 
    
        <div class="col-md-3">
        <h1>Company</h1>
        <p>About Us</p>
        <p>Contact Us</p>
        <p>Career</p>
        <p>Affiliate</p>
    </div> 
        <div class="col-md-3">
        <h1>Follow Us On</h1>
        <p><i class="fa fa-facebook-official"></i> Facebook</p>
        <p><i class="fa fa-youtube-play"></i> Youtube</p>
        <p><i class="fa fa-twitter"></i> Twitter</p>
        <p><i class="fa fa-instagram"></i> Instagram</p>
    </div> 
        <div class="col-md-3 footer-image">
        <h1>Download App</h1>
            <img src="Images/Download.png">
        </div>
    </div>
        <hr>
        <p class="copyright"> Made with <i class="fa fa-heart-o"></i> by PTV</p>
    </div>
    </section>
<script>
    function openmenu()
    {
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display="none";
        document.getElementById("close-btn").style.display="block";
    }
    function closemenu()
    {
        document.getElementById("side-menu").style.display="none";
        document.getElementById("menu-btn").style.display="block";
        document.getElementById("close-btn").style.display="none";
    }
    </script>    
</body>
</html>
