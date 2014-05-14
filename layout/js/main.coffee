container = undefined;
size = ()-> 
	h = $(window).height()
	$('#title').height(h).css('line-height',h+'px')
	$('#portfolio.list .item, #portfolio.list .item .over').height($('#portfolio.list .item').width())
	$('#portfolio.list .item .over').css('line-height',$('#portfolio.list .item').width()+'px')

getCaptcha = ()->
	$.get '/include/capcha.php', (data)->
		setCaptcha data
setCaptcha = (code)->
	console.log code
	$('input[name=captcha_code]').val(code)
	$('.captcha_img').attr 'src', '/bitrix/tools/captcha.php?captcha_sid='+code

$(document).ready ->

	$('#portfolio.list .item:first').on $.support.transition.end, ()->
		if !container
			container = $('#portfolio.list').isotope
    			itemSelector: '.item'
    			filter : $('#filter').data('code')
		else
			container.isotope 'layout'

	size()

	$('.sections a').click (e)->
		code = $(this).data 'code'
		href = $(this).attr('href')
		$('.sections a').removeClass 'active'
		$(this).addClass 'active'
		window.history.pushState(href, '', href)
		container.isotope
			filter : code
		e.preventDefault()

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
	$('#toolbar .order, #footer .big-button, .big-button.order').on 'click', (e)->
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
			data.append('theme',$('#theme').val())
			data.append('name',$('#name').val())
			data.append('group_id',5)
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
			
	$('#Order').on 'hidden.bs.modal', ()->
		$('#Order form').each ()->
			$(this).trigger('reset').addClass('hidden')
		$('#theme, #name').val('')
		getCaptcha()


	$('input[type=file]').on 'change', ()->
		$(this).parent().find('.filename').text($(this).val().replace(/.+[\\\/]/, ""))

		

x = undefined
$(window).resize ->
	clearTimeout(x)
	x = setTimeout(size, 300)