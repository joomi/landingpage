jQuery(document).ready(function($) {
	$("form.lp_validate .submit").click( function(){
		var errors = 0;
		var inputs = '';
		$("form.lp_validate input").each( function(){
			if($(this).attr('type') == 'email' && !validateEmail($(this).val())){
				errors++;
				$(this).addClass('lp_inp_err');
			} else {
				$(this).removeClass('lp_inp_err');
			}
			if(!($(this).attr('type') == 'checkbox' && !$(this).is(':checked')))
			inputs = inputs + $(this).attr('name') + '=' + $(this).val() + '&';
		}); 
		inputs = inputs.substring(0, inputs.length - 1);
		if(errors == 0){
			$('#lp_submit').attr('disabled', true).after('<img width="15" height="15" style="width:15px !important; height:15px !important;" src="http://127.0.0.1/landingpage/landingpage.git/images/loader.gif">');
			$.ajax({
				url:'http://127.0.0.1/landingpage/landingpage.git/index.php/form',
				type:'POST',
				data:inputs,
				success: function(data){
					if(data == '1'){
						$("form.lp_validate").before('<div class="alert alert-success">Your Message has been sent successfully</div>');
						$("form.lp_validate").remove();
					}
				}
			});	
		}
	});    
});

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
