<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
foreach($arResult["ITEMS"] as $arItem):
?>
	<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">  
<?

endforeach;?>


