<?php
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
        return dirname(__FILE__) . '\\..\\data\\' . $email . '.txt';
    }

    function SaveSurveyToFile($survey)
    {
        CreateSurveyDir();
        $path = GetSurveyFilePath($survey['email']);
        $data = serialize($survey);

        $handle = fopen($path, 'a');
		if ($handle)
		{
            fwrite($handle, $data);
            fclose($handle);
        }
    }