<!DOCTYPE html>
<html lang="en">
  
<?php 
if(isset($_GET['category']) && $_GET['category'] != "" &&  is_numeric($_GET['category'])){
    $catID = isset($_GET['category']) ? $_GET['category'] : "";
    $text = isset($_GET['search']) ? $_GET['search'] : "";
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');
    $product = new Product();

    $result = $product->search_products($catID,$text);    
     if(isset($result['product'])) {
         $count=count($result['product']);
         $output = "";
         if($count>0)
         {
         $products = $result['product'];
         
		 $cat_name=$products[0]['category_name'];
         foreach($products as $product){
			$output.="<div class='ad-item row'>";
			$output.="<div class='item-image-box col-sm-3'>";
			$output.="<div class='item-image'>";
			$output.="<a href='details.php?id={$product['product_id']}'><img src='images/trending/2.jpg' alt='Image' class='img-responsive'></a>";
			$output.="</div>";
			$output.="</div>";
			$output.="<div class='item-info col-sm-9'>";
			$output.="<div class='ad-info'>";
			$output.="<h3 class='item-price'>$250.00 <span>({$product['product_condition']})</span></h3>";
			$output.="<h4 class='item-title'><a href='#'>{$product['product_name']}</a></h4>";
			$output.="<div class='item-cat'>";
			$output.="<span><a href='#'>{$product['category_name']}</a></span>";
			$output.="</div>";										
			$output.="</div>";
			$output.="<div class='ad-meta'>";
			$output.="<div class='meta-content'>";
			$output.="<span class='dated'><a href='#'>{$product['publish_date']}</a></span>";
			$output.="</div>";									
			$output.="<div class='user-option pull-left'>";
			$output.="<a href='#' data-toggle='tooltip' data-placement='top' title='{$product['saler_city']}'><i class='fa fa-map-marker'></i> </a>";
			$output.="</div>";
			$output.="</div>";
			$output.="</div>";
			$output.="</div>";
         }//end foreach  
         }
         else
         {
             $cat_name="";
            $output.="<p>لا يوجد</p>"; 
         }  
     }//end if   
	 } else {
    header("Location: /haraj/");
}//end if
 
	 
	 
?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Trade | World's Largest Classifieds Portal</title>

   <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/bootstrap-rtl.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
	<link id="preset" rel="stylesheet" href="css/presets/preset1.css">	
    <link rel="stylesheet" href="css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Home Default </a></li>
									<li><a href="index-one.html">Home Version-1</a></li>
									<li><a href="index-two.html">Home Version-2</a></li>
									<li><a href="index-three.html">Home Version-3</a></li>
									<li><a href="index-car.html">Home Car-1<span class="badge">New</span></a></li>
									<li><a href="index-car-two.html">Home Car-2<span class="badge">New</span></a></li>
									<li><a href="directory.html">Home Directory<span class="badge">Latest</span></a></li>
								</ul>
							</li>
							<li><a href="categories.html">Category</a></li>
							<li><a href="details.html">all ads</a></li>
							<li><a href="faq.html">Help/Support</a></li> 
							<li class="active dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="about-us.html">ABout Us</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="ad-post.html">Ad post</a></li>
									<li><a href="ad-post-details.html">Ad post Details</a></li>
									<li class="active"><a href="categories-main.html">Category Ads</a></li>
									<li><a href="details.html">Ad Details</a></li>
									<li><a href="my-ads.html">My Ads</a></li>
									<li><a href="my-profile.html">My Profile</a></li>
									<li><a href="favourite-ads.html">Favourite Ads</a></li>
									<li><a href="archived-ads.html">Archived Ads</a></li>
									<li><a href="pending-ads.html">Pending Ads</a></li>
									<li><a href="delete-account.html">Close Account</a></li>
									<li><a href="published.html">Ad Publised</a></li>
									<li><a href="signup.html">Sign Up</a></li>
									<li><a href="signin.html">Sign In</a></li>
									<li><a href="faq.html">FAQ</a></li>	
									<li><a href="coming-soon.html">Coming Soon <span class="badge">New</span></a></li>
									<li><a href="pricing.html">Pricing<span class="badge">New</span></a></li>
									<li><a href="500-page.html">500 Opsss<span class="badge">New</span></a></li>
									<li><a href="404-page.html">404 Error<span class="badge">New</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
					<!-- language-dropdown -->
					<div class="dropdown language-dropdown">
						<i class="fa fa-globe"></i> 						
						<a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="#">United Kingdom</a></li>
							<li><a href="#">United States</a></li>
							<li><a href="#">China</a></li>
							<li><a href="#">Russia</a></li>
						</ul>								
					</div><!-- language-dropdown -->

					<!-- sign-in -->					
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="signin.html"> Sign In </a></li>
						<li><a href="signup.html">Register</a></li>
					</ul><!-- sign-in -->					

					<a href="ad-post.html" class="btn">Post Your Ad</a>
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- main -->
	<section id="main" class="clearfix category-page main-categories">
		<div class="container">
			
			
	
			<div class="category-info">	
				<div class="row">
					<!-- accordion-->
					<div class="col-md-3 col-sm-4">
						<div class="accordion">
							<!-- panel-group -->
							<div class="panel-group" id="accordion">
							 	
								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
											<h4 class="panel-title">All Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-one" class="panel-collapse collapse in">
										<!-- panel-body -->
										<div class="panel-body">
											<ul>
												<li><a href="categories.html"><i class="icofont icofont-laptop-alt"></i>Electronics & Gedget<span>(1029)</span></a></li>
												<li><a href="#"><i class="icofont icofont-police-car-alt-2"></i>Cars & Vehicles<span>(1228)</span></a></li>
												<li><a href="#"><i class="icofont icofont-building-alt"></i>Property<span>(178)</span></a></li>
												<li><a href="#"><i class="icofont icofont-ui-home"></i>Home & Garden<span>(7163)</span></a></li>
												<li><a href="#"><i class="icofont icofont-animal-dog"></i>Pets & Animals<span>(8709)</span></a></li>
												<li><a href="#"><i class="icofont icofont-nurse"></i>Health & Beauty<span>(3129)</span></a></li>
												<li><a href="#"><i class="icofont icofont-hockey"></i>Hobby, Sport & Kids<span>(2019)</span></a></li>
												<li><a href="#"><i class="icofont icofont-burger"></i>Food & Agriculture<span>(323)</span></a></li>
												<li><a href="#"><i class="icofont icofont-girl-alt"></i>Women & Children<span>(425)</span></a></li>
												<li><a href="#"><i class="icofont icofont-gift"></i>Gift & Presentation<span>(3223)</span></a></li>
												<li><a href="#"><i class="icofont icofont-architecture-alt"></i>Office Product<span>(3283)</span></a></li>
												<li><a href="#"><i class="icofont icofont-animal-cat-alt-1"></i>Arts, Crafts & Sewing<span>(3221)</span></a></li>
												<li><a href="#"><i class="icofont icofont-abc"></i>Others<span>(3129)</span></a></li>
											</ul>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-two">
											<h4 class="panel-title">Condition<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-two" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="new"><input type="checkbox" name="new" id="new"> New</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Used</label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-three">
											<h4 class="panel-title">
											Price
											<span class="pull-right"><i class="fa fa-plus"></i></span>
											</h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-three" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<div class="price-range"><!--price-range-->
												<div class="price">
													<span>$100 - <strong>$700</strong></span>
													<div class="dropdown category-dropdown pull-right">	
														<a data-toggle="dropdown" href="#"><span class="change-text">USD</span><i class="fa fa-caret-square-o-down"></i></a>
														<ul class="dropdown-menu category-change">
															<li><a href="#">$05</a></li>
															<li><a href="#">$10</a></li>
															<li><a href="#">$15</a></li>
															<li><a href="#">$20</a></li>
															<li><a href="#">$25</a></li>
														</ul>								
													</div><!-- category-change -->													
													 <input type="text"value="" data-slider-min="0" data-slider-max="700" data-slider-step="5" data-slider-value="[250,450]" id="price" ><br />
												</div>
											</div><!--/price-range-->
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-four">
											<h4 class="panel-title">
											Posted By
											<span class="pull-right"><i class="fa fa-plus"></i></span>
											</h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-four" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<label for="individual"><input type="checkbox" name="individual" id="individual"> Individual</label>
											<label for="dealer"><input type="checkbox" name="dealer" id="dealer"> Dealer</label>
											<label for="reseller"><input type="checkbox" name="reseller" id="reseller"> Reseller</label>
											<label for="manufacturer"><input type="checkbox" name="manufacturer" id="manufacturer"> Manufacturer</label>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-five">
											<h4 class="panel-title">
											Brand
											<span class="pull-right"><i class="fa fa-plus"></i></span>
											</h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-five" class="panel-collapse collapse">
										<!-- panel-body -->
										<div class="panel-body">
											<input type="text" placeholder="Search Brand" class="form-control">
											<label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label>
											<label for="htc"><input type="checkbox" name="htc" id="htc"> HTC</label>
											<label for="micromax"><input type="checkbox" name="micromax" id="micromax"> Micromax</label>
											<label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label>
											<label for="others"><input type="checkbox" name="others" id="others"> Others</label>
											<label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label>
												<span class="border"></span>
											<label for="acer"><input type="checkbox" name="acer" id="acer"> Acer</label>
											<label for="bird"><input type="checkbox" name="bird" id="bird"> Bird</label>
											<label for="blackberry"><input type="checkbox" name="blackberry" id="blackberry"> Blackberry</label>
											<label for="celkon"><input type="checkbox" name="celkon" id="celkon"> Celkon</label>
											<label for="ericsson"><input type="checkbox" name="ericsson" id="ericsson"> Ericsson</label>
											<label for="fly"><input type="checkbox" name="fly" id="fly"> Fly</label>
											<label for="g-fone"><input type="checkbox" name="g-fone" id="g-fone"> g-Fone</label>
											<label for="gionee"><input type="checkbox" name="gionee" id="gionee"> Gionee</label>
											<label for="haier"><input type="checkbox" name="haier" id="haier"> Haier</label>
											<label for="hp"><input type="checkbox" name="hp" id="hp"> HP</label>

										</div><!-- panel-body -->
									</div>
								</div> <!-- panel -->   
							 </div><!-- panel-group -->
						</div>
					</div><!-- accordion-->

					<!-- recommended-ads -->
					<div class="col-sm-8 col-md-7">				
						<div class="section recommended-ads">
							<!-- featured-top -->
							<div class="featured-top">
								<h4><?php echo $cat_name ?></h4>							
							</div><!-- featured-top -->	

							<?php echo $output; ?>  

							<!-- pagination  -->
							<div class="text-center">
								<ul class="pagination ">
									<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a>...</a></li>
									<li><a href="#">10</a></li>
									<li><a href="#">20</a></li>
									<li><a href="#">30</a></li>
									<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>			
								</ul>
							</div><!-- pagination  -->					
						</div>
					</div><!-- recommended-ads -->

					<div class="col-md-2 hidden-xs hidden-sm">
						<div class="advertisement text-center">
							<a href="#"><img src="images/ads/2.jpg" alt="" class="img-responsive"></a>
						</div>
					</div>
				</div>	
			</div>
		</div><!-- container -->
	</section><!-- main -->
	
	
	<section id="something-sell" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="title">Do you have something-sell?</h2>
					<h4>Post your ad for free on Trade.com</h4>
					<a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
				</div>
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- something-sell -->
	
	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Quik Links</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">All Cities</a></li>
								<li><a href="#">Help & Support</a></li>
								<li><a href="#">Advertise With Us</a></li>
								<li><a href="#">Blog</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>How to sell fast</h3>
							<ul>
								<li><a href="#">How to sell fast</a></li>
								<li><a href="#">Membership</a></li>
								<li><a href="#">Banner Advertising</a></li>
								<li><a href="#">Promote your ad</a></li>
								<li><a href="#">Trade Delivers</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h3>Follow us on</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Trade is Worldest leading classifieds platform that brings!</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2016. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->

 	<!--/Preset Style Chooser--> 
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
			<h4>Presets</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>        
				<li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
			</ul>
		</div>
	</div>
	<!--/End:Preset Style Chooser-->
	
     <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/scrollup.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.countdown.js"></script>    
    <script src="js/custom.js"></script>
	<script src="js/switcher.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

	</script>
  </body>

<!-- Mirrored from demo.themeregion.com/trade/categories-main.html by HTTrack Website Copier/3.x [XR&CO'2005], Thu, 27 Apr 2017 20:23:11 GMT -->
</html>