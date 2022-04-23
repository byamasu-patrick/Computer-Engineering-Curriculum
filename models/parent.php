<?php
include_once('../db/db_conn.php');
class Guardian extends Connection{
    // private $db;
    public function __construct(){   
        parent::__construct();
        
    }
    /* Setting up user account */
    public function create($data){
        try {
            
            $sql_stmt = "INSERT INTO `sponsor_information`(`sponsor_name`, `sponsor_occupation`, `sponsor_cell_phone`, `sponsor_email_address`, 
            `sponsor_postal_address`, `student_reg_number`) VALUES  (".
                "'". $data['sponsor_name'] ."', '". $data['sponsor_occupation'] ."', '". $data['sponsor_cell_phone'] ."',".
                "'". $data['sponsor_email_address'] ."',".
                "'". $data['sponsor_postal_address'] ."', '". $data['reg_num'] ."')";
            //var_dump(mysqli_query($this->db, $sql_stmt));
            var_dump($sql_stmt);
           
            if (!mysqli_query($this->db, $sql_stmt)) {
                echo 'Could not insert into the database: '. mysqli_error($this->db);
                echo "An error has occured while saving into the database";  
                return FALSE;              
            }
            return TRUE;

        } catch (\Throwable $th) {
            echo $th->getMessage();
            return FALSE;
        }
    }
    public function get_all_user(){
        try {
            $sql_stmt = "SELECT * FROM `student_details`";

            $user_info = mysqli_query($this->db, $sql_stmt);

            if ($user_info) {
                $userdata = array();
                $i = 0;
                while($user_ = mysqli_fetch_assoc($user_info)){
                    $userdata[$i] = $user_;
                    $i++;
                }
                return $userdata;
            }
            return NULL;
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}