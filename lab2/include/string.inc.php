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