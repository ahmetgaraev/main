<?php
    header("Content-Type: text/plain");
	$str_1 = $_GET['arg1'];
	$str_2 = $_GET['arg2'];
	$str_3 = $str_1 + $str_2;
    echo $str_3;
	//remove_extra_blanks.php?text=10