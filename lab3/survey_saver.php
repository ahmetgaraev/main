<?php
    header("Content-Type: text/plain");
    require_once('include/common.inc.php');

    $survey = GetSurveyFromRequest();

    if ( !empty($survey) )
    {
         SaveSurveyToFile($survey);
    }