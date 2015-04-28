<?php
    function Last($str)
    {
        return substr($str, -1);
    }
    function WithoutLast($str)
    {
        return substr($str, 0, strlen($str)-1);
    }
    function Revers($str)
    {
        $result;
        for ($i = strlen($str); $i > 0; $i--) {
            $result .= $str[$i-1];
        }
        return $result;
    }
    function SurveySaver($first_name, $last_name, $email, $age)
    {
        $data = "First Name: {$first_name},\r\nLast Name: {$last_name},\r\nEmail: {$email},\r\nAge: {$age}";
        if (!is_dir("data")) mkdir("data");
        $f = fopen("data/{$email}.txt", "w");
        fwrite($f, $data);
        fclose($f);
    }
    function SurveyInfo($email)
    {
        if (file_exists("data/{$email}.txt")) {
            $file = file_get_contents("data/{$email}.txt", FILE_USE_INCLUDE_PATH);
            echo $file;
        }
    }