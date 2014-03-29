<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if (CModule::IncludeModule("iblock")):
    $arSelect = Array("ID", "NAME", "CODE");
	$arFilter = Array("IBLOCK_ID"=>2, "CODE"=>$_REQUEST['CODE']);
	$res = CIBlockElement::GetList(Array(), $arFilter, false,false, $arSelect);
	while($ob = $res->GetNextElement())
	{
	 $arFields = $ob->GetFields();
	}
endif;
$APPLICATION->SetTitle("RADIA Interactive | ".$arFields['NAME']);
?>

	<?$APPLICATION->IncludeComponent("bitrix:news.detail", "services", array(
	"IBLOCK_TYPE" => "content",
	"IBLOCK_ID" => "2",
	"ELEMENT_ID" => "",
	"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
	"CHECK_DATES" => "Y",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "",
		2 => "",
	),
	"IBLOCK_URL" => "/services/#ELEMENT_CODE#/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "N",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
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
	"USE_PERMISSIONS" => "Y",
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>