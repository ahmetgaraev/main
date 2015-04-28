<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');
    $email = GetParamFromGet('email', '');
    if (strpos($email, '@')!==false) SurveyInfo($email);