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
        {
            $result .= $str[$i-1];
        }
        return $result;
    }

    function CalcStrengthForLength($password)
    {
        return 4 * strlen($password);
    }

    function CalcStrengthForDigits($password)
    {
        return strlen( preg_replace('/[^0-9]/', '', $password) ) * 4;
    }
    
    function CalcStrengthForUpper($password)
    {
        $countUp = strlen( preg_replace('/[^A-Z]/', '', $password) );
        return (strlen($password) - $countUp) * 2;
    }
    
    function CalcStrengthForLower($password)
    {
        $countDown = strlen( preg_replace('/[^a-z]/', '', $password) );
        return (strlen($password) - $countDown) * 2;
    }
    
    function CalcStrengthOnlyChars($password)
    {
        if ( preg_replace('/[a-zA-Z]/', '', $password) == $password )
        {
            return strlen($password);
        }
    }
    
    function CalcStrengthOnlyDigits($password)
    {
        if ( preg_replace('/[0-9]/', '', $password) == $password )
        {
            return strlen($password);
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
                $value += $count;
            }
            
        }
        return $value;
    }

    function CalcPasswordStrength($password)
    {
        $strength = 0;
        $strength += CalcStrengthForLength($password);
        $strength += CalcStrengthForDigits($password);
        $strength += CalcStrengthForUpper($password);
        $strength += CalcStrengthForLower($password);
        $strength -= CalcStrengthOnlyChars($password);
        $strength -= CalcStrengthOnlyDigits($password);
        $strength -= CalcStrengthDupplicates($password);

        return $strength;
    }