<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

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

    echo PasswordStrength( GetParamFromGet('password', '') );