<?php
    require_once('include/common.inc.php');

    $vars = array();
    
    buildLayout('image_upload.html', $vars);

    if (isset($_FILES["userfile"])) {

        $imageinfo = getimagesize($_FILES['userfile']['tmp_name']);

        if ( $imageinfo['mime'] != 'image/jpeg' ) 
        {
            echo "Sorry, we only accept JPEG images\n";
            exit;
        }

        $blacklist = array(".php", ".phtml", ".php3", ".php4");

        foreach ($blacklist as $item) 
        {
            if(preg_match("/$item\$/i", $_FILES['userfile']['name']))
            {
                echo "We do not allow uploading PHP files\n";
                exit;
            }
        }

        $uploaddir = 'uploads/images/';
        $uploadfile = $uploaddir . date('YmdHis') . rand(10,100) . '.jpeg';

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
        {
           echo "File is valid, and was successfully uploaded.\n";
        } 
        else 
        {
             echo "File uploading failed.\n";
        }
    }