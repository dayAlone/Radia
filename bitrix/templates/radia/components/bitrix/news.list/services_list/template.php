<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$i=0;
foreach($arResult["ITEMS"] as $arItem):

	?>
  <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="<?=($_REQUEST['ELEMENT_CODE']==$arItem['CODE']?"active":"")?>"><?=$arItem['NAME']?></a>
  <?$i++;
endforeach;?>


