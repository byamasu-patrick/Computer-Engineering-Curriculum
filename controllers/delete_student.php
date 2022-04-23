<?php

    include_once('../models/registration.php');

    if(isset($_POST['reg_num'])){
        $reg_num = $_POST['reg_num'];

        $student = new Registration();

        $student->delete($reg_num);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }