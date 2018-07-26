<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>SignUp</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		
		<style type="text/css">
    select {
        width: 100%;
    }
    select:focus {
        min-width: 100%;
        width: auto;
    }    
</style>
	</head>
	<body class="right-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">AgriLife</a></h1>
					
					<!-- Nav -->
						<?php
							include("header.php");
						?>
				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h2>SignUp</h2>
									<span class="byline">*Please Fill All Deatail*</span>
								</header>
								<form action="userinsert.php" method="post">
								  Select your type:<br>
                                    <select name="usertype" id="utype">
                                       <option value="Buyer">Buyer</option><br>
                                       <option value="Seller">Seller</option><br>
                                        
                                    </select><br><br><br>
								    First name:<br>
								    <input type="text" name="firstname"><br>
								    Last name:<br>
								    <input type="text" name="lastname"><br>
								    Address:<br>
								    <textarea name="address" id="address" cols="30" rows="10"></textarea><br>
								    mobile no:<br>
								    <input type="text" name="mobile"><br>
								    nearest city:<br>
								    <select name="city" id="cityn">
								        <option value="Ahmedabad">Ahmedabad</option>
								        <option value="Surat">Surat</option>
								        <option value="Amreli">Amreli</option>
								        <option value="Bhavnagr">bhavnagar</option>
								        <option value="Modasa">Modasa</option>
								        <option value="Kheda">kheda</option>
								        <option value="Bikaner">bikaner</option>
								    </select><br><br>
								    pancard/aadharcard:<br>
								    <input type="text" name="addhar"><br>
								    Email id(optional):<br>
								    <input type="text" name="mail"><br>
								    gender:<br>
								    <input type="radio" name="gender" value="male" checked> Male<br>
                                    <input type="radio" name="gender" value="female"> Female<br>
                                    <input type="radio" name="gender" value="other"> Other<br>
                                    password:<br>
                                    <input type="password" name="pwd"><br>
                                    confirm password:
                                    <input type="password" name="pwd"><br>
                                  
                                    <input type="submit" value="submit">
                                    
								</form>
							</section>
						</div>

						<!-- Sidebar -->
						<div id="sidebar" class="4u sidebar">
							<section>
								<header class="major">
									<h2>Our Services</h2>
								</header>
								<div class="row half">
								<section class="6u">
										<ul class="default">
											<li><a href="#">UrbanGarden</a></li>
											<li><a href="#">AgriInfo</a></li>
											<li><a href="#">Help Center</a></li>
											<li><a href="#">Whether</a></li>
											
										</ul>
									</section>
									
								</div>
							</section>
							
						</div>
						
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">

					<!-- Lists -->
						<div class="row">
							<div class="8u">
								<section>
									<header class="major">
										<h2>AgriLife</h2>
										<span class="byline">Our Services</span>
									</header>
									<div class="row">
										<section class="6u">
											<ul class="default">
											    <li><a href="#">AboutUs</a></li>
												<li><a href="#">ContactUs</a></li>
												<li><a href="#">HelpCenter</a></li>
												
											</ul>
										</section>
										<section class="6u">
											<ul class="default">
												<li><a href="#">Ask Expert.</a></li>
												<li><a href="#">Buyer/seller</a></li>
												<li><a href="#">Agri_info</a></li>
											</ul>
										</section>
									</div>
								</section>
							</div>
							<div class="4u">
								<section>
									<header class="major">
										<h2>ContactUs</h2>
										<span class="byline">AgriLife</span>
									</header>
									<ul class="contact">
										<li>
											<span class="address">Address</span>
											<span>1234 Somewhere Road #4285 <br />Nashville, TN 00000</span>
										</li>
										<li>
											<span class="mail">Mail</span>
											<span><a href="#">someone@untitled.tld</a></span>
										</li>
										<li>
											<span class="phone">Phone</span>
											<span>(000) 000-0000</span>
										</li>
									</ul>	
								</section>
							</div>
						</div>

					<!-- Copyright -->
						<div class="copyright">
							Team: <h1><img src="images/icon2.ico" id="logo"><br><center>Agri Life</center></h1>
						</div>

				</div>
			</div>

	</body>
</html>