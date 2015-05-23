<?php

    require_once('include/common.inc.php');

    $vars = array
    (
        'header' => 'Header',
        'sidebar' => 'Sidebar',
        'content' => 'Content',
        'footer' => 'Footer'
    );

    buildLayout('index.html', $vars);