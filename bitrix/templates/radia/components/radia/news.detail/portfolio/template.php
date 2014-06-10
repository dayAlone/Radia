    <?if($arResult['DETAIL_PICTURE']['SRC']) {?>
    <?
      $img = $arResult['DETAIL_PICTURE'];
      $file = CFile::ResizeImageGet($img, array('width'=>450, 'height'=>450), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    ?>
    <div id="title" class="white bgcolor" style="background-image: url(http://radia.ru<?=$arResult['DETAIL_PICTURE']['SRC']?>), url(<?=$file['src']?>)">
      <div class="content">
        <h1 class="title no-bottom-margin no-bottom-padding"><?=$arResult['NAME']?></h1>
        <?if($arResult['PROPERTIES']['SUBTITLE']['VALUE']){?><h3 class="title big no-bottom-margin"><?=$arResult['PROPERTIES']['SUBTITLE']['VALUE']?></h3><?}?>
        <br/><a class="big-button <?if(!$arResult['PROPERTIES']['SUBTITLE']['VALUE']){?>small-top-margin<?}?>" href="#"><?=($arResult['PROPERTIES']['BUTTON']['VALUE']?$arResult['PROPERTIES']['BUTTON']['VALUE']:"Смотреть работу")?></a>
        <?if($arResult['PROPERTIES']['BUTTON_COLOR']['VALUE']) {?>
          <style type="text/css">
            <? if($arResult['PROPERTIES']['TITLE_COLOR']['VALUE']) {?>
            #title h1 {
              color: <?=$arResult['PROPERTIES']['TITLE_COLOR']['VALUE']?> !Important;;
            }
            <? } ?>
            <? if($arResult['PROPERTIES']['SUBTITLE_COLOR']['VALUE']) {?>
              #title h3 {
                color: <?=$arResult['PROPERTIES']['SUBTITLE_COLOR']['VALUE']?> !Important;;
              }
            <? } ?>
            <? if($arResult['PROPERTIES']['SUBTITLE_COLOR']['VALUE']) {?>
              #title h3 {
                color: <?=$arResult['PROPERTIES']['SUBTITLE_COLOR']['VALUE']?> !Important;;
              }
            <? } ?>
            <? if($arResult['PROPERTIES']['BUTTON_COLOR']['VALUE']) {?>
            #title .big-button {
              color: <?=$arResult['PROPERTIES']['BUTTON_COLOR']['VALUE']?> !Important;
              border-color: <?=$arResult['PROPERTIES']['BUTTON_COLOR']['VALUE']?> !Important;
            }
            <? } ?>
            <? if($arResult['PROPERTIES']['BUTTON_HOVER_TEXT_COLOR']['VALUE']) {?>
            #title .big-button:hover {
              color: <?=$arResult['PROPERTIES']['BUTTON_HOVER_TEXT_COLOR']['VALUE']?> !Important;
            }
            <? } ?>
            <? if($arResult['PROPERTIES']['BUTTON_HOVER_COLOR']['VALUE']) {?>
            #title .big-button:hover {
              background-color: <?=$arResult['PROPERTIES']['BUTTON_HOVER_COLOR']['VALUE']?> !Important;
              border-color: <?=$arResult['PROPERTIES']['BUTTON_HOVER_COLOR']['VALUE']?> !Important;
            }
            <? } ?>
          </style>
        <?}?>
      </div>
    </div>

    <? }else{?>

    <div class="block white  no-bottom-padding">
      <div class="container">
        <h1 class="title color black">
          <?=$arResult['~NAME']?>
        </h1>
      </div>
    </div>
   	<? } ?>
    <?=$arResult['~DETAIL_TEXT']?>

    <div class="block bgcolor bright gray4 small-top-padding small-bottom-padding">
      <div class="container">
        <p class="center small-top-margin no-bottom-margin">
          <a href="/portfolio/" class="big-button">вернуться к списку работ</a>
        </p>
      </div>
    </div>

    <?
      global $arFilter;
      $arFilter = array('!ID'=>$arResult['ID']);
    ?>
    <div id="portfolio" class="small block bgcolor gray6 small-top-padding no-bottom-padding">
      <div class="container">
        <h3 class="title small-bottom-margin">
          Другие работы этого направления
        </h3>
      </div>
      <div class="frame no-bottom-margin no-bottom-padding">
        <?
          $APPLICATION->IncludeComponent("bitrix:news.list", "portfolio_index", array(
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => "5",
            "NEWS_COUNT" => "15",
            "SORT_BY1" => "RAND",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "ACTIVE_FROM",
            "SORT_ORDER2" => "DESC",
            "FILTER_NAME" => "arFilter",
            "FIELD_CODE" => array(
              0 => "CODE",
              1 => "NAME",
              2 => "PREVIEW_TEXT",
              3 => "PREVIEW_PICTURE",
              4 => "",
              5 => "",
            ),
            "PROPERTY_CODE" => array(
              0 => "TYPE",
              1 => "",
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "/portfolio/#ELEMENT_CODE#/",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "N",
            "AJAX_OPTION_HISTORY" => "N",
            "CACHE_TYPE" => "N",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "N",
            "PREVIEW_TRUNCATE_LEN" => "150",
            "ACTIVE_DATE_FORMAT" => "d-m-Y",
            "SET_TITLE" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => $arResult["IBLOCK_SECTION_ID"],
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "PAGER_TEMPLATE" => "",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_TITLE" => "",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "Y",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
            ),
            false
          );
        ?>
      </div>
    </div>