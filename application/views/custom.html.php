<?php 
$user = $this->ion_auth->user()->row();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Custom layout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/library.js"></script>    
    <script src="<?php echo base_url();?>js/script.js"></script>
    <script>
	var base_url = '<?php echo base_url();?>';
	</script>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Project name</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <?php if (!$this->ion_auth->logged_in()){?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle">Signin <b class="caret"></b></a>				  
                  <ul class="dropdown-menu lp_signin">
                    <li class="nav-header"><form action="<?php echo base_url();?>index.php/auth/login" method="post" accept-charset="utf-8"><label for="user_name">User Name</label></li>
                    <li><input type="text" id="identity" name="identity"></li>
                    <li class="nav-header"><label for="password">Password</label></li>
                    <li><input type="password" id="password" name="password"></li>
                    <li class="nav-header"><label for=""></label></li>
                    <li style="text-align:right"><input type="submit" id="submit_signin" value="Signin" class="btn"></li>
                    <li class="divider">
                    	<input type="hidden" name="return" value="<?php echo base64_encode(current_url());?>">
                    	</form>
                    </li>
                  </ul>
                </li>
                <?php } else { ?>
                <li style=" float:right">
                	<a href="<?php echo base_url();?>index.php/auth/logout"><strong>Hi <?php echo $user->username;?> </strong> &middot; Logout</a>
                </li>
				<?php } ?>                
              </ul>
            </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>    
    

    <div class="container templates">
        <section id="examples">
          <div class="page-header">
            <h1>Choose layout</h1>
          </div>
          <ul class="thumbnails">
            <li class="span3">
              <a class="thumbnail" href="http://twitter.github.com/bootstrap/examples/starter-template.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-starter.png" alt="">
              </a>
              <h4>Starter template</h4>
              <p>A barebones HTML document with all the Bootstrap CSS and JavaScript included.</p>
              <a class="btn btn-info" data-toggle="modal" href="<?php echo base_url();?>index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <?php if ($this->ion_auth->logged_in()){?>
              <a class="btn btn-success" href="<?php echo base_url();?>index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
              <?php } else { ?>
              <button class="btn btn-success regFirst" type="button" data-return="<?php echo base_url();?>index.php/canvas?t=YmFzaWMvM2NvbA==">start ></button>
              <?php } ?>
            </li>
            <li class="span3">
              <a class="thumbnail" href="examples/hero.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-marketing.png" alt="">
              </a>
              <h4>Basic marketing site</h4>
              <p>Featuring a hero unit for a primary message and three supporting elements.</p>
              <a class="btn btn-info" data-toggle="modal" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <a class="btn btn-success" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
            </li>
            <li class="span3">
              <a class="thumbnail" href="examples/fluid.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-fluid.png" alt="">
              </a>
              <h4>Fluid layout</h4>
              <p>Uses our new responsive, fluid grid system to create a seamless liquid layout.</p>
              <a class="btn btn-info" data-toggle="modal" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <a class="btn btn-success" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
            </li>

            <li class="span3">
              <a class="thumbnail" href="examples/marketing-narrow.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-marketing-narrow.png" alt="">
              </a>
              <h4>Narrow marketing</h4>
              <p>Slim, lightweight marketing template for small projects or teams.</p>
              <a class="btn btn-info" data-toggle="modal" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <a class="btn btn-success" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
            </li>
            <li class="span3">
              <a class="thumbnail" href="examples/justified-nav.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-justified-nav.png" alt="">
              </a>
              <h4>Justified nav</h4>
              <p>Marketing page with equal-width navigation links in a modified navbar.</p>
              <a class="btn btn-info" data-toggle="modal" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <a class="btn btn-success" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
            </li>
            <li class="span3">
              <a class="thumbnail" href="examples/signin.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-signin.png" alt="">
              </a>
              <h4>Sign in</h4>
              <p>Barebones sign in form with custom, larger form controls and a flexible layout.</p>
              <a class="btn btn-info" data-toggle="modal" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <a class="btn btn-success" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
            </li>

            <li class="span3">
              <a class="thumbnail" href="examples/sticky-footer.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-sticky-footer.png" alt="">
              </a>
              <h4>Sticky footer</h4>
              <p>Pin a fixed-height footer to the bottom of the user's viewport.</p>
              <a class="btn btn-info" data-toggle="modal" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <a class="btn btn-success" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
            </li>
            <li class="span3">
              <a class="thumbnail" href="examples/carousel.html">
                <img src="http://twitter.github.com/bootstrap/assets/img/examples/bootstrap-example-carousel.png" alt="">
              </a>
              <h4>Carousel jumbotron</h4>
              <p>A more interactive riff on the basic marketing site featuring a prominent carousel.</p>
              <a class="btn btn-info" data-toggle="modal" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==" data-target="#myModal">Preview</a>
              <a class="btn btn-success" href="http://127.0.0.1/landingpage/landingpage.git/index.php/canvas?t=YmFzaWMvM2NvbA==">start ></a>
            </li>
          </ul>
        </section>
    </div>
    <div class="container">    
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
	</div>
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
            <h3 id="myModalLabel" style="cursor:default">Please Register first</h3>
        </div>
        <div class="modal-body">
            <div class="alert ajaxMessage" style="display:none;"></div>
        	<form accept-charset="utf-8" class="form-horizontal" id="join">    
              <div class="control-group">
                <label class="control-label" for="full_name">Full Name</label>
                <div class="controls">
                	<input type="text" name="full_name" value="" id="full_name">                
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="email">Email</label>
                <div class="controls">
                	<input type="text" name="email" required class="" value="" id="email">                
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                	<input type="password" name="password"  value="" id="regpassword">                
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="password_confirm">Confirm Password</label>
                <div class="controls">
                	<input type="password" name="password_confirm"   value="" id="password_confirm">                
                </div>
              </div>
              <div class="control-group">
              <div class="controls">
                <input type="hidden" name="return" id="return" value="">
                <button type="submit" id="submitBtn" class="btn">Submit</button>
                <img src="<?php echo base_url();?>images/loader.gif" class="loadingAjax" style="display:none; margin:2px 0 0 7px">
              </div>
          </div>
    
		</form>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>  
    <?php } ?>
  </body>
</html>
