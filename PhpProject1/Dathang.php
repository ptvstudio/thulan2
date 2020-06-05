<!DOCTYPE html>
<head>
<title>PTV Online</title> 
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="top-nav-bar">
<div class="search-box">
<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
<i class="fa fa-bars" id="close-btn" onclick="closemenu()"></i>
<a href="PTVOnline.php"><img src="Images/Logo.png" class="logo"></a>
<input type=text class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>          
</div>
</div>
<div class="menu-bar">
<ul>
<li><a href="#"><i class="fa fa-shopping-basket"></i>Cart</a></li>
<li><a href="#">Log in</a></li>
<li><a href="Register.php">Register</a></li>
</ul>    
</div>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Product names</th> 
    <th style="width:10%">Price</th> 
    <th style="width:8%">Quantity</th> 
    <th style="width:22%" class="text-center">Into money</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="Images/Product1.png" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">Product 1</h4> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$50.00</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$50.00</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="Images/Product2.png" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">Product 2</h4> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">$40.00</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">$40.00</td> 
   <td class="actions" data-th="">
    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
    </button> 
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
    </button>
   </td> 
  </tr> 
  </tbody><tfoot> 
   <tr class="visible-xs">  
   </tr> 
   <tr> 
       <td><a href="PTVOnline.php" class="btn btn-warning"><i class="fa fa-angle-left"></i>Continue shopping</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Total $90.00</strong>
    </td> 
    <td><a href="#" class="btn btn-success btn-block">Pay<i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
</div>
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
   
