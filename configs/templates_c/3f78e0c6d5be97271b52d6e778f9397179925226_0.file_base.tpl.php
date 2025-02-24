<?php
/* Smarty version 5.4.3, created on 2025-02-24 20:24:01
  from 'file:page/base.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67bcd5619f36a5_76537846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f78e0c6d5be97271b52d6e778f9397179925226' => 
    array (
      0 => 'page/base.tpl',
      1 => 1740428639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67bcd5619f36a5_76537846 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\page';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <title><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_212260248667bcd5619e9c14_79286419', "title");
?>
</title>
</head>
<body>
    <div class="container-fluid">

        <main>
            <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_171721408167bcd5619f22d8_70569088', "content");
?>

        </main>

    </div>
<?php }
/* {block "title"} */
class Block_212260248667bcd5619e9c14_79286419 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\page';
echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? "BTEC Bytes" ?? null : $tmp);
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_171721408167bcd5619f22d8_70569088 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\page';
}
}
/* {/block "content"} */
}
