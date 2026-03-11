<?php
// ! ECHO
// 1. pobrać parametry
$a = $_REQUEST["x"] ?? ""; //deklaracja zmiennej i pobranie wartości z tablicy asocjacyjnej
$b = $_REQUEST["y"] ?? "";
$c = $_REQUEST["z"] ?? "";

// 2. walidacja
$error = "";
if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
	$error = "Wszystkie wartości muszą być liczbami.";
}

// 3. wykonanie zadania
if ($error == "") {
	$kwota = floatval($a);
	$lata = intval($b);
	$procent = floatval($c);

	$miesiace = $lata * 12;
	$oprocentowanie_msc = ($procent / 100) / 12;

	if ($oprocentowanie_msc > 0) {
		$suma = $kwota * $oprocentowanie_msc / (1 - pow(1 / (1 + $oprocentowanie_msc), $miesiace));
	} else {
		$suma = $kwota / $miesiace;
	}
}

// 4. wyświetlenie wyniku / wywołanie widoku
//echo "Wynik = " . $suma;
include "calc_view.php";
?>