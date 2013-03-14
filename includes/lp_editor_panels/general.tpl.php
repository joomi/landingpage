<div class="lp_panel_wrapper">
    <div class="lp_editor_row">
		<label for="title">Landing page title</label>
        <input type="text" id="title" value="<?php echo $_GET['title']; ?>" />
	</div>
    <div class="lp_editor_row">
		<label for="url">Prefered page url</label>
        <input type="text" id="url" value="<?php //echo $_GET['url']; ?>" />
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


</script>
