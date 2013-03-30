
/* Changer Settings */
   
	$(document).ready( function() {

		$('body').append('<a id="theme_picker"></a><div id="style_selector"><h4>Select Theme</h4><ul><li><a class="azure"></a></li><li><a class="blue"></a></li><li><a class="brown"></a></li><li><a class="gold"></a></li><li><a class="green"></a></li><li><a class="orange"></a></li><li><a class="pink"></a></li><li><a class="purple"></a></li><li><a class="red"></a></li><li><a class="turquoise"></a></li><div class="clearfix"></both></ul><a class="close_selector">Close</a></div><style type="text/css">#theme_picker {background: url("images/picker.png") center center no-repeat #FFF;color: #666;padding: 20px;cursor: pointer;position: fixed;top: 10px;left: 0px;z-index: 12;margin-left: auto;margin-right: auto;margin-top: 0px;-webkit-border-radius: 0px 6px 6px 0px;-moz-border-radius: 6px;border-radius: 0px 6px 6px 0px;-webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);-webkit-transition: 200ms linear all;-moz-transition: 200ms linear all;-ms-transition: 200ms linear all;-o-transition: 200ms linear all;transition: 200ms linear all;}#style_selector {background-color: rgba(0,0,0,.7); -pie-background: rgba(0,0,0,.7); padding: 0px;margin: 0px;z-index: 99999;color: #FFF;position: fixed;top: 0;display: none;left: 0;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}#style_selector h4 {text-align: center;padding-top: 40px;}#style_selector .close_selector {background-color: #FFF;color: #666;padding: 10px;display: table;margin-left: auto;margin-right: auto;margin-top: 0px;text-decoration: none;cursor: pointer;-webkit-border-radius: 6px;-moz-border-radius: 6px;border-radius: 6px;-webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);-moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);-webkit-transition: 200ms linear all;-moz-transition: 200ms linear all;-ms-transition: 200ms linear all;-o-transition: 200ms linear all;transition: 200ms linear all;}#style_selector  .close_selector:hover {background-color: #EEE;}#style_selector ul {padding: 7%;margin: 0px;width: 100%;display: table; -webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;margin-left: auto;margin-right: auto;}#style_selector ul li {float: left;width: 16%;margin-right: 5%;margin-bottom: 5%;}#style_selector ul li:nth-child(5n) {margin-right: 0;}#style_selector ul li a {border: 4px solid rgba(255,255,255,0.8);-webkit-border-radius: 6px;-moz-border-radius: 6px;border-radius: 6px;height: 80px;cursor: pointer;display: list-item;-webkit-transition: 200ms linear all;-moz-transition: 200ms linear all;-ms-transition: 200ms linear all;-o-transition: 200ms linear all;transition: 200ms linear all;}#style_selector ul li a.azure {background-color: #48586F;}#style_selector ul li a.blue {background-color: #4DBCE9;}#style_selector ul li a.brown {background-color: #774F38;}#style_selector ul li a.gold {background-color: #F5B349;}#style_selector ul li a.green {background-color: #BDE077;}#style_selector ul li a.orange {background-color: #FD6751;}#style_selector ul li a.pink {background-color: #FC3A51;}#style_selector ul li a.purple {background-color: #8C5B7B;}#style_selector ul li a.red {background-color: #D62E2E;}#style_selector ul li a.turquoise {background-color: #5FCAB0;}#style_selector ul li a:hover {opacity: .7;border: 4px solid rgba(54, 54, 53, 1);}</style>');
		$('#style_selector').width($(window).width());
		$('#style_selector').height($(window).height());
	});

	$(window).resize(function(){
		$('#style_selector').width($(window).width());
		$('#style_selector').height($(window).height());
	});
	
	$('#style_selector ul li a').live('click', function() {
		
		color = $(this).attr('class');
		$('#color-style').attr('href','css/'+color+'.css');
		$('#style_selector').fadeOut('1000');
		$('#theme_picker').fadeIn('300');
		
	});

	$('.close_selector').live('click', function() { 

		$('#style_selector').fadeOut('500');
		$('#theme_picker').fadeIn('300');

	});

	$(document).ready( function() {
		
		$('#theme_picker').live('click', function() { 
			
			$('#style_selector').fadeIn('1000');
			$(this).fadeOut('300');
		
		});
		
	});