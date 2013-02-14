<!doctype html>
<html class="no-js" lang="en"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>HTML5 canvas page</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="sunny/jquery-ui-1.10.0.custom.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>    
	<script type="text/javascript" src="js/bootstrap-colorpicker.js"></script>    
	<script type="text/javascript" src="js/jquery.uploadify.min.js"></script>    
    <script src="js/script.js"></script>
</head>
<body>
    <div role="canvas" class="lp_canvas">
    <div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>
        <div class="lp_container" role="heading">
            <a href="http://sdf"><img src="images/placeholder.jpg" style="border-width:2px; border-style:dashed; border-color:#666" class="lp_img def_logo" data-role="lp_element" id="lp_logo" data-width="120" data-height="60" title="company name" alt="company name" /></a>
            <h1 data-role="text">Campaign title</h1>
            <div class="def_topMenu" data-role="lp_element" data-name="The top menu area">
                <a href="#" data-role="link">LINK</a> | <a href="#" data-role="link">LINK</a> | <a href="#" data-role="link">LINK</a> | <a href="#" data-role="link">LINK</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="lp_container" role="heading">
            <img id="lp_headerimg" src="images/placeholder.jpg" class="lp_img def_headerImg" data-role="lp_element" data-width="100%" data-height="90" title="company name" alt="company name" />
        </div>
        <div role="main" class="lp_container def_main lp_main">
            <div data-role="lp_element" class="def_leftCol def_contentCol" data-name="Text block element">
            	<h3 data-role="text">Title Header</h3>
                <p data-role="text">Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>
                <iframe width="259" height="146" src="http://www.youtube.com/embed/v0PDemkEPMs" frameborder="0" allowfullscreen><a href="#">asd</a></iframe>
            </div>
            <div data-role="lp_element" class="def_midCol def_contentCol" data-name="Text block element">
            	<h3 data-role="text">Title Header</h3>
                <p data-role="text">Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>
                <img src="images/placeholder.jpg" id="lp_content_img_1" class="lp_img def_contentImg" data-role="lp_element" data-width="120" data-height="120" title="" alt="" />                
            </div>
            <div data-role="lp_element" class="def_rightCol def_formHolder def_contentCol" data-name="Text block element">
                <h3 data-role="text">Form Header</h3>
                <p data-role="text">form description.. form description.. form description.. form description.. form description.. </p>
                <form name="contact-form" data-role="form" id="lp_contact-form" class="lp_validate def_form" method="post" contenteditable="false">
                	<div class="lp_form_row">
                        <label for="Full_name">Full name</label>
                        <input type="text" name="lpForm[Full_name]" class="def_inputbox" id="Full_name">
                    </div>
                	<div class="lp_form_row">
                        <label for="Phone_number" contenteditable="false">Phone number</label>
                        <input type="text" name="lpForm[Phone_number]" class="def_inputbox" id="Phone_number">
                    </div>
                	<div class="lp_form_row">
                        <label for="Email">Email</label>
                        <input type="text" name="lpForm[Email]" class="def_inputbox" id="Email">
                    </div>
                	<div class="lp_form_row">                    
                        <label for="confirm" class="def_confirm"><input type="checkbox" name="lpForm[confirm]" class="def_checkbox" id="confirm"> confirm your intrest</label>
                    </div>
                 	<div class="lp_form_row">
                        <input type="submit" id="lp_submit" class="def_submit" value="Contact us">
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="lp_container def_footer" data-role="lp_element" data-name="The footer area">
            <span>All rights reserved for DEMO Copyright &copy; 2013</span>
            <div class="lp_social_container">
                <a href="http://www.facebook.com" contenteditable="false" class="lp_footerSocialIcon def_Facebook" rel="Facebook"></a>
                <a href="#" contenteditable="false" class="lp_footerSocialIcon def_Youtube" rel="Youtube"></a>
                <a href="#" contenteditable="false" class="lp_footerSocialIcon def_Twitter" rel="Twitter"></a>
                <a href="#" contenteditable="false" class="lp_footerSocialIcon def_Blogger" rel="Blogger"></a>
            </div>
            <ul role="navigation" class="def_footerNav">
                <li><a href="#" title="link text" data-role="link">link text</a></li> | 
                <li><a href="#" title="link text" data-role="link">link text</a></li> | 
                <li><a href="#" title="link text" data-role="link">link text</a></li> | 
                <li><a href="#" title="link text" data-role="link">link text</a></li>
            </ul>
            <div class="clear"></div>
        </div>
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


