<a href="/portfolio/" <?=(!isset($_REQUEST['CODE'])?'class="active"':'')?>>все</a>
<?
	foreach ($arResult['SECTIONS'] as $section) {
		?>
			<a href="/portfolio/<?=$section['CODE']?>/" <?=($_REQUEST['CODE']==$section['CODE']?'class="active"':'')?>><?=$section['NAME']?></a>
		<?
	}

?>