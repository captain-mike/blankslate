<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> <?php pizza_schema_type(); ?>>


	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Testo - Pizza and Fast Food Landing Page Template</title>
							
		<!-- FAVICON AND TOUCH ICONS -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/apple-touch-icon.png" type="image/x-icon">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">		
		<link href="<?php echo get_template_directory_uri() ?>/css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="<?php echo get_template_directory_uri() ?>/css/menu.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri() ?>/css/magnific-popup.css" rel="stylesheet">	
		<link href="<?php echo get_template_directory_uri() ?>/css/flexslider.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri() ?>/css/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri() ?>/css/jquery.datetimepicker.min.css" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
		<link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">

		<!-- RESPONSIVE CSS -->
		<link href="<?php echo get_template_directory_uri() ?>/css/responsive.css" rel="stylesheet">
	
	</head>

    <body>




		<!-- PRELOADER SPINNER
		============================================= 
		<div id="loader-wrapper">
			<div id="loader">
				<div class="cssload-spinner">
					<div class="cssload-ball cssload-ball-1"></div>
					<div class="cssload-ball cssload-ball-2"></div>
					<div class="cssload-ball cssload-ball-3"></div>
					<div class="cssload-ball cssload-ball-4"></div>
				</div>
			</div>
		</div>-->




		<!-- HEADER-1
		============================================= -->
		<header id="header-1" class="header navik-header header-shadow center-menu-1 header-transparent">
			<div class="container">


				<!-- NAVIGATION MENU -->
				<div class="navik-header-container">


					<!-- CALL BUTTON -->
				    <div class="callusbtn"><a href="tel:123456789"><i class="fas fa-phone"></i></a></div>

					
					<!-- LOGO IMAGE -->
	                <div class="logo" data-mobile-logo="images/logo-02.png" data-sticky-logo="images/logo-02.png">
	                	<a href="#hero-5"><img src="images/logo-02.png" alt="header-logo"/></a>
					</div>

					
					<!-- BURGER MENU -->
					<div class="burger-menu">
						<div class="line-menu line-half first-line"></div>
						<div class="line-menu"></div>
						<div class="line-menu line-half last-line"></div>
					</div>


					<!-- MAIN MENU -->
	                <nav class="navik-menu menu-caret navik-yellow">
	                	<ul class="top-list">

	                		<!-- DROPDOWN MENU -->
	                		<li><a href="#">About</a>
	                			<ul>
	                            	<li><a href="about.html">About Testo</a></li>
	                            	<li><a href="team.html">Meet The Team</a></li>
									<li><a href="gallery.html">Images Gallery</a></li>
									<li><a href="gift-cards.html">Gift Cards</a></li>
									<li><a href="faqs.html">F.A.Q.s</a></li>
									<li><a href="terms.html">Terms & Privacy</a></li>
	                            </ul>
	                		</li>

	                		<!-- DROPDOWN MENU -->
	                    	<li><a href="#">Our Menu</a>
	                        	<ul>
	                            	<li><a href="menu-1.html">Menu v.1 - Tabs Cards</a></li>
									<li><a href="menu-2.html">Menu v.2 - Cards</a></li>
									<li><a href="menu-3.html">Menu v.3 - Sections</a></li>
	                            </ul>
	                        </li>
                            
						</ul>
						<ul>

							<!-- DROPDOWN MENU -->
	                		<li><a href="#">Shop</a>
	                			<ul>
	                            	<li><a href="product-single.html">Single Product</a></li>
									<li><a href="cart.html">Shopping Cart</a></li>
	                            </ul>
	                		</li>

							<!-- DROPDOWN MENU -->
							<li><a href="#">Blog</a>
								<ul>
	                            	<li><a href="blog-listing.html">Blog Listing</a></li>
									<li><a href="single-post.html">Single Post</a></li>
	                            </ul>
							</li>

	                        <!-- DROPDOWN MENU -->
							<li><a href="#">Contacts</a>
								<ul>
		                        	<li><a href="booking.html">Book A Table</a></li>
		                        	<li><a href="locations.html">Our Locations</a></li>
									<li><a href="contacts.html">Contact Us</a></li>
								</ul>
							</li>

							<!-- BASKET ICON -->
							<li class="basket-ico ico-30">
					        	<a href="cart.html">
					        		<span class="ico-holder"><span class="flaticon-shopping-bag"></span> <em class="roundpoint">2</em></span>
					        	</a>
					        </li>

	                    </ul>
	                </nav>	<!-- END MAIN MENU -->


				</div>	<!-- END NAVIGATION MENU -->


			</div>     <!-- End container -->
		</header>	<!-- END HEADER-1 -->