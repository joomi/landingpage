<div class="lp_panel_wrapper">
    <div class="lp_editor_row">
		<label for="lp_page_title">Landing page title</label>
        <input type="text" id="lp_page_title" value="<?php echo $_GET['title']; ?>" />
	</div>
    <div class="lp_editor_row">
		<label for="url">Page url</label>
        <input type="text" id="url" readonly="readonly" value="<?php //echo $_GET['url']; ?>" />
	</div>
    <div class="lp_editor_row">
		<label for="url">Page direction</label>
        <select id="lp_direction">
        	<option value="ltr" selected="selected">Left to right</option>
        	<option value="rtl">Right to left</option>
        </select>
	</div>
</div>
<script>
$('#myModalLabel').text('Editor pannel - General settings');
$('#lp_page_title').focusout( function(){
	$('title').text($(this).val());
});
$('#lp_direction').change(function() {
	var href = $('#base_css').attr('href');
	var val = $(this).val();
	if(val == 'rtl')
    $('#base_css').attr('href', href.replace('default.css', 'default_rtl.css')); 
	else
    $('#base_css').attr('href', href.replace('default_rtl.css', 'default.css')); 
});


</script>
