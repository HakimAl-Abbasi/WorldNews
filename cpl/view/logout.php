<?php
session_start(); // session start

session_unset(); // make Unset to Data

session_destroy(); // destroy session and make path to login page
header('Location:../../hmh-login.php');
