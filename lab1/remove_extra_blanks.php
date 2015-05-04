<?php
    header("Content-Type: text/plain");
    $arr = explode(" ", isset($_GET['text']) ? $_GET['text'] : '');
    $result = '';
    foreach($arr as $value)
    {
        if ($value)
        {
            $result .= ' ' . $value;
        }
    }
    echo trim($result);