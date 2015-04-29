<?php
    header("Content-Type: text/plain");
    if (isset($_GET["arg1"], $_GET["arg2"])) && (is_numeric($_GET["arg1"]) && is_numeric($_GET["arg2"])) 
    { 
        echo $_GET["arg1"] + $_GET["arg2"]; 
    }    