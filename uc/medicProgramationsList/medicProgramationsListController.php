<?php

session_start();

if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
    header("location: loginPage.php");
    exit;
}

//de facut sa intere doar medic