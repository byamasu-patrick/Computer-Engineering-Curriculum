<?php
 include_once('../db/db_conn.php');
class AddressDetails extends Connection{
    // private $db;
    public function __construct(){   
       
        parent::__construct();
        // var_dump($conn); 
    }
    /* Setting up user account */
    public function create($data){
        try {

            $sql_stmt = "INSERT INTO `address_details`( `home_district`, `village`, `traditional_authority`, `cell_phone`, `email_address`, `postal_address`, `reg_number`) VALUES (".
            "'". $data['home_district'] ."', '". $data['village'] ."', '". $data['traditional_authority'] ."',".
            "'". $data['cell_phone'] ."', '". $data['email_address'] ."',".
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
    public function get_address_by_reg_num($reg_num){
        try {
            $sql_stmt = "SELECT * FROM `address_details` WHERE `reg_num` = '". $reg_num ."'";

            $user_info = mysqli_query($this->db, $sql_stmt);

            if ($user_info) {
               $user_ = mysqli_fetch_assoc($user_info);
                   
                return $user_;
            }
            return NULL;
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}