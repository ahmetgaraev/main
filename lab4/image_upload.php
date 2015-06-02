<?php
    require_once('include/common.inc.php');

    $vars = array();
    
    if ( isset($_FILES["userfile"]) ) {

        $imageinfo = getimagesize($_FILES['userfile']['tmp_name']);

        if ( $imageinfo['mime'] != 'image/jpeg' ) 
        {
            $vars['msg'] = "Sorry, we only accept JPEG images\n";
            buildLayout('image_upload.html', $vars);
            exit;
        }

        $uploaddir = 'uploads/images/';
        $uploadfile = $uploaddir . date('YmdHis') . rand(10,100) . '.jpeg';

        if ( move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) )
        {
            $vars['msg'] = "File is valid, and was successfully uploaded.\n";
        } 
        else 
        {
            $vars['msg'] = "File uploading failed.\n";
        }
    }

    buildLayout('image_upload.html', $vars);