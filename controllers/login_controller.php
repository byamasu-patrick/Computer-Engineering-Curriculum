<?php

include_once('../models/user.php');

if(isset($_POST['reg_num']) && isset($_POST['password'])){
    $user_data = array(
        'reg_num' => trim($_POST['reg_num']),
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    );
    //var_dump($user_data);
    $user = new User();
    $user_info = get_user($user_data);
    if($user_info != NULL){ 
        session_start();
        $_SESSION['username'] = $user_info['username'];
        $_SESSION['reg_num'] = $user_info['reg_num'];
        $_SESSION['user_id'] = $user_info['user_id'];

        header('Location: ../dashboard.php');
    }
    else{
       header('Location: ../signup.php');
    }
    
}