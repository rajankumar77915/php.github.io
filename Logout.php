<?php
require_once "config.php";
session_start();
session_unset();
session_destroy();
header("Location: http://localhost/rajan/w4/Login.php ");
?>