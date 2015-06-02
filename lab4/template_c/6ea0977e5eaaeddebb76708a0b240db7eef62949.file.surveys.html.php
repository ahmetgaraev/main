<?php /* Smarty version Smarty-3.1.21, created on 2015-06-02 07:36:42
         compiled from "D:\web\server2go_a22_psm\server2go\htdocs\main\lab4\template\surveys.html" */ ?>
<?php /*%%SmartyHeaderCode:22398556d40ea752f99-17004485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ea0977e5eaaeddebb76708a0b240db7eef62949' => 
    array (
      0 => 'D:\\web\\server2go_a22_psm\\server2go\\htdocs\\main\\lab4\\template\\surveys.html',
      1 => 1433186209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22398556d40ea752f99-17004485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'files' => 0,
    'folder' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_556d40ea791578_05018258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d40ea791578_05018258')) {function content_556d40ea791578_05018258($_smarty_tpl) {?><table class="table table-striped">
  <th>Surveys</th>
  <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
    <tr>
      <td><a href="survey_info.php?file=<?php echo $_smarty_tpl->tpl_vars['folder']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value;?>
</a></td>
    <tr>
  <?php } ?>
</table><?php }} ?>
