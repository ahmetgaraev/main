<?php
    header("Content-Type: text/plain");
	$str_1 = "Hello, Dear " . $_GET['name'] . "!";
    echo $str_1;
	//http://127.0.0.1:4001/print_name.php?name=aaaaaaaaaaabc