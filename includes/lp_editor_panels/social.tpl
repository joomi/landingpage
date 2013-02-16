<div class="lp_panel_wrapper">
    <div class="lp_editor_row lp_checkbox_list">
		<label class="lp_Facebook" for="Facebook"><input type="checkbox" class="check_social" id="Facebook" />Facebook</label>
        <input type="url" placeholder="Facebook url" id="Facebook_url" style="display:none" />
		<label class="lp_Youtube" for="Youtube"><input type="checkbox" class="check_social" id="Youtube" />Youtube</label>
        <input type="url" placeholder="Youtube url" id="Youtube_url" style="display:none" />
		<label class="lp_Blogger" for="Blogger"><input type="checkbox" class="check_social" id="Blogger" />Blogger</label>
        <input type="url" placeholder="Blogger url" id="Blogger_url" style="display:none" />
		<label class="lp_Twitter" for="Twitter"><input type="checkbox" class="check_social" id="Twitter" />Twitter</label>
        <input type="url" placeholder="Twitter url" id="Twitter_url" style="display:none" />
		<label class="lp_Yahoo" for="Yahoo"><input type="checkbox" class="check_social" id="Yahoo" />Yahoo</label>
        <input type="url" placeholder="Yahoo url" id="Yahoo_url" style="display:none" />
		<label class="lp_Linkedin" for="Linkedin"><input type="checkbox" class="check_social" id="Linkedin" />Linkedin</label>
        <input type="url" placeholder="Linkedin url" id="Linkedin_url" style="display:none" />
		<label class="lp_Flicker" for="Flicker"><input type="checkbox" class="check_social" id="Flicker" />Flicker</label>
        <input type="url" placeholder="Flicker url" id="Flicker_url" style="display:none" />
		<label class="lp_Myspace" for="Myspace"><input type="checkbox" class="check_social" id="Myspace" />Myspace</label>
        <input type="url" placeholder="Myspace url" id="Myspace_url" style="display:none" />
		<label class="lp_Wordpress" for="Wordpress"><input type="checkbox" class="check_social" id="Wordpress" />Wordpress</label>
        <input type="url" placeholder="Wordpress url" id="Wordpress_url" style="display:none" />
		<label class="lp_Delicious" for="Delicious"><input type="checkbox" class="check_social" id="Delicious" />Delicious</label>
        <input type="url" placeholder="Delicious url" id="Delicious_url" style="display:none" />
		<label class="lp_Bebo" for="Bebo"><input type="checkbox" class="check_social" id="Bebo" />Bebo</label>
        <input type="url" placeholder="Bebo url" id="Bebo_url" style="display:none" />
		<label class="lp_Lastfm" for="Lastfm"><input type="checkbox" class="check_social" id="Lastfm" />Lastfm</label>
        <input type="url" placeholder="Lastfm url" id="Lastfm_url" style="display:none" />
		<label class="lp_Digg" for="Digg"><input type="checkbox" class="check_social" id="Digg" />Digg</label>
        <input type="url" placeholder="Digg url" id="Digg_url" style="display:none" />
		<label class="lp_Skype" for="Skype"><input type="checkbox" class="check_social" id="Skype" />Skype</label>
        <input type="url" placeholder="Skype url" id="Skype_url" style="display:none" />
		<label class="lp_Evenote" for="Evenote"><input type="checkbox" class="check_social" id="Evenote" />Evenote</label>
        <input type="url" placeholder="Evenote url" id="Evenote_url" style="display:none" />
		<label class="lp_Googlemap" for="Googlemap"><input type="checkbox" class="check_social" id="Googlemap" />Googlemap</label>
        <input type="url" placeholder="Googlemap url" id="Googlemap_url" style="display:none" />
		<label class="lp_Picasa" for="Picasa"><input type="checkbox" class="check_social" id="Picasa" />Picasa</label>
        <input type="url" placeholder="Picasa url" id="Picasa_url" style="display:none" />
        <div class="clear"></div>
    </div>
    <div class="lp_editor_row">
        <button id="clearAllSocial" class="btn btn-danger">Remove all buttons</button>
    </div>
</div>
<script>
$('#myModalLabel').text('Editor pannel - Social networks');

$('.check_social').click(function() {
	var name = $(this).attr('id');
	var url = $(this).parent().next().val(); 
    if (this.checked) {
        $('.lp_social_container').append('<a href="'+url+'" contenteditable="false" class="lp_footerSocialIcon def_'+name+'" rel="'+name+'"></a>');
		$(this).parent().next().fadeIn(); 
		$(this).parent().addClass('active');
    } else {
        $('.lp_footerSocialIcon[rel='+name+']').remove();
		$(this).parent().next().fadeOut();
		$(this).parent().removeClass('active');
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
