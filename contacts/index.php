<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("RADIA Interactive | Контакты");
?>
<div id="contacts" class="block bgcolor orange2">
      <div class="container">
        <h1 class="title">
          О нас
        </h1>
        <p class="highlight2">
          Мы всегда с радостью встречаем все новое. <br/>
          Мы открыты к общению с новыми клиентами, подрядчиками <br/>
          и потенциальными сотрудниками. Хотите работать с нами или у нас? <br/>
          Свяжитесь с нами, мы с удовольствием пообщаемся на тему сотрудничества.
        </p>
        <h2 class="color black title border-top border-bottom big">
          тел.: <a href="tel:84955404458" class="black color">+7 495 540-44-58</a><br/>
          E-mail: <a href="mailto:hello@radia.ru" class="black underline color">hello@radia.ru</a>
        </h2>
        <p class="color small black highlight">
          адрес: москва, сокольнический вал, 2А
        </p>
      </div>
    </div>

    <div id="map" class="block"></div>
    
    <script src="http://api-maps.yandex.ru/2.1-dev/?lang=ru-RU&load=package.full" type="text/javascript"></script>
    <script type="text/javascript">
      ymaps.ready(function () {
      var myMap = new ymaps.Map('map', {
              center: [55.791785,37.656074],
              zoom: 15
          }),
          myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
              hintContent: 'RADIA Interactive'
          }, {
              // Опции.
              // Необходимо указать данный тип макета.
              iconLayout: 'default#image',
              // Своё изображение иконки метки.
              iconImageHref: '/layout/images/pointer.png',
              // Размеры метки.
              iconImageSize: [45, 47],
              // Смещение левого верхнего угла иконки относительно
              // её "ножки" (точки привязки).
              iconImageOffset: [-23, -42]
          });

      myMap.geoObjects.add(myPlacemark);
  });
    </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>