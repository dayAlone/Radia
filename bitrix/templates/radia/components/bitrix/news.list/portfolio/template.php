        <div class="sections small-top-padding small-bottom-padding center">
          <?
            $APPLICATION->IncludeComponent("bitrix:catalog.section.list","portfolio",
            Array(
                "VIEW_MODE" => "TEXT",
                "SHOW_PARENT_NAME" => "Y",
                "IBLOCK_TYPE" => "",
                "IBLOCK_ID" => "5",
                "SECTION_ID" => "",
                "SECTION_CODE" => "",
                "SECTION_URL" => "",
                "COUNT_ELEMENTS" => "Y",
                "TOP_DEPTH" => "2",
                "SECTION_FIELDS" => "",
                "SECTION_USER_FIELDS" => "",
                "ADD_SECTIONS_CHAIN" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_NOTES" => "",
                "CACHE_GROUPS" => "Y"
              )   
            );?>
        </div>
      </div>
        <div id="portfolio" class="list">
          <?
          $i=0;
          foreach($arResult["ITEMS"] as $arItem):
            $raw = CIBlockElement::GetElementGroups($arItem['ID'], true);
            $cats = "";
            while ($x = $raw->Fetch())
              $cats .= $x['CODE']." ";
          ?>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="item <?=$cats?>" style="background-image: url(http://radia.ru<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
              <span class="over">
                <span class="text">
                  <span class="name"><?=str_replace('<br>',' ', $arItem['~NAME'])?></span><span class="line"></span><span class="type">
                    <?
                    $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
                    if($ar_res = $res->GetNext())
                      echo strip_tags($ar_res['~NAME']);
                    ?>
                  </span>  
                </span>
              </span>
            </a>
          <?
          $i++;
          endforeach;?>
        </div>
        <?= $arResult['NAV_STRING'] ?>
        