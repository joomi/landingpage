jQuery(document).ready(function($) {
	$('.lp_canvas').on('click','a', function(event){event.preventDefault()});
	$('.lp_canvas input[type=submit]').click(function(event){event.preventDefault()});
	$.base64.is_unicode = true;
	$( "#myModal" ).draggable({ 
		handle:'.modal-header',
		drag: function( event, ui ) {
			$(this).css('opacity', 0.8);
		},
		stop: function( event, ui ) {
			$(this).css('opacity', 1);
		}
	});
//	$().enableUndo({ redoCtrlChar : 'y', redoShiftReq : false });
    $("*[data-role='lp_element']").each(function(){
		if($(this).is("img"))
		$(this).addClass('lp_img_element');
		else
		$(this).addClass('lp_element');
	});
	
	$("*[data-role='lp_element']").mouseenter(function(e) {
		var title = $(this).attr('data-name');
        $(this).prepend('<a class="lp_remove_block" onClick="removeBlock(this);" title="Remove '+title+'" alt="Remove '+title+'"></a>');
    }).mouseleave(function(e) {
        $('.lp_remove_block',this).remove();
    });
	
	var bodyheight = $(window).height();
    $("#lp_inner_editor_wrap").height((parseInt(bodyheight*0.7) - 100)+'px');
	
    $("*[data-role='text']").dblclick(function(){
		if(edit('status') == 'on') return false;
		edit('on');
		$(this).addClass('lp_focusin').attr('contenteditable', 'true');
		$.ajax({
			url:base_url+'includes/lp_editor_panels/text.tpl',
			success: function(data){
				$('#lp_controls').append(data);
			}
		});
	});
	
	$(".lp_social_container").on('dblclick','a', function(){
		if(edit('status') == 'on') return false;
		edit('on');
		$.ajax({
			url:base_url+'includes/lp_editor_panels/social.tpl',
			success: function(data){
				$('#lp_controls').append(data);
				socialStatus();
			}
		});
	});
	
	$(".lp_canvas").on('dblclick','a[data-role=link]', function(){
		if(edit('status') == 'on') return false;
		edit('on');
		$(this).addClass('lp_focusin').attr('contenteditable', 'true');
	//	$(this).parent().attr('contenteditable', 'true');
		var linkx = $(this).attr('href');
		$.ajax({
			url:base_url +'includes/lp_editor_panels/link.tpl.php?link='+linkx,
			success: function(data){
				$('#lp_controls').append(data);
			}
		});
	});
	
	$(".lp_canvas").on('dblclick','img.lp_img', function(){
		if(edit('status') == 'on') return false;
		edit('on');
		var width = $(this).width();
		var height = $(this).height();
		var id = $(this).attr('id');
		var title = $(this).attr('title');
		var linkx = $(this).parent().attr('href');
		var alt = $(this).attr('alt');
		var borderWidth = $(this).css('border-width');
		var borderStyle = $(this).css('border-style');
		var borderColor = $(this).css('border-color');
		var float = $(this).css('float');
		var marginTop = parseInt($(this).css('margin-top'));
		var marginLeft = parseInt($(this).css('margin-left'));
		var marginRight = parseInt($(this).css('margin-right'));
		var marginBottom = parseInt($(this).css('margin-bottom'));		
		$.ajax({
			url:base_url+'includes/lp_editor_panels/image.tpl.php',
			data:'width='+width+'&height='+height+'&title='+title+'&alt='+alt+'&borderWidth='+borderWidth+'&borderStyle='+borderStyle+'&borderColor='+borderColor+'&float='+float+'&marginTop='+marginTop+'&marginLeft='+marginLeft+'&marginRight='+marginRight+'&marginBottom='+marginBottom+'&id='+id
			+'&link='+linkx,
			success: function(data){
				$('#lp_controls').append(data);
			}
		});
	});

	$(".lp_canvas").on('dblclick','form[data-role=form] *', function(){
		if(edit('status') == 'on') return false;
		edit('on');
		var row = '';
		var value = '';
		$('.lp_form_row').each(function(index, element) {
            var label     = $('label', this).text();
            var input     = $('input', this);
			var id 		  = input.attr('id');
			var type	  = input.attr('type');
		//	var name	  = input.attr('name');
			var value	  = (type == 'submit')?input.attr('value'):'';
		//	var classx    = input.attr('class');
			var remove    = (type != 'submit')?'<a class="lp_remove_field" title="Remove this field" alt="Remove this field" rel="'+id+'"></a>':'';
			row = row + '<div class="lp_editor_row" data-row="'+id+'"><input class="lp_form_label_update" type="text" data-id="'+id+'" data-type="'+type+'" value="'+label+value+'" />'+remove+'<label class="lesser">Input type is <i>'+type+'</i></label></div>';
        });
		var base = $.base64.encode(encodeURI(row));
		
		$.ajax({
			url:base_url+'includes/lp_editor_panels/form.tpl.php?base='+base,
			success: function(data){
				$('#lp_controls').append(data);
			}
		});
	});

	$(".lp_canvas").on('dblclick','iframe', function(){
		if(edit('status') == 'on') return false;
		edit('on');
		var width = $(this).attr('width');
		var height = $(this).attr('height');
		var src = $(this).attr('src');
		
		$.ajax({
			url:base_url+'includes/lp_editor_panels/video.tpl.php?width=' + parseInt(width) + '&height=' + parseInt(height) + '&src=' + encodeURI(src),
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
	
	$('div[data-role=sortable]').sortable({
		stop: function( event, ui ) {
			$('.def_leftCol').removeClass('def_leftCol');
			$('.def_rightCol').removeClass('def_rightCol');
			$('.def_midCol').removeClass('def_midCol');
			$('.lp_main > div:first-child:not(.clear)').addClass('def_leftCol');
			$('.lp_main > div:eq(1):not(.clear)').addClass('def_midCol');
			$('.lp_main > div:eq(2):not(.clear)').addClass('def_rightCol');
		}
	});
	$('#lp_contact-form,.lp_social_container').sortable({
    //	placeholder: "ui-state-highlight"
    });
	
    $(".modalpopup").click(function(){
		var url = $(this).attr('href');
		$('#myModal').modal({
			remote: url
		})		
	});
	
    $(".dropdown-toggle").click(function(){
		$(this).next().toggle();
	});
	
	//save the page to DB
	$("#lp_save").click( function(event){
		event.preventDefault();
		$('#lp_overlay').show();
		var data = $.base64.encode(encodeURI($('.lp_canvas').html()));
		var id = getVar('id');
		$.ajax({
			url:base_url+'index.php/save',
			data:'h='+data+'&id='+id+'&t='+tmp,
			type:'POST',
			success: function(data){
				if(data != 'n')
				window.location.href = 'canvas?id='+data;
				$('#lp_overlay').hide();
			}
		});
	});
});

function getVar(variable)
{
	var query = window.location.search.substring(1);
	var vars = query.split("&");
	for (var i=0;i<vars.length;i++) {
		var pair = vars[i].split("=");
		if(pair[0] == variable)
		{return pair[1];}
	}
	return 0;
}
function removeBlock($this) {
	if(edit('status') == 'off'){
		var doit = confirm('Are you sure you would like to remove this block');
		if(doit)
		$($this).parent().remove();
		else
		return false;
	} else {
		alert('Please close the edit penel first');	
	}
};

function edit(state){
	switch(state){
		case 'status':
			return $("#myModal").attr('data-state');
			break;	
		case 'off':
			$('#myModal').attr('data-state', 'off').modal('hide');
			$('#lp_controls').html('');
			$('.colorpicker').remove();
			$('.lp_focusin').removeClass('lp_focusin').attr('contenteditable', 'false');
			$(".lp_canvas").toggleClass( "editing" );
			$('.navbar-fixed-top').animate({top:'0'});
			$( ".lp_main" ).sortable( "enable" );
			break;	
		case 'on':
			$('#myModal').attr('data-state', 'on').modal({'backdrop':false});
			$(".lp_canvas").toggleClass( "editing" );
			$(".lp_main").sortable( "disable" );
			$('.navbar-fixed-top').animate({top:'-50px'});
			break;	
	}
}
function close_modal(){
	$('#myModal').modal('toggle');
}

$(window).resize(function() {
    var bodyheight = $(window).height();
    $("#lp_inner_editor_wrap").height((parseInt(bodyheight*0.7) - 100)+'px');
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
		$('#'+name).parent().addClass('active'); 
		$('#'+name).attr('checked', true).parent().next().show().val(url); 
    });	
}

