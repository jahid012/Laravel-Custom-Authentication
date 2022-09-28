
	jQuery('#registeraccountform').submit(function(e){
		e.preventDefault();
		jQuery('.field_error').html('');
		jQuery.ajax({
			url: "registration_process",
			data:jQuery('#registeraccountform').serialize(),
			type: 'post',
			success: function(result){
				if(result.status=='error'){
					jQuery.each(result.error, function(key, val){
						jQuery('#'+key+'_error').html(val[0]);
					})
				}
				if(result.status=='success'){
					jQuery('#registeraccountform')[0].reset();
					jQuery('#registration_alert').html(result.msg);
				}
			}

		})
	})

	jQuery('#login-form').submit(function(e){
		e.preventDefault();
		jQuery('#loginmsg').html('');
		jQuery.ajax({
			url: "login_process",
			data:jQuery('#login-form').serialize(),
			type: 'post',
			success: function(result){
				if(result.status=='error'){
						jQuery('#loginmsg').html(result.msg);
					
				}
				if(result.status=='success'){
					
					window.location.href ="dashboard"
				}
			}

		})
	})