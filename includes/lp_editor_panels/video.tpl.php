<div class="lp_panel_wrapper">
    <div class="lp_editor_row">
		<label for="video_code">Paste your embed code here</label>
        <textarea id="video_code" rows="3" style="width:92%"><iframe width="<?php echo $_GET['width'];?>" height="<?php echo $_GET['height'];?>" src="<?php echo $_GET['src'];?>" frameborder="0" allowfullscreen=""></iframe></textarea>
    </div>
    <div class="lp_editor_row half left">
        <label for="video_width">Force video width</label>
		<input type="text" id="video_width" value="<?php echo $_GET['width'];?>" />
    </div>
    <div class="lp_editor_row half left">
        <label for="video_height">Force video height</label>
		<input type="text" id="video_height" value="<?php echo $_GET['height'];?>" />
    </div>
    <div class="lp_editor_row cleared">
		<label for="">Video demo</label>
        <div id="demo"><iframe width="<?php echo $_GET['width'];?>" height="<?php echo $_GET['height'];?>" src="<?php echo $_GET['src'];?>" frameborder="0" allowfullscreen=""></iframe></div>
    </div>
    
</div>
<script>
$('#myModalLabel').text('EDITOR PANEL - Video embed');
$('#video_code').focusout(function(e) {
    $('#lp_video_wrapper,#demo').html($(this).val());
});
$('#video_width').focusout(function(e) {
    $('iframe').attr('width', $(this).val());
});
$('#video_height').focusout(function(e) {
    $('iframe').attr('height', $(this).val());
});


</script>
