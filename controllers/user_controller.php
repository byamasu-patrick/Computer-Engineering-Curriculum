<?php

include_once('../models/user.php');

if(isset($_POST['reg_num']) && isset($_POST['username']) && isset($_POST['password']) && ($_POST['password'] != "" || $_POST['reg_num'] != "" || $_POST['username'] != "")){
    $user_data = array(
        'username' => trim($_POST['username']),
        'password' => md5($_POST['password']),
        'account_type' => trim($_POST['account_type']),
        'reg_num' => trim($_POST['reg_num'])
    );
    //var_dump($user_data);
    if($_POST['account_type'] != 'Admin'){        
        $user = new User();
        // var_dump($user->create($user_data));
        if($user->create($user_data)){        
            header('Location: ../index.php');
        }
        else{
        // header('Location: ../signup.php');
        }
    }
    else{
        $msg = "You cannot be able to create an account as an admin!";
        header('Location: ../signup.php?message='. $msg);
    }
}
else{
    $msg = "Please fill all the input please!";
    header('Location: ../signup.php?message='. $msg);
}