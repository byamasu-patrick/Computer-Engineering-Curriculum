<?php

include_once('../models/user.php');

if(isset($_POST['reg_num']) && isset($_POST['password']) && ($_POST['password'] != "" || $_POST['reg_num'] != "")){
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
        if($user_info['account_type'] == "Admin"){
            $_SESSION['username'] = $user_info['username'];
            $_SESSION['reg_num'] = $user_info['reg_num'];
            $_SESSION['user_id'] = $user_info['user_id'];
            $_SESSION['account_type'] = $user_info['account_type'];
            header('Location: ../administrator.php');
        }
        else{
            $_SESSION['username'] = $user_info['username'];
            $_SESSION['reg_num'] = $user_info['reg_num'];
            $_SESSION['user_id'] = $user_info['user_id'];
            $_SESSION['account_type'] = $user_info['account_type'];
            header('Location: ../dashboard.php');
        }

    }
    else{
        $msg = "Username or password is incorrect, please try again!";
        header('Location: ../index.php?message='. $msg);
    }    
}
else{
    $msg = "Please fill all the input please!";
    header('Location: ../index.php?message='. $msg);
}