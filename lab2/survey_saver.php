<?php
    require_once('include/common.inc.php');
    $first_name = GetParamFromGet('first_name', '');
    $last_name = GetParamFromGet('last_name', '');
    $email = GetParamFromGet('email', '');
    $age = GetParamFromGet('age', 0);
    if ( strpos($email, '@')!==false ) SurveySaver($first_name, $last_name, $email, $age);