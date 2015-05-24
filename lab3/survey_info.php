<?php

    require 'include/common.inc.php';
    $data =  unserialize( file_get_contents($_GET['file']) );
    
    $vars = array
    (
        'survey' => $data
    );

    buildLayout('survey.html', $vars);