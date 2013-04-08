<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!--> 
<html>             
<!--<![endif]-->
<head>

	<meta charset="utf-8">
    <title>PageN[X] - The best Landing page Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PageN[X] - The best Landing page Generator">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name=viewport content="width=device-width, initial-scale=1.0">

    <!-- STYLESHEETS -->

    <!-- EXTENSIONS -->
    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/slider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/ui.totop.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/pirobox/style.css" rel="stylesheet">
	<link href="http://api.tiles.mapbox.com/mapbox.js/v0.6.7/mapbox.css" rel="stylesheet" />
	<!-- EXTENSIONS -->
    <link href="http://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet" type="text/css">

	<!-- GENERAL STYLES FILE (NOT COLORIZED) -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <!-- GENERAL STYLES FILE -->

    <!--[if IE 8]>     
	<link href="<?php echo base_url();?>css/ie8.css" rel="stylesheet">
    <![endif]-->

 	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- FAV AND TOUCH ICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="favicon.png">

	<!-- JAVASCRIPTS ON BOTTOM OF THIS PAGE -->

</head>
<body>
	<header>

		<div id="top" class="noise container roadx">

			<!-- MOBILE MENU ( ONLY SHOW AT MOBILE ) -->

			<div id="mobile_menu">
				<ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#start">Get Started</a></li>
                    <li><a href="#pricelist">Pricing</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <?php if (!$this->ion_auth->logged_in()){?>
                    <li><a href="#signin">Signin</a></li>
                    <?php } ?>
				</ul>
			</div>

			<!-- END OF MOBILE MENU -->

			<div class="row">

				<!-- LOGO -->

				<div id="logo" class="span4"><a href="#">PageN<span style="color:#D62E2E; font-size:39px">[</span>X<span style="color:#D62E2E; font-size:39px">]</span><span style="font-size:11px;">BETA</span></a></div>

				<!-- END OF LOGO -->

				<!-- MOBILE MENU TOGGLE BUTTON -->

				<a class="mobile"></a>

				<!-- END OF MOBILE MENU TOGGLE BUTTON -->

				<!-- TOP MENU -->

				<nav class="span6">
					<ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#start">Get Started</a></li>
                        <li><a href="#pricelist">Pricing</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <?php if (!$this->ion_auth->logged_in()){?>
                        <li><a href="#signin">Signin</a></li>
                        <?php } ?>
					</ul>
				</nav>

				<!-- END OF TOP MENU -->

			</div>

		</div>

		<!-- BEGIN SLIDER -->

		<div id="slider"></div>
        <div id="sapphire-slider" class="sapphire-slider">

            <div class="sapphire-slide" data="images/slides/bg_city_4.jpg">

                <h2>Yes, It's free...</h2>
                <p>PageN<span style="color:#D62E2E; font-size:25px">[</span>X<span style="color:#D62E2E; font-size:25px">]</span> is a free landing page generator, to create the most stuning eye-catching web pages for your campain</p>
                <a href="#start" class="sapphire-link scroll" style="top: 202px; left: 480px;">Start for free</a>
                <div class="sapphire-img" style="bottom: -52px; left: 0px;"><img src="<?php echo base_url();?>images/mac.png" style="min-height:377px" alt="image01" /></div>
            </div>

            <div class="sapphire-slide" data="images/slides/bg_city_3.jpg">

                <h2>Simply the best</h2>
                <p>PageN<span style="color:#D62E2E; font-size:25px">[</span>X<span style="color:#D62E2E; font-size:25px">]</span> is the best online Landing page generator</p>
                <a href="#start" class="sapphire-link scroll" style="top: 202px; left: 200px;">Start Now</a>
                <div class="sapphire-img" style="bottom: 0px; left: 0px;"><img src="<?php echo base_url();?>images/ipad.png" alt="image01" /></div>
            </div>

            <div class="sapphire-slide" data="images/slides/bg_city_1.jpg">

                <h2>start !</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                </p>
                <a href="#start" class="sapphire-link scroll" style="top: 202px; left: 200px;">start Now</a>
                <div class="sapphire-img" style="bottom: 0; left: 0px;"><img src="<?php echo base_url();?>images/iphone_on_hand_left.png" alt="image01" /></div>
            </div>

            <nav class="sapphire-arrows">
                <span class="sapphire-arrows-prev"></span>
                <span class="sapphire-arrows-next"></span>
            </nav>
        </div>


		<!-- END OF SLIDER -->

	</header>
	<section>

		<!-- FEATURES -->

		<div id="features" class="container flexslider carousel">
			 
			<div class="row">
				<h2><strong>Feature<span style="color:#D62E2E; font-size:27px; font-weight:normal;">[</span>s<span style="color:#D62E2E; font-size:27px; font-weight:normal;">]</span></strong></h2>
			</div>

			<ul class="row slides">

				<div>

					<li>

						<a class="star">
							<div class="icon"></div>
						</a>

						<h3>All Free Features</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

					</li>

					<li>

						<a class="security">
							<div class="icon"></div>
						</a>

						<h3>Extra Security</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

					</li>

					<li>

						<a class="trial">
							<div class="icon"></div>
						</a>

						<h3>30 Day Trial</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

					</li>

				</div>

				<div>

					<li>

						<a class="star">
							<div class="icon"></div>
						</a>

						<h3>All Free Features</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

					</li>

					<li>

						<a class="security">
							<div class="icon"></div>
						</a>

						<h3>Extra Security</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

					</li>

					<li>

						<a class="trial">
							<div class="icon"></div>
						</a>

						<h3>30 Day Trial</h3>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

					</li>

				</div>

			</ul>

		</div>

		<!-- END OF FEATURES -->

		<hr>

		<!-- MORE FEATURES -->

		<div id="more_features" class="container">

			<div class="row">

				<h2><strong>More</strong> <span style="color:#D62E2E; font-size:27px; font-weight:normal;">[</span>Features<span style="color:#D62E2E; font-size:27px; font-weight:normal;">]</span></h2>

				<ul>
					<li>
						<a href="autoname.htm">
							<div class="image heart"></div>
							<h5>Fantastic</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image simplify"></div>
							<h5>Simplify</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image verified"></div>
							<h5>No Suprise !</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image anti"></div>
							<h5>Free Anti-Virus</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image human"></div>
							<h5>Human Usable</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image security"></div>
							<h5>Extra Security</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image free"></div>
							<h5>All Free Features</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image trial"></div>
							<h5>Try 30 Day</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
					<li>
						<a href="autoname.htm">
							<div class="image documented"></div>
							<h5>Well Docummented</h5>
							<p>Et possimus soluta maxime nemo enim consequuntur asperiores earum.</p>
						</a>
					</li>
				</ul>

			</div>

		</div>

		<!-- END OF MORE FEATURES -->

		<hr>

		<!-- start -->

		<div id="start" class="container">

			<div class="row">
				<h2><strong>Start</strong> <span style="color:#D62E2E; font-size:27px; font-weight:normal;">[</span>Now<span style="color:#D62E2E; font-size:27px; font-weight:normal;">]</span><span> / Choose the theme of your choice</span></h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quae perferendis minima cupiditate aliquid magni fugit dignissimos harum recusandae assumenda debitis illo praesentium a quaerat voluptatibus nihil quibusdam reprehenderit similique.</p>

				<!-- start BUTTON -->

				<ul>
					<li><a href="<?php echo base_url();?>index.php/custom">Build it NOW!<br><span style="font-size:13px;">Based on pure layout</span></a></li>
					<li><a href="#start" class="download"></a></li>
					<li class="last"><a href="<?php echo base_url();?>index.php/templates">Build it NOW!<br><span style="font-size:13px;">Based on amazing template</span></a></li>
				</ul>

				<!-- END OF start BUTTON -->

			</div>

		</div>

		<!-- END OF start -->

		<hr>

		<!-- PRICELIST -->

		<div id="pricelist" class="container">
			
			<div class="row">

				<h2><strong>Princing</strong> <span style="color:#D62E2E; font-size:27px; font-weight:normal;">[</span>Options<span style="color:#D62E2E; font-size:27px; font-weight:normal;">]</span></h2>

				<div class="price_list">

					<div class="column">
						<h5>FREE</h5>
						<h6>$ 0</h6>
						<ul>
							<li><strong>1 GB</strong> Storage</li>
							<li><strong>5 GB</strong> Bandwidth</li>
							<li><strong>2</strong> Domains</li>
							<li><strong>5</strong> Databases</li>
							<li><strong>5</strong> FTP Account</li>
							<li><strong>1 Months</strong> Premium</li>
						</ul>
						<div class="bottom"><a href="autoname.htm">Buy Now !</a></div>
					</div>

					<div class="column">
						<h5>Publisher</h5>
						<h6>$ 19.99</h6>
						<ul>
							<li><strong>2 GB</strong> Storage</li>
							<li><strong>15 GB</strong> Bandwidth</li>
							<li><strong>5</strong> Domains</li>
							<li><strong>10</strong> Databases</li>
							<li><strong>10</strong> FTP Account</li>
							<li><strong>3 Months</strong> Premium</li>
						</ul>
						<div class="bottom"><a href="autoname.htm">Buy Now !</a></div>
					</div>

					<div class="column">
						<h5>Super Admin</h5>
						<h6>$ 24.99</h6>
						<ul>
							<li><strong>5 GB</strong> Storage</li>
							<li><strong>50 GB</strong> Bandwidth</li>
							<li><strong>10</strong> Domains</li>
							<li><strong>Unlimited</strong> Databases</li>
							<li><strong>Unlimited</strong> FTP Account</li>
							<li><strong>6 Months</strong> Premium</li>
						</ul>
						<div class="bottom"><a href="autoname.htm">Buy Now !</a></div>
					</div>

					<div class="column">
						<h5>Professional</h5>
						<h6>$ 39.99</h6>
						<ul>
							<li><strong>10 GB</strong> Storage</li>
							<li><strong>100 GB</strong> Bandwidth</li>
							<li><strong>Unlimited</strong> Domains</li>
							<li><strong>Unlimited</strong> Databases</li>
							<li><strong>Unlimited</strong> FTP Account</li>
							<li><strong>1 Year</strong> Premium</li>
						</ul>
						<div class="bottom"><a href="autoname.htm">Buy Now !</a></div>
					</div>

				</div>

			</div>

		</div>

		<!-- END OF PROCELIST -->

		<hr>

		<!-- GALLERY -->

		<div id="gallery">
			
			<div class="row">

				<div class="gallery_top">
				
					<h2><strong>Templates</strong> <span style="color:#D62E2E; font-size:27px; font-weight:normal;">[</span>Gallery<span style="color:#D62E2E; font-size:27px; font-weight:normal;">]</span></h2>

					<!-- GALLERY FILTERS -->

					<ul id="filters">
						<li><a href="#" class="active" data-filter="*">ALL</a></li>
						<li><a href="#" data-filter=".windows">WINDOWS</a></li>
						<li><a href="#" data-filter=".osx">OSX</a></li>
						<li><a href="#" data-filter=".ios">iOS</a></li>
						<li><a href="#" data-filter=".android">ANDROID</a></li>
					</ul>

					<!-- END OF GALLERY FILTERS -->

				</div>

				<!-- GALLERY IMAGES -->

				<ul id="screens">
					
					<li class="screen android"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 1" ><img src="http://placehold.it/240x180" /><div></div></a></li>

					<li class="screen osx"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 2" ><img src="http://placehold.it/240x180" /><div></div></a></li>

					<li class="screen android"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 3" ><img src="http://placehold.it/240x180" /><div></div></a></li>

					<li class="screen osx"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 4" ><img src="http://placehold.it/240x180" /><div></div></a></li>

					<li class="screen ios"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 5" ><img src="http://placehold.it/240x180" /><div></div></a></li>

					<li class="screen ios"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 6" ><img src="http://placehold.it/240x180" /><div></div></a></li>

					<li class="screen windows"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 7" ><img src="http://placehold.it/240x180" /><div></div></a></li>

					<li class="screen windows"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 8" ><img src="http://placehold.it/240x180" /><div></div></a></li>

				</ul>

				<!-- END OF GALLERY IMAGES -->

				<div class="clear"></div>
						
				<a href="#" class="load_more" >LOAD MORE</a>

			</div>

		</div>

		<!-- END OF GALLERY -->

		<hr>

		<!-- NEWSLETTER -->

		<div id="signin" class="container" style="padding-bottom:100px;">

			<div class="row row-fluid">
                <div class="span6">
    
                    <h2><strong>Newsletter</strong><span> / Keep in touch</span></h2>
    
                    <p>Receive our latest updates and get notified on new templates.</p>
    
                    <form action="">
    
                        <label for="">SUBSCRIBE</label>
    
                        <div class="input">
    
                            <input type="text" id="subscribe_mail" name="subscribe_mail" placeholder="Enter an E-Mail">
        
                        </div>
                                <input class="btn" type="button" value="Join Us">

                    </form>
    
                </div>
                <div class="span6">
    
                    <h2><strong>Signin</strong><span> / For registered members</span></h2>
        
                    <form action="">
    
                        <label for="">EMAIL</label>
    
                        <div class="input">
    
                            <input type="text" id="mail" name="mail" placeholder="E-Mail">
        
                        </div>
                        
                        <label for="">PASSWORD</label>
    
                        <div class="input">
    
                            <input type="password" id="password" name="password" value="xxxxxxxx">
        
                        </div>
                                <input class="btn" type="button" value="Signin">

                    </form>
    
                </div>
			</div>
		</div>

		<!-- END OF NEWSLETTER -->

	</section>
	<footer>

		<div id="band">

			<div class="row">

				<div class="copyright">Copyright © 2013 Pagenx.com All Rights Reserved</div>

				<!-- FOOTER MENU -->

				<ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#start">Get Started</a></li>
                    <li><a href="#pricelist">Pricing</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <?php if (!$this->ion_auth->logged_in()){?>
                    <li><a href="#signin">Signin</a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo base_url();?>index.php/account">My account</a></li>
                    <?php } ?>
				</ul>

				<!-- END OF FOOTER MENU -->

			</div>
			
		</div>

	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.9.2.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easing.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.sapphire_slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.hoverdir.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ui.totop.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/sapphire_ui.js"></script>
    <script>
	var base_url = '<?php echo base_url();?>';
	var user   = '<?php //echo ($user->id)?$user->id:0;?>';
	</script>

	<!--[if lt IE 9]>
		<script type="text/javascript" src="pie/PIE_IE678.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>js/ie8.js"></script>
	<![endif]-->

</body>
</html>
