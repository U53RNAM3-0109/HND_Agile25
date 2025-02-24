<?php
/* Smarty version 5.4.3, created on 2025-02-24 20:12:30
  from 'file:index/dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67bcd2ae950e18_17196629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0d0de5c49d25de8cd8883e58d0a94fe439625b' => 
    array (
      0 => 'index/dashboard.tpl',
      1 => 1740427949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/header.tpl' => 1,
  ),
))) {
function content_67bcd2ae950e18_17196629 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\index';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_150638487467bcd2ae94c1c5_99710325', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_177477427267bcd2ae94e9e2_69470073', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'page/base.tpl', $_smarty_current_dir);
}
/* {block "title"} */
class Block_150638487467bcd2ae94c1c5_99710325 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\index';
?>
Dashboard<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_177477427267bcd2ae94e9e2_69470073 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\index';
?>

    <?php $_smarty_tpl->renderSubTemplate('file:page/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="row">
        <h1 class="bbtitlelrg">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h2 class="dashsubtitle">Study</h2>
            <div class="studybuttons">
                <button><a href="#">Topics</a></button>
                <button><a href="#">Homework</a></button>
                <button><a href="#">Extra Reading</a></button>
                <button><a href="#">Upcoming Topics</a></button>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h2 class="dashsubtitle">Revise</h2>
            <div class="revisebuttons">
                <button><a href="#">Flash Cards</a></button>
                <button><a href="#">Mind Maps</a></button>
                <button><a href="#">Revision Links</a></button>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h2 class="dashsubtitle">Test</h2>
            <div class="testbuttons">
                <button><a href="#">Quiz</a></button>
                <button><a href="#">Past Paper</a></button>
            </div>
        </div>
        <div class="col-6"></div>
    </div>

    <div class="row">
        <div class="col-5"></div>
        <div class="col">
            <button class="homebtn"><a href="/progress.php">Progress</a></button>
        </div>
        <div class="col-5"></div>
    </div>
<?php
}
}
/* {/block "content"} */
}
