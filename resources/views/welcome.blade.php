<!doctype html>
<html lang="en"  data-ng-app="EcommerceApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
	<meta name="description" content="Printing template">
	<meta name="author" content="Netbase">
	<!--Add css lib-->
	<link rel="stylesheet" type="text/css" href="frontend/css/style-main.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Arimo:500,300,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:500,300,700,400' rel='stylesheet' type='text/css'>
	<title>E-commerce</title>

</head>
<body ng-controller="AppController">
	<!--Header: Begin-->
	<header>
		<!--Top Header: Begin-->
		<section id="top-header" class="clearfix">
			<div class="container">
				<div class="row">
					<div class="top-links col-lg-7 col-md-6 col-sm-5 col-xs-6">
						<ul>
							<li class="visible-md visible-lg">
								<a href="myaccount-dashboard.html">
									<i class="fa fa-lock"></i>
									<!-- Account -->
								</a>
							</li>
							<li class="visible-md visible-lg">
								<a href="wishlist.html">
									<i class="fa fa-heart"></i>
									<!-- Wishlist -->
								</a>
							</li>
							<li>
								<a href="login.html">
									<i class="fa fa-user"></i>
									<!-- Login -->
								</a>
							</li>
							<li class="hidden-xs">
								<a href="register.html">
									<i class="fa fa-pencil"></i>
									<!-- Sign Up -->
								</a>
							</li>
							<li class="hidden-xs">
								<a href="#">
									<i class="fa fa-facebook"></i>
									<!-- Connect with facebook -->
								</a>
							</li>
							<li class="hidden-xs">
								<a href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="top-header-right f-right col-lg-5 col-md-6 col-sm-7 col-xs-6">
						<div class="w-header-right">
							<div class="block-currency">
								<div class="currency-active">
									<span class="currency-name">
										currency:<span> usd</span><i class="fa fa-angle-down"></i>

									</span>
								</div>
								<ul>
									<li>
										<a href="#" title="Select currency japan">
											<span>JPY</span>
										</a>
									</li>
									<li>
										<a href="#" title="Select currency japan">
											<span>Euro</span>
										</a>
									</li>
									<li>
										<a href="#" title="Select currency japan">
											<span>Pound St.</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="language-w clearfix">
								<div class="language-active">
									<span class="language-name">Language: <span>English</span><i class="fa fa-angle-down"></i>
								</span>
							</div>
							<ul>
								<li>
									<a href="#" title="Select Australia language">
										<span>Australia</span>
									</a>
								</li>
								<li>
									<a href="#" title="Select Japan language">
										<span>Japan</span>
									</a>
								</li>
								<li>
									<a href="#" title="Select France language">
										<span>France</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="th-hotline">
							<i class="fa fa-phone"></i>
							<span>1.866.614.8002</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--Top Header: End-->
	<!--Main Header: Begin-->
	<section class="main-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 w-logo">
					<div class="logo hd-pd ">
						<a href="index.html">
							<img src="frontend/images/logo.png" alt="printshop logo">
						</a>
					</div>
				</div>
				<div class="col-lg-7 col-md-8 visible-md visible-lg">
					<nav id="main-menu" class="main-menu clearfix">
						<ul>
							<li class="level0 parent col1 all-product hd-pd">
								<a href="#"><span>All Products</span><i class="fa fa-chevron-down"></i></a>
								<ul class="level0">
									<li class="level1">
										<span class="menu-title">Most Popular</span>
										<ul class="level1">
											<li class="level2">
												<a href="detail.html" title="Business Card">Business Card</a>
											</li>
											<li class="level2">
												<a href="detail.html" title="Premium Business Card">Premium Business Card</a>
											</li>
											<li class="level2">
												<a href="detail.html" title="Free Business Card">Free Business Card</a>
											</li>
											<li class="level2">
												<a href="detail.html" title="Marketing Materials">Marketing Materials</a>
											</li>
											<li class="level2">
												<a href="detail.html" title="Dance Marketing Kit">Dance Marketing Kit</a>
											</li>
											<li class="level2 view-all-pro">
												<a href="category_grid.html" title="view all product">View all</a>
											</li>
										</ul>
									</li>
									<li class="level1">
										<span class="menu-title">Categories</span>
										<ul class="level1">
											<li class="level2">
												<a href="category_grid.html" title="Calendar">Calendar</a>
												<ul class="level2">
													<li><span class="menu-title">Calendar</span></li>
													<li>
														<a href="detail.html" title="Marketing Materials">Marketing Materials</a>
													</li>
													<li>
														<a href="detail.html" title="Dance Marketing Kit">Dance Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Event Marketing Kit">Event Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing's Card">Marketing's Card</a>
													</li>
													<li>
														<a href="detail.html" title="Flyers Print">Flyers Print</a>
													</li>
													<li>
														<a href="detail.html" title="Flyers Product">Flyers Product</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Printing">The Flyers Printing</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Three Page">The Flyers Three Page</a>
													</li>
													<li>
														<a href="detail.html" title="Flyers Two Page">Flyers Two Page</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures">Brochures</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures Cafe">Brochures Cafe</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures's Idea Design">Brochures's Idea Design</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures's Foods">Brochures's Foods</a>
													</li>
													<li>
														<a href="detail.html" title="Six Panels Brochures">Six Panels Brochures</a>
													</li>
													<li><img src="frontend/images/banner/menu/menu-cate-calendar.png" alt="Calendar"></li>
												</ul>
											</li>
											<li class="level2">
												<a href="category_grid.html" title="Banners & Signs">Banners & Signs</a>
												<ul class="level2">
													<li><span class="menu-title">Banners & Signs</span></li>
													<li>
														<a href="detail.html" title="Business Card">Business Card</a>
													</li>
													<li>
														<a href="detail.html" title="Premium Business Card">Premium Business Card</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Materials">Marketing Materials</a>
													</li>
													<li>
														<a href="detail.html" title="Dance Marketing Kit">Dance Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Event Marketing Kit">Event Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards">Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards Print">Postcards Print</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards">Marketing Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards Product">Marketing Postcards Product</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing's Card">Marketing's Card</a>
													</li>
													<li>
														<a href="detail.html" title="Mailing Services">Mailing Services</a>
													</li>
													<li>
														<a href="detail.html" title="Flyers Product">Flyers Product</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures's Foods">Flyers Two Page</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures">Brochures</a>
													</li>
													<li><img src="frontend/images/banner/menu/menu-cate-calendar.png" alt="Banners Signs"></li>
												</ul>
											</li>
											<li class="level2">
												<a href="category_grid.html" title="Marketing Materials">Marketing Materials</a>
												<ul class="level2">
													<li><span class="menu-title">Marketing Materials</span></li>
													<li>
														<a href="detail.html" title="Marketing Materials">Marketing Materials</a>
													</li>
													<li>
														<a href="detail.html" title="Dance Marketing Kit">Dance Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Event Marketing Kit">Event Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Premium Pricelist Template">Premium Pricelist Template</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards">Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards Print">Postcards Print</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards">Marketing Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards Product">Marketing Postcards Product</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing's Card">Marketing's Card</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Printing">The Flyers Printing</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Three Page">The Flyers Three Page</a>
													</li>
													<li>
														<a href="detail.html" title="Flyers Two Page">Flyers Two Page</a>
													</li>
													<li>
														<a href="detail.html" title="Six Panels Brochures">Six Panels Brochures</a>
													</li>
													<li>
														<a href="detail.html" title="Seven Panels Brochures">Seven Panels Brochures</a>
													</li>
													<li><img src="frontend/images/banner/menu/menu-cate-calendar.png" alt="marketing materials"></li>
												</ul>
											</li>
											<li class="level2">
												<a href="category_grid.html" title="Business Stationery & Forms">Business Stationery & Forms</a>
												<ul class="level2">
													<li><span class="menu-title">Business Stationery & Forms</span></li>
													<li>
														<a href="detail.html" title="Marketing Materials">Marketing Materials</a>
													</li>
													<li>
														<a href="detail.html" title="Dance Marketing Kit">Dance Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Event Marketing Kit">Event Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Premium Pricelist Template">Premium Pricelist Template</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards">Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards Print">Postcards Print</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards">Marketing Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards Product">Marketing Postcards Product</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing's Card">Marketing's Card</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Printing">The Flyers Printing</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Three Page">The Flyers Three Page</a>
													</li>
													<li>
														<a href="detail.html" title="Flyers Two Page">Flyers Two Page</a>
													</li>
													<li>
														<a href="detail.html" title="Six Panels Brochures">Six Panels Brochures</a>
													</li>
													<li>
														<a href="detail.html" title="Seven Panels Brochures">Seven Panels Brochures</a>
													</li>
													<li><img src="frontend/images/banner/menu/menu-cate-calendar.png" alt="Business Stationery Forms"></li>
												</ul>
											</li>
											<li class="level2">
												<a href="category_grid.html" title="Direct Mail & Mailing Service">Direct Mail & Mailing Service</a>
												<ul class="level2">
													<li><span class="menu-title">Marketing Materials</span></li>
													<li>
														<a href="detail.html" title="Marketing Materials">Marketing Materials</a>
													</li>
													<li>
														<a href="detail.html" title="Dance Marketing Kit">Dance Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Event Marketing Kit">Event Marketing Kit</a>
													</li>
													<li>
														<a href="detail.html" title="Premium Pricelist Template">Premium Pricelist Template</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards">Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Postcards Print">Postcards Print</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards">Marketing Postcards</a>
													</li>
													<li>
														<a href="detail.html" title="Marketing Postcards Product">Marketing Postcards Product</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Printing">The Flyers Printing</a>
													</li>
													<li>
														<a href="detail.html" title="The Flyers Three Page">The Flyers Three Page</a>
													</li>
													<li>
														<a href="detail.html" title="Flyers Two Page">Flyers Two Page</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures">Brochures</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures Cafe">Brochures Cafe</a>
													</li>
													<li>
														<a href="detail.html" title="Brochures's Idea Design">Brochures's Idea Design</a>
													</li>
													<li><img src="frontend/images/banner/menu/menu-cate-calendar.png" alt="Banners Signs"></li>
												</ul>
											</li>
											<li class="level2 view-all-pro">
												<a href="category_grid.html" title="view all product">View all</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="level0 parent col1 hd-pd">
								<a href="category_grid.html" title="Business Cards">
									<span>Business Cards</span>
									<i class="fa fa-chevron-down"></i>
								</a>
								<ul class="level0">
									<li class="level1 nav-1-1 first item">
										<a href="category_grid.html" title="Premium Business Cards">Premium Business Cards</a>
									</li>
									<li class="level1 nav-1-2 item">
										<a href="category_grid.html" title="Free Business Cards">Free Business Cards</a>
									</li>
									<li class="level1 nav-1-3 item">
										<a href="category_grid.html" title="Die-Cut Business Cards">Die-Cut Business Cards</a>
									</li>
									<li class="level1 nav-1-4 item">
										<a href="category_grid.html" title="Standard Business Cards">Standard Business Cards</a>
									</li>
									<li class="level1 nav-1-5 item">
										<a href="category_grid.html" class="Personal Business Cards">Personal Business Cards</a>
									</li>
									<li class="level1 nav-1-6 item">
										<a href="category_grid.html" title="Business Card Holders">Business Card Holders</a>
									</li>
									<li class="level1 nav-1-7 item">
										<a href="category_grid.html" title="Networking Cards">Networking Cards</a>
									</li>
									<li class="level1 nav-1-8 item">
										<a href="category_grid.html" title="Appointment Cards">Appointment Cards</a>
									</li>
									<li class="level1 nav-1-9 last item">
										<a href="category_grid.html" title="Mommy Cards">Mommy Cards</a>
									</li>
								</ul>
							</li>
							<li class="level0 hd-pd">
								<a href="category_grid.html" title="Marketing">Marketing</a>
							</li>
							<li class="level0 hd-pd">
								<a href="category_list.html" title="Postcards">Postcards</a>
							</li>
							<li class="level0 hd-pd" title="About Us">
								<a href="about-us.html">About Us</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-1 col-sm-offset-5 col-xs-offset-2 col-xs-2 visible-sm visible-xs mbmenu-icon-w">
					<span class="mbmenu-icon hd-pd">
						<i class="fa fa-bars"></i>
					</span>
				</div>
				<div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 headerCS">
					<div class="cart-w SC-w hd-pd ">
						<span class="mcart-icon dropdowSCIcon">
							<i class="fa fa-shopping-cart"></i>
							<span class="mcart-dd-qty">2</span>
						</span>
						<div class="mcart-dd-content dropdowSCContent clearfix">
							<div class="mcart-item-w clearfix1">
								<ul>
									<li class="mcart-item">
										<img src="frontend/images/product/mcart-postcard.jpg" alt="postcard cards">
										<div class="mcart-info">
											<a href="detail.html" class="mcart-name">Postcards Cards</a>
											<span class="mcart-qty">1 x </span>
											<span class="mcart-price">$ 10.09</span>
											<span class="mcart-remove-item">
												<i class="fa fa-times-circle"></i>
											</span>
										</div>
									</li>
								</ul>
							</div>

							<div class="mcart-item-w clearfix">
								<ul>
									<li class="mcart-item iteam2">
										<img src="frontend/images/product/mcart-postcard.jpg" alt="postcard cards">
										<div class="mcart-info">
											<a href="detail.html" class="mcart-name">Postcards Cards</a>
											<span class="mcart-qty">1 x </span>
											<span class="mcart-price">$ 10.09</span>
											<span class="mcart-remove-item">
												<i class="fa fa-times-circle"></i>
											</span>
										</div>
									</li>
								</ul>
							</div>
							<div class="mcart-total clearfix">
								<table>
									<tr>
										<td>Sub-Total</td>
										<td>$ 10.09</td>
									</tr>
									<tr>
										<td>Eco Tax (-2.00)</td>
										<td>$ 2.00</td>
									</tr>
									<tr>
										<td>VAT (20%)</td>
										<td>$ 2.018</td>
									</tr>
									<tr class="total">
										<td>Total</td>
										<td>$ 10.108</td>
									</tr>
								</table>
							</div>
							<div class="mcart-links buttons-set clearfix">
								<a href="cart.html" class="gbtn mcart-link-cart">View Cart</a>
								<a href="checkout.html" class="gbtn mcart-link-checkout">Checkout</a>
							</div>
						</div>
					</div>
					<div class="search-w SC-w hd-pd ">
						<span class="search-icon dropdowSCIcon">
							<i class="fa fa-search"></i>
						</span>
						<div class="search-safari">
							<div class="search-form dropdowSCContent">
								<form method="POST" action="#">
									<input type="text" name="search" placeholder="Search" />
									<input type="submit" name="search" value="Search">
									<i class="fa fa-search"></i>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--Main Header: End-->
</header><!--Header: End-->

<!--Main index : Begin-->


<div>
	<div ui-view> </div>
</div>


<!--Footer : Begin-->
<footer>
	<div class="footer-main">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-12 about-us footer-col">
					<h2>About Us</h2>
					<div class="footer-content">
						<a href="index.html" title="Cmsmart logo footer" class="logo-footer">
							<img src="frontend/images/footer-logo.png" alt="logo footer">
						</a>
						<ul class="info">
							<li>
								<i class="fa fa-home"></i>
								<span>102580 Santa Monica Los Angeles</span>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<span>+3 045 224 33 12</span>
							</li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<span><a href="mailto:support@netbaseteam.net" title="send mail to Cmsmart">support@netbaseteam.net</a></span>
							</li>
						</ul>
						<ul class="footer-social">
							<li>
								<a href="#" title="Facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" title="Twiter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" title="Google plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 corporate footer-col">
					<h2>Corporate</h2>
					<div class="footer-content">
						<ul>
							<li>
								<a href="about-us.html" title="About us">About</a>
							</li>
							<li>
								<a href="cart.html" title="Green">Green</a>
							</li>
							<li>
								<a href="checkout.html" title="Afiliates">Afiliates</a>
							</li>
							<li>
								<a href="contact.html" title="Non-profits and Government">Non-profits and Government</a>
							</li>
							<li>
								<a href="detail.html" title="Terms of Service">Terms of Service</a>
							</li>
							<li>
								<a href="faq.html" title="Privacy Policy">Privacy Policy</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 support footer-col">
					<h2>Support</h2>
					<div class="footer-content">
						<ul>
							<li>
								<a href="myaccount-information.html" title="My Account">My Account</a>
							</li>
							<li>
								<a href="#" title="Design Guide">Design Guide</a>
							</li>
							<li>
								<a href="faq.html" title="FAQ">FAQ</a>
							</li>
							<li>
								<a href="#" title="Design Service">Design Services</a>
							</li>
							<li>
								<a href="contact.html" title="Contact Us">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-xs-12 other-info footer-col hidden-sm">
					<h2>Other Info</h2>
					<div class="footer-content">
						<p>
							Printmart provides fast online printing for both homes and businesses. We  provide high quality business cards, postcards, flyers, brochures, stationery and  other premium online print products.
						</p>
						<img src="frontend/images/footer-payment.png" alt="Payment method">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="copy-right">Central - Copyright © <script>document.write(new Date().getFullYear())</script> <a href="http://netbaseteam.com/" title="Cmsmart - Magento theme">netbaseteam.com</a>. All Rights Reserved</p>
					<a href="#" id="back-to-top">
						<i class="fa fa-chevron-up"></i>
						Top
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<div id="sitebodyoverlay"></div>
<nav id="mb-main-menu" class="main-menu">
	<div class="mb-menu-title">
		<h3>Navigation</h3>
		<span id="close-mb-menu">
			<i class="fa fa-times-circle"></i>
		</span>
	</div>
	<ul  class="cate_list">
		<li class="level0 parent col1 all-product">
			<a href="#">
				<span>All Product</span>
				<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i>
			</a>
			<ul class="level0">
				<li class="level1">
					<a href="#" title="Business Card">Business Card</a>
				</li>
				<li class="level1">
					<a href="#" title="Premium Business Card">Premium Business Card</a>
				</li>
				<li class="level1">
					<a href="#" title="Free Business Card">Free Business Card</a>
				</li>
				<li class="level1">
					<a href="#" title="Marketing Materials">Marketing Materials</a>
				</li>
				<li class="level1">
					<a href="#" title="Dance Marketing Kit">Dance Marketing Kit</a>
				</li>
				<li class="level1 view-all-pro">
					<a href="#" title="view all product">View all</a>
				</li>
			</ul>
		</li>
		<li class="level0 parent col1">
			<a href="#" title="Business Cards">
				<span>Business Cards</span>
				<i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i>
			</a>
			<ul class="level0">
				<li class="level1 nav-1-1 first item">
					<a href="#" title="Premium Business Cards">Premium Business Cards</a>
				</li>
				<li class="level1 nav-1-2 item">
					<a href="#" title="Free Business Cards">Free Business Cards</a>
				</li>
				<li class="level1 nav-1-3 item">
					<a href="#" title="Die-Cut Business Cards">Die-Cut Business Cards</a>
				</li>
				<li class="level1 nav-1-4 item">
					<a href="#" title="Standard Business Cards">Standard Business Cards</a>
				</li>
				<li class="level1 nav-1-5 item">
					<a href="#" class="Personal Business Cards">Personal Business Cards</a>
				</li>
				<li class="level1 nav-1-6 item">
					<a href="#" title="Business Card Holders">Business Card Holders</a>
				</li>
				<li class="level1 nav-1-7 item">
					<a href="#" title="Networking Cards">Networking Cards</a>
				</li>
				<li class="level1 nav-1-8 item">
					<a href="#" title="Appointment Cards">Appointment Cards</a>
				</li>
				<li class="level1 nav-1-9 last item">
					<a href="#" title="Mommy Cards">Mommy Cards</a>
				</li>
			</ul>
		</li>
		<li class="level0">
			<a href="category_grid.html" title="Marketing">Marketing</a>
		</li>
		<li class="level0">
			<a href="#" title="Postcards">Postcards</a>
		</li>
		<li class="level0">
			<a href="#" title="Stickers & Badges">Stickers & Badges</a>
		</li>
		<li class="level0" title="Promotional">
			<a href="#">Promotional</a>
		</li>
	</ul>
</nav>
<!--Add js lib-->
<script type="text/javascript" src="frontend/js/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="frontend/js/bootstrap.min.js"></script>
<script type="text/javascript" src="frontend/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="frontend/js/Chart.js"></script>
<script type="text/javascript" src="frontend/js/doughnutit.js"></script>
<!--   <script type="text/javascript" src="frontend/js/jquery.subscribe-better.js"></script> -->
<script type="text/javascript" src="frontend/js/slideshow/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="frontend/js/slideshow/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="frontend/js/theme-home.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--Angular js file-->

<script src="js/angular.min.js"></script>
<script src="js/ocLazyLoad.min.js"></script>
<script src="js/angular-ui-router.js"></script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/routes.js" type="text/javascript"></script>
</body>
</html>
