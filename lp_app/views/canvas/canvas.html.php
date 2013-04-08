<?php
//print_r($query);
//echo base64_encode('basic/3col');
$user = $this->ion_auth->user()->row();
$id = (isset($_GET['id'])) ? $_GET['id']:'';
if(isset($_GET['t']) && !$id){
	$head = ABSPATH.'/lp_app/views/templates/'.base64_decode($_GET['t']).'/head.php';
	$body = ABSPATH.'/lp_app/views/templates/'.base64_decode($_GET['t']).'/body.php';
} elseif($id && $query){
	$head = ABSPATH.'/lp_app/views/templates/'.base64_decode($query[0]->template).'/head.php';
	$body = $query[0]->data;
} else {
	die('The template is not accessable');	
}
if (!$this->ion_auth->logged_in()){ die('Please login');}
$head = file_get_contents($head);
$head = str_replace('<?php echo base_url();?>', base_url(), $head);
$head = preg_replace("/<!--lp_ignore-->(.*?)<!--lp_ignore_end-->/s",'',$head);
?>
<!DOCTYPE html>
<html>             
<head>

	<meta charset="utf-8">
    <title>PageN[X] - Canvas page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PageN[X] - The best Landing page Generator">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name=viewport content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source Sans Pro" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>css/canvas.css" rel="stylesheet">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/library.js"></script>    
    <script src="<?php echo base_url();?>js/canvas.js"></script>
    <script>
	var base_url = '<?php echo base_url();?>';
	var folder   = '<?php echo base64_encode($user->email);?>';
	var tmp   = '<?php echo ($state == 0 && isset($_GET['t']))?$_GET['t']:$query[0]->template;?>';
	var user   = '<?php echo $user->id;?>';
	</script>
    <?php echo $head;?>
</head>
<body class="canvas">
	<header>
		<div id="top" class="noise container roadx">
			<div class="row">
				<div id="logo" class="span4"><a href="<?php echo base_url();?>">PageN<span style="color:#D62E2E; font-size:39px">[</span>X<span style="color:#D62E2E; font-size:39px">]</span></a></div>
				<nav class="span6">
					<ul class="nav">
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
                                <?php if($id){?>
                                <li><a id="lp_general" href="#">General settings</a></li>
                                <li><a target="_blank" href="<?php echo base_url();?>lp/<?php echo $user->id?>/page_<?php echo $id?>.html">Live Preview</a></li>
                                <?php } else { ?>
                                <li><span>General settings</span></li>
                                <li><span>Live Preview</span></li>
                                <?php } ?>
                                <li class="divider"></li>
                                <li class="nav-header">More actions</li>
                                <?php if($id){?>
                                <li><a id="lp_delete" href="#">Delete this page</a></li>
                                <?php } else { ?>
                                <li><span>Delete this page</span></li>
                                <?php } ?>
                                <li><a href="#">Choose a different layout</a></li>
                            </ul>
                        </li>
                        <li class="red"><a href="#" id="lp_save"><strong>save</strong></a></li>
                        <li style=" margin-left:20px;">
                            <a href="#"><strong>Hi</strong> <span style="color:#D62E2E; font-weight:normal">[</span><?php echo $user->username;?><span style="color:#D62E2E; font-weight:normal">]</span></a>
                        </li>
                      </ul>
				</nav>

				<!-- END OF TOP MENU -->
			</div>
		</div>
	</header>
    <section>
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
    </section>
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
    <img src="<?php echo base_url();?>images/guide.png" class="lp_guide" style="display:none;">
    <div id="lp_overlay"></div>   
</body>
</html>