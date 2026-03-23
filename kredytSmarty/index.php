<?php
require_once 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');

$smarty->assign('form', []);
$smarty->assign('result', null);
$smarty->assign('messages', []);
$smarty->display('calc_view.tpl');