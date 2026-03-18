<!DOCTYPE HTML>
<html>
	<head>
		<title>Kalkulator Rat</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<section id="header" class="wrapper">
					<div id="logo">
						<h1><a href="index.php">Kalkulator Rat</a></h1>
					</div>
				</section>

			<div id="main" class="wrapper style2">
					<div class="title">Formularz</div>
					<div class="container">
						<div id="content">
							<article class="box post">
								
								<form action="calc.php" method="POST">
									<div class="row gtr-50">
										<div class="col-12">
											Kwota: <input type="text" name="x" value="<?php echo $a ?? '' ?>">
										</div>
										<div class="col-12">
											Lata: <input type="text" name="y" value="<?php echo $b ?? '' ?>">
										</div>
										<div class="col-12">
											Oprocentowanie: <input type="text" name="z" value="<?php echo $c ?? '' ?>">
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" value="Oblicz" class="button style1" /></li>
											</ul>
										</div>
									</div>
								</form>

								<?php if (isset($error) && $error != ""): ?>
									<div style="color: red; font-weight: bold; margin-top: 10px;"> 
										<?php echo $error; ?> 
									</div>
								<?php endif; ?>

								<header class="style1">
									<h1>
									<?php
									if (isset($suma)){
										echo "Rata miesięczna = $suma";
									}
									?>
									</h1>
								</header>

							</article>
						</div>
					</div>
				</div>

			<section id="footer" class="wrapper">
					<div id="copyright">
						<ul>
							<li>Kalkulator Rat.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

		</div>

		<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>