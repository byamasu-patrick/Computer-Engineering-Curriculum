<?php
include_once('../db/db_conn.php');
class MeritalStatus extends Connection{
    // private $db;
    public function __construct(){   
        parent::__construct();
        
    }
    /* Setting up user account */
    public function create($data){
        try {
            var_dump($data);
            $sql_stmt = "INSERT INTO `merital_status`( `status`, `spouse_home`, `spouse_village`, `spouse_traditional_authority`, ". 
                "`spouse_cell_phone`, `spouse_email`, `spouse_lastname`, `spouse_firstname`, `spouse_middlename`, `spouse_postal_address`, `student_reg_number`) VALUES (".
                "'". $data['marital_status'] ."', '". $data['spouse_home_district'] ."', '". $data['spouse_village'] ."',".
                "'". $data['spouse_traditional_authority'] ."', '". $data['spouse_cell_phone'] ."', '". $data['spouse_email_address'] ."',".
                "'". $data['spouse_last_name'] ."', '". $data['spouse_first_name'] ."', '". $data['spouse_middle_name'] ."',".
                "'". $data['postal_address'] ."', '". $data['reg_num'] ."')";
            //var_dump(mysqli_query($this->db, $sql_stmt));
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