<?php /* Smarty version Smarty-3.1.21, created on 2015-06-02 07:36:39
         compiled from "D:\web\server2go_a22_psm\server2go\htdocs\main\lab4\template\table_sin.html" */ ?>
<?php /*%%SmartyHeaderCode:21817556d40e79b7405-17719162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ecd3a7609b3a3dde0baef90dc20def047857884' => 
    array (
      0 => 'D:\\web\\server2go_a22_psm\\server2go\\htdocs\\main\\lab4\\template\\table_sin.html',
      1 => 1432488994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21817556d40e79b7405-17719162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table' => 0,
    'minute' => 0,
    'degree' => 0,
    'degrees' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_556d40e7a09708_47008573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d40e7a09708_47008573')) {function content_556d40e7a09708_47008573($_smarty_tpl) {?><h1>Table sin</h1>
<table>
  <tr>
    <td class="scale_table name">sin</td>
    <?php  $_smarty_tpl->tpl_vars['minutes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['minutes']->_loop = false;
 $_smarty_tpl->tpl_vars['minute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['minutes']->key => $_smarty_tpl->tpl_vars['minutes']->value) {
$_smarty_tpl->tpl_vars['minutes']->_loop = true;
 $_smarty_tpl->tpl_vars['minute']->value = $_smarty_tpl->tpl_vars['minutes']->key;
?>
      <td class="scale_table minute"><?php echo $_smarty_tpl->tpl_vars['minute']->value;?>
'</td>
    <?php } ?>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['degrees'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['degrees']->_loop = false;
 $_smarty_tpl->tpl_vars['degree'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['degrees']->key => $_smarty_tpl->tpl_vars['degrees']->value) {
$_smarty_tpl->tpl_vars['degrees']->_loop = true;
 $_smarty_tpl->tpl_vars['degree']->value = $_smarty_tpl->tpl_vars['degrees']->key;
?>
    <tr>
      <td class="scale_table degree"><?php echo $_smarty_tpl->tpl_vars['degree']->value;?>
&deg;</td>
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['minute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['degrees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['minute']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
      <?php } ?> 
    </tr>
  <?php } ?>
</table><?php }} ?>
