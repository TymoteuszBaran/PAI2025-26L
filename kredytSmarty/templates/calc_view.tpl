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
                        <form action="calc.php" method="post">
                            <div class="row gtr-50">
                                <div class="col-12">
                                    Kwota: <input type="text" name="kwota" value="{$form['kwota']|default:''}">
                                </div>
                                <div class="col-12">
                                    Lata: <input type="text" name="lata" value="{$form['lata']|default:''}">
                                </div>
                                <div class="col-12">
                                    Oprocentowanie: <input type="text" name="opro" value="{$form['opro']|default:''}">
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Oblicz" class="button style1" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>

                        {if !empty($messages)}
                            <div style="margin: 20px 0; padding: 10px; background: #ffeeee; border: 1px solid #ff0000; color: #cc0000;">
                                <ol>
                                {foreach $messages as $msg}
                                    <li>{$msg}</li>
                                {/foreach}
                                </ol>
                            </div>
                        {/if}

                        {if $result !== null}
                            <header class="style1">
                                <h1>Rata miesięczna: <span style="color: #2e3436;">{$result}</span></h1>
                            </header>
                        {/if}
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
    <script src="assets/js/main.js"></script>
</body>
</html>