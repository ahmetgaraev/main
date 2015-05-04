<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

    function PasswordStrength($password)
    {
        $length = strlen($password);
        $point = 0;
        $point += 4 * $length;
        $point += ( strlen( preg_replace('/[^\d]/', '', $password) ) ) * 4;
        $count_up = strlen( preg_replace('/[^A-Z]/', '', $password) );
        $point += ($length - $count_up) * 2;
        $count_down = strlen( preg_replace('/[^a-z]/', '', $password) );
        $point += ($length - $count_down) * 2;

        if ( preg_replace('/[a-zA-Z]/', '', $password) != $password )
        {
            $point -= $length;
        }

        if ( preg_replace('/[0-9]/', '', $password) != $password )
        {
            $point -= $length;
        }

        $arr_chars = count_chars($password, 1);

        foreach ($arr_chars as $count) 
        {
            if ($count > 1)
            {
                $point -= $count;
            }
            
        }

        echo $point;
    }

    echo PasswordStrength( GetParamFromGet('password', '') );