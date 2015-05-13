<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

    function GetSurveyFromRequest()
    {
        $info = array
        (
            'first_name' => GetParamFromGet('first_name', ''),
            'last_name' => GetParamFromGet('last_name', ''),
            'email' => GetParamFromGet('email', ''),
            'age' => GetParamFromGet('age', '')
        );
        return $info;
    }

    function CreateSurveyDir()
    {
        if ( !is_dir("data") )
        {
            mkdir("data");
        }
    }

    function GetSurveyFilePath($email)
    {
        CreateSurveyDir();
        return dirname(__FILE__) . '\\data\\' . $email . '.txt';
    }

    function SaveSurveyToFile($survey)
    {
        $path = GetSurveyFilePath($survey['email']);
        $data = serialize($survey);

        $handle = fopen($path, 'a');
        fwrite($handle, $data);
        fclose($handle);
    }

    $survey = GetSurveyFromRequest();

    if ( !empty($survey) )
    {
         SaveSurveyToFile($survey);
    }