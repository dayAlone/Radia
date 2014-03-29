<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/portfolio/(.*)/(.*)#",
		"RULE" => "CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/portfolio/index.php",
	),
	array(
		"CONDITION" => "#^/services/(.*)/(.*)#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/services/detail.php",
	),
);

?>