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
        for ($i = strlen($str); $i > 0; $i--) 
            $result .= $str[$i-1];
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
    function PasswordStrength($password)
    {
            echo "password: {$password}\r\n";
            $point = 0;
            $point += (4*strlen($password));
            for ($i = strlen($password); $i > 0; $i--) 
                if (is_numeric($password[$i-1])) 
                    $point += 4;
            echo "point: $point";
    }
    /*
    4) К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в верхнем регистре
    5) К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в нижнем регистре
    6) Если пароль состоит только из букв вычитаем число равное количеству символов.
    7) Если пароль состоит только из цифр вычитаем число равное количеству символов.
    8) За каждый повторяющийся символ в пароле вычитается количество повторяющихся символов
    Пароль может состоять только из английских 
    символов в верхнем и нижнем регистрах, а также из цифр.
    */