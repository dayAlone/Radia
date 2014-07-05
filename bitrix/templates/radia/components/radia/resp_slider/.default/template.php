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
		<style type="text/css">
		.resp_slider .item.resp-slide-<?=$arItem['ID']?> .content .button {
			border-color: <?=$props['BTN_COLOR']['VALUE']?>!important;
			color: <?=$props['BTN_COLOR']['VALUE']?>!important;
		}
		.resp_slider .item.resp-slide-<?=$arItem['ID']?> .content .button:hover {
			background-color: <?=$props['BTN_COLOR']['VALUE']?>!important;
			color: <?=$props['BG_COLOR']['VALUE']?> !important;
		}
		</style>
		
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
<div id="slider-arrow">
	<svg width="49px" height="49px" viewBox="0 0 49 49" version="1.1">
	    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
	        <g id="c" sketch:type="MSLayerGroup" fill="#000000">
	            <g id="Line-+-Line-2" transform="translate(12.000000, 20.000000)" sketch:type="MSShapeGroup">
	                <path d="M0.250237233,0.721838172 L13.0098821,12.9907275 L13.2601194,13.2313402 L13.7605938,12.7501148 L13.5103566,12.509502 L0.750711699,0.240612724 L0.500474466,0 L0,0.481225448 L0.250237233,0.721838172 L0.250237233,0.721838172 Z" id="Line"></path>
	                <path d="M12.2502372,0.721838172 L25.0098821,12.9907275 L25.2601194,13.2313402 L25.7605938,12.7501148 L25.5103566,12.509502 L12.7507117,0.240612724 L12.5004745,0 L12,0.481225448 L12.2502372,0.721838172 L12.2502372,0.721838172 Z" id="Line-2" transform="translate(19.000000, 6.500000) scale(-1, 1) translate(-19.000000, -6.500000) "></path>
	            </g>
	            <path d="M49,24.5 C49,10.9690236 38.0309764,0 24.5,0 C10.9690236,0 0,10.9690236 0,24.5 C0,38.0309764 10.9690236,49 24.5,49 C38.0309764,49 49,38.0309764 49,24.5 Z M1,24.5 C1,11.5213084 11.5213084,1 24.5,1 C37.4786916,1 48,11.5213084 48,24.5 C48,37.4786916 37.4786916,48 24.5,48 C11.5213084,48 1,37.4786916 1,24.5 Z" id="Oval-1" sketch:type="MSShapeGroup"></path>
	        </g>
	    </g>
	</svg>
</div>
