<?php
session_start();

//menghapus seluruh session

session_unset();

//menghancurkan session
session_destroy();

header("Location: login.php");
exit();