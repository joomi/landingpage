jQuery(document).ready(function($) {
	
    $(".regFirst").click(function(){
		$('#return').val($(this).attr('data-return'));
		$('#regModal').modal({
		//	remote: base_url+'http://127.0.0.1/landingpage/landingpage.git/index.php/auth/create_user'
		})		
	});
	
    $(".dropdown-toggle").click(function(){
		$(this).next().toggle();
	});
	
	$('form#join').validate({
		rules: {
			full_name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true
			},
			password_confirm: {
				required: true,
				equalTo: "#regpassword"
			}
		},
		submitHandler: function(form) {
			$('.loadingAjax').show();
			$('#submitBtn').attr('disabled', true);
			$.ajax({
				url: base_url + 'index.php/auth/join',
				data: 'full_name=' + $('#full_name').val() + '&email=' + $('#email').val() + '&password=' + $('#regpassword').val() + '&password_confirm=' + $('#password_confirm').val(),
				type:'POST',
				success: function(data){
					$('.loadingAjax').hide();
					if(data){
						$('.ajaxMessage').show().html(data);
						$('#submitBtn').attr('disabled', false);
					} else {
						window.location.href=$('#return').val();	
					}
				}
			});
		}				
	});
	
});
