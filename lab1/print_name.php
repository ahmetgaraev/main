<?php
    header("Content-Type: text/plain");
	$str_1 = "Hello, Dear ";
	$str_2 = $_GET['name'];
	$str_3 = "!";
    echo $str_1.$str_2.$str_3;
	//http://127.0.0.1:4001/print_name.php?name=aaaaaaaaaaabc