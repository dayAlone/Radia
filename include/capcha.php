<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
    $cpt = new CCaptcha();
    $cpt->SetImageSize(80,47);
    $cpt->SetCodeLength(6);
    $cpt->SetCode();
    $code=$cpt->GetSID();
    echo $code;
?>