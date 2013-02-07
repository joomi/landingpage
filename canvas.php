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
	<link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/colorpicker.js"></script>    
    <script src="js/script.js"></script>
</head>
<body>
    <div role="canvas">
        <div class="lp_container" role="heading">
            <img src="images/placeholder.jpg" class="lp_img def_logo" data-role="lp_element" data-width="120" data-height="60" title="company name" alt="company name" />
            <h1 data-role="text">Campaign title</h1>
            <div class="def_topMenu" data-role="lp_element">
                <a href="#" data-role="link">LINK</a> | <a href="#" data-role="link">LINK</a> | <a href="#" data-role="link">LINK</a> | <a href="#" data-role="link">LINK</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="lp_container" role="heading">
            <img src="images/placeholder.jpg" class="lp_img def_headerImg" data-role="lp_element" data-width="100%" data-height="90" title="company name" alt="company name" />
        </div>
        <div role="main" class="lp_container def_main">
            <div data-role="lp_element" class="def_leftCol def_contentCol">
            	<h3 data-role="text">Title Header</h3>
                <p data-role="text">Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>
                <img src="images/placeholder.jpg" class="lp_img def_contentImg" data-role="lp_element" data-width="120" data-height="120" title="" alt="" />
            </div>
            <div data-role="lp_element" class="def_midCol def_contentCol">
            	<h3 data-role="text">Title Header</h3>
                <p data-role="text">Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>
                <img src="images/placeholder.jpg" class="lp_img def_contentImg" data-role="lp_element" data-width="120" data-height="120" title="" alt="" />                
            </div>
            <div data-role="lp_element" class="def_rightCol def_formHolder def_contentCol">
                <h3 data-role="text">Form Header</h3>
                <p data-role="text">form description.. form description.. form description.. form description.. form description.. </p>
                <form name="contact-form" id="contact-form" class="lp_validate def_form" method="post" contenteditable="false">
                    <label for="Full_name">Full name</label>
                    <input type="text" name="lpForm[Full_name]" class="def_inputbox" id="Full_name">
                    <label for="Phone_number" contenteditable="false">Phone number</label>
                    <input type="text" name="lpForm[Phone_number]" class="def_inputbox" id="Phone_number">
                    <label for="Email">Email</label>
                    <input type="text" name="lpForm[Email]" class="def_inputbox" id="Email">
                    
                    <label for="confirm" class="def_confirm"><input type="checkbox" name="lpForm[confirm]" class="def_checkbox" id="confirm"> confirm your intrest</label>
                    <input type="submit" id="lp_submit" class="def_submit" value="Contact us">
                </form>
            </div>
            <div class="clear"></div>
        </div>
        <div class="lp_container def_footer" data-role="lp_element">
            <span>All rights reserved for DEMO Copyright &copy; 2013</span>
            <a href="#" contenteditable="false" class="dev_footerSocialIcon def_facebook"></a>
            <a href="#" contenteditable="false" class="dev_footerSocialIcon def_youtube"></a>
            <a href="#" contenteditable="false" class="dev_footerSocialIcon def_twitter"></a>
            <ul role="navigation" class="def_footerNav">
                <li><a href="#" title="link text">link text</a></li> | 
                <li><a href="#" title="link text">link text</a></li> | 
                <li><a href="#" title="link text">link text</a></li> | 
                <li><a href="#" title="link text">link text</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
	<div id="lp_editor" data-state="off">
    	<a href="#" id="closePanel"></a>
    	<h6>Editor Panel</h6>
    </div>
</body>
</html>


