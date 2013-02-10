<div class="lp_panel_wrapper">
    <span class="lp_ctrl_title">Text Editor</span>
    <div class="lp_editor_row">
        <a href="#" class="alineLeft lp_icon"></a>
        <a href="#" class="alineCenter lp_icon"></a>
        <a href="#" class="alineRight lp_icon"></a>
        <div class="clear"></div>
    </div>
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

$('.bold').click(function() {
   $(this).hide();
   $('.normal').show(); 
	var st = Kolich.Selector.getSelected();
	if(st!=''){
		var newString = $('.lp_focusin').html().replace(st, '<span style="font-weight:bold">'+st+'</span>');
		$('.lp_focusin').html(newString);
	} else {
	   $('.lp_focusin').css('font-weight', 'bold');	
	}
});
$('.normal').click(function() {
	var st = Kolich.Selector.getSelected();
	if(st!=''){
		var newString = $('.lp_focusin').html().replace(st, '<span style="font-weight:normal">'+st+'</span>');
		$('.lp_focusin').html(newString);
	} else {
	   $('.lp_focusin').css('font-weight', 'normal');	
	}
   $(this).hide();
   $('.bold').show(); 
});
$('.italic').click(function() {
   $('.lp_focusin').css('font-style', 'italic'); 
   $(this).hide();
   $('.noStyle').show(); 
});
$('.noStyle').click(function() {
   $('.lp_focusin').css('font-style', 'normal'); 
   $(this).hide();
   $('.italic').show(); 
});
$('.underline').click(function() {
   $('.lp_focusin').css('text-decoration', 'underline'); 
   $(this).hide();
   $('.noDecor').show(); 
});
$('.noDecor').click(function() {
   $('.lp_focusin').css('text-decoration', 'none'); 
   $(this).hide();
   $('.underline').show(); 
});
$('.alineLeft').click(function() {
   $('.lp_focusin').css('text-align', 'left'); 
});
$('.alineCenter').click(function() {
   $('.lp_focusin').css('text-align', 'center'); 
});
$('.alineRight').click(function() {
   $('.lp_focusin').css('text-align', 'right'); 
});
$('#font_family').change(function(e) {
    $('.lp_focusin').css('font-family', $(this).val()); 
});
$('#font_size').change(function(e) {
    $('.lp_focusin').css('font-size', $(this).val()); 
});
$('#clearFormating').click(function(e) {
	$(".lp_focusin").html( $(".lp_focusin").text() ).attr('style', '');
});


</script>
