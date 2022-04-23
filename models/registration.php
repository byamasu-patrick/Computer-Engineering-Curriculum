<?php
include_once('../db/db_conn.php');
class Registration extends Connection{
    // private $db;
    public function __construct(){   
        parent::__construct();
        // if($conn != NULL){
        //     $this->db = $conn;
        // }
        // var_dump($conn); 
    }
    /* Setting up user account */
    public function create($data){
        try {
            $sql_stmt = "INSERT INTO `student_details`(`title`, `firstname`, `middle_name`, `lastname`, `nationality`, ".
            "`hostelname`, `reg_number`, `national_id`, `semester_number`,`room_number`, `birthdate`, `gender`) VALUES ".
            "('". $data['title'] ."', '". $data['first_name'] ."', '". $data['middle_name'] ."',".
            "'". $data['last_name'] ."', '". $data['nationality'] ."', '". $data['hostel_name'] ."',".
            "'". $data['reg_num'] ."', '". $data['nation_id_num'] ."', ". $data['semester_num'] .",".
            "'". $data['room_num'] ."', '". $data['dob'] ."', '". $data['gender'] ."')";
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
    public function delete($id){
        try {
            $sql_stmt = "DELETE FROM `student_details` WHERE reg_number = '". $id ."' ";

            $user_info = mysqli_query($this->db, $sql_stmt);

            if ($user_info) {               
                return $userdata;
            }
            return NULL;
            
        } catch (\Throwable $th) {
            echo $th->getMessage();
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