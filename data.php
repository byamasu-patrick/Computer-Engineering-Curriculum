<?php
include_once('db/db_conn.php');
class Data extends Connection{
    // private $db;
    public function __construct(){   
        parent::__construct();
        
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
    public function get_all_user_by_reg_number($id){
        try {
            $sql_stmt = "SELECT * FROM `student_details` WHERE reg_number = '". $id ."'";

            $user_info = mysqli_query($this->db, $sql_stmt);

            if ($user_info) {
                $userdata = mysqli_fetch_assoc($user_info);                
                return $userdata;
            }

            return NULL;
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    
    public function get_address_by_user($id){
        try {
            $sql_stmt = "SELECT * FROM `address_details` WHERE  `reg_number` = '". $id ."' ";

            $user_info = mysqli_query($this->db, $sql_stmt);

            if ($user_info) {
                $userdata = mysqli_fetch_assoc($user_info);
                
                return $userdata;
            }
            return NULL;
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function get_qualification_by_user($id){
        try {
            $sql_stmt = "SELECT * FROM `qualification_details` WHERE  `student_reg_number` = '". $id ."' ";

            $user_info = mysqli_query($this->db, $sql_stmt);

            if ($user_info) {
                $userdata = mysqli_fetch_assoc($user_info);
                
                return $userdata;
            }
            return NULL;
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}