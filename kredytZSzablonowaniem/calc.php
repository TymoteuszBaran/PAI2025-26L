<?php
// ! ECHO
// 1. pobrać parametry
$a = $_REQUEST["x"] ?? ""; //deklaracja zmiennej i pobranie wartości z tablicy asocjacyjnej
$b = $_REQUEST["y"] ?? "";
$c = $_REQUEST["z"] ?? "";

// 2. walidacja
$error = "";

// Sprawdzenie kwoty (x)
if ($a == "") {
	$error .= "Nie podano kwoty. <br />";
} else if (!is_numeric($a)) {
	$error .= "Kwota musi być liczbą. <br />";
} else if (floatval($a) <= 0) {
	$error .= "Kwota musi być większa od zera. <br />";
}

// Sprawdzenie lat (y)
if ($b == "") {
	$error .= "Nie podano liczby lat. <br />";
} else if (!is_numeric($b)) {
	$error .= "Liczba lat musi być liczbą. <br />";
} else if (intval($b) <= 0) {
	$error .= "Liczba lat musi być większa od zera. <br />";
}

// Sprawdzenie oprocentowania (z)
if ($c == "") {
	$error .= "Nie podano oprocentowania. <br />";
} else if (!is_numeric($c)) {
	$error .= "Oprocentowanie musi być liczbą. <br />";
} else if (floatval($c) < 0) {
	$error .= "Oprocentowanie nie może być ujemne. <br />";
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
		$suma = round($suma, 2);
	} else {
		$suma = $kwota / $miesiace;
		$suma = round($suma, 2);
	}
}

// 4. wyświetlenie wyniku / wywołanie widoku
//echo "Wynik = " . $suma;
include "calc_view.php";
?>