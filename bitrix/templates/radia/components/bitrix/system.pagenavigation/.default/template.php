<?
	//var_dump($arResult);
?>
<?
	if($arResult["NavPageNomer"]<$arResult['NavPageCount']) {
		?>
			<p class="center">
	          <a href="<?=$arResult["sUrlPat"]?>?PAGEN_1=<?=$arResult["NavPageNomer"]+1?>" class="big-button red">
	            покажите мне еще
	          </a>
	        </p>
		<?
	}
?>