<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

    $email = GetParamFromGet('email', '');

    function SurveyInfo($email)
    {
        if ( file_exists("data/{$email}.txt") )
        {
            $file = file_get_contents("data/{$email}.txt", FILE_USE_INCLUDE_PATH);
            echo $file;
        }
    }

    if (strpos($email, '@')!==false) 
    {
        SurveyInfo($email);
    }