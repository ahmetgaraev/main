<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

    $length = strlen($password);
    $point = 0;

    function CalcPasswordStrength($password)
    {
        $point += CalcStrengthForLength($password);
        $point += CalcStrengthForDigits($password);
        $point += CalcStrengthForUpper($password);
        $point += CalcStrengthForLower($password);
        $point += CalcStrengthOnlyChars($password);
        $point += CalcStrengthOnlyDigits($password);
        $point += CalcStrengthDupplicates($password);
        
        return $point;
    }

    function CalcStrengthForLength($password)
    {
        return 4 * $length;
    }

    function CalcStrengthForDigits($password)
    {
        return strlen( preg_replace('/[^\d]/', '', $password) ) * 4;
    }
    
    function CalcStrengthForUpper($password)
    {
        $count_up = strlen( preg_replace('/[^A-Z]/', '', $password) );
        return ($length - $count_up) * 2;
    }
    
    function CalcStrengthForLower($password)
    {
        $count_down = strlen( preg_replace('/[^a-z]/', '', $password) );
        return ($length - $count_down) * 2;
    }
    
    function CalcStrengthOnlyChars($password)
    {
        if ( preg_replace('/[a-zA-Z]/', '', $password) != $password )
        {
            return (-$length);
        }
    }
    
    function CalcStrengthOnlyDigits($password)
    {
        if ( preg_replace('/[0-9]/', '', $password) != $password )
        {
            return (-$length);
        }
    }
    
    function CalcStrengthDupplicates($password)
    {
        $value = 0;
        $arrChars = count_chars($password, 1);

        foreach ($arrChars as $count) 
        {
            if ($count > 1)
            {
                $value -= $count;
            }
            
        }
        return $value;
    }

    echo CalcPasswordStrength( GetParamFromGet('password', '') );