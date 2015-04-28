<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');
    echo Revers(GetParamFromGet('str', ''));