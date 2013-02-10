<div class="lp_panel_wrapper">
    <span class="lp_ctrl_title">Add a new image</span>
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
        <input type="button" id="closeEditor" onclick="edit('off');" value="I'm done here" />
    </div>
</div>
<script>
var width = <?php echo $_GET['width']; ?>;
var height = <?php echo $_GET['height']; ?>;
$('#colorPicker').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	},
	onChange: function (hsb, hex, rgb) {
		$('.lp_focusin,#colorPicker').css('color', '#' + hex);
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
		$('.lp_focusin,#colorPicker').css('color', '#' + hex);
		$('#colorSelector div').css('backgroundColor', '#' + hex);
		$('#colorPicker').val(hex);
	}
});
$('#upload_img').uploadify({
    'swf'      : 'images/uploadify.swf',
	'uploader' : 'includes/lib/uploadify.php',
	'width'    : '<?php echo $_GET['width']; ?>',
	'preventCaching' : false,
	'buttonText' : 'Select an image...',
	'fileSizeLimit' : '2MB',
	'fileTypeDesc' : 'Image Files',
	'fileTypeExts' : '*.gif; *.jpg; *.jpeg; *.png',
	'onUploadComplete' : function(file) {
			alert('The file ' + file.name + ' finished processing.');
       	}
});
</script>
