<?php
date_default_timezone_set("Europe/London");


require('smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

include("MysqliDb.php");

$db = new Mysqlidb('localhost', 'cssoc_event', 's-vrGSwkGa@@', 'cssoc_even_oct');


function browser_redirect($url){
  $url = $url ? $url : "index.php";
  header("Location: ".$url);
}

?>