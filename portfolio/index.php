<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$list = true;
if (CModule::IncludeModule("iblock") && isset($_REQUEST['CODE'])):
	$arFilter = Array('IBLOCK_ID'=>5, 'CODE'=>$_REQUEST['CODE']);
	$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
	$ar_result = $db_list->GetNext();
	if($ar_result['ID']>0) {
		$cat['ID'] = $ar_result['ID'];
		$cat['NAME'] = strip_tags($ar_result['NAME']);
	}
	else {
		$list = false;
		$arSelect = Array("ID", "NAME", "CODE");
		$arFilter = Array("IBLOCK_ID"=>5, "CODE"=>$_REQUEST['CODE']);
		$res = CIBlockElement::GetList(Array(), $arFilter, false,false, $arSelect);
		while($ob = $res->GetNextElement())
		{
		 $arFields = $ob->GetFields();
		 $item['NAME'] = strip_tags($arFields['~NAME']);
		}
	}
endif;

$APPLICATION->SetTitle(($cat['NAME']?$cat['NAME']." | ":"").($item['NAME']?$item['NAME']." | ":"")."Портфолио  | RADIA Interactive");
if($list) {
?><div class="block bgcolor gray9 no-bottom-padding">
      <div class="container">
        <h1 class="title color black">
          портфолио
        </h1>
        <?
        if(strlen($_REQUEST["CODE"])>0) {?>
			<div id="filter" data-code=".<?=$_REQUEST["CODE"]?>"></div>
        <?}
        global $USER;
        if($USER->isAdmin()):
        	global $arFilter;
        	$arFilter = array('ACTIVE'=>array('N','Y'));
        endif;
      	$APPLICATION->IncludeComponent("bitrix:news.list", "portfolio", array(
			"IBLOCK_TYPE" => "content",
			"IBLOCK_ID" => "5",
			"NEWS_COUNT" => "54",
			"SORT_BY1" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "ACTIVE_FROM",
			"SORT_ORDER2" => "DESC",
			"FILTER_NAME" => "arFilter",
			"FIELD_CODE" => array(
				0 => "CODE",
				1 => "NAME",
				2 => "PREVIEW_TEXT",
				3 => "PREVIEW_PICTURE",
				4 => "DETAIL_URL",
				5 => "",
			),
			"PROPERTY_CODE" => array(
				0 => "SUBTITLE",
				1 => "BUTTON",
				2 => "",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "/portfolio/#ELEMENT_CODE#/",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "N",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "N",
			"CACHE_TIME" => "3600",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"PREVIEW_TRUNCATE_LEN" => "150",
			"ACTIVE_DATE_FORMAT" => "d-m-Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
			"PAGER_SHOW_ALL" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"FILTER_NAME" => "arFilter"
			),
			false
		);
		?>
        
      </div>
    </div>

<?
} else {
	$APPLICATION->SetDirProperty("phrase_title", "А можете сделать для меня лучше?");
	$APPLICATION->SetDirProperty("phrase_button", "Готов сделать заявку");
	?>

	<?
	global $USER;
    if($USER->isAdmin()):
    	global $arFilter;
    	$arFilter = array('ACTIVE'=>array('N','Y'));
    endif;
	$APPLICATION->IncludeComponent("radia:news.detail", "portfolio", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "5",
	"ELEMENT_ID" => "",
	"ELEMENT_CODE" => $_REQUEST["CODE"],
	"CHECK_DATES" => "N",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "BUTTON",
		1 => "",
	),
	"IBLOCK_URL" => "/portfolio/#ELEMENT_CODE#/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "N",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "N",
	"CACHE_TIME" => "3600",
	"CACHE_GROUPS" => "Y",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "Y",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y",
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"USE_PERMISSIONS" => "N",
	"GROUP_PERMISSIONS" => array(
		0 => "1",
	),
	"PAGER_TEMPLATE" => "",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Страница",
	"PAGER_SHOW_ALL" => "N",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
	
    

<?}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>