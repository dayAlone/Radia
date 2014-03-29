<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
$i=0;
foreach($arResult["ITEMS"] as $arItem):
	if($i%6==0) {
		if($i>0) {?></div><?}
		?><div class="row center"><?	
	}
?>
	<div class="col-md-2"><img src="<?=$arItem['DETAIL_PICTURE']['SRC']?>" alt=""></div>
<?
$i++;
endforeach;?>
</div>

