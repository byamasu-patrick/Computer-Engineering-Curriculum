<?php
include_once('../db/db_conn.php');
class Qualification extends Connection{
    // private $db;
    public function __construct(){   
        parent::__construct();
        
    }
    /* Setting up user account */
    public function create($data){
        try {
            
            $sql_stmt = "INSERT INTO `qualification_details`( `highest_qualification`, `secondary_school`, `year_obtained`, `secondary_school_district`, ".
                "`secondary_school_country`, `program_of_study`, `entry_type`, `entry_level`, `admission_date`, `first_registration_date`, ".
                "`completion_date`, `student_reg_number`) VALUES (".
                "'". $data['highest_qualification'] ."', '". $data['secondary_school_name'] ."', '". $data['year_obtained'] ."',".
                "'". $data['secondary_school_district'] ."', '". $data['secondary_school_country'] ."', '". $data['program_of_study'] ."', ".
                "'". $data['entry_type'] ."', '". $data['entry_level'] ."', '". $data['date_of_admission'] ."', ".
                "'". $data['date_of_first_reg'] ."', '". $data['date_of_completion'] ."', '". $data['reg_num'] ."')";
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