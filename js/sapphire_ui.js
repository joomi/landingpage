/*

	SAPPHIRE UI SETTINGS INDEX

		1  - Flexsliders							19. Line
		2  - Touchable Settings 					73. Line
		3  - Sapphire Slider 						107. Line
		4  - One Page Menu & To Top Button 			118. Line
		5  - Lightbox 								189. Line
		6  - Gallery ( App Screens )				199. Line
		7  - Ajax Contact Form 						250. Line
		8  - Map 									300. Line
		9  - Latest Tweets 							308. Line
		10 - Mobile Menu Settings 					334. Line
		10 - Newsletter Mailchimp Settings		    344. Line

*/

/* Flexsliders */

$(window).load(function() {

	$('#features').flexslider({
		selector: ".slides > div",
		animation: "slide",
		animationSpeed: 800, 
		animationLoop: true,
		controlNav: true,
		easing: "swing",
		touch: true, 
		itemMargin: 0,
		minItems: 1,
		maxItems: 2,
		keyboard: true,                   
		mousewheel: false
	});

	$('#quote').flexslider({
		selector: ".quotes > blockquote",
		animation: "slide",
		animationSpeed: 200, 
		animationLoop: true,
		controlNav: false,
		directionNav: true,
		easing: "swing",
		touch: true, 
		itemMargin: 20,
		minItems: 1,
		maxItems: 2,
		keyboard: true,                   
		mousewheel: false
	});

	$('#sponsors div.row').flexslider({
		selector: "ul > li",
		animation: "slide",
		animationSpeed: 200, 
		animationLoop: true,
		controlNav: true,
		directionNav: true,
		easing: "swing",
		touch: true, 
		itemMargin: 0,
		itemWidth: 188,
		keyboard: true,                   
		mousewheel: false
	});

});

/* End Of Flexsliders */

/* Sapphire Slider */

$('#sapphire-slider').cslider({
    current     : 0,    
    bgincrement : 50,    
    autoplay    : true,
    interval    : 4000  
});

/* End Of Slider */

/* One Page Menu (Slide To Section) & To Top Button */

$(document).ready( function() { 

	$(window).scroll(function() {
  
		if ($(window).scrollTop() > 200 ){

			$('#top, #mobile_menu').stop().addClass('road').removeClass('ie8').animate({
					background: 'rgba(255,255,255,.8)'
			}, 200 );

		} else {

			$('#top, #mobile_menu').stop().removeClass('road').addClass('ie8').animate({
					background: 'rgba(255,255,255,0)'
			}, 200 );
			$('#top nav li a').removeClass('current');				

		};

	});

	// To Top

	$().UItoTop({ easingType: 'easeOutQuart' });

	// Parallax

	$('#top nav li a, #band .row ul li a, #mobile_menu ul li a, .scroll').click( function() {
		var targetDiv = $(this).attr('href');
		var pos = $(''+targetDiv+'').offset().top-60;
		$.scrollTo(pos+'px', 800 );
		return false;
	});

	$('#logo a').click( function() {
		$.scrollTo('0px', 800 );
		return false;
	});
        
    function getTargetTop(elem){
        var id = elem.attr("href");
        var offset = 60;
        return $(id).offset().top - offset;
    }

    var sections = $('#top nav li a[href^="#"]');
    function checkSectionSelected(scrolledTo){
        var threshold = 100;
        var i;
        for (i = 0; i < sections.length; i++) {
            
            var section = $(sections[i]);
            var target = getTargetTop(section);
            if (scrolledTo > target - threshold && scrolledTo < target + threshold) {
                sections.removeClass("current");
                section.addClass("current");
            }
        };
    }

    checkSectionSelected($(window).scrollTop());
    $(window).scroll(function(e){
        checkSectionSelected($(window).scrollTop())
    });

});

/* One Page Menu & To Top Button */


/* Gallery ( App Screens ) */

$('#screens').isotope({
	itemSelector : '.screen',
	layoutMode : 'fitRows',
	animationEngine : 'jquery'
});

$('#filters a').click(function(){
	var selector = $(this).attr('data-filter');
	$('#filters a').removeClass('active');
	$(this).addClass('active');
	$('#screens').isotope({ filter: selector });
	return false;
});

$(function() {

	$(' #screens > .screen a').each( function() { $(this).hoverdir({
		hoverDelay : 75
	}); } );

});

// Load More

$('.load_more').live('click', function() {

	var $newItems = $('<li class="screen android"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 1" ><img src="http://placehold.it/240x180" /><div></div></a></li><li class="screen osx"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 2" ><img src="http://placehold.it/240x180" /><div></div></a></li><li class="screen android"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 3" ><img src="http://placehold.it/240x180" /><div></div></a></li><li class="screen osx"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 4" ><img src="http://placehold.it/240x180" /><div></div></a></li><li class="screen ios"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 5" ><img src="http://placehold.it/240x180" /><div></div></a></li><li class="screen ios"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 6" ><img src="http://placehold.it/240x180" /><div></div></a></li><li class="screen windows"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 7" ><img src="http://placehold.it/240x180" /><div></div></a></li><li class="screen windows"><a href="http://placehold.it/640x480" rel="gallery" class="pirobox_gall" title="Shot 8" ><img src="http://placehold.it/240x180" /><div></div></a></li>');
		
	$('#screens').append( $newItems).isotope( 'reloadItems' ).isotope({ sortBy: 'original-order' });

	$(".piro_overlay").remove();
	$(".piro_html").remove();
	$("#imgCache").remove();
	$().piroBox_ext({
		piro_speed : 700,
		bg_alpha : 0.5,
		piro_scroll : true
	});

	$(' #screens > .screen a').each( function() { $(this).hoverdir({
		hoverDelay : 75
	}); } );

	return false;

});

/* End Of Gallery ( App Screens ) */

/* Ajax Contact Form */

$('.contact_left input[type="button"]').live('click', function() {
	
	$(".contact_left form").validate({
		rules: {
			name: { required: true },
			email: 		{ required:true, email: true },
			subject: 	{ required: true },
			message: 	{ required: true }
		},
		messages: {
			name: 		"Required",
			email: 		"Required",
			subject: 	"Required",
			message: 	"Required"
		},
		errorElement: "span",
		errorPlacement: function(error, element) {
			element.attr('placeholder',"Required");

		} 
	});
	
	if($(".contact_left form").valid()) {

	email = $(".contact_left input[type='text']"); 
	
		var dataString = 'subscribe="ok"&email=' + email;  
		$.ajax({  
			type: "POST",  
			url: "mail.php",  
			data: dataString,  
			success: function() {    
				$('.contact_left').html("<div id='success'><h2>Your message has sent!</h2><p>We will be in touch soon.</p></div>")  
				.hide()  
				.fadeIn(1500, function() {  
				  $('.contact_left').append("");  
			});  
			}  
		});  
		
		return false;  

	}
	
});

/* End Of Ajax Contact Form */


/* Mobile Menu Settings */

$('.mobile').live('click', function() {

	$('#mobile_menu').toggleClass('on').toggleClass('off');
	$(this).toggleClass('opened').toggleClass('closed');

});

/* End Of Mobile Menu Settings */

/* Newsletter Mailchimp Settings */

$('#newsletter input[type="button"]').live('click', function() {
	
	$("#newsletter form").validate({
		rules: {
			subscribe_mail: 		{ required:true, email: true }
		},
		messages: {
			subscribe_mail: 		"Required"
		},
		errorElement: "span",
		errorPlacement: function(error, element) {
			element.attr('placeholder',"Required");

		} 
	});
	
	if($("#newsletter form").valid()) {
	 
		$.ajax({  
			url: "subscribe.php",
			type: 'POST',
			data: {
				email: $('#subscribe_mail').attr('value')
			}, 
		  	success: function(data) {
		  	    $('#newsletter p').remove();
				$('#newsletter form').html("<div id='success'><h2>Subscribed !</h2><p>"+data+"</p></div>")  
				.hide()  
				.fadeIn(1500, function() {  
				  $('#newsletter form').append("");  
				});  
		  	},
		  	error: function() {
				$('#newsletter form').html("<div id='success'><h2>Sorry, an error occurred.</h2></div>").css('color', 'red');
			}  
		});  
		
		return false;  

	}
	
});

/* End Of Newsletter Mailchimp Settings */