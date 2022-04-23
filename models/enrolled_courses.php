<?php
include_once('../db/db_conn.php');
class EnrolledCourses extends Connection{
    // private $db;
    public function __construct(){   
        parent::__construct();
        
    }
    /* Setting up user account */
    public function create($data){
        try {
            
            $sql_stmt = "INSERT INTO `courses_to_be_take`( `course_code`, `course_name`, `hours_per_week`, ".
                "`additional_info`, `student_reg_number`) VALUES (".
                "'". $data['course_code'] ."', '". $data['course_name'] ."', '". $data['number_of_hours_per_week'] ."',".
                "'". $data['additional_info'] ."', '". $data['reg_num'] ."')";
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