<?php
require_once 'libs/Smarty.class.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');

$kwota = $_REQUEST['kwota'] ?? null;
$lata = $_REQUEST['lata'] ?? null;
$opro = $_REQUEST['opro'] ?? null;

$messages = [];

if (!isset($kwota) || $kwota == "") $messages[] = "Nie podano kwoty.";
if (!isset($lata) || $lata == "") $messages[] = "Nie podano liczby lat.";
if (!isset($opro) || $opro == "") $messages[] = "Nie podano oprocentowania.";

if (empty($messages)) {
    if (!is_numeric($kwota) || $kwota <= 0) $messages[] = "Kwota musi być liczbą dodatnią.";
    if (!is_numeric($lata) || $lata <= 0) $messages[] = "Liczba lat musi być liczbą dodatnią.";
    if (!is_numeric($opro) || $opro < 0) $messages[] = "Oprocentowanie musi być liczbą dodatnią bądź 0.";
}

if (empty($messages)) {
    $kwota = floatval($kwota);
    $lata = intval($lata);
    $procent = floatval($opro);

    $miesiace = $lata * 12;
    $oprocentowanie_msc = ($procent / 100) / 12;

    if ($oprocentowanie_msc > 0) {
        $result = $kwota * $oprocentowanie_msc / (1 - pow(1 / (1 + $oprocentowanie_msc), $miesiace));
    } else {
        $result = $kwota / $miesiace;
    }
}

$smarty->assign('form', ['kwota' => $kwota, 'lata' => $lata, 'opro' => $opro]);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);

$smarty->display('calc_view.tpl');