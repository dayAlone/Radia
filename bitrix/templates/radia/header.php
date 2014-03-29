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
            <a href="/" class="logo"><img src="/layout/images/logo.png"></a>
          </div>
          <div class="col-md-5">
            <div class="contacts">
              <a href="tel:84955404458">+7 495 540-44-58</a>
              <a href="mailto:hello@radia.ru">hello@radia.ru</a>
            </div>
            <div class="social">
              <a href="https://www.facebook.com/radia.ru" target="_blank" class="fb"></a>
            </div>
            <a class="order nav" href="#">запрос</a>
            
          </div>
        </div>
      </div>
    </div>