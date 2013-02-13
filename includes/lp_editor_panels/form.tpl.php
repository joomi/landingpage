<div class="lp_panel_wrapper">
    <span class="lp_ctrl_title">Form basics</span>
    <div class="lp_editor_row">
    	<label for="form_email">Send leads to:</label>
        <input class="" type="email" placeholder="Type your email" id="form_email" />
    	<label for="form_subject">Form subject:</label>
        <input class="" type="text" placeholder="Type your subject" id="form_subject" />
    	<label for="form_analytics"><input type="checkbox" id="form_analytics" /> Gether form analytics and submitions?</label>
	</div>
    <span class="lp_ctrl_title">Edit your current fields</span>
    <div class="lp_form_current">
  	<?php echo urldecode(base64_decode($_GET['base']))?>
	</div>
    <span class="lp_ctrl_title">Add a new field</span>    
    <div class="lp_editor_row">
    	<label for="newlabel">Field label</label>
        <input class="lp_form_label_update" type="text" id="newlabel" />
        <label for="newtype">Select input type</label>
        <select id="newtype" class="lp_form_type_update">
            <option value="text">Text</option>
            <option value="tel">Telephone</option>
            <option value="email">Email</option>
            <option value="checkbox">Checkbox</option>
        </select>
        <input type="button" id="addField" value="Add this field >" />
    </div>
    <span class="lp_ctrl_title">Edit form text</span>        
    <div class="lp_editor_row">
        <a href="#" class="bold lp_icon"></a>
        <a href="#" class="normal lp_icon" style="display:none;"></a>
        <a href="#" class="italic lp_icon"></a>
        <a href="#" class="noStyle lp_icon" style="display:none;"></a>
        <a href="#" class="underline lp_icon"></a>
        <a href="#" class="noDecor lp_icon" style="display:none;"></a>
        <div class="clear"></div>    
    </div>
    <div class="lp_editor_row">
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
    <div class="lp_editor_row">
        <label for="font_size">Font size</label>
        <select id="font_size">
            <option value="">Select font size</option>
            <option value="8px">8</option>
            <option value="9px">9</option>
            <option value="10px">10</option>
            <option value="11px">11</option>
            <option value="12px">12</option>
            <option value="15px">15</option>
            <option value="17px">17</option>
            <option value="20px">20</option>
            <option value="24px">24</option>
            <option value="30px">30</option>
            <option value="35px">35</option>
            <option value="40px">40</option>
            <option value="50px">50</option>
            <option value="70px">70</option>
        </select>
    </div>
    <div class="lp_editor_row">
        <label for="colorPicker">Text color</label>
        <div id="colorSelector"><div style="background-color: rgb(59, 59, 143);"></div></div>
        <input type="text" id="colorPicker" />
        <div class="clear"></div>
    </div>
    <div class="lp_editor_row">
        <input type="button" id="clearFormating" value="Clear formating">
    </div>

    <div class="lp_editor_row">
        <input type="button" id="closeEditor" onclick="edit('off');" value="I'm done here" />
    </div>
</div>
<script>
$('#lp_editor h6').text('Editor pannel - Form');

$('#colorPicker').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	},
	onChange: function (hsb, hex, rgb) {
		$('.lp_form_row input,.lp_form_row label,#colorPicker').css('color', '#' + hex);
		$('#colorSelector div').css('backgroundColor', '#' + hex);		
	}
})
.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
});
$('#colorSelector').ColorPicker({
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},	
	onChange: function (hsb, hex, rgb) {
		$('.lp_form_row input,.lp_form_row label,#colorPicker').css('color', '#' + hex);
		$('#colorSelector div').css('backgroundColor', '#' + hex);
		$('#colorPicker').val(hex);
	}
});

$('.bold').click(function() {
   $(this).hide();
   $('.normal').show(); 
   $('.lp_form_row label').css('font-weight', 'bold');	
});
$('.normal').click(function() {
   $('.lp_form_row label').css('font-weight', 'normal');	
   $(this).hide();
   $('.bold').show(); 
});
$('.italic').click(function() {
   $('.lp_form_row input,.lp_form_row label').css('font-style', 'italic'); 
   $(this).hide();
   $('.noStyle').show(); 
});
$('.noStyle').click(function() {
   $('.lp_form_row input,.lp_form_row label').css('font-style', 'normal'); 
   $(this).hide();
   $('.italic').show(); 
});
$('.underline').click(function() {
   $('.lp_form_row label').css('text-decoration', 'underline'); 
   $(this).hide();
   $('.noDecor').show(); 
});
$('.noDecor').click(function() {
   $('.lp_form_row label').css('text-decoration', 'none'); 
   $(this).hide();
   $('.underline').show(); 
});
$('#font_family').change(function(e) {
    $('.lp_form_row input,.lp_form_row label').css('font-family', $(this).val()); 
});
$('#font_size').change(function(e) {
    $('.lp_form_row input,.lp_form_row label').css('font-size', $(this).val()); 
});
$('#clearFormating').click(function(e) {
	$(".lp_form_row input,.lp_form_row label").attr('style', '');
});
$('.lp_form_label_update').focusout(function(e) {
    var id = $(this).attr('data-id');
    var type = $(this).attr('data-type');
    var val = $(this).val();
	if(type == 'checkbox')
	$('label[for='+id+']').html('<input type="checkbox" name="lpForm['+id+']" class="def_checkbox" id="'+id+'"> ' + val);
	else
	$('label[for='+id+']').text(val);
});
$('.lp_remove_field').click(function(e) {
	e.preventDefault();
    var id = $(this).attr('rel');
	$('#'+id).parent().remove();
	$(this).parent().parent().remove();
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

</script>
