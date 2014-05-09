    <div class="block bgcolor blue6 no-bottom-padding" <?=($arResult['PROPERTIES']['BG_TITLE']['VALUE']?"style='background-color:".$arResult['PROPERTIES']['BG_TITLE']['VALUE']."'":"")?>>
      <div class="container">
        <h1 class="title orange no-bottom-margin">
          <?=$arResult['NAME']?>
        </h1>
      </div>
    </div>

    <div class="block bgcolor blue7 small-bottom-padding small-top-padding"  <?=($arResult['PROPERTIES']['BG_NAV']['VALUE']?"style='background-color:".$arResult['PROPERTIES']['BG_NAV']['VALUE']."'":"")?>>
      <div class="container">
        <div class="nav">
          <?
            $APPLICATION->IncludeComponent("bitrix:news.list", "services_list", array(
              "IBLOCK_TYPE" => "content",
              "IBLOCK_ID" => "2",
              "NEWS_COUNT" => "6",
              "SORT_BY1" => "SORT",
              "SORT_ORDER1" => "ASC",
              "FILTER_NAME" => "",
              "FIELD_CODE" => array(
                0 => "CODE",
                1 => "NAME",
                2 => "PREVIEW_TEXT",
                3 => "PREVIEW_PICTURE",
                4 => "DETAIL_URL",
              ),
              "PROPERTY_CODE" => array(
                0 => "",
                1 => "",
              ),
              "CHECK_DATES" => "Y",
              "DETAIL_URL" => "/services/#ELEMENT_CODE#/",
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
              "PARENT_SECTION" => "",
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
    </div>

    <?=$arResult['~DETAIL_TEXT']?>

    <?
        if($arResult['PROPERTIES']['PORTFOLIO']['VALUE']) {
          $APPLICATION->IncludeComponent("bitrix:news.list", "portfolio_list", array(
            "IBLOCK_TYPE" => "content",
            "IBLOCK_ID" => "5",
            "NEWS_COUNT" => "3",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "RAND",
            "SORT_BY2" => "ACTIVE_FROM",
            "SORT_ORDER2" => "DESC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
              0 => "CODE",
              1 => "NAME",
              2 => "PREVIEW_TEXT",
              3 => "PREVIEW_PICTURE",
              4 => "DETAIL_URL",
              5 => "",
            ),
            "PROPERTY_CODE" => array(
              0 => "SUBTITLE",
              1 => "BUTTON",
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
            "PARENT_SECTION" => $arResult['PROPERTIES']['PORTFOLIO']['VALUE'],
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "PAGER_TEMPLATE" => ".default",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
            "PAGER_SHOW_ALL" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
            ),
            false);
        }
      ?>    