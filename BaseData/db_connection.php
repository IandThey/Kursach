<?php
    $host = "localhost";
    $user = "a0623102_BSM";
    $password = "1234qwe";
    $db_name = "a0623102_bps_db";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $link = mysqli_connect($host,$user,$password,$db_name);
?>