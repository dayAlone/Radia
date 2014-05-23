<?
	require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include.php");
	global $USER;
	if(!$USER->GetID()) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <!--[if gte IE 6]>
    <style>
    #container {margin-top: expression( this . parentNode . offsetHeight > this . offsetHeight ?(( this . parentNode . offsetHeight-this . offsetHeight ) / 2 + "px" ) : "0" );}
</style>
<![endif]-->
<style>
* {margin: 0; padding: 0;}
html, body {height: 100%; width: 100%; background:#d2d2d2;}
html {display: table;}
body {display: table-cell; vertical-align: middle;}
#centered {text-align:center;}
</style>
<title>RADIA Visual communications</title>
</head>

<body>
<div id="centered"><img src="radia-title.jpg" alt="RADIA" width="650" height="650" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="272,568,379,585" href="mailto:&#104;&#101;&#108;&#108;&#111;&#064;&#114;&#097;&#100;&#105;&#097;&#046;&#114;&#117;" />
  </map>
</div>
</body>
<!-- Yandex.Metrika counter -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
<div style="display:none;"><script type="text/javascript">
try { var yaCounter232556 = new Ya.Metrika({id:232556,
          clickmap:true, webvisor:true});}
catch(e) { }
</script></div>
<noscript><div><img src="//mc.yandex.ru/watch/232556" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</html>
<?
	} else {
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("RADIA Interactive");
?> <?$APPLICATION->IncludeComponent("radia:resp_slider", ".default", array(
	"IBLOCK_TYPE" => "-",
	"IBLOCK_ID" => "1",
	"ENABLE_JQUERY" => "N",
	"MY_DATA" => "",
	"SIZES_HEIGHT" => "100%",
	"SIZES_WIDTH" => "100%",
	"EFFECT_SPEED" => "600",
	"BACKGROUND_COLOR" => "#000000",
	"DARK_COLOR" => "#000000",
	"BRIGHT_COLOR" => "#FFFFFF",
	"BUTTON_COLOR" => "#2823d4",
	"DOTS_SHOW" => "N",
	"ARROWS_SHOW" => "Y",
	"ARROWS_TYPE" => "big",
	"ARROWS_PREVIEW_SHOW" => "N",
	"EFFECT_TYPE" => "slide",
	"SLIDE_AUTOPLAY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000"
	),
	false
);?>

	<div id="about" class="block bgcolor white bright">
      <div class="container">
        <h3 class="title no-bottom-padding">
          Если коротко, то
        </h3>
        <p class="highlight">
          Наша задача <br>
          — эффективное построение коммуникации <br>
          <span class="blue4">через эмоцию, через мысль, через взгляд. </span>
        </p>
        <p class="highlight">
          Мы верим в то, что сильный бренд <br>
          — это эмоциональный бренд.
        </p>
        <p class="center small-bottom-margin">
          <a href="/about/" class="big-button">
            и еще немного о нас
          </a>
        </p>
      </div>
    </div>
    <div id="services" class="block bgcolor bright gray4">
      <div class="container">
        <h3 class="title">
          Наша компетенция  
        </h3>
        <?
          	$APPLICATION->IncludeComponent("bitrix:news.list", "services", array(
			"IBLOCK_TYPE" => "content",
			"IBLOCK_ID" => "2",
			"NEWS_COUNT" => "6",
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_BY2" => "ACTIVE_FROM",
			"SORT_ORDER2" => "DESC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(
				0 => "CODE",
				1 => "NAME",
				2 => "PREVIEW_TEXT",
				3 => "PREVIEW_PICTURE",
				4 => "DETAIL_URL",
				5 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "/services/#ELEMENT_CODE#/",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "3600",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d-m-Y",
			"SET_TITLE" => "N",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"PAGER_TEMPLATE" => "",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "Y",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
			"PAGER_SHOW_ALL" => "N",
			"AJAX_OPTION_ADDITIONAL" => ""
			),
			false
		);
		?>
          
        
        <p class="center">
          <a href="/services/" class="big-button blue2">
            и кое-что еще
          </a>
        </p>
      </div>
    </div>

    <div id="portfolio" class="small block bgcolor gray6">
      <div class="container">
        <h3 class="title no-bottom-margin">
          А еще мы покажем вам, что делали
        </h3>
        <p class="highlight">
          у нас много разных и хороших работ
        </p>
      </div>
      <div class="frame">
        <?
          	$APPLICATION->IncludeComponent("bitrix:news.list", "portfolio_index", array(
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "5",
				"NEWS_COUNT" => "15",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "ACTIVE_FROM",
				"SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "CODE",
					1 => "NAME",
					2 => "PREVIEW_TEXT",
					3 => "PREVIEW_PICTURE",
					4 => "",
					5 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "TYPE",
					1 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "/portfolio/#ELEMENT_CODE#/",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"PREVIEW_TRUNCATE_LEN" => "150",
				"ACTIVE_DATE_FORMAT" => "d-m-Y",
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "Y",
				"PAGER_TEMPLATE" => "",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "Y",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_ADDITIONAL" => ""
				),
				false
			);
		?>
      </div>
      <div class="container">
        <p class="center no-bottom-margin">
          <a href="/portfolio/" class="big-button">
            этого явно мало
          </a>
        </p>
      </div>
    </div>

    <div id="partners" class="block bgcolor gray7 bright">
      <div class="container">
        <h3 class="title">
          Спасибо, что вы с нами
        </h3>
        <div class="items">
          <?
          	$APPLICATION->IncludeComponent("bitrix:news.list", "clients_index", array(
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "4",
				"NEWS_COUNT" => "6",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "ACTIVE_FROM",
				"SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "CODE",
					1 => "PREVIEW_PICTURE",
				),
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "/services/#ELEMENT_CODE#/",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"PREVIEW_TRUNCATE_LEN" => "150",
				"ACTIVE_DATE_FORMAT" => "d-m-Y",
				"SET_TITLE" => "N",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "Y",
				"PAGER_TEMPLATE" => "",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_DESC_NUMBERING" => "Y",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
				"PAGER_SHOW_ALL" => "N",
				"AJAX_OPTION_ADDITIONAL" => ""
				),
				false
			);
		  ?>
        </div>
      </div>
    </div>

<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
}
?>