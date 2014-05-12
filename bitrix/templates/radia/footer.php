	<div id="footer" class="block black bgcolor">
      <div class="container">
        <p class="highlight small">
          <?=$APPLICATION->GetDirProperty("phrase_title");?>
        </p>
        <p class="center">
          <a href="<?=$APPLICATION->GetDirProperty("phrase_link");?>" class="big-button red">
            <?=$APPLICATION->GetDirProperty("phrase_button");?>
          </a>
        </p>
        <div class="copyright center">
          <p>© 2014 RADIA Interactive</p>
          <p>
            <a href="tel:84955404458">+7 495 540-44-58</a><br/>
              <a href="mailto:hello@radia.ru">hello@radia.ru</a><br/>
            Москва, Сокольнический вал, 2А
          </p>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <?
        include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
        $cpt = new CCaptcha();
        $cpt->SetImageSize(80,47);
        $cpt->SetCodeLength(6);
        $cpt->SetCode();
        $code=$cpt->GetSID();
      ?>
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="form">
            <h1 class="title">итак,</h1>
            <input type="hidden" name="group_id" value="5">
            <div class="row">
              <div class="col-md-3">
                <label for="name">Меня зовут*</label>
              </div>
              <div class="col-md-9">
                <input type="text" id="name" name="name" placeholder="">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label for="#theme">пишу по поводу*</label>
              </div>
              <div class="col-md-9">
                <select name="theme" id="theme">
                  <option value="">Тут нужно что-нибудь выбрать</option>
                  <option value="Разработки сайта" data-form="site">
                      Разработки сайта
                  </option>
                  <option value="Разработки дизайна или креатива" data-form="design">
                      Разработки дизайна или креатива
                  </option>
                  <option value="Создания брендинга, фирменного стиля или логотипа" data-form="branding">
                      Создания брендинга, фирменного стиля или логотипа
                  </option>
                  <option value="Разработки рекламы или рекламной кампании" data-form="adv">
                      Разработки рекламы или рекламной кампании
                  </option>
                  <option value="Приглашения вашей команды в оплачиваемый тендер" data-form="tender">
                      Приглашения вашей команды в оплачиваемый тендер
                  </option>
                  <option value="Работы в вашей компании" data-form="job">
                      Работы в вашей компании
                  </option>
                </select>
              </div>
            </div>
            <form action="/" class="site hidden" data-parsley-validate>
              <h2 class="title no-bottom-padding small-bottom-margin">
                О! Да это же здорово!<br>напишите пару слов о вашем проекте.
              </h2>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">я из компании</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="company" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="phone">вот мой телефон*</label>
                </div>
                <div class="col-md-3">
                  <input type="text" name="phone" placeholder="" required>
                </div>
                <div class="col-md-2 right">
                  <label for="email">и почта*</label>
                </div>
                <div class="col-md-4">
                  <input type="email" name="email" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label for="link">хотим сделать / переделать сайт</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="link" placeholder="Укажите адресок, если есть">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label for="budget">У нас есть на это такой бюджет*</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="budget" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="brief">и даже есть бриф!</label>
                </div>
                <div class="col-md-9">
                  <a href="#" class="file">Загрузить</a>
                  <input type="file" class="hidden" name="brief">
                  <div class="filename"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="type">вообще, это сайт*</label>
                </div>
                <div class="col-md-9">
                  <select name="type" required>
                    <option value="">Тут нужно что-нибудь выбрать</option>
                    <option value="Сайт-визитка">
                      Сайт-визитка
                    </option>
                    <option value="Промо-сайт">
                      Промо-сайт
                    </option>
                    <option value="Интернет-магазин">
                      Интернет-магазин
                    </option>
                    <option value="Интернет-каталог">
                      Интернет-каталог
                    </option>
                    <option value="Корпоративный">
                      Корпоративный
                    </option>
                    <option value="Информационный сайт">
                      Информационный сайт
                    </option>
                    <option value="Корпоративный портал">
                      Корпоративный портал
                    </option>
                    <option value="Сайт гос. организации">
                      Сайт гос. организации
                    </option>
                    <option value="Лендинг">
                      Лендинг
                    </option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="description">хочу дополнить</label>
                  <div class="text">
                    Мы очень просим
                    обязательно заполнить
                    поля, отмеченные * -
                    так нам будет проще
                    общаться с вами :)
                  </div>
                </div>
                <div class="col-md-9">
                  <textarea name="description" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              <div class="row last">
                <div class="col-md-3">
                  <div class="text">
                    Ну, и чтобы закончить
                    начатое, нужно ввести
                    вот этот код
                  </div>
                </div>
                <div class="col-md-3">
                  <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_sid=<?=$code?>">
                  <input name="captcha_code" value="<?=$code?>" type="hidden">
                </div>
                <div class="col-md-3">
                  <input type="text" name="captcha_word" placeholder="Код нужно вписать сюда" required>
                </div>
                <div class="col-md-3">
                  <input type="submit" name="submit" value="Отправить">
                </div>
              </div>
            </form>
            <form action="/" class="design hidden" data-parsley-validate>
              <h2 class="title no-bottom-padding small-bottom-margin">
                Замечательно!<br>Мы любим все красивое и интересное.
              </h2>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">я из компании</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="company" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">вот мой телефон*</label>
                </div>
                <div class="col-md-3">
                  <input type="text" name="phone" placeholder="" required>
                </div>
                <div class="col-md-2 right">
                  <label for="company">и почта*</label>
                </div>
                <div class="col-md-4">
                  <input type="email" name="email" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="todo">мы хотим сделать</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="todo" placeholder="Буклет, каталог, дизайн стенда, полосу в прессу и пр.">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label for="budget">У нас есть на это такой бюджет*</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="budget" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="brief">и даже есть бриф!</label>
                </div>
                <div class="col-md-9">
                  <a href="#" class="file">Загрузить</a>
                  <input type="file" class="hidden" name="brief">
                  <div class="filename"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="description">хочу дополнить</label>
                  <div class="text">
                    Мы очень просим
                    обязательно заполнить
                    поля, отмеченные * -
                    так нам будет проще
                    общаться с вами :)
                  </div>
                </div>
                <div class="col-md-9">
                  <textarea name="description" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              <div class="row last">
                <div class="col-md-3">
                  <div class="text">
                    Ну, и чтобы закончить
                    начатое, нужно ввести
                    вот этот код
                  </div>
                </div>
                <div class="col-md-3">
                  <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_sid=<?=$code?>">
                  <input name="captcha_code" value="<?=$code?>" type="hidden">
                </div>
                <div class="col-md-3">
                  <input type="text" name="captcha_word" placeholder="Код нужно вписать сюда" required>
                </div>
                <div class="col-md-3">
                  <input type="submit" name="submit" value="Отправить">
                </div>
              </div>
            </form>
            <form action="/" class="branding hidden" data-parsley-validate>
              <h2 class="title no-bottom-padding small-bottom-margin">
                чудненько!<br>это мы умеем :)
              </h2>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">я из компании</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="company" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">вот мой телефон*</label>
                </div>
                <div class="col-md-3">
                  <input type="text" name="phone" placeholder="" required>
                </div>
                <div class="col-md-2 right">
                  <label for="company">и почта*</label>
                </div>
                <div class="col-md-4">
                  <input type="email" name="email" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="todo">мы хотим сделать</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="todo" placeholder="Фирменный стили, логотип или, может, упаковку для яхты?">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label for="budget">У нас есть на это такой бюджет*</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="budget" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="brief">и даже есть бриф!</label>
                </div>
                <div class="col-md-9">
                  <a href="#" class="file">Загрузить</a>
                  <input type="file" class="hidden" name="brief">
                  <div class="filename"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="description">хочу дополнить</label>
                  <div class="text">
                    Мы очень просим
                    обязательно заполнить
                    поля, отмеченные * -
                    так нам будет проще
                    общаться с вами :)
                  </div>
                </div>
                <div class="col-md-9">
                  <textarea name="description" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              <div class="row last">
                <div class="col-md-3">
                  <div class="text">
                    Ну, и чтобы закончить
                    начатое, нужно ввести
                    вот этот код
                  </div>
                </div>
                <div class="col-md-3">
                  <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_sid=<?=$code?>">
                  <input name="captcha_code" value="<?=$code?>" type="hidden">
                </div>
                <div class="col-md-3">
                  <input type="text" name="captcha_word" placeholder="Код нужно вписать сюда" required>
                </div>
                <div class="col-md-3">
                  <input type="submit" name="submit" value="Отправить">
                </div>
              </div>
            </form>
            <form action="/" class="adv hidden" data-parsley-validate>
              <h2 class="title no-bottom-padding small-bottom-margin">
                такое есть в нашем портфолио.<br>Если вам понравилось, то поможем.
              </h2>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">я из компании</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="company" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">вот мой телефон*</label>
                </div>
                <div class="col-md-3">
                  <input type="text" name="phone" placeholder="" required>
                </div>
                <div class="col-md-2 right">
                  <label for="company">и почта*</label>
                </div>
                <div class="col-md-4">
                  <input type="email" name="email" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="link">мы хотим сделать</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="link" placeholder="Сделать яркую рекламу в метро">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label for="budget">У нас есть на это такой бюджет*</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="budget" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="brief">и даже есть бриф!</label>
                </div>
                <div class="col-md-9">
                  <a href="#" class="file">Загрузить</a>
                  <input type="file" class="hidden" name="brief">
                  <div class="filename"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="description">хочу дополнить</label>
                  <div class="text">
                    Мы очень просим
                    обязательно заполнить
                    поля, отмеченные * -
                    так нам будет проще
                    общаться с вами :)
                  </div>
                </div>
                <div class="col-md-9">
                  <textarea name="description" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              <div class="row last">
                <div class="col-md-3">
                  <div class="text">
                    Ну, и чтобы закончить
                    начатое, нужно ввести
                    вот этот код
                  </div>
                </div>
                <div class="col-md-3">
                  <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_sid=<?=$code?>">
                  <input name="captcha_code" value="<?=$code?>" type="hidden">
                </div>
                <div class="col-md-3">
                  <input type="text" name="captcha_word" placeholder="Код нужно вписать сюда" required>
                </div>
                <div class="col-md-3">
                  <input type="submit" name="submit" value="Отправить">
                </div>
              </div>
            </form>
            <form action="/" class="tender hidden" data-parsley-validate>
              <h2 class="title no-bottom-padding small-bottom-margin">
                если тендер интересный, то почему бы<br>и не поучаствовать?
              </h2>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">я из компании</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="company" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">вот мой телефон*</label>
                </div>
                <div class="col-md-3">
                  <input type="text" name="phone" placeholder="" required>
                </div>
                <div class="col-md-2 right">
                  <label for="company">и почта*</label>
                </div>
                <div class="col-md-4">
                  <input type="email" name="email" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="link">мы хотим сделать</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="link" placeholder="Разработку сайта, создания рекамной кампании и пр.">
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label for="budget">У нас есть на это такой бюджет*</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="budget" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="brief">и даже есть бриф!</label>
                </div>
                <div class="col-md-9">
                  <a href="#" class="file">Загрузить</a>
                  <input type="file" class="hidden" name="brief">
                  <div class="filename"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="description">хочу дополнить</label>
                  <div class="text">
                    Мы очень просим
                    обязательно заполнить
                    поля, отмеченные * -
                    так нам будет проще
                    общаться с вами :)
                  </div>
                </div>
                <div class="col-md-9">
                  <textarea name="description" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              <div class="row last">
                <div class="col-md-3">
                  <div class="text">
                    Ну, и чтобы закончить
                    начатое, нужно ввести
                    вот этот код
                  </div>
                </div>
                <div class="col-md-3">
                  <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_sid=<?=$code?>">
                  <input name="captcha_code" value="<?=$code?>" type="hidden">
                </div>
                <div class="col-md-3">
                  <input type="text" name="captcha_word" placeholder="Код нужно вписать сюда" required>
                </div>
                <div class="col-md-3">
                  <input type="submit" name="submit" value="Отправить">
                </div>
              </div>
            </form>
            <form action="/" class="job hidden" data-parsley-validate>
              <h2 class="title no-bottom-padding small-bottom-margin">
                грамотные специалисты<br>нам нужны всегда. Вы из таких?
              </h2>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">Конечно! Я* -</label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="vacancy" placeholder="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="resume">вот мое резюме*</label>
                </div>
                <div class="col-md-9">
                  <a href="#" class="file">Загрузить</a>
                  <input type="file" class="hidden" name="resume">
                  <div class="filename"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="photo">А вот мое фото</label>
                </div>
                <div class="col-md-9">
                  <a href="#" class="file">Загрузить</a>
                  <input type="file" class="hidden" name="photo">
                  <div class="filename"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="company">вот мой телефон*</label>
                </div>
                <div class="col-md-3">
                  <input type="text" name="phone" placeholder="" required>
                </div>
                <div class="col-md-2 right">
                  <label for="company">и почта*</label>
                </div>
                <div class="col-md-4">
                  <input type="email" name="email" placeholder="" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <label for="description">и пару слов о себе</label>
                  <div class="text">
                    Мы очень просим
                    обязательно заполнить
                    поля, отмеченные * -
                    так нам будет проще
                    общаться с вами :)
                  </div>
                </div>
                <div class="col-md-9">
                  <textarea name="description" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              <div class="row last">
                <div class="col-md-3">
                  <div class="text">
                    Ну, и чтобы закончить
                    начатое, нужно ввести
                    вот этот код
                  </div>
                </div>
                <div class="col-md-3">
                  <img class="captcha_img" src="/bitrix/tools/captcha.php?captcha_sid=<?=$code?>">
                  <input name="captcha_code" value="<?=$code?>" type="hidden">
                </div>
                <div class="col-md-3">
                  <input type="text" name="captcha_word" placeholder="Код нужно вписать сюда" required>
                </div>
                <div class="col-md-3">
                  <input type="submit" name="submit" value="Отправить">
                </div>
              </div>
            </form>
          </div>
          <div class="success hidden">
            <h1 class="title">спасибо</h1>
            <h4 class="center">
              ваша ценнейшая информация отправлена нам со скоростью света.<br>
              Мы реагируем на корреспонденцию чуть медленнее, но обещаем<br>
              в ближайшее время связаться с вами и ответить на ваш запрос.
            </h4>
          </div>
        </div>
      </div>  
    </div>

    <!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24066202 = new Ya.Metrika({id:24066202, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24066202" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
	
  </body>
  
</html>