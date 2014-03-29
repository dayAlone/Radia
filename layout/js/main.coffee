
size = ()-> 
	h = $(window).height()
	console.log(h)
	$('#title').height(h).css('line-height',h+'px')

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
	$('#Order').modal()

		

x = undefined
$(window).resize ->
	x = setTimeout(size, 300)