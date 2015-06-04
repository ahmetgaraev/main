<?php
    require_once('include/common.inc.php');

    $vars = array();

    $vars = DeleteImage($vars);

    $folder = 'uploads/images';
    $files = scandir($folder);
    unset($files[0], $files[1]);

    $vars['folder'] = $folder;
    $vars['files']  = $files;

    buildLayout('images.html', $vars);