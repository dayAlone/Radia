<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$i=0;
foreach($arResult["ITEMS"] as $arItem):
	?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="item" style="background-image: url(http://radia.ru<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
      <span class="over">
        <span class="text">
          <span class="name"><?=str_replace('<br>','', $arItem['~NAME'])?></span><span class="line"></span>
          <span class="type">
          	<?
              $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
              if($ar_res = $res->GetNext())
                echo strip_tags($ar_res['~NAME']);
            ?>
          </span>  
        </span>
      </span>
    </a><?$i++;
endforeach;?>


