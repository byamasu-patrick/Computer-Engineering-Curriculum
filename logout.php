<?php


session_start();

unset($_SESSION['username']);
unset($_SESSION['reg_num']);
unset($_SESSION['user_id']);
unset($_SESSION['account_type']);
session_destroy();
     
header('Location: index.php');