<?php

session_start();
$_SSESSION=array();
session_destroy();
header("location: login.php ");

?>