<div class="lp_panel_wrapper">
    <span class="lp_ctrl_title"><i class="icon-th-large"></i>Form basics</span>
    <div class="lp_editor_row half left">
    	<label for="form_email">Send leads to:</label>
        <input class="" type="email" placeholder="Type your email" id="form_email" />
	</div>
    <div class="lp_editor_row half left">
    	<label for="form_subject">Form subject:</label>
        <input class="" type="text" placeholder="Type your subject" id="form_subject" />
	</div>
    <div class="lp_editor_row cleared">
    	<label for="form_analytics"><input type="checkbox" id="form_analytics" /> Gether form analytics and submitions?</label>
	</div>
    <span class="lp_ctrl_title"><i class="icon-list"></i>Edit your current fields</span>
    <div class="lp_form_current">
  	<?php echo urldecode(base64_decode($_GET['base']))?>
	</div>
    <span class="lp_ctrl_title"><i class="icon-plus-sign"></i>Add a new field</span>    
    <div class="lp_editor_row half left">
    	<label for="newlabel">Field label</label>
        <input class="lp_form_label_update" type="text" id="newlabel" />
    </div>
    <div class="lp_editor_row half left">
        <label for="newtype">Select input type</label>
        <select id="newtype" class="lp_form_type_update">
            <option value="text">Text</option>
            <option value="tel">Telephone</option>
            <option value="email">Email</option>
            <option value="checkbox">Checkbox</option>
        </select>
    </div>    
    <div class="lp_editor_row cleared">
        <button id="addField" class="btn"><i class="icon-arrow-right"></i> Add this field</button>
    </div>
    <span class="lp_ctrl_title"><i class="icon-list-alt"></i>Edit form text</span>        
    <div class="lp_editor_row">
        <div class="btn-toolbar" style="float:left;">
          <div class="btn-group">
            <a class="btn alineLeft" href="#"><i class="icon-align-left"></i></a>
            <a class="btn alineCenter" href="#"><i class="icon-align-center"></i></a>
            <a class="btn alineRight" href="#"><i class="icon-align-right"></i></a>
            <a class="btn alignJust" href="#"><i class="icon-align-justify"></i></a>
          </div>
        </div>   
        <div class="btn-toolbar" style="float:left; margin-left:19px;">
          <div class="btn-group">
            <a href="#" class="bold btn"><i class="icon-bold"></i></a>
            <a href="#" class="normal btn" style="display:none;"><i class="icon-bold"></i></a>
            <a href="#" class="italic btn"><i class="icon-italic"></i></a>
            <a href="#" class="noStyle btn" style="display:none;"><i class="icon-italic"></i></a>
            <a href="#" class="underline btn"><i class="icon-underline" style="font-size:14px; font-weight:bold;">U</i></a>
            <a href="#" class="noDecor btn" style="display:none;"><i class="icon-underline" style="font-size:14px; font-weight:bold;">U</i></a>
          </div>
        </div>   
        <div class="clear"></div>    
    </div>
    <div class="lp_editor_row half left">
        <label for="font_family">Font family</label>
        <select id="font_family">
            <option value="">Select font family</option>
            <option style="font-family:Arial, Helvetica, sans-serif" value="Arial, Helvetica, sans-serif">Arial, Helvetica</option>
            <option style="font-family:Verdana, Geneva, sans-serif" value="Verdana, Geneva, sans-serif">Verdana, Geneva</option>
            <option style="font-family:Georgia, serif" value="Georgia, serif">Georgia</option>
            <option style="font-family:Times New Roman, Times, serif" value="Times New Roman, Times, serif">Times New Roman</option>
            <option style="font-family:Courier" value="Courier">Courier</option>
            <option style="font-family:Tahoma" value="Tahoma">Tahoma</option>
            <option style="font-family:'Lucida Sans Unicode', 'Lucida Grande'" value='"Lucida Sans Unicode", "Lucida Grande"'>Lucida</option>
            <option style="font-family:'Comic Sans MS', 'cursive'" value='"Comic Sans MS", cursive'>Comic Sans MS</option>
        </select>
    </div>
    <div class="lp_editor_row half left">
        <label for="font_size">Font size</label>
        <div id="font_size"></div>
    </div>
    <div class="lp_editor_row cleared">
        <label for="colorPicker">Text color</label>
        <div class="input-append color" data-color="rgb(000, 000, 000)" data-color-format="hex" id="cp3" style="float:left;">
            <input type="text" class="span2" style="font-size:14px;" value="#000000">
            <span class="add-on"><i></i></span>
        </div>
        <button id="clearFormating" class="btn btn-inverse" style="float:left; margin-left:19px;"><i class="icon-leaf"></i> Clear formating </button>
        <div class="clear"></div>
    </div>
</div>
<script>
$('#myModalLabel').text('Editor pannel - Form');
$('#cp3').colorpicker().on('changeColor', function(ev){
	$('.lp_form_row input,.lp_form_row label').css('color', ev.color.toHex());
	$('input', this).val(ev.color.toHex());
});
$('#cp3 input').focusout( function(){
	$('.lp_focusin').css('color', $(this).val());
});

$('div[data-row]').mouseenter(function(e) {
    var id = $(this).attr('data-row');
	$('#'+id).addClass('focus');
}).mouseleave(function(e) {
    var id = $(this).attr('data-row');
	$('#'+id).removeClass('focus');
});;
$('.bold').click(function(e) {
	e.preventDefault();
   $(this).hide();
   $('.normal').show(); 
   $('.lp_form_row label').css('font-weight', 'bold');	
});
$('.normal').click(function(e) {
	e.preventDefault();
   $('.lp_form_row label').css('font-weight', 'normal');	
   $(this).hide();
   $('.bold').show(); 
});
$('.italic').click(function(e) {
	e.preventDefault();
   $('.lp_form_row input,.lp_form_row label').css('font-style', 'italic'); 
   $(this).hide();
   $('.noStyle').show(); 
});
$('.noStyle').click(function(e) {
	e.preventDefault();
   $('.lp_form_row input,.lp_form_row label').css('font-style', 'normal'); 
   $(this).hide();
   $('.italic').show(); 
});
$('.underline').click(function(e) {
	e.preventDefault();
   $('.lp_form_row label').css('text-decoration', 'underline'); 
   $(this).hide();
   $('.noDecor').show(); 
});
$('.noDecor').click(function(e) {
	e.preventDefault();
   $('.lp_form_row label').css('text-decoration', 'none'); 
   $(this).hide();
   $('.underline').show(); 
});
$('.alineLeft').click(function(e) {
	e.preventDefault();
   $('.lp_form_row input,.lp_form_row label').css('text-align', 'left'); 
});
$('.alineCenter').click(function(e) {
	e.preventDefault();
   $('.lp_form_row input,.lp_form_row label').css('text-align', 'center'); 
});
$('.alineRight').click(function(e) {
	e.preventDefault();
   $('.lp_form_row input,.lp_form_row label').css('text-align', 'right'); 
});
$('.alignJust').click(function(e) {
	e.preventDefault();
   $('.lp_form_row input,.lp_form_row label').css('text-align', 'justify'); 
});
$('#font_family').change(function(e) {
    $('.lp_form_row input,.lp_form_row label').css('font-family', $(this).val()); 
});
$('#font_size').slider({ 
	max:  25,
	min:  1,
	step: 1,
	value: 10,
	slide: function( event, ui ) {
    	$('.lp_form_row input,.lp_form_row label').css('font-size', (ui.value / 10) + 'em'); 
	}
});
$('#clearFormating').click(function(e) {
	e.preventDefault();
	$(".lp_form_row input,.lp_form_row label").attr('style', '');
});
$('.lp_form_label_update').focusout(function(e) {
    var id = $(this).attr('data-id');
    var type = $(this).attr('data-type');
    var val = $(this).val();
	if(type == 'checkbox')
	$('label[for='+id+']').html('<input type="checkbox" name="lpForm['+id+']" class="def_checkbox" id="'+id+'"> ' + val);
	else if(type == 'button')
	$('#'+id).val(val);
	else
	$('label[for='+id+']').text(val);
});
$('.lp_remove_field').click(function(e) {
	e.preventDefault();
    var id = $(this).attr('rel');
	$('#'+id).parent().fadeOut(500,'linear',function(){$('#'+id).parent().remove()});
	$(this).parent().fadeOut(500,'linear',function(){$(this).remove()});
});
$('#addField').click(function(e) {
	e.preventDefault();
    var label = $('#newlabel').val();
	if(label == '') {alert('Label is required'); return;}
	var id = label.replace(/\s/g,'_');
	var type = $('#newtype').val();
	if(type == 'checkbox')
	var html = '<div class="lp_form_row"><label for="'+id+'" contenteditable="false" class="def_confirm"><input type="'+type+'" name="lpForm['+id+']" class="def_checkbox" id="'+id+'"> '+label+'</label></div>';
	else
	var html = '<div class="lp_form_row"><label for="'+id+'" contenteditable="false">'+label+'</label><input type="'+type+'" name="lpForm['+id+']" class="def_inputbox" id="'+id+'"></div>';
	$('#lp_contact-form').prepend(html);
});
var send_to = $('#t').val();
var subject = $('#sub').val();
if(send_to != '<!--t-->')
	$('#form_email').val(send_to);
if(subject != '<!--sub-->')
	$('#form_subject').val(subject);
$('#form_email').focusout(function(e) {
	$('#t').val($.base64.encode($(this).val()));
});
$('#form_subject').focusout(function(e) {
	$('#sub').val($.base64.encode($(this).val()));
});



</script>
