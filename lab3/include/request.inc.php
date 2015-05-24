<?php
    function GetParamFromGet($paramName, $defaultValue = '') 
    {
        return $result = isset($_GET[$paramName]) ? $_GET[$paramName] : $defaultValue;
    }