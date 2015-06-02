<?php /* Smarty version Smarty-3.1.21, created on 2015-06-02 07:36:50
         compiled from "D:\web\server2go_a22_psm\server2go\htdocs\main\lab4\template\survey.html" */ ?>
<?php /*%%SmartyHeaderCode:12949556d40f2679927-58987172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aacc0cec3484c9b61ba7196abe5dda3b35ac23a' => 
    array (
      0 => 'D:\\web\\server2go_a22_psm\\server2go\\htdocs\\main\\lab4\\template\\survey.html',
      1 => 1433186195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12949556d40f2679927-58987172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'survey' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_556d40f26b8f48_34430311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d40f26b8f48_34430311')) {function content_556d40f26b8f48_34430311($_smarty_tpl) {?><h1>Survey</h1>
<table class="table">
  <th>Key</th>
  <th>Value</th>
  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['survey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 : </td><td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
    <tr>
  <?php } ?>
</table><?php }} ?>
