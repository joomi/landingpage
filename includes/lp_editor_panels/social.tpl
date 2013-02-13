<div class="lp_panel_wrapper">
    <div class="lp_editor_row lp_checkbox_list">
		<label for="Facebook"><input type="checkbox" class="check_social" id="Facebook" />Facebook</label>
        <input type="url" placeholder="Facebook url" id="Facebook_url" style="display:none" />
		<label for="Youtube"><input type="checkbox" class="check_social" id="Youtube" />Youtube</label>
        <input type="url" placeholder="Youtube url" id="Youtube_url" style="display:none" />
		<label for="Blogger"><input type="checkbox" class="check_social" id="Blogger" />Blogger</label>
        <input type="url" placeholder="Blogger url" id="Blogger_url" style="display:none" />
		<label for="Twitter"><input type="checkbox" class="check_social" id="Twitter" />Twitter</label>
        <input type="url" placeholder="Twitter url" id="Twitter_url" style="display:none" />
		<label for="Yahoo"><input type="checkbox" class="check_social" id="Yahoo" />Yahoo</label>
        <input type="url" placeholder="Yahoo url" id="Yahoo_url" style="display:none" />
		<label for="Google"><input type="checkbox" class="check_social" id="Google" />Google</label>
        <input type="url" placeholder="Google url" id="Google_url" style="display:none" />
		<label for="Linkedin"><input type="checkbox" class="check_social" id="Linkedin" />Linkedin</label>
        <input type="url" placeholder="Linkedin url" id="Linkedin_url" style="display:none" />
		<label for="Flicker"><input type="checkbox" class="check_social" id="Flicker" />Flicker</label>
        <input type="url" placeholder="Flicker url" id="Flicker_url" style="display:none" />
		<label for="Myspace"><input type="checkbox" class="check_social" id="Myspace" />Myspace</label>
        <input type="url" placeholder="Myspace url" id="Myspace_url" style="display:none" />
        <div class="clear"></div>
    </div>
    <div class="lp_editor_row">
        <input type="button" id="clearAllSocial" value="Remove all buttons">
    </div>
    
    <div class="lp_editor_row">
        <input type="button" id="closeEditor" onclick="edit('off');" value="I'm done here" />
    </div>
</div>
<script>
$('#lp_editor h6').text('Editor pannel - Social links');

$('.check_social').click(function() {
	var name = $(this).attr('id');
	var url = $(this).parent().next().val(); 
    if (this.checked) {
        $('.lp_social_container').append('<a href="'+url+'" contenteditable="false" class="lp_footerSocialIcon def_'+name+'" rel="'+name+'"></a>');
		$(this).parent().next().fadeIn(); 
    } else {
        $('.lp_footerSocialIcon[rel='+name+']').remove();
		$(this).parent().next().fadeOut();
	}
});
$('input[type=url]').focusout(function(e) {
    var name = $(this).prev().attr('for');
	var urlReg = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
	if(urlReg.test($(this).val()))
		$('a[rel='+name+']').attr('href', $(this).val());
	else
		alert('Please enter a valid url');
});
$('#clearAllSocial').click(function() {
	$('.lp_footerSocialIcon').remove();
	$('.lp_checkbox_list input[type=url]').fadeOut();
	$('.lp_checkbox_list input[type=checkbox]').attr('checked', false);
});
</script>
