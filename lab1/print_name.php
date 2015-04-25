<?php
    header("Content-Type: text/plain");
    if (isset($_GET['name']))
    {
        echo "Hello, Dear {$_GET['name']} !";
    }