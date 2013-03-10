<?php
//print_r($query);
//echo base64_encode('basic/3col');
$user = $this->ion_auth->user()->row();
if(isset($_GET['t']) && !isset($_GET['id'])){
	$head = ABSPATH.'/application/views/templates/'.base64_decode($_GET['t']).'/head.php';
	$body = ABSPATH.'/application/views/templates/'.base64_decode($_GET['t']).'/body.php';
} elseif(isset($_GET['id']) && $query){
	$head = ABSPATH.'/application/views/templates/'.base64_decode($query[0]->template).'/head.php';
	$body = $query[0]->data;
} else {
	die('The template is not accessable');	
}
?>
<!doctype html>
<html class="no-js" lang="en"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>HTML5 canvas page</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/library.js"></script>    
    <script src="<?php echo base_url();?>js/canvas.js"></script>
    <script>
	var base_url = '<?php echo base_url();?>';
	var folder   = '<?php echo base64_encode($user->email);?>';
	var tmp   = '<?php echo ($state == 0 && isset($_GET['t']))?$_GET['t']:$query[0]->template;?>';
	var user   = '<?php echo $user->id;?>';
	</script>
    <?php include($head);?>
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
                <li><a id="lp_save">save</a></li>
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
    <div role="canvas" class="lp_canvas">
		<?php $body = ($state == 1) ? urldecode(base64_decode($body)):file_get_contents($body);echo $body;?>
    </div>
    <div id="myModal" class="modal hide fade" role="dialog" data-state="off" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" onClick="edit('off');" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Editor Panel</h3>
        </div>
        <div class="modal-body" id="lp_inner_editor_wrap"><div id="lp_controls"></div></div>
        <div class="modal-footer">
            <button class="btn" onClick="edit('off');" aria-hidden="true">Close</button>
        </div>
    </div>    
</body>
</html>