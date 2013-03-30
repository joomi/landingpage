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

    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet" type="text/css">
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
<body class="inner">
	<header>

		<div id="top" class="noise container roadx">

			<!-- MOBILE MENU ( ONLY SHOW AT MOBILE ) -->

			<div id="mobile_menu">
				<ul>
                        <li><a href="<?php echo base_url();?>index.php/templates">Choose a Template insteed</a></li>
						<?php if (!$this->ion_auth->logged_in()){?>
                        <li><a href="<?php echo base_url();?>index.php#signin">Signin</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url();?>index.php/account">My account</a></li>
                        <?php } ?>
				</ul>
			</div>

			<!-- END OF MOBILE MENU -->

			<div class="row">

				<!-- LOGO -->

				<div id="logo" class="span4"><a href="#">PageN<span style="color:#D62E2E; font-size:39px">[</span>X<span style="color:#D62E2E; font-size:39px">]</span></a></div>

				<!-- END OF LOGO -->

				<!-- MOBILE MENU TOGGLE BUTTON -->

				<a class="mobile"></a>

				<!-- END OF MOBILE MENU TOGGLE BUTTON -->

				<!-- TOP MENU -->

				<nav class="span6">
					<ul>
                        <li><a href="<?php echo base_url();?>index.php/templates">Choose a Template insteed</a></li>
						<?php if (!$this->ion_auth->logged_in()){?>
                        <li><a href="<?php echo base_url();?>index.php#signin">Signin</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url();?>index.php/account">My account</a></li>
                        <?php } ?>
					</ul>
				</nav>

				<!-- END OF TOP MENU -->
			</div>
		</div>
	</header>
	<section>
		<div id="customs" class="container">

			<div class="row">
				<h2><strong>Choose</strong> <span style="color:#D62E2E; font-size:27px; font-weight:normal;">[</span>Layout<span style="color:#D62E2E; font-size:27px; font-weight:normal;">]</span></h2>
                <p>Choose from one the responsive Bootstrap layouts to get you started easily.</p>
                <ul class="thumbnails">
                    <li class="span3">
                      <a class="thumbnail" href="http://twitter.github.com/bootstrap/examples/starter-template.html">
                        <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-starter.png" alt="">
                      </a>
                      <h4>Starter template</h4>
                      <p>A barebones HTML document with all the Bootstrap CSS and JavaScript included.</p>
                      <button class="btn-gray" onclick="window.open('<?php echo base_url();?>index.php/canvas?t=YmFzaWMvM2NvbA==', '_blank')">Preview</button>
                      <?php if ($this->ion_auth->logged_in()){?>
                      <button class="btn-gray red" onclick="window.location.href='<?php echo base_url();?>index.php/canvas?t=YmFzaWMvM2NvbA=='">start ></button>
                      <?php } else { ?>
                      <button class="btn-gray red regFirst" type="button" data-return="<?php echo base_url();?>index.php/canvas?t=YmFzaWMvM2NvbA==">start ></button>
                      <?php } ?>
                    </li>
                    <li class="span3">
                      <a class="thumbnail" href="http://twitter.github.com/bootstrap/examples/starter-template.html">
                        <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-starter.png" alt="">
                      </a>
                      <h4>Carousel template</h4>
                      <p>A barebones HTML document with all the Bootstrap CSS and JavaScript included.</p>
                      <button class="btn-gray" onclick="window.open('<?php echo base_url();?>index.php/canvas?t=YmFzaWMvYnNfY2Fyb3VzZWw=', '_blank')">Preview</button>
                      <?php if ($this->ion_auth->logged_in()){?>
                      <button class="btn-gray red" onclick="window.location.href='<?php echo base_url();?>index.php/canvas?t=YmFzaWMvYnNfY2Fyb3VzZWw='">start ></button>
                      <?php } else { ?>
                      <button class="btn-gray red regFirst" type="button" data-return="<?php echo base_url();?>index.php/canvas?t=YmFzaWMvYnNfY2Fyb3VzZWw=">start ></button>
                      <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </section>
	<footer>

		<div id="band">

			<div class="row">

				<div class="copyright">Copyright © 2013 | <a href="http://www.Pagenx.com">Pagenx.com</a> | All Rights Reserved</div>

				<!-- FOOTER MENU -->

				<ul>
                    <li><a href="<?php echo base_url();?>index.php#features">Features</a></li>
                    <li><a href="<?php echo base_url();?>index.php#start">Get Started</a></li>
                    <li><a href="<?php echo base_url();?>index.php#pricelist">Pricing</a></li>
                    <li><a href="<?php echo base_url();?>index.php#gallery">Gallery</a></li>
                    <?php if (!$this->ion_auth->logged_in()){?>
                    <li><a href="<?php echo base_url();?>index.php#signin">Signin</a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo base_url();?>index.php/account">My account</a></li>
                   <?php } ?>
				</ul>

				<!-- END OF FOOTER MENU -->

			</div>
			
		</div>

	</footer>
    <div id="myModal" class="modal large hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Preview</h3>
        </div>
        <div class="modal-body"></div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>  
	<?php if (!$this->ion_auth->logged_in()){?>
    <div id="regModal" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel2" style="cursor:default">Please Register first</h3>
        </div>
        <div class="modal-body">
            <div class="alert ajaxMessage" style="display:none;"></div>
        	<form accept-charset="utf-8" class="form-horizontal" id="join" aria-rel="register">    
              <div class="control-group">
                <label class="control-label" for="full_name">Full Name</label>
                <div class="controls">
                	<input type="text" name="full_name" class="required" required value="" data-reg="1" id="full_name">                
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                	<input type="text" name="email" required class="required" value="" id="email">                
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                	<input type="password" name="password" required class="required" value="" id="regpassword">                
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="password_confirm">Confirm Password</label>
                <div class="controls">
                	<input type="password" name="password_confirm" required class="required" value="" data-reg="1" id="password_confirm">                
                </div>
              </div>
              <div class="control-group">
              <div class="controls">
                <input type="hidden" name="return" id="return" value="">
                <button type="submit" id="submitBtn" class="btn">Go a Head</button>
                <img src="<?php echo base_url();?>images/loader.gif" class="loadingAjax" style="display:none; margin:2px 0 0 7px">
              </div>
          </div>
    
		</form>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <span style="float:left; line-height:30px;">Already registered? <a href="#" id="lp_set_login"><em>Click here</em> to login</a></span>
            <span style="float:left; line-height:30px; display:none">Already registered? <a href="#" id="lp_set_login"><em>Click here</em> to login</a></span>
        </div>
    </div>  
    <?php } ?>
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
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
