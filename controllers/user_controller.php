<?php

include_once('../models/user.php');

if(isset($_POST['reg_num']) && isset($_POST['username']) && isset($_POST['password'])){
    $user_data = array(
        'username' => trim($_POST['username']),
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'reg_num' => trim($_POST['reg_num'])
    );
    //var_dump($user_data);
    $user = new User();
    // var_dump($user->create($user_data));
    if($user->create($user_data)){        
        header('Location: ../index.php');
    }
    else{
       // header('Location: ../signup.php');
    }
    // if($user != null){
    //     session_start();

    //     $_SESSION['username'] = $user_info['username'];
    //     $_SESSION['reg_num'] = $user_info['reg_num'];
    //     $_SESSION['user_id'] = $user_info['user_id'];

    //     header('Location: ../dashboard.php');
    // }
}