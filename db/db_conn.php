<?php

    try {
        // Create a connection instance
        $conn = mysqli_connect('localhost:3306', 'root', '');

        if(!mysqli_select_db($conn, 'uniliaregistration')){
            echo 'Could not select the database: '. mysqli_error($conn);
        }
        //var_dump($conn);
    }
    catch (\Throwable $th) {
        //throw $th;
        echo "ERROR: ". $th.getMessage();
    }