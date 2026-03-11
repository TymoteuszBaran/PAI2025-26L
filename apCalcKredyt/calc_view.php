<html>
<head></head>

<body>

<form action="calc.php" method="POST">
Kwota: <input type="text" name ="x" value="<?php echo $a ?? '' ?>"> <br>
Lata: <input type="text" name ="y" value="<?php echo $b ?? '' ?>"> <br>
Oprocentowanie: <input type="text" name ="z" value="<?php echo $c ?? '' ?>"> <br>
<input type="submit">
</form>
<?php if (isset($error) && $error != ""): ?>
	<div style="color: red;"> <?php echo $error; ?> </div>
<?php endif; ?>
<h1>
<?php
if (isset($suma)){
	echo "Rata miesięczna = $suma";
}
?>
</h1>

</body>
</html>