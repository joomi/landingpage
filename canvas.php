<?php
//prevent direct access to all pages
//echo base64_encode('basic/3col');
//defined('_LPACCSS') or die('No direct access');
if(isset($_SESSION['template'])){
$head = base64_decode($_SESSION['template']).'/head.php';
$body = base64_decode($_SESSION['template']).'/body.php';
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
	<link rel="stylesheet" href="css/style.css">
	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/library.js"></script>    
    <script src="js/script.js"></script>
    <?php include('templates/'.$head);?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="./index.html">Home</a>
              </li>
              <li class="">
                <a href="./getting-started.html">Get started</a>
              </li>
              <li class="">
                <a href="./scaffolding.html">Scaffolding</a>
              </li>
              <li class="">
                <a href="./base-css.html">Base CSS</a>
              </li>
              <li class="active">
                <a href="./components.html">Components</a>
              </li>
              <li class="">
                <a href="./javascript.html">JavaScript</a>
              </li>
              <li class="">
                <a href="./customize.html">Customize</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div role="canvas" class="lp_canvas">
		<?php include('templates/'.$body);?>
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