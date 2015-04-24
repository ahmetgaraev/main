<?php
    header("Content-Type: text/plain");
    echo print_r($_SERVER['HTTP_ACCEPT']);
    echo "\n";
    echo print_r($_SERVER['QUERY_STRING']);