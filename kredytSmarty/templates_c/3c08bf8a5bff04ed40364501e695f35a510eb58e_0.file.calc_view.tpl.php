<?php
/* Smarty version 4.5.4, created on 2026-03-23 11:29:42
  from 'C:\xampp\htdocs\kredytZSzablonowaniem\templates\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_69c11616abaaa8_19329954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c08bf8a5bff04ed40364501e695f35a510eb58e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredytZSzablonowaniem\\templates\\calc_view.tpl',
      1 => 1774261746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69c11616abaaa8_19329954 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
                                    Kwota: <input type="text" name="kwota" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value['kwota'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <div class="col-12">
                                    Lata: <input type="text" name="lata" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value['lata'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <div class="col-12">
                                    Oprocentowanie: <input type="text" name="opro" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['form']->value['opro'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li><input type="submit" value="Oblicz" class="button style1" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>

                        <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)) {?>
                            <div style="margin: 20px 0; padding: 10px; background: #ffeeee; border: 1px solid #ff0000; color: #cc0000;">
                                <ol>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ol>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['result']->value !== null) {?>
                            <header class="style1">
                                <h1>Rata miesięczna: <span style="color: #2e3436;"><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</span></h1>
                            </header>
                        <?php }?>
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

    <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
