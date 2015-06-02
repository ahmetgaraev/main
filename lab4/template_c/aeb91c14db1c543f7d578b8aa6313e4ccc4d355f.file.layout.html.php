<?php /* Smarty version Smarty-3.1.21, created on 2015-06-02 07:36:37
         compiled from "D:\web\server2go_a22_psm\server2go\htdocs\main\lab4\template\layout.html" */ ?>
<?php /*%%SmartyHeaderCode:6400556d40e58b10c0-50023654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb91c14db1c543f7d578b8aa6313e4ccc4d355f' => 
    array (
      0 => 'D:\\web\\server2go_a22_psm\\server2go\\htdocs\\main\\lab4\\template\\layout.html',
      1 => 1433166053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6400556d40e58b10c0-50023654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_556d40e58bdde3_67499004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d40e58bdde3_67499004')) {function content_556d40e58bdde3_67499004($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Template engine</title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="bootstrap/bootstrap-3.3.4-dist/css/bootstrap.css" type="text/css"/>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Header</h1>
    </div>
    <div class="container_center">
      <div class="sidebar">
        <h2>Sidebar</h2>
          <ul class="nav nav-pills nav-stacked">
            <li><a href="table_sin.php">Table Sin</a></li>
            <li><a href="survey_form.php">Survey Form</a></li>
            <li><a href="surveys.php">Surveys</a></li>
            <li><a href="image_upload.php">Image Upload</a></li>
            <li><a href="images.php">Images Gallery</a></li>
          </ul>
      </div>
      <div class="content">
        <h2>Content</h2>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

      </div>
    </div>
    <div class="footer">
      <h2>Footer</h2>
    </div>
  </div>
</body>
</html><?php }} ?>
