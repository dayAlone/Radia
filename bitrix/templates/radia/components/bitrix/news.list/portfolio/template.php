        <div class="sections border-top border-bottom small-top-padding small-bottom-padding center">
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
                "CACHE_TIME" => "36000000",
                "CACHE_NOTES" => "",
                "CACHE_GROUPS" => "Y"
              )   
            );?>
        </div>
        <div id="portfolio" class="list">
          <?
          $i=0;
          foreach($arResult["ITEMS"] as $arItem):
            if($i%3==0) {
              if($i>0) {?></div><?}
              ?><div class="row"><? 
            }
          ?>
            <div class="col-md-4">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="item" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
                  <span class="over">
                    <span class="text">
                      <span class="name"><?=$arItem['NAME']?></span><span class="line"></span><span class="type">
                        <?
                        $res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
                        if($ar_res = $res->GetNext())
                          echo $ar_res['NAME'];
                        ?>
                      </span>  
                    </span>
                  </span>
                </a>
              </div>
          <?
          $i++;
          endforeach;?>
          </div>
        </div>
        <?= $arResult['NAV_STRING'] ?>
        