<?php
/* Smarty version 5.4.3, created on 2025-02-24 21:27:02
  from 'file:login/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67bce426ce0810_52502112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f657614ce47557efad669b1ada8e142cbd81fff' => 
    array (
      0 => 'login/login.tpl',
      1 => 1740432417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67bce426ce0810_52502112 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\login';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_49415697667bce426cdd122_15688207', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_212284157967bce426cdf8f0_33719194', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'page/base.tpl', $_smarty_current_dir);
}
/* {block "title"} */
class Block_49415697667bce426cdd122_15688207 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\login';
?>
Login<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_212284157967bce426cdf8f0_33719194 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\repos\\HND_Agile25\\templates\\login';
?>

    <div class="container py-5">
        <div class="logincontent">
            <div class="d-flex justify-content-center">
                <img src="/assets/img/logo1.png" class="text-center" height="250" width="250" alt="logo">
            </div>
            <h1 class="bbtitle">Login</h1>
            <div class="container text-center">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="signinemail">Email address</label>
                            <div class="d-flex justify-content-center">
                                <input type="email" id="signinemail" class="form-control signinfield" placeholder="Email Address"/>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="signinpass">Password</label>
                            <div class="d-flex justify-content-center">
                                <input type="password" id="signinpass" class="form-control signinfield" placeholder="Password"/>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" id="signinbtn">Sign In</button>
                        <button type="submit" class="btn btn-primary btn-lg" id="createacctbtn">Create Account</button>
                    </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
