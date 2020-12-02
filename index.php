
<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ecommerce Website</title> 
	<link rel="stylesheet" href="style.css"> 
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300;1,400;1,600;1,800&display=swap" rel="stylesheet">  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
<body>  
<div class="header">	
<div class="container">  
	<div class="navbar"> 
 		<div class="logo"> 
 			<img src="images\logo.png"width="130px">
 		</div> 
 		<nav> 
 			<ul id="effect"> 
 				<li><a href="">home</a></li> 
 				<li><a href="">Products</a></li> 
 				<li><a href="">About</a></li> 
 				<li><a href="">Contact</a></li> 
 				<li><a href="signup.php">Account</a></li>
 			</ul> 
 		</nav> 
 		<img src="images\cart.png" width="30px" height="30px"> 
 		<img src="images\menu.png" class="menu-icon" onclick="menutoggle()">
	</div> 
	<div class="row"> 
		<div class="col-2"> 
			<h1>Give your workout<br>A New Style</h1> 
			<p>Success isn't always about greatness.It's about consistency.</p> 
			<a href="" class="btn">Explore Now &#8594;</a> 
		</div>  
		<div class="col-2"> 
			<img src="images\image1.png">
		</div>

	</div>
</div>  
</div> 
 
<!---featured categories--> 
<div class="categories">  
<div class="small-container">	 
	<div class="row">  
		<div class="col-3"> 
			<img src="images\category-1.jpg">
		</div>  
		<div class="col-3"> 
			<img src="images\category-2.jpg">
		</div>  
		<div class="col-3"> 
			<img src="images\category-3.jpg">
		</div> 
	</div> 
</div>
</div> 
 
<!---Latest products-->  
<div class="small-container"> 
	<h2 class="title">Featured Sports Products</h2> 
	<div class="row"> 
		<div class="col-4"> 
			<img src="images\product-1.jpg"> 
			<h4>Football Kits</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-2.jpg"> 
			<h4>Football Boots</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-3.jpg"> 
			<h4>Sports Pants</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-4.jpg"> 
			<h4>Full Kit</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
	</div>  
	<h2 class="title">Featured Casual Products</h2> 
	<div class="row"> 
		<div class="col-4"> 
			<img src="images\product-5.jpg"> 
			<h4>Sneakers</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-6.jpg"> 
			<h4>Printed T-Shirt</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-7.jpg"> 
			<h4>Socks</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-8.jpg"> 
			<h4>Professional Watch</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-9.jpg"> 
			<h4>Casual Watch</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-10.jpg"> 
			<h4>Sports Shoes</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-11.jpg"> 
			<h4>Casual Shoes</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div> 
		<div class="col-4"> 
			<img src="images\product-12.jpg"> 
			<h4>Trousers</h4>  
			<div class="rating"> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star"></i> 
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
	</div>  

</div> 
 
<!--offer--> 
 
<div class="offer">  
	<div class="small-container"> 
		<div class="row"> 
			<div class="col-2"> 
				<img src="images\exclusive.png" class="offer-img"> 
			</div> 
			<div class="col-2">   
				<p>exclusively available on dotdot</p> 
				<h1>Smart Band 4</h1> 
				<small>the mi band bla bla bla</small> 
				<a href="" class="btn">Buy Now &#8594;</a>
			</div>	
	 	</div> 
	</div> 
</div>	
 
<div class="footer"> 
	<div class="container"> 
		<div class="row"> 
				<div class="footer-col-1"> 
					<h3>Download Our App</h3> 
					<p>Download App for Android and iOS mobile phone</p> 
					<div class="app-logo"></div> 
						<img src="images\play-store.png"> 
						<img src="images\app-store.png">
				</div> 
				<div class="footer-col-2"> 
					<img src="images\logo-white.png"> 
					<p>Our goal is to Sustainable bla bla</p>
				</div>  
				<div class="footer-col-3"> 
					<h3>Useful Links</h3> 
					<ul> 
						<li>Coupons</li> 
						<li>Blog Post</li> 
						<li>Coupons</li> 
						<li>Join Affiliate</li>
					</ul>
				</div>  
				<div class="footer-col-4"> 
					<h3>Follow Us</h3> 
					<ul> 
						<li>Facebook</li> 
						<li>Twitter</li> 
						<li>Instagram</li> 
						<li>Youtube</li>
					</ul>
				</div> 
				
			</div>
		</div> 
        <hr>  
		<p class="Copyright">"Copyright <?php $year = date("Y"); echo "$year";?>-Ecommerce Website</p> 
	</div>
</div> 
 

 <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="function.js"></script>  
</body> 
</html> 