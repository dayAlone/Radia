    <? if(count($arResult['ITEMS'])>0):?>
    <div class="block bgcolor gray small-top-padding small-bottom-padding">
      <div class="container">
        <h3 class="title color border-bottom black">
          Смотрите также
        </h1>
        <div id="portfolio" class="more-list small-bottom-margin no-top-margin">
          <?
          $i=0;
          foreach($arResult["ITEMS"] as $arItem):
            if($i%3==0) {
              if($i>0) {?></div><?}
              ?><div class="row"><? 
            }
          ?>
            <div class="col-md-4">
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="item" style="background-image: url(http://radia.ru<?=$arItem['PREVIEW_PICTURE']['SRC']?>)">
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
              </div>
          <?
          $i++;
          endforeach;?>
          </div>
        </div>
      </div>
    </div>
    <? endif;?>