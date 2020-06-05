<!DOCTYPE html>
<html>
<head>
<title>Register</title> 
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
<a href="PTVOnline.php"><img src="Images/Logo.png" class="logo"></a>
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
<form action="" method="POST" onsubmit="return validate()">
<div class="register">
<h1>Register</h1>
<p>Please fill in the information to register</p>
<hr>
<label for="username"><b>Username</b></label>
<input type="text" placeholder="username" name="username" id="username">
<label for="password"><b>Password</b></label>
<input type="password" placeholder="******" name="password" id="password">
<label for="password-repeat"><b>Repeat your password</b></label>
<input type="password" placeholder="******" name="password-repeat" id="password-repeat">
<hr>
<p>To create an account please agree to our terms <a href="#">Terms &amp; Privacy</a>.</p>
<button type="submit" class="submit">Submit</button>
</div>
<div class="register login">
<p>Already have an account <a href="#">Log in</a>.</p>
</div>
</form>
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
