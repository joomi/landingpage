<?php
//print_r($query);
//echo base64_encode('basic/3col');
$user = $this->ion_auth->user()->row();
$id = (isset($_GET['id'])) ? $_GET['id']:'';
if(isset($_GET['t']) && !$id){
	$head = ABSPATH.'/application/views/templates/'.base64_decode($_GET['t']).'/head.php';
	$body = ABSPATH.'/application/views/templates/'.base64_decode($_GET['t']).'/body.php';
} elseif($id && $query){
	$head = ABSPATH.'/application/views/templates/'.base64_decode($query[0]->template).'/head.php';
	$body = $query[0]->data;
} else {
	die('The template is not accessable');	
}
if (!$this->ion_auth->logged_in()){ die('Please login');}
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
                <li class="active"><a href="#">Canvas Page</a></li>
                <li class="dropdown">
                    <a href="#">My Account <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Analytics report</a></li>
                        <li><a href="#">My details</a></li>
                        <li><a href="<?php echo base_url();?>index.php/auth/logout">Logout</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" >Edit <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">General</li>
                        <li><a id="lp_general" href="#">General settings</a></li>
                        <li><a href="#">Analytics Snippets</a></li>
                        <?php if($id){?>
                        <li><a target="_blank" href="<?php echo base_url();?>lp/<?php echo $user->id?>/page_<?php echo $id?>.html">Live Preview</a></li>
                        <?php } else { ?>
                        <li><span>Live Preview</span></li>
                        <?php } ?>
                        <li class="divider"></li>
                        <li class="nav-header">More actions</li>
                        <?php if($id){?>
                        <li><a id="lp_delete" href="<?php echo base_url();?>">Delete this page</a></li>
                        <?php } else { ?>
                        <li><span>Delete this page</span></li>
                        <?php } ?>
                        <li><a href="#">Choose a different layout</a></li>
                    </ul>
                </li>
                <li class="red"><a href="#" id="lp_save">save</a></li>
                <li style=" float:right">
                	<a href="#"><strong>Hi <?php echo $user->username;?> </strong></a>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div role="canvas" class="lp_canvas">
    	<?php //clean up
			  	$clean_body = urldecode(base64_decode($body));
				$clean_body = str_replace('&lt;?php', "", $clean_body);
				$clean_body = str_replace('&lt;script', "", $clean_body);
				$clean_body = str_replace('&lt;embed', "", $clean_body);
				$clean_body = str_replace('&lt;object', "", $clean_body);			  
		      	$body = ($state == 1) ? $clean_body : file_get_contents($body);
				echo $body;
		?>
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
    <div id="lp_overlay"></div>   
</body>
</html>