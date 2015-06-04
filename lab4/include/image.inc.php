<?php
    function UploadImage($vars)
    {
        if ( isset($_FILES["userfile"]) ) 
        {

            $imageinfo = getimagesize($_FILES['userfile']['tmp_name']);

            $isImage = ( ($imageinfo['mime'] == 'image/jpeg') || ($imageinfo['mime'] == 'image/png') || ($imageinfo['mime'] == 'image/gif') );

            if ( $isImage )
            {
                $vars['msg'] = "File is image\n";
            }
            else
            {
                $vars['msg'] = "Sorry, we only accept png, jpeg, gif images\n";
                buildLayout('image_upload.html', $vars);
                exit;
            }

            $uploaddir = 'uploads/images/';
            $uploadfile = $uploaddir . date('YmdHis') . rand(10,100);

            if ( file_exists($uploaddir) ) 
            {
                if ( move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) )
                {
                    $vars['msg'] = "File is valid, and was successfully uploaded.\n";
                } 
                else 
                {
                    $vars['msg'] = "File uploading failed.\n";
                }
            }
        }
        return $vars;
    }

    function DeleteImage($vars)
    {
        if ( isset( $_GET['path'] ) && file_exists( $_GET['path'] ) )
        {
            unlink( $_GET['path'] );
            $vars['msg'] = "Delete files";
        }
        else
        {
            $vars['msg'] = "";
        }
        return $vars;
    }