<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="radia-resp-slider" class="resp_slider" style="width: <?=$arParams["SIZES_WIDTH"]?>">
<?foreach($arResult["ITEMS"] as $arItem):
	$props = $arItem['DISPLAY_PROPERTIES'];
	$types = array('light', 'dark');
	?>
	<div class="item fotorama__select resp-slide-<?=$arItem['ID']?>"  <?=(in_array($props['BG_TYPE']['VALUE_XML_ID'],$types) ? "data-type='".$props['BG_TYPE']['VALUE_XML_ID']."'" : "")?>
		style="
			<?if($props['BG_COLOR']['VALUE']){?>background-color: <?=$props['BG_COLOR']['VALUE']?>;<?}?>
			<?if($props['BG_IMAGE']['VALUE']){?>background-image: url(<?=CFile::GetPath($props['BG_IMAGE']['VALUE'])?>);<?}?>
		">
		<?
		if($props['BTN_EXTEND_COLOR']['VALUE_XML_ID']==1) {
		?>
		<style type="text/css">
		.resp_slider .item.resp-slide-<?=$arItem['ID']?> .content .button {
			background: <?=$props['BTN_COLOR']['VALUE']?>
		}
		</style>
		<? } ?>
		<div class="content <?if($props["TXT_POSITION"]['VALUE_XML_ID']){?><?=$props["TXT_POSITION"]['VALUE_XML_ID']?><?}?>">
			<?if($props["TXT_CONTENT"]['VALUE']){?>
			
				<?=$props['TXT_CONTENT']['~VALUE']['TEXT']?>

			<? } else { ?>

				<?if($props["TXT_EFFECT"]['VALUE']){?><div class="animated" data-show="<?=$props["TXT_EFFECT"]['VALUE']?>"><?}?>
					
					<?if($props['TXT_TITLE']['VALUE']){?><h1><?=$props['TXT_TITLE']['~VALUE']?></h1><?}?>

					<?if($props['TXT_DESCRIPTION']['VALUE']['TEXT']){?><p><?=$props['TXT_DESCRIPTION']['~VALUE']['TEXT']?></p><?}?>	
					
					
					<?if($props["BTN_SHOW"]['VALUE_XML_ID']=='Y'){?>

						<a href="<?=($props["BTN_LINK"]['VALUE']?$props["BTN_LINK"]['VALUE']:"#")?>" class="button">
							<?=($props["BTN_TEXT"]['VALUE']?$props["BTN_TEXT"]['VALUE']:"Узнать больше")?>
						</a>	
						<style type="text/css">
							.resp-slide-<?=$arItem['ID']?> .content a.button:hover {
								color: <?=$props['BG_COLOR']['VALUE']?>;
							}
						</style>
					<?}?>

				<?if($props["TXT_EFFECT"]['VALUE']){?></div><?}?>

			<? } ?>

		</div>
		<?if($props['BG_VIDEO']['VALUE']){?>
			<video loop muted>
				<source src="<?=CFile::GetPath($props['BG_VIDEO']['VALUE'])?>" type="<?=mime_content_type(CFile::GetPath($props['BG_VIDEO']['VALUE']))?>">
			</video>
		
		<? } ?>
	</div>
<?endforeach;?>
</div>
