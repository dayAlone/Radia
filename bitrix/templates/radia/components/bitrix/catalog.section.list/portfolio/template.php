<a href="/portfolio/" <?=(!isset($_REQUEST['CODE'])?'class="active"':'')?> data-code="*">все</a>
<?
	foreach ($arResult['SECTIONS'] as $section) {
		?>
			<a href="/portfolio/<?=$section['CODE']?>/" data-code=".<?=$section['CODE']?>" <?=($_REQUEST['CODE']==$section['CODE']?'class="active"':'')?>><?=$section['NAME']?></a>
		<?
	}

?>