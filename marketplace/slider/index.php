<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Адаптивный слайдер");
?><?$APPLICATION->IncludeComponent("radia:resp_slider", ".default", array(
	"IBLOCK_TYPE" => "slider",
	"IBLOCK_ID" => "6",
	"ENABLE_JQUERY" => "Y",
	"MY_DATA" => "",
	"SIZES_HEIGHT" => "100%",
	"SIZES_WIDTH" => "100%",
	"EFFECT_SPEED" => "600",
	"BACKGROUND_COLOR" => "#000000",
	"DARK_COLOR" => "#000000",
	"BRIGHT_COLOR" => "#FFFFFF",
	"BUTTON_COLOR" => "#2823d4",
	"DOTS_SHOW" => "Y",
	"DOTS_POSITION" => "center",
	"DOTS_TYPE" => "circles",
	"ARROWS_SHOW" => "Y",
	"ARROWS_TYPE" => "small",
	"ARROWS_PREVIEW_SHOW" => "Y",
	"EFFECT_TYPE" => "slide",
	"SLIDE_AUTOPLAY" => "Y",
	"SLIDE_SPEED" => "4",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600"
	),
	false
);?>

<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24066202 = new Ya.Metrika({id:24066202, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/24066202" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>