<div class="lp_panel_wrapper">
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
            <input style="font-size:14px;" type="text" class="span2" value="#000000">
            <span class="add-on"><i></i></span>
        </div>
        <button id="clearFormating" class="btn btn-inverse" style="float:left; margin-left:19px;"><i class="icon-leaf"></i> Clear formating </button>
        <div class="clear"></div>
    </div>
</div>
<script>
$('#myModalLabel').text('EDITOR PANEL - Text');

$('#cp3').colorpicker().on('changeColor', function(ev){
	$('.lp_focusin').css('color', ev.color.toHex());
	$('input', this).val(ev.color.toHex());
});
$('#cp3 input').focusout( function(){
	$('.lp_focusin').css('color', $(this).val());
});
$('.bold').click(function(e) {
	e.preventDefault();
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
$('.normal').click(function(e) {
	e.preventDefault();	
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
$('.italic').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('font-style', 'italic'); 
   $(this).hide();
   $('.noStyle').show(); 
});
$('.noStyle').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('font-style', 'normal'); 
   $(this).hide();
   $('.italic').show(); 
});
$('.underline').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('text-decoration', 'underline'); 
   $(this).hide();
   $('.noDecor').show(); 
});
$('.noDecor').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('text-decoration', 'none'); 
   $(this).hide();
   $('.underline').show(); 
});
$('.alineLeft').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('text-align', 'left'); 
});
$('.alineCenter').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('text-align', 'center'); 
});
$('.alineRight').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('text-align', 'right'); 
});
$('.alignJust').click(function(e) {
	e.preventDefault();
   $('.lp_focusin').css('text-align', 'justify'); 
});
$('#font_family').change(function(e) {
    $('.lp_focusin').css('font-family', $(this).val()); 
});
$('#font_size').slider({ 
	max:  25,
	min:  1,
	step: 1,
	value: 10,
	slide: function( event, ui ) {
    	$('.lp_focusin').css('font-size', (ui.value / 10) + 'em'); 
	}
});
$('#clearFormating').click(function(e) {
	e.preventDefault();
	$(".lp_focusin").html( $(".lp_focusin").text() ).attr('style', '');
});


</script>
