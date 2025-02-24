<?php
/* Smarty version 5.4.3, created on 2025-02-24 22:03:34
  from 'file:topics/topics.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67bcecb6453540_67321508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fce20838bc3678ee5258ddfdec99c26b17c2088' => 
    array (
      0 => 'topics/topics.tpl',
      1 => 1740427920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/header.tpl' => 1,
  ),
))) {
function content_67bcecb6453540_67321508 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\topics';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_24975307767bcecb64389a4_14993342', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3086851767bcecb643b3c3_96298875', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'page/base.tpl', $_smarty_current_dir);
}
/* {block "title"} */
class Block_24975307767bcecb64389a4_14993342 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\topics';
?>
Topics<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_3086851767bcecb643b3c3_96298875 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\topics';
?>

    <?php $_smarty_tpl->renderSubTemplate('file:page/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h1 class="bbtitlelrg">Topics</h1>
        </div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="topicmenu">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('topics'), 'topic');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('topic')->value) {
$foreach0DoElse = false;
?>
                    <div class="topicchunk">
                        <button type="button" class="collapsible">
                            <h2><span class="arrow">&#9656;</span><?php echo $_smarty_tpl->getValue('topic')['name'];?>
</h2>
                        </button>
                        <div class="content">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('topic')['subtopics'], 'subtopic');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subtopic')->value) {
$foreach1DoElse = false;
?>
                                <button type="button" class="collapsible">
                                    <h3><span class="arrow">&#9656;</span><?php echo $_smarty_tpl->getValue('subtopic')['name'];?>
</h3>
                                </button>
                                <div class="content">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subtopic')['resources'], 'resource');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('resource')->value) {
$foreach2DoElse = false;
?>
                                        <h5><a href="<?php echo $_smarty_tpl->getValue('resource')['link'];?>
"><?php echo $_smarty_tpl->getValue('resource')['name'];?>
</a></h5>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="col"></div>
    </div>
<?php
}
}
/* {/block "content"} */
}
