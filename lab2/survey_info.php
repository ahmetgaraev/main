<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

    $email = GetParamFromGet('email', '');
    $path = dirname(__FILE__) . "\\data\\" . $email . ".txt";

    if ( file_exists($path) )
    {   
        $fh = fopen($path, "r");

        if ($fh)
        {   
            $data = unserialize( file_get_contents($path) );
            fclose($fh);

            echo 'First name: ' . $data['first_name'] . "\r\n";
            echo 'Last name: ' . $data['last_name'] . "\r\n";
            echo 'Email: ' . $data['email'] . "\r\n";
            echo 'Age: ' . $data['age'] . "\r\n";
        }
    }