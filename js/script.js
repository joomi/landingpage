jQuery(document).ready(function($) {
	$('a').click(function(event){event.preventDefault()});
    $("*[data-role='lp_element']").each(function(){
		if($(this).is("img"))
		$(this).addClass('lp_img_element');
		else
		$(this).addClass('lp_element');
	});
	
	var bodyheight = $(window).height();
    $("#lp_inner_editor_wrap").height(parseInt(bodyheight*0.7)+'px');
	
    $("*[data-role='text']").dblclick(function(){
		if(edit('status') == 'on') return false;
		edit('on');
		$(this).addClass('lp_focusin').attr('contenteditable', 'true');
		$.ajax({
			url:'http://127.0.0.1/landingpage/landingpage.git/includes/lp_editor_panels/text.tpl',
			success: function(data){
				$('#lp_controls').append(data);
			}
		});
	});
	
	$(".lp_social_container").on('dblclick','a', function(){
		if(edit('status') == 'on') return false;
		edit('on');
		$.ajax({
			url:'http://127.0.0.1/landingpage/landingpage.git/includes/lp_editor_panels/social.tpl',
			success: function(data){
				$('#lp_controls').append(data);
				socialStatus();
			}
		});
	});
	
	$(".lp_canvas").on('dblclick','img.lp_img', function(){
		if(edit('status') == 'on') return false;
		edit('on');
		var width = $(this).width();
		var height = $(this).height();
		var title = $(this).attr('title');
		var alt = $(this).attr('alt');
		var borderWidth = $(this).css('border-width');
		var borderStyle = $(this).css('border-style');
		var borderColor = $(this).css('border-color');
		var float = $(this).css('float');
		var marginTop = $(this).css('margin-top');
		var marginLeft = $(this).css('margin-left');
		var marginRight = $(this).css('margin-right');
		var marginBottom = $(this).css('margin-bottom');		
		$.ajax({
			url:'http://127.0.0.1/landingpage/landingpage.git/includes/lp_editor_panels/image.tpl.php',
			data:'width='+width+'&height='+height+'&title='+title+'&alt='+alt+'&borderWidth='+borderWidth+'&borderStyle='+borderStyle+'&borderColor='+borderColor+'&float='+float+'&marginTop='+marginTop+'&marginLeft='+marginLeft+'&marginRight='+marginRight+'&marginBottom='+marginBottom,
			success: function(data){
				$('#lp_controls').append(data);
			}
		});
	});

    $("#closePanel").click(function(){
		edit('off');
	});
	
	$(document).keyup(function(e) {
		if (e.keyCode == 27) { edit('off'); }   // esc
	});	
	
	$('.lp_main').sortable({
		stop: function( event, ui ) {
			$('.def_leftCol').removeClass('def_leftCol');
			$('.def_rightCol').removeClass('def_rightCol');
			$('.def_midCol').removeClass('def_midCol');
			$('.lp_main > div:first-child').addClass('def_leftCol');
			$('.lp_main > div:eq(2)').addClass('def_rightCol');
			$('.lp_main > div:eq(1)').addClass('def_midCol');
		}
	});
	$('.lp_social_container').sortable({	});
	
});

function edit(state){
	switch(state){
		case 'status':
			return $("#lp_editor").attr('data-state');
			break;	
		case 'off':
			$("#lp_editor").attr('data-state', 'off').animate({width:0},500, 'linear', function() {
				$(this).css({visibility:'hidden'});
				$('#lp_controls').html('');
				$('.lp_focusin').removeClass('lp_focusin').attr('contenteditable', 'false');
				$(".lp_canvas").toggleClass( "editing" );
				$( ".lp_main" ).sortable( "enable" );
			});			
			break;	
		case 'on':
			$("#lp_editor").attr('data-state', 'on').animate({width:200},500).css({visibility:'visible'});
			$(".lp_canvas").toggleClass( "editing" );
			$(".lp_main").sortable( "disable" );
			break;	
	}
}

$(window).resize(function() {
    var bodyheight = $(window).height();
    $("#lp_inner_editor_wrap").height(parseInt(bodyheight*0.7)+'px');
});

//get selected text
if(!window.Kolich){
  Kolich = {};
}
Kolich.Selector = {};
Kolich.Selector.getSelected = function(){
  var t = '';
  if(window.getSelection){
    t = window.getSelection();
  }else if(document.getSelection){
    t = document.getSelection();
  }else if(document.selection){
    t = document.selection.createRange().text;
  }
  return t;
}

//social buttons
function socialStatus(){
	jQuery('.lp_footerSocialIcon').each(function(index, element) {
        var name = $(this).attr('rel');
        var url = $(this).attr('href');
		$('#'+name).attr('checked', true).parent().next().show().val(url); 
    });	
}