<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');
    
    $first_name = GetParamFromGet('first_name', '');
    $last_name = GetParamFromGet('last_name', '');
    $email = GetParamFromGet('email', '');
    $age = GetParamFromGet('age', 0);
    $age = is_int($age) ? is_int($age) : 0;

    function SurveySaver($first_name, $last_name, $email, $age)
    {
        $data = "First Name: {$first_name},\r\nLast Name: {$last_name},\r\nEmail: {$email},\r\nAge: {$age}";
        if (!is_dir("data"))
        {
            mkdir("data");
        }
        $f = fopen("data/{$email}.txt", "w");
        fwrite($f, $data);
        fclose($f);
    }

    if ( strpos($email, '@')!==false ) 
    {
        SurveySaver($first_name, $last_name, $email, $age);
    }