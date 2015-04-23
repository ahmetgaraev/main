<?php
    header("Content-Type: text/plain");
	$str_1 = $_GET['text'];
	$str_2 = trim($str_1, " ");
	$str_2 = preg_replace('/[\s]{2,}/', ' ', $str_2);
    echo $str_2;
	//remove_extra_blanks.php?text=   hello   world   