<?php /* Smarty version Smarty-3.1.21, created on 2015-06-02 07:36:37
         compiled from "D:\web\server2go_a22_psm\server2go\htdocs\main\lab4\template\survey_form.html" */ ?>
<?php /*%%SmartyHeaderCode:899556d40e585e830-56957655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6444a0436b40fda5b3d76a4fe4364492a201d349' => 
    array (
      0 => 'D:\\web\\server2go_a22_psm\\server2go\\htdocs\\main\\lab4\\template\\survey_form.html',
      1 => 1433184524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '899556d40e585e830-56957655',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_556d40e58a2098_95163104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d40e58a2098_95163104')) {function content_556d40e58a2098_95163104($_smarty_tpl) {?><form class="form-inline" action="survey_saver.php" method="get">
  <h2>Bootstrap</h2>
  <div class="form-group">
    <label class="sr-only" for="exampleInputName1">First Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="first_name" placeholder="First Name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputName1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="last_name" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="number" class="form-control" id="exampleInputPassword3" name="age" placeholder="Age">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Отправить</button>
</form><?php }} ?>
