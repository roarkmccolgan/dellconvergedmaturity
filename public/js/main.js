var myPlayer = false;

if(window.videojs){
	videojs("iview_video").ready(function(){
		myPlayer = this;
		root = location.protocol + '//' + location.host;
		this.on("ended", function(){
			setTimeout(function(){
				window.location = root;
			}, 3000);
		});
	});
}
/* ==========================================================================
   Author: XHTMLmaster.com
   ========================================================================== */
$(function() {
	$.cookieBar();
	$('label.checkbox').click(function(){
		if($('input:checked', this).length) {
			$(this).addClass('checked');
		}
		else {
			$(this).removeClass('checked');
		}	
	});
	
	$('#form-email-report').submit(function() {
		if (validate(this)) {
			$('#submitbut').html('<i class="fa fa-refresh fa-spin"></i> '+$('#loadingtext').text()).attr('disabled',true);
			return true;
		}
		else 
		return false
  });
	$('.pop-up').click(function() {
		url = $(this).attr('href');
		window.open(url, '_blank', 'scrollbars,resizable,height=600,width=600');
		return false;
	});
	$('.historyback').click(function() {
		window.history.back();
	});
	
	if(!Modernizr.input.placeholder){

		$('[placeholder]').focus(function() {
		  var input = $(this);
		  if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		  }
		}).blur(function() {
		  var input = $(this);
		  if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		  }
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  $(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
			  input.val('');
			}
		  })
		});
	}
});
$('.btnoption').click(function(){
	var self = $(this);
	$(window).off('beforeunload');
	$('.btnoption').each(function(){
		$(this).removeClass('checked')
	});
	self.addClass('cheked');
});
$('.btn-q').click(function(){
	$(window).off('beforeunload');
});
$('button.info').click(function(){
	$(window).off('beforeunload');
});
$('button:submit').click(function(){
	$(window).off('beforeunload');
});
$('input.chq').each(function(){
	var self = $(this),
	icon = 'check',
	label = self.next(),
	label_text = label.text();
	input_type = self.attr( "type" );
	/*if(input_type == 'radio'){
		icon = 'circle';
	}*/
	var facon = $('<i class="fa fa-'+icon+'"></i>');
	facon.click(function() {
	   self.iCheck('toggle');
	   return false;
	});
	label.remove();
	self.iCheck({
		checkboxClass: 'icheckbox_line',
		radioClass: 'iradio_line',
		insert: facon
	});
	facon.after('<span>' + label_text + '</span>');
});
//$('input.chq').iCheck();
if ($("#trigger_id").length > 0) {
    $("#trigger_id").leanModal().trigger('click');
}



function validate(form){
	var flag = 1;
	
	$('*', form).removeClass('error');

	$('.form-group .req', form).each(function(i){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var web = /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/;
		if ($(this).hasClass('email') && reg.test($(this).val()) == false) {
			$(this).closest('.form-group').addClass('error has-error');
			flag = 0;
		} else if ($(this).hasClass('sel') && $(this).find(":selected").text()=='Please select') {
			$(this).closest('.form-group').addClass('error has-error');
			flag = 0;
		} else {
			if ($.trim($(this).val())=="") {
				$(this).closest('.form-group').addClass('error has-error');
				flag = 0;
			}
		}
	});
	
	$('.checkbox .req', form).each(function(){
		if ($(this).is(':checked')) {
			
		} else {
			$(this).closest('.form-group').addClass('error has-error');
			flag = 0;
		}
	});

	if(flag) {
		return true;		
	}
	else {     
		return false;
	}
	
}