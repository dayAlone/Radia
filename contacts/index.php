<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты | RADIA Interactive");
?> 
<div id="contacts" class="block bgcolor gray8 bright"> 
  <div class="container"> 
    <h1 class="title">Контакты</h1>
   
    <p class="highlight2"> Мы всегда с радостью встречаем все новое. 
      <br />
     Мы открыты к общению с новыми клиентами, подрядчиками 
      <br />
     и потенциальными сотрудниками. Хотите работать с нами или у нас? 
      <br />
     Свяжитесь с нами, мы с удовольствием пообщаемся на тему сотрудничества. </p>
   
    <h2 class="color black title border-top small-bottom-margin big"> телефон: <a href="tel:84955404458" class="black color" >+7 495 540-44-58</a>
      <br />
     E-mail: <a href="mailto:hello@radia.ru" class="black underline color" >hello@radia.ru</a> </h2>
    <p class="center small-bottom-padding">
      <a href="#" class="big-button order">
        или заполните эту форму
      </a>
    </p>
    <p class="color small black highlight big-bottom-padding">наш адрес: москва, сокольнический вал, 2А<br />
почтовый адрес: 107113, г. Москва, а/я 94</p>
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
              iconImageSize: [45, 44],
              // Смещение левого верхнего угла иконки относительно
              // её "ножки" (точки привязки).
              iconImageOffset: [-23, -42]
          });

      myMap.geoObjects.add(myPlacemark);
  });
    </script>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>