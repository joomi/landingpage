<div class="lp_panel_wrapper">
    <span class="lp_ctrl_title">Replace the image</span>
	<input type="file" id="upload_img" />
    <span class="lp_ctrl_title">Image Editor</span>
    <div class="lp_editor_row">
		<label for="img_width">Image width (in pixels)</label>
        <input type="text" id="img_width" value="<?php echo $_GET['width']; ?>" />
		<label for="img_height">Image height (in pixels)</label>
        <input type="text" id="img_height" value="<?php echo $_GET['height']; ?>" />
    </div>
    <div class="lp_editor_row">
		<label for="img_title">Image title</label>
        <input type="text" id="img_title" value="<?php echo $_GET['title']; ?>" />
		<label for="img_alt">Image alt</label>
        <input type="text" id="img_alt" value="<?php echo $_GET['alt']; ?>" />
    </div>
    <div class="lp_editor_row">
        <label for="img_float">Float image</label>
        <select id="img_float" data-style="float">
        	<option value="">Float direction</option>
        	<option <?php echo ($_GET['float'] == 'left')?'selected="selected" ':''; ?> value="left">Left</option>
        	<option <?php echo ($_GET['float'] == 'Right')?'selected="selected" ':''; ?> value="right">Right</option>
        	<option <?php echo ($_GET['float'] == 'None')?'selected="selected" ':''; ?> value="none">None</option>
        </select>
		<label for="img_margin">Image margin</label>
        <input type="text" id="img_margin_top" placeholder="top" value="<?php echo $_GET['marginTop']; ?>" data-style="margin-top" />
        <input type="text" id="img_margin_left" placeholder="left" value="<?php echo $_GET['marginLeft']; ?>" data-style="margin-left" />
        <input type="text" id="img_margin_right" placeholder="right" value="<?php echo $_GET['marginRight']; ?>" data-style="margin-right" />
        <input type="text" id="img_margin_bottom" placeholder="bottom" value="<?php echo $_GET['marginBottom']; ?>" data-style="margin-bottom" />
    </div>
    <div class="lp_editor_row">
		<label for="img_clear"><input type="checkbox" id="img_clear" value="1" /> Add clear fix </label>
    </div>    
    <div class="lp_editor_row">
        <label for="img_border">Image border</label>
        <select id="img_border_width" data-style="border-width">
        	<option value="0">Select border width</option>
        	<option <?php echo ($_GET['borderWidth'] === '0')?'selected="selected" ':''; ?> value="0">0</option>
        	<option <?php echo ($_GET['borderWidth'] == '1ox')?'selected="selected" ':''; ?> value="1px">1px</option>
        	<option <?php echo ($_GET['borderWidth'] == '2px')?'selected="selected" ':''; ?> value="2px">2px</option>
        	<option <?php echo ($_GET['borderWidth'] == '3px')?'selected="selected" ':''; ?> value="3px">3px</option>
        	<option <?php echo ($_GET['borderWidth'] == '4px')?'selected="selected" ':''; ?> value="4px">4px</option>
        	<option <?php echo ($_GET['borderWidth'] == '5px')?'selected="selected" ':''; ?> value="5px">5px</option>
        	<option <?php echo ($_GET['borderWidth'] == '10px')?'selected="selected" ':''; ?> value="10px">10px</option>
        	<option <?php echo ($_GET['borderWidth'] == '15px')?'selected="selected" ':''; ?> value="15px">15px</option>
        </select>
        <select id="img_border_style" data-style="border-style">
        	<option value="0">Select border style</option>
        	<option <?php echo ($_GET['borderStyle'] == 'solid')?'selected="selected" ':''; ?> value="solid">solid</option>
        	<option <?php echo ($_GET['borderStyle'] == 'dashed')?'selected="selected" ':''; ?> value="dashed">dashed</option>
        	<option <?php echo ($_GET['borderStyle'] == 'dotted')?'selected="selected" ':''; ?> value="dotted">dotted</option>
        	<option <?php echo ($_GET['borderStyle'] == 'double')?'selected="selected" ':''; ?> value="double">double</option>
        	<option <?php echo ($_GET['borderStyle'] == 'groove')?'selected="selected" ':''; ?> value="groove">groove</option>
        	<option <?php echo ($_GET['borderStyle'] == 'inset')?'selected="selected" ':''; ?> value="inset">inset</option>
        	<option <?php echo ($_GET['borderStyle'] == 'outset')?'selected="selected" ':''; ?> value="outset">outset</option>
        	<option <?php echo ($_GET['borderStyle'] == 'ridge')?'selected="selected" ':''; ?> value="ridge">ridge</option>
        </select>
        <label for="colorPicker">Border color</label>
        <div id="colorSelector"><div style="background-color: <?php echo $_GET['borderColor']; ?>;"></div></div>
        <input type="text" id="colorPicker" value="<?php echo $_GET['borderColor']; ?>" />
        <div class="clear"></div>        
    </div> 
    <div class="lp_editor_row">
		<label for="img_width">Link image</label>
        <input type="url" id="img_link" value="<?php echo ($_GET['link'] != 'undefined')?$_GET['link']:''; ?>" />
    </div>
    <div class="lp_editor_row">
        <input type="button" id="closeEditor" onclick="edit('off');" value="I'm done here" />
    </div>
</div>
<script>
$('#colorPicker').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	},
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},	
	onChange: function (hsb, hex, rgb) {
		$('.lp_focusin,#colorPicker').css('color', '#' + hex);
		$('#<?php echo $_GET['id']; ?>').css('borderColor', '#' + hex);
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
	onChange: function (hsb, hex, rgb) {
		$('#<?php echo $_GET['id']; ?>').css('borderColor', '#' + hex);
		$('#colorSelector div').css('backgroundColor', '#' + hex);
		$('#colorPicker').val(hex);
	}
});
$('#upload_img').uploadify({
    'swf'      : 'images/uploadify.swf',
	'uploader' : 'includes/lib/uploadify.php',
	'fileObjName' : 'image_field',
	'width'    : '130',
    'formData' : {'width' : '<?php echo $_GET['width']; ?>', 'reflection' : 1},	
	'preventCaching' : false,
	'buttonText' : 'Select an image...',
	'fileSizeLimit' : '2MB',
	'fileTypeDesc' : 'Image Files',
	'fileTypeExts' : '*.gif; *.jpg; *.jpeg; *.png',
	'onUploadSuccess' : function(file, data, response) {
		$('#<?php echo $_GET['id']; ?>').attr('src', data);
	}
	
});
$('#img_width').focusout(function() {
	$('#<?php echo $_GET['id']; ?>').attr('width', $(this).val()).css('width',$(this).val());
});
$('#img_height').focusout(function() {
	$('#<?php echo $_GET['id']; ?>').attr('height', $(this).val()).css('height',$(this).val());
});
$('#img_title').focusout(function() {
	$('#<?php echo $_GET['id']; ?>').attr('title', $(this).val());
});
$('#img_alt').focusout(function() {
	$('#<?php echo $_GET['id']; ?>').attr('alt', $(this).val());
});
$('select').change(function() {
	$('#<?php echo $_GET['id']; ?>').css($(this).attr('data-style'), $(this).val());
});
$('#img_margin_top,#img_margin_left,#img_margin_right,#img_margin_bottom').focusout(function() {
	$('#<?php echo $_GET['id']; ?>').css($(this).attr('data-style'), $(this).val());
});
$('#img_clear').click(function() {
    if (this.checked) {
		$('#<?php echo $_GET['id']; ?>').after('<br class="lp_clear" />');
    } else {
		$('#<?php echo $_GET['id']; ?>').next('.lp_clear').remove();
	}
});
$('#img_link').focusout(function() {
	var urlReg = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
	if(urlReg.test($(this).val()))	
	<?php echo ($_GET['link'] != 'undefined')?"$('#".$_GET['id']."').parent().attr('href', $(this).val());":"$('#".$_GET['id']."').wrap('<a href=\"'+$(this).val()+'\" />');"; ?>
	else
	alert('Please enter a valid url');
});

</script>
