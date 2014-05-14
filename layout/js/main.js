// Generated by CoffeeScript 1.6.2
(function() {
  var getCaptcha, setCaptcha, size, x;

  size = function() {
    var h;

    h = $(window).height();
    console.log(h);
    return $('#title').height(h).css('line-height', h + 'px');
  };

  getCaptcha = function() {
    return $.get('/include/capcha.php', function(data) {
      return setCaptcha(data);
    });
  };

  setCaptcha = function(code) {
    console.log(code);
    $('input[name=captcha_code]').val(code);
    return $('.captcha_img').attr('src', '/bitrix/tools/captcha.php?captcha_sid=' + code);
  };

  $(document).ready(function() {
    size();
    $(window).scroll(function() {
      if ($(window).scrollTop() > 0) {
        return $('#toolbar:not(.inner)').addClass('fixed');
      } else {
        return $('#toolbar:not(.inner)').removeClass('fixed');
      }
    });
    $('#title .big-button').click(function() {
      $("html, body").animate({
        scrollTop: $('#title').height() - 55
      }, 300);
      return false;
    });
    $('#toolbar .order, #footer .big-button, .big-button.order').on('click', function(e) {
      $('#Order').modal();
      return e.preventDefault();
    });
    $('a.file').on('click', function() {
      return $(this).parent().find('input[type=file]').trigger('click');
    });
    $('#theme').on('change', function() {
      var id;

      $('#Order form').addClass('hidden');
      id = $('#theme option:selected').data('form');
      return $('#Order form.' + id).removeClass('hidden');
    });
    $('input[name=phone]').mask('+7 999 999 99 99');
    $('#Order form input[type=submit]').click(function(e) {
      $('#name').removeClass('parsley-error');
      if ($('#name').val().length === 0) {
        return $('#name').addClass('parsley-error');
      }
    });
    $('#Order form').submit(function(e) {
      var data, form;

      e.preventDefault();
      $('#name, input[name=captcha_word]').removeClass('parsley-error');
      if ($(this).parsley().isValid() && $('#name').val().length > 0) {
        data = new FormData(this);
        form = $(this);
        data.append('theme', $('#theme').val());
        data.append('name', $('#name').val());
        data.append('group_id', 5);
        return $.ajax({
          type: 'POST',
          url: '/form.php',
          data: data,
          cache: false,
          contentType: false,
          processData: false,
          mimeType: 'multipart/form-data',
          success: function(data) {
            data = JSON.parse(data);
            if (data.status === 'error') {
              getCaptcha();
              return form.find('input[name=captcha_word]').addClass('parsley-error').val('');
            } else {
              $('#Order .form').addClass('hidden');
              return $('#Order .success').removeClass('hidden');
            }
          }
        });
      } else {
        return $('#name').addClass('parsley-error');
      }
    });
    $('#Order').on('hidden.bs.modal', function() {
      $('#Order form').each(function() {
        return $(this).trigger('reset').addClass('hidden');
      });
      $('#theme, #name').val('');
      return getCaptcha();
    });
    return $('input[type=file]').on('change', function() {
      return $(this).parent().find('.filename').text($(this).val().replace(/.+[\\\/]/, ""));
    });
  });

  x = void 0;

  $(window).resize(function() {
    return x = setTimeout(size, 300);
  });

}).call(this);
