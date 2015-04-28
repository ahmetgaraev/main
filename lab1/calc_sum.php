<?php
    header("Content-Type: text/plain");
    if (is_numeric($_GET["arg1"]) & is_numeric($_GET["arg2"])) { echo $_GET["arg1"] + $_GET["arg2"]; }

    //if (isset($_GET["arg1"],$_GET["arg2"])) & (is_numeric($_GET["arg1"]) & is_numeric($_GET["arg2"])) { echo $_GET["arg1"] + $_GET["arg2"]; }

    //$arg1 = isset($_GET["arg1"]) ? $_GET["arg1"] : 0;
    //$arg2 = isset($_GET["arg2"]) ? $_GET["arg2"] : 0;
    //echo $arg1 + $arg2;    