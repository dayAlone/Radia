<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php $APPLICATION->ShowTitle();?></title>
    
    <meta name="viewport" content="width=1050, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name='yandex-verification' content='5ecdc93b1995ed1b' />
    
    
    <!--[if IE]>
           <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/layout/js/jquery.js"></script>
    <script type="text/javascript" src="/layout/js/plugins.js"></script>
    <script type="text/javascript" src="/layout/js/main.js"></script>

    <?php $APPLICATION->ShowHead();?>

    <link href="/layout/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/layout/css/plugins.css" rel="stylesheet" />
    <link href="/layout/css/style.css" rel="stylesheet" />
   
  </head>

  <body>
    
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div id="toolbar" class="<?=($APPLICATION->GetCurPage()!='/'?"fixed inner":"")?>">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <?$APPLICATION->IncludeComponent("bitrix:menu","",Array(
                "ROOT_MENU_TYPE" => "top", 
                "MAX_LEVEL" => "1", 
                "CHILD_MENU_TYPE" => "top", 
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N", 
                "MENU_CACHE_TIME" => "3600", 
                "MENU_CACHE_USE_GROUPS" => "Y", 
                "MENU_CACHE_GET_VARS" => "" 
              )
            );?>
            <!--<a class="nav" href="#">блог</a>-->
          </div>
          <div class="col-md-2">
            <a href="/" class="logo center">
              <svg width="108px" height="108px" viewBox="0 0 108 108" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                      <path d="M97.2,93 C92.7,86.6 71.9,56.1 71.9,56.1 C78,53.7 82.8,50.2 86.3,45.6 C89.8,40.9 91.5,35.8 91.5,30.1 C91.5,25.8 90.7,21.9 89,18.3 C87.3,14.8 84.9,11.7 81.8,9.1 C78.6,6.5 74.8,4.5 70.3,3.1 C55.3,-1.6 33.9,1.1 18.3,1.1 C13.2,1.1 9.5,1 4.7,0.3 C3.9,0.2 2.5,-0.3 1.7,0.5 C0.7,1.5 0.8,2.4 1.6,3.5 C3.6,6.5 5,8.6 7,11.5 C9,14.5 12.6,15.1 15.9,15.3 C20.4,15.6 24.9,15.6 29.5,15.5 C32.2,15.4 34.8,15.3 37.5,15.2 C43.6,14.9 49.7,14.6 55.8,15.5 C63.8,16.7 70.5,21.9 69.8,30.6 C69.4,36 67.3,41 62.7,44.1 C56.9,48 49.9,48.2 43.2,48.2 C39.4,48.2 39.1,48.1 35,47.6 C34.1,47.5 33.1,47.7 32.8,48.6 C32.4,49.7 32.7,50.1 33.5,51.2 C34.2,52.2 37.6,57.4 38.7,58.9 C39.6,60.3 41.3,60.9 42.8,61.3 C52.1,64.1 57.7,70.3 62.9,78.2 C65.5,82.2 68.1,86.3 70.8,90.3 C72.3,92.5 73.9,94.6 75.6,96.7 C79.6,101.5 84.8,103.6 90.6,105.2 C95.3,106.5 100.4,106.9 104.5,106.9 C108.8,107 108.2,104.2 106.6,103 C102.8,100.4 100.3,97.5 97.2,93 L97.2,93 Z" id="Shape" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                  </g>
              </svg>
            </a>
          </div>
          <div class="col-md-5">
            <div class="contacts">
              <a href="tel:84955404458">+7 495 540-44-58</a>
              <a href="mailto:hello@radia.ru">hello@radia.ru</a>
            </div>
            <div class="social">
              <a href="https://www.facebook.com/radia.ru" target="_blank" class="fb">
                <svg width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path d="M11.5,0 C5.14917406,0 0,5.14917406 0,11.5 C0,17.8522389 5.14917406,23 11.5,23 C17.8515324,23 23,17.8522389 23,11.5 C23,5.14917406 17.8515324,0 11.5,0 Z M13.8043536,12.0044232 L12.2965395,12.0044232 L12.2965395,18 L10.0625422,18 L10.0625422,12.0044232 L9,12.0044232 L9,9.88619795 L10.0625422,9.88619795 L10.0625422,8.51516724 C10.0625422,7.53370648 10.4801269,6 12.3168826,6 L13.9717253,6.0072901 L13.9717253,8.06391809 L12.770747,8.06391809 C12.5749537,8.06391809 12.2965395,8.1723686 12.2965395,8.64106485 L12.2965395,9.88619795 L14,9.88619795 L13.8043536,12.0044232 Z" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                    </g>
                </svg>
              </a>
            </div>
            <a class="order nav" href="#">запрос</a>
            
          </div>
        </div>
      </div>
    </div>