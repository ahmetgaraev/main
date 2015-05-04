<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

    function PasswordStrength($password)
    {
        echo "password: {$password}\r\n";

        $length = strlen($password);
        echo "\r\nlength: {$length}\r\n";

        //1) Изначально считаем надежность равной 0.
        $point = 0;

        //2) К надежности прибавляется (4*n), где n - количество всех симоволов пароля
        $point_length = 4 * $length;
        echo "point_length: {$point_length}\r\n";

        //3) К надежности прибавляется +(n*4), где n - количество цифр в пароле
        $count_digits = strlen( preg_replace('/[^\d]/', '', $password) );
        $point_digits = $count_digits * 4;
        echo "\r\ncount_digits: {$count_digits}\r\n";
        echo "point_digits: {$point_digits}\r\n";

        //4) К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в верхнем регистре
        $count_up = strlen( preg_replace('/[^A-Z]/', '', $password) );
        $point_up = ($length - $count_up) * 2;
        echo "\r\ncount_up: {$count_up}\r\n";
        echo "point_up: {$point_up}\r\n";

        //5) К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в нижнем регистре
        $count_down = strlen( preg_replace('/[^a-z]/', '', $password) );
        $point_down = ($length - $count_down) * 2;
        echo "\r\ncount_down: {$count_down}\r\n";
        echo "point_down: {$point_down}\r\n";

        //6) Если пароль состоит только из букв вычитаем число равное количеству символов.
        $all_letters = strlen( preg_replace('/[a-zA-Z]/', '', $password) );
        $point_all_letters = 0;
        if ($all_letters > 0)
        {
        	$point_all_letters = (-$length);
        }
        echo "\r\nall_letters: {$all_letters}\r\n";
        echo "point_all_letters: {$point_all_letters}\r\n";

        //7) Если пароль состоит только из цифр вычитаем число равное количеству символов.
        $all_digits = strlen( preg_replace('/[0-9]/', '', $password) );
        $point_all_digits = 0;
        if ($all_digits > 0)
        {
        	$point_all_digits = (-$length);
        }
        echo "\r\nall_digits: {$all_digits}\r\n";
        echo "point_all_digits: {$point_all_digits}\r\n";

        //8) За каждый повторяющийся символ в пароле вычитается количество повторяющихся символов
        //Например: abcd1a 
        //вычитаем -2 поскольку символ a встречается дважды.
        $arr_chars = count_chars($password, 1);
        $point_repeat = 0;
        foreach ($arr_chars as $count) 
        {
            if ($count > 1)
            {
                $point_repeat -= $count;
            }
            
        }
        echo "\r\npoint_repeat: {$point_repeat}\r\n";

        //point point_result
        $point += $point_length + $point_digits + $point_up + $point_down + $point_all_letters + $point_all_digits + $point_repeat;
        echo "\r\npoint_result: $point";
    }

    echo PasswordStrength( GetParamFromGet('password', '') );