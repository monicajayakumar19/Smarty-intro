<?php
require_once("settings.php");
$smarty->assign('title','REGISTRATION');


$smarty->display('form.tpl'); 
$smarty->display('insert.tpl'); 

?>
