<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании | RADIA Interactive");
?> 
<div id="about" class="block bgcolor bright gray8"> 
  <div class="container"> 
    <h1 class="title">RADIA INTERACTIVE</h1>
   
    <p class="highlight2"> Наша компания объединяет опыт и возможности многих людей, 
      <br />
     каждый из которых &mdash; настоящий профессионал своего дела. </p>
   
    <h2 class="title border-top border-bottom"> Наша задача — эффективное построение 
      <br />
     коммуникации через эмоцию, через мысль, через 
      <br />
     взгляд. Мы верим в то, что сильный бренд — 
      <br />
     это эмоциональный бренд. </h2>
     <p class="center">
     	<span class="task">
	   		Наша компания объединяет опыт и возможности многих <br>
			людей, каждый из которых — настоящий профессионал <br>
			своего дела. Наша компания объединяет опыт и <br>
			возможности многих людей, каждый из которых — <br>
			настоящий профессионал своего дела. 
	   	</span>
     </p>
   	<p class="center">
     	<span class="link color blue">
	   		<a href="#">www.longwebsitenamegoeshere.ru</a>
	   	</span>
     </p>
    <p class="highlight2"> Мы стремимся объединить объединить красоту, эстетику, функциональность и простоту в единое целое, чтобы добиться максимальной отдачи от каждого проекта.</p>
   
    <p class="highlight2">Мы — это интерактивное агентство, креативный бутик и дизайн-студия 
      <br />
     в одном флаконе. Наше преимущество — это гибкость в общении 
      <br />
     с клиентом. Прием, аккумулирование и анализ полученной информации 
      <br />
     в первой же инстанции позволяет нам довести задачу до группы разработки в ее первоначальном виде, не изменяя мнениями директоров отделов, креативных и арт-директоров, эккаунт- и сейлз-менеджеров. 
      <br />
     Хорошо ли это? Мы считаем, что даже очень! </p>
   </div>
 </div>
 
<div id="clients" class="bgcolor block bright gray8"> 
  <div class="container"> 
    <h3 class="title">Нам уже доверили выполнение своих проектов</h3>
   <?$APPLICATION->IncludeComponent("bitrix:news.list", "clients_about", array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "12",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "CODE",
			1 => "DETAIL_PICTURE",
			2 => "",
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
		"CACHE_TYPE" => "A",
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
	);?> 
    <p class="center no-bottom-margin"> <a href="#" class="big-button blue3" > И многие другие </a> </p>
   </div>
</div>

<div class="bgcolor block bright gray4" id="partners">
	<div class="container">
		<h3 class="title no-top-margin no-bottom-padding">Наши партнеры</h3>
		<div class="row center">
			<div class="col-md-3">
				<img src="/layout/images/part-1.png" alt="">
			</div>
			<div class="col-md-3">
				<img src="/layout/images/part-2.png" alt="">
			</div>
			<div class="col-md-3">
				<img src="/layout/images/part-3.png" alt="">
			</div>
			<div class="col-md-3">
				<img src="/layout/images/part-4.png" alt="">
			</div>
		</div>
	</div>
</div>

 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>