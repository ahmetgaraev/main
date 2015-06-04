<?php
    require_once('include/common.inc.php');

    $vars = array();

    $vars = UploadImage($vars);

    buildLayout('image_upload.html', $vars);