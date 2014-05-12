
size = ()-> 
	h = $(window).height()
	console.log(h)
	$('#title').height(h).css('line-height',h+'px')
getCaptcha = ()->
	$.get '/include/capcha.php', (data)->
		setCaptcha data
setCaptcha = (code)->
	console.log code
	$('input[name=captcha_code]').val(code)
	$('.captcha_img').attr 'src', '/bitrix/tools/captcha.php?captcha_sid='+code

$(document).ready ->
	size()
	$(window).scroll ()->
		if($(window).scrollTop()>0)
			$('#toolbar:not(.inner)').addClass 'fixed'
		else
			$('#toolbar:not(.inner)').removeClass 'fixed'
	$('#title .big-button').click ()->
		$("html, body").animate
			 scrollTop: $('#title').height()-55
			 , 300
		return false
	$('#toolbar .order, #footer .big-button').on 'click', (e)->
		$('#Order').modal()
		e.preventDefault()
	
	$('a.file').on 'click', ()->
		$(this).parent().find('input[type=file]').trigger('click')

	$('#theme').on 'change', ()->
		
		$('#Order form').addClass('hidden')
		id = $('#theme option:selected').data('form')
		$('#Order form.'+id).removeClass('hidden')
	$('input[name=phone]').mask('+7 999 999 99 99')
	$('#Order form input[type=submit]').click (e)->
		$('#name').removeClass('parsley-error')
		if($('#name').val().length==0)
			$('#name').addClass('parsley-error')
	$('#Order form').submit (e)->
		e.preventDefault()
		$('#name, input[name=captcha_word]').removeClass('parsley-error')
		if($(this).parsley().isValid() && $('#name').val().length>0)
			data = new FormData(this)
			form = $(this)
			data.prepend('theme',$('#theme').val())
			data.prepend('name',$('#name').val())
			data.prepend('group_id',5)
			$.ajax
				type:        'POST',
				url:         '/form.php',
				data:        data,
				cache:       false,
				contentType: false,
				processData: false,
				mimeType:    'multipart/form-data',
				success: (data)->
					data = JSON.parse(data)
					if(data.status=='error')
						getCaptcha()
						form.find('input[name=captcha_word]').addClass('parsley-error').val('')
					else
						$('#Order .form').addClass('hidden')
						$('#Order .success').removeClass('hidden')
						

		else
			$('#name').addClass('parsley-error')
			


	$('input[type=file]').on 'change', ()->
		$(this).parent().find('.filename').text($(this).val().replace(/.+[\\\/]/, ""))

		

x = undefined
$(window).resize ->
	x = setTimeout(size, 300)