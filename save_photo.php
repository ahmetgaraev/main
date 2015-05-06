<?php
    $succes = false;
    if ( isset($_FILES['photo']) )
    {
        $fileInfo = $_FILES['photo'];
        if ($fileInfo['error'] == UPLOAD_ERR_OK)
        {
            $newFileName = uniqid() . '.' . pathinfo($fileInfo['name'], PATHINFO_EXTENSION);
            $destinationPath = ROOT_DIR . '/upload/photo' . $newFileName;
            $success = move_uploaded_file($fileInfo['tmo_name'], $destinationPath);
        }
    }
    echo ($success)? "File was uploaded!" : "File wasn't uploaded.";