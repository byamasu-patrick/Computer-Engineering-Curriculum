<?php

    class Connection{
        protected $db;
        public function __construct(){            
            try {
                // Create a connection instance
                $this->db = mysqli_connect('localhost:3306', 'root', '');
        
                if(!mysqli_select_db($this->db, 'uniliaregistration')){
                    echo 'Could not select the database: '. mysqli_error($conn);
                }
                //var_dump($conn);
            }
            catch (\Throwable $th) {
                //throw $th;
                echo "ERROR: ". $th.getMessage();
            }
        }

    }