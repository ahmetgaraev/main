<?php
    session_start();
    $_SESSION['number'] = $_GET['number'];

<?php
    session_start();
    echo $_SESSION['number'];

//common.inc.php
//<?php
//    session_start();