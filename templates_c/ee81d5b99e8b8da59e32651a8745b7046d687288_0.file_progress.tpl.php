<?php
/* Smarty version 5.4.3, created on 2025-02-24 22:14:20
  from 'file:progress/progress.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67bcef3c6e6b95_18346959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee81d5b99e8b8da59e32651a8745b7046d687288' => 
    array (
      0 => 'progress/progress.tpl',
      1 => 1740435257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page/header.tpl' => 1,
  ),
))) {
function content_67bcef3c6e6b95_18346959 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\progress';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_110529204267bcef3c6c9d40_56582799', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_184221397867bcef3c6cc5d3_22669959', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'page/base.tpl', $_smarty_current_dir);
}
/* {block "title"} */
class Block_110529204267bcef3c6c9d40_56582799 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\progress';
?>
Progress<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_184221397867bcef3c6cc5d3_22669959 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\progress';
?>

    <?php $_smarty_tpl->renderSubTemplate('file:page/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h1 class="bbtitlemed">Progress</h1>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="progcontent">
                    <h2>Overall Progress</h2>
                    <div class="progress" id="progstyle" role="progressbar" style="height: 50px">
                        <div class="progress-bar" style="width: <?php echo (($tmp = $_smarty_tpl->getValue('progress') ?? null)===null||$tmp==='' ? 25 ?? null : $tmp);?>
%"></div>
                    </div>
                    <h2>Grades</h2>
                    <div class="row">
                        <div class="col">
                            <h3>Past Paper Average</h3>
                            <h4><?php echo (($tmp = $_smarty_tpl->getValue('past_paper_avg') ?? null)===null||$tmp==='' ? "--" ?? null : $tmp);?>
</h4>
                        </div>
                        <div class="col">
                            <h3>Test Average</h3>
                            <h4><?php echo (($tmp = $_smarty_tpl->getValue('test_avg') ?? null)===null||$tmp==='' ? "--" ?? null : $tmp);?>
</h4>
                        </div>
                        <div class="col">
                            <h3>Homework Average</h3>
                            <h4><?php echo (($tmp = $_smarty_tpl->getValue('homework_avg') ?? null)===null||$tmp==='' ? "--" ?? null : $tmp);?>
</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="predictprog">
                    <h3>Predicted Grade</h3>
                    <h4><?php echo (($tmp = $_smarty_tpl->getValue('predicted_grade') ?? null)===null||$tmp==='' ? "--" ?? null : $tmp);?>
</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <div class="topicmenu">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('topics'), 'topic');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('topic')->value) {
$foreach0DoElse = false;
?>
                        <div class="topicchunk">
                            <button type="button" class="collapsible"><h2><span class="arrow">&#9656;</span><?php echo $_smarty_tpl->getValue('topic')['name'];?>
 - <?php echo $_smarty_tpl->getValue('topic')['progress'];?>
%</h2></button>
                            <div class="content">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('topic')['subtopics'], 'subtopic');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('subtopic')->value) {
$foreach1DoElse = false;
?>
                                    <button type="button" class="collapsible"><h3><span class="arrow">&#9656;</span><?php echo $_smarty_tpl->getValue('subtopic')['name'];?>
 - <?php echo $_smarty_tpl->getValue('subtopic')['progress'];?>
%</h3></button>
                                    <div class="content">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('subtopic')['activities'], 'activity');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('activity')->value) {
$foreach2DoElse = false;
?>
                                            <h5><a href="<?php echo $_smarty_tpl->getValue('activity')['link'];?>
"><?php echo $_smarty_tpl->getValue('activity')['name'];?>
 - <?php echo $_smarty_tpl->getValue('activity')['progress'];?>
%</a></h5>
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
            <div class="col"></div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <button class="homebtn"><a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/dashboard.tpl">Home</a></button>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        document.addEventListener("DOMContentLoaded", function() {
            var coll = document.getElementsByClassName("collapsible");
            for (var i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    content.style.display = content.style.display === "block" ? "none" : "block";
                });
            }
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
