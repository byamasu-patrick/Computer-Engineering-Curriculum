<?php

include_once('../models/user.php');

if(isset($_POST['reg_num']) && isset($_POST['password'])){
    $user_data = array(
        'reg_num' => trim($_POST['reg_num']),
        'password' => md5($_POST['password'])
    );
    var_dump($user_data);
    $user = new User();
    $user_info = $user->get_user($user_data);
    //var_dump($user_info);
    if($user_info != NULL){ 
        session_start();
        $_SESSION['username'] = $user_info['username'];
        $_SESSION['reg_num'] = $user_info['reg_num'];
        $_SESSION['user_id'] = $user_info['user_id'];

        header('Location: ../dashboard.php');
    }
    else{
       header('Location: ../index.php');
    }
    
}