jQuery(document).ready(function($) {
	$('a').click(function(event){event.preventDefault(0)});
    $("*[data-role='lp_element']").each(function(){
		$(this).addClass('lp_element');
	});
    $("*[data-role='text']").dblclick(function(){
		edit('on');
		$(this).addClass('lp_focusin').attr('contenteditable', 'true');
		$.ajax({
			url:'http://127.0.0.1/landingpage/landingpage.git/includes/lp_editor_panels/text.tpl',
			success: function(data){
				$('#lp_editor').append(data);
			}
		});
		
	});
    $(".lp_img").click(function(){
		edit('off');
	});
    $("span").click(function(){
		alert(cur_state);
	});
	
//	$('#colorPicker').ColorPicker();
});

function edit(state){
	console.log(state);
}