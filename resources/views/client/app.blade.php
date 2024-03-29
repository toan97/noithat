<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    
<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
		
		<!-- FONTS
		============================================ -->	
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
				
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">		
		
		<!-- FANCYBOX CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">	
		
		<!-- BXSLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}">			
				
		<!-- MEANMENU CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">	
		
		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ asset('css/jquery-ui-slider.css') }}">		
		
		<!-- NIVO SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}">
		
		<!-- OWL CAROUSEL CSS 	
		============================================ -->	
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
		
		<!-- OWL CAROUSEL THEME CSS 	
		============================================ -->	
         <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
		
		<!-- BOOTSTRAP CSS 
		============================================ -->	
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- FONT AWESOME CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		
		<!-- NORMALIZE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
		
		<!-- MAIN CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
		
		<!-- STYLE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
		
		<!-- RESPONSIVE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
		
		<!-- IE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ asset('css/ie.css') }}">
		
		<!-- MODERNIZR JS 
		============================================ -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<!-- HEADER-TOP START -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-left-menu">
							<div class="welcome-info">
								Welcome <span>BootExperts</span>
							</div>
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Currency : </span><strong>USD</strong>
									</div>
									<ul class="currency-list currency-toogle">
										<li>
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
										<li>
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</form>									
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Language : </span><strong>English</strong>
								</div>
								<ul class="languages-choose language-toogle">
									<li>
										<a href="#" title="English">
											<span>English</span>
										</a>
									</li>
									<li>
										<a href="#" title="Français (French)">
											<span>Français</span>
										</a>
									</li>
								</ul>										
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									<li><a href="checkout.html">Check Out</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="cart.html">My Cart</a></li>
									<li><a href="registration.html">Sign in</a></li>
								</ul>									
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->
		<!-- HEADER-MIDDLE START -->
		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="index.html"><img src="img/logo.png" alt="bstore logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>call us free</h3>
							<span>0123-456-789</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="#" method="get" class="search-form-cat">
								<div class="search-product form-group">
									<select name="catsearch" class="cat-search">
										<option value="" disabled selected="">Categories</option>
										@foreach ($categories as $cate)
											<option value="">{{ $cate->name }}</option>
										@endforeach
									</select>
									<input type="text" class="form-control search-form" name="s" placeholder="Enter your search key ... " />
									<button class="search-button" value="Search" name="s" type="submit">
										<i class="fa fa-search"></i>
									</button>									 
								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->
		<!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area">
			<div class="container">
				<div class="row">
					<!-- SHOPPING-CART START -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
						<div class="shopping-cart-out pull-right">
							<div class="shopping-cart">
								<a class="shop-link" href="cart.html" title="View my shopping cart">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>My Cart</b>
									<span class="ajax-cart-quantity">2</span>
								</a>
								<div class="shipping-cart-overly">
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image.jpg" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Watch</a></span>
											<span class="pro-quality"><a href="#">S,Black</a></span>
											<p>$22.95</p>
										</div>
									</div>
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image2.jpg" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>
											<span class="pro-quality"><a href="#">S,Gary</a></span>
											<p>$19.95</p>
										</div>
									</div>
									<div class="shipping-total-bill">
										<div class="cart-prices">
											<span class="shipping-cost">$2.00</span>
											<span>Shipping</span>
										</div>
										<div class="total-shipping-prices">
											<span class="shipping-total">$24.95</span>
											<span>Total</span>
										</div>										
									</div>
									<div class="shipping-checkout-btn">
										<a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<!-- SHOPPING-CART END -->
					<!-- MAINMENU START -->
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
						<div class="mainmenu">
							<nav>
								<ul class="list-inline mega-menu">
									<li class="active"><a href="index.html">Home</a>
										<!-- DROPDOWN MENU START -->
										<div class="home-var-menu">
											<ul class="home-menu">
												<li><a href="index.html">Home variation 1</a></li>
												<li><a href="index-2.html">Home variation 2</a></li>
											</ul>												
										</div>
										<!-- DROPDOWN MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">Women</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">Men</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">clothing</a>
										<!-- DRODOWN-MEGA-MENU START -->	
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">new product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>	
										<!-- DRODOWN-MEGA-MENU END -->										
									</li>
									<li>
										<a href="shop-gird.html">Tops</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">top rate product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Latest product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>	
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">popular product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>											
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">T-shirts</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">new product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li><a href="#">Delivery</a></li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				</div>
				<div class="row">
					<!-- MOBILE MENU START -->
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="index.html">Home variation 1</a></li>
											<li><a href="index-2.html">Home variation 2</a></li>
										</ul>														
									</li>								
									<li><a href="shop-gird.html">Women</a>
										<ul>
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">T-Shirts</a></li>
													<li><a href="shop-gird.html">Blouses</a></li>
												</ul>													
											</li>
											<li><a href="shop-gird.html">Dresses</a>
												<ul>
													<li><a href="shop-gird.html">Casual Dresses</a></li>
													<li><a href="shop-gird.html">Summer Dresses</a></li>
													<li><a href="shop-gird.html">Evening Dresses</a></li>	
												</ul>	
											</li>

										</ul>
									</li>
									<li><a href="shop-gird.html">men</a>
										<ul>											
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">Sports</a></li>
													<li><a href="shop-gird.html">Day</a></li>
													<li><a href="shop-gird.html">Evening</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Blouses</a>
												<ul>
													<li><a href="shop-gird.html">Handbag</a></li>
													<li><a href="shop-gird.html">Headphone</a></li>
													<li><a href="shop-gird.html">Houseware</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Accessories</a>
												<ul>
													<li><a href="shop-gird.html">Houseware</a></li>
													<li><a href="shop-gird.html">Home</a></li>
													<li><a href="shop-gird.html">Health & Beauty</a></li>
												</ul>														
											</li>
										</ul>										
									</li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">tops</a></li>
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="#">Delivery</a></li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>						
					</div>
					<!-- MOBILE MENU END -->
				</div>
			</div>
		</header>
		<!-- MAIN-MENU-AREA END -->
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<!-- MAIN-SLIDER-AREA START -->
					<div class="main-slider-area">
						<!-- SLIDER-AREA START -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="slider-area">
								<div id="wrapper">
									<div class="slider-wrapper">
										<div id="mainSlider" class="nivoSlider">
											@foreach ($sliders as $sl)
												<img src="{{ $sl->image_url }}" alt="main slider" title="#htmlcaption{{ $sl->id }}"/>
											@endforeach
										</div>
										@foreach ($sliders as $sl)
											<div id="htmlcaption{{ $sl->id }}" class="nivo-html-caption slider-caption">
												<div class="slider-progress"></div>
												<div class="slider-cap-text slider-text1">
													<div class="d-table-cell">
														<h2 class="animated bounceInDown">{{ $sl->title }}</h2>
														<p class="animated bounceInUp">{{ $sl->short_desc }}</p>	
														<a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay=" 1s" href="#">Read More <i class="fa fa-caret-right"></i></a>													
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>								
							</div>							
						</div>
						<!-- SLIDER-AREA END -->
					</div>
					<!-- MAIN-SLIDER-AREA END -->
				</div>
				<!-- TOW-COLUMN-PRODUCT START -->
				<div class="row tow-column-product">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- NEW-PRODUCT-AREA START -->
						<div class="new-product-area">
							<div class="left-title-area">
								<h2 class="left-title">New Products</h2>
							</div>						
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<!-- NEW-PRO-CAROUSEL START -->
										<div class="new-pro-carousel">
											@foreach ($new_products as $n_pro)
												<!-- NEW-PRODUCT-SINGLE-ITEM START -->
												<div class="item">
													<div class="new-product">
														<div class="single-product-item">
															<div class="product-image">
																<a href="#"><img src="{{ $n_pro->image }}" alt="product-image" /></a>
																<a href="#" class="new-mark-box">new</a>
																<div class="overlay-content">
																	<ul>
																		<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																		<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																		<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																		<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="product-info">
																<div class="customar-comments-box">
																	<div class="rating-box">
																			@for ($i = 1; $i <= 5; $i++)
																				@if ($n_pro->star>=$i)
																					<i class="fa fa-star"></i>
																				@else
																					<i class="fa fa-star-half-empty"></i>
																				@endif
																			@endfor
																	</div>
																	<div class="review-box">
																		<span>1 Review (s)</span>
																	</div>
																</div>
																<a href="single-product.html">{{ $n_pro->name }}</a>
																<div class="price-box">
																	<span class="price">{{ $n_pro->price }}</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- NEW-PRODUCT-SINGLE-ITEM END -->								
											@endforeach
										</div>
										<!-- NEW-PRO-CAROUSEL END -->
									</div>
								</div>
							</div>
						</div>
						<!-- NEW-PRODUCT-AREA END -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- SALE-PRODUCTS START -->
						<div class="Sale-Products">
							<div class="left-title-area">
								<h2 class="left-title">Sale Products</h2>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<!-- SALE-CAROUSEL START -->
										<div class="sale-carousel">
											@foreach ($sell_products as $s_pro)
												<!-- SALE-PRODUCTS-SINGLE-ITEM START -->
												<div class="item">
													<div class="new-product">
														<div class="single-product-item">
															<div class="product-image">
																<a href="#"><img src="{{ $s_pro->image }}" alt="product-image" /></a>
																<a href="#" class="new-mark-box">Sell</a>
																<div class="overlay-content">
																	<ul>
																		<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																		<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																		<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																		<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																	</ul>
																</div>
															</div>
															<div class="product-info">
																<div class="customar-comments-box">
																	<div class="rating-box">
																		@for ($i = 1; $i <= 5; $i++)
																			@if ($s_pro->star>=$i)
																				<i class="fa fa-star"></i>
																			@else
																				<i class="fa fa-star-half-empty"></i>
																			@endif
																		@endfor
																	</div>
																	<div class="review-box">
																		<span>1 Review (s)</span>
																	</div>
																</div>
																<a href="single-product.html">{{ $s_pro->name }}</a>
																<div class="price-box">
																	<span class="price">{{ $s_pro->sell_price }}</span>
																	<span class="old-price">${{ $s_pro->ori_price }}</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- SALE-PRODUCTS-SINGLE-ITEM END -->								
											@endforeach
										</div>
										<!-- SALE-CAROUSEL END -->
									</div>
								</div>
							</div>
						</div>
						<!-- SALE-PRODUCTS END -->
					</div>
				</div>
				<!-- TOW-COLUMN-PRODUCT END -->
				<div class="row">
					<!-- ADD-TWO-BY-ONE-COLUMN START -->
					<div class="add-two-by-one-column">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="tow-column-add zoom-img">
								<a href="#"><img src="{{ $settings->banner }}" height="300px" alt="shope-add" /></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="one-column-add zoom-img">
								<a href="#"><img width="100%" src="{{ $best_product->image }}" height="300px" alt="shope-add" /></a>
							</div>								
						</div>
					</div>
					<!-- ADD-TWO-BY-ONE-COLUMN END -->
				</div>
				<div class="row">
					<!-- FEATURED-PRODUCTS-AREA START -->
					<div class="featured-products-area">
						<div class="center-title-area">
							<h2 class="center-title">Featured Products</h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- FEARTURED-CAROUSEL START -->
								<div class="feartured-carousel">
									@foreach ($feauture_products as $feau_pro)
										<!-- SINGLE-PRODUCT-ITEM START -->
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="{{ $feau_pro->image }}" alt="product-image" /></a>
													<a href="#" class="new-mark-box">Trend</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															@for ($i = 1; $i <= 5; $i++)
																@if ($feau_pro->star>=$i)
																	<i class="fa fa-star"></i>
																@else
																	<i class="fa fa-star-half-empty"></i>
																@endif
															@endfor
														</div>
														<div class="review-box">
															<span>{{ $feau_pro->views }} Review (s)</span>
														</div>
													</div>
													<a href="single-product.html">{{ $feau_pro->name }}</a>
													<div class="price-box">
														<span class="price">{{ $feau_pro->sell_price }}</span>
													</div>
												</div>
											</div>							
										</div>
										<!-- SINGLE-PRODUCT-ITEM END -->		
									@endforeach
								</div>
								<!-- FEARTURED-CAROUSEL END -->
							</div>
						</div>						
					</div>
					<!-- FEATURED-PRODUCTS-AREA END -->
				</div>
				<div class="row">	
					<!-- BESTSELLER-PRODUCTS-AREA START -->
					<div class="bestseller-products-area">
						<div class="center-title-area">
							<h2 class="center-title">bestseller</h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- BESTSELLER-CAROUSEL START -->
								<div class="bestseller-carousel">
									@foreach ($sold_products as $so_pro)
										<!-- BESTSELLER-SINGLE-ITEM START -->
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="{{ $so_pro->image }}" alt="product-image" /></a>
													<a href="#" class="new-mark-box">new</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															@for ($i = 1; $i <= 5; $i++)
																@if ($so_pro->star>=$i)
																	<i class="fa fa-star"></i>
																@else
																	<i class="fa fa-star-half-empty"></i>
																@endif
															@endfor
														</div>
														<div class="review-box">
															<span>{{ $so_pro->views }} Review (s)</span>
														</div>
													</div>
													<a href="single-product.html">{{ $so_pro->name }}</a>
													<div class="price-box">
														<span class="price">{{ $so_pro->sell_price }}</span>
													</div>
												</div>
											</div>							
										</div>
										<!-- BESTSELLER-SINGLE-ITEM END -->							
									@endforeach
								</div>	
								<!-- BESTSELLER-CAROUSEL END -->
							</div>
						</div>								
					</div>
					<!-- BESTSELLER-PRODUCTS-AREA END -->
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
		<!-- LATEST-NEWS-AREA START -->
		<section class="latest-news-area">
			<div class="container">
				<div class="row">
					<div class="latest-news-row">
						<div class="center-title-area">
							<h2 class="center-title"><a href="#">latest news</a></h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- LATEST-NEWS-CAROUSEL START -->
								<div class="latest-news-carousel">
									@foreach ($posts as $po)
										<!-- LATEST-NEWS-SINGLE-POST START -->
										<div class="item">
											<div class="latest-news-post">
												<div class="single-latest-post">
													<a href="#"><img src="{{ $po->image }}" alt="latest-post" /></a>
													<h2><a href="#">{{ $po->name }}</a></h2>
													<p>{{ $po->short_desc }}...</p>
													<div class="latest-post-info">
														<i class="fa fa-calendar"></i><span>{{ $po->date_posted }}</span>
													</div>
													<div class="read-more">
														<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
										<!-- LATEST-NEWS-SINGLE-POST END -->
									@endforeach
								<!-- LATEST-NEWS-CAROUSEL START -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- LATEST-NEWS-AREA END -->
		<!-- COMPANY-FACALITY START -->
		<section class="company-facality">
			<div class="container">
				<div class="row">
					<div class="company-facality-row">
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-rocket"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">FREE SHIPPING</h3>
									<span>on order over $100</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">24/7 SUPPORT</h3>
									<span>online consultations</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">DAILY UPDATES</h3>
									<span>Check out store for latest</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-refresh"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">30-DAY RETURNS</h3>
									<span>moneyback guarantee</span>
								</div>
							</div>
						</div>		
						<!-- SINGLE-FACALITY END -->					
					</div>
				</div>
			</div>
		</section>
		<!-- COMPANY-FACALITY E	ND -->
		<!-- FOOTER-TOP-AREA START -->
		<section class="footer-top-area">
			<div class="container">
				<div class="footer-top-container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<!-- FOOTER-TOP-LEFT START -->
							<div class="footer-top-left">
								<!-- ABOUT-US-AREA START -->
								<div class="about-us-area">
									<h2>About Us</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
								<!-- ABOUT-US-AREA END -->
								<!-- FLLOW-US-AREA START -->
								<div class="fllow-us-area">
									<h2>Follow us</h2>
									<ul class="flow-us-link">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
								<!-- FLLOW-US-AREA END -->
							</div>
							<!-- FOOTER-TOP-LEFT END -->
						</div>
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<div class="footer-top-right-2">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<!-- FOTTER-MENU-WIDGET START -->
										<div class="fotter-menu-widget">
											<div class="single-f-widget">
												<h2>Categories</h2>
												<ul>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Women </a></li>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Men</a></li>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>clothing</a></li>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>kids</a></li>
												</ul>
											</div>
										</div>
										<!-- FOTTER-MENU-WIDGET END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
										<!-- FOTTER-MENU-WIDGET START -->
										<div class="fotter-menu-widget">
											<div class="single-f-widget">
												<h2>Information</h2>
												<ul>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>Specials</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>New products</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>Best sellers</a></li>
													<li><a href="contact-us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
												</ul>
											</div>
										</div>
										<!-- FOTTER-MENU-WIDGET END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<!-- FOTTER-MENU-WIDGET START -->
										<div class="fotter-menu-widget">
											<div class="single-f-widget">
												<h2>My account</h2>
												<ul>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My orders</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My credit slips</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My addresses</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My personal info</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>Sign out</a></li>
												</ul>
											</div>
										</div>
										<!-- FOTTER-MENU-WIDGET END -->
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<!-- PAYMENT-METHOD START -->
										<div class="payment-method">
											<img class="img-responsive pull-right" src="img/payment.png" alt="payment-method" />
										</div>
										<!-- PAYMENT-METHOD END -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FOOTER-TOP-AREA END -->
		<!-- COPYRIGHT-AREA START -->
		<footer class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="copy-right">
							<address>Copyright © 2015 <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
						</div>
						<div class="scroll-to-top">
							<a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer> 
		<!-- COPYRIGHT-AREA END -->
		<!-- JS 
		===============================================-->
		<!-- jquery js -->
		<script src="js/vendor/jquery-1.11.3.min.js"></script>
		
		<!-- fancybox js -->
        <script src="js/jquery.fancybox.js"></script>
		
		<!-- bxslider js -->
        <script src="js/jquery.bxslider.min.js"></script>
		
		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		
		<!-- owl carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		
		<!-- nivo slider js -->
        <script src="js/jquery.nivo.slider.js"></script>
		
		<!-- jqueryui js -->
        <script src="js/jqueryui.js"></script>
		
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		
		<!-- wow js -->
        <script src="js/wow.js"></script>		
		<script>
			new WOW().init();
		</script>

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>	
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 8,
				scrollwheel: false,
				center: new google.maps.LatLng(35.149868, -90.046678)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);				
		</script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
</html>