<h6>Text Editor</h6>
<div class="lp_editor_row">
	<a href="#" class="alineLeft lp_icon"></a>
	<a href="#" class="alineCenter lp_icon"></a>
	<a href="#" class="alineRight lp_icon"></a>
    <div class="clear"></div>
</div>
<div class="lp_editor_row">
	<a href="#" class="bold lp_icon"></a>
	<a href="#" class="italic lp_icon"></a>
	<a href="#" class="underline lp_icon"></a>
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
    	<option value="8">8</option>
    	<option value="9">9</option>
    	<option value="10">10</option>
    	<option value="11">11</option>
    	<option value="12">12</option>
    	<option value="15">15</option>
    	<option value="17">17</option>
    	<option value="20">20</option>
    	<option value="24">24</option>
    	<option value="30">30</option>
    	<option value="35">35</option>
    	<option value="40">40</option>
    	<option value="50">50</option>
    	<option value="70">70</option>
    </select>
</div>
<div class="lp_editor_row">
	<label for="colorPicker">Text color</label>
	<input type="text" id="colorPicker" />
    <div id="colorSelector"><div style="background-color: rgb(59, 59, 143);"></div></div>
</div>
<div class="lp_editor_row">
	<input type="button" id="closeEditor" value="I'm done here" />
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
	}
});
</script>