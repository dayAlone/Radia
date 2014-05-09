<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?
$i=0;
foreach($arResult["ITEMS"] as $arItem):
	if($i%3==0) {
		if($i>0) {?></div><?}
		?><div class="row"><?	
	}
?>
	<div class="col-md-4 item">
	    <div class="title"><a href="<?=$arItem['DETAIL_PAGE_URL']?>">
	      <span class="span frame"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt=""></span><br/>
	      <?=$arItem['NAME']?>
	    </a></div>
	    <p>
	      <?=$arItem['~PREVIEW_TEXT']?>
	    </p>
	  </div>
<?
$i++;
endforeach;?>
</div>

