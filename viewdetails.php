<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        // if($_SESSION['account_type'] != 'Admin'){
        header('Location: index.php');
        // }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/student.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Admin Panel</title>
    <script src="assets/js/main.js"></script>
</head>
<body class="bg-primary">
    <div class="flex-v">
        <div class="navbar">
            <nav class="navbar-nav">
               <div>
                <h1><a href="index.php" style="text-decoration: none; color: black;">University of Livingstonia</a></h1>
               </div>
               <div>
                   <ul class="navbar-list">
                        <?php echo (isset($data) && ($data != NULL))? '<li class="navbar-item"><a href="viewdetails.php">View Details</a></li>' : ""; ?>
                       <li class="navbar-item" style="margin-left: 60px"><a href="logout.php">Logout</a></li>
                       <li class="navbar-item" style="margin-left: 60px; color: black;"><?php echo isset($_SESSION['reg_num'])? $_SESSION['reg_num'] : ""; ?></a></li>
                       <li class="navbar-item" style="color: black;"><?php echo isset($_SESSION['reg_num'])? $_SESSION['account_type'] : ""; ?></a></li>
                   </ul>
               </div>
           </nav>
        </div>
        <div>
            <div class="main" style="width: 70%;">
                <p class="sign" style="margin-bottom: 0px; padding-bottom: 0px;">Registration Information</p>
                <ul class="cards">
                    <?php 


                        if(isset($_POST['reg_num'])){
                            include_once('data.php');
                            $dataObj = new Data(); 
                            $data = $dataObj->get_all_user_by_reg_number($_POST['reg_num']);      
                            $address = $dataObj->get_address_by_user($_POST['reg_num']);       
                            $qualification = $dataObj->get_qualification_by_user($_POST['reg_num']);    
                            // var_dump($qualification);            
                            echo ' <li>
                                <a class="card"  style="height: 600px;"href="javascript:function() { return false; }">
                                <img src="assets/images/background.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                    <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                                    <img class="card__thumb" src="https://www.jea.com/cdn/images/avatar/avatar-alt.svg" alt="" />
                                    <div class="card__header-text">
                                        <h3 class="card__title">'. $data['title'] . '. '. $data['firstname'] . '  '.  $data['middle_name'] .' </h3>            
                                        <span class="card__status">'. $data['reg_number'] . ' | '. $data['gender'] . ' | '. $data['nationality'] . ' | '. $data['created_at'] . '</span>
                                    </div>
                                    </div>                                
                                    <p class="card__description" style="color: black; font-size: 18px;">
                                        '. $address['home_district'] .'<br/>
                                        '. $address['village'] .'</br>
                                        '. $address['traditional_authority'] .'<br/>
                                        '. $address['cell_phone'] .'</br>                             
                                    </p> 
                                    <p class="card__description" style="color: black; font-size: 18px;">
                                        '. $address['email_address'] .'<br/>
                                        Highest Qualification: '. $qualification['highest_qualification'] .'<br/>
                                        Secondary School Name: '. $qualification['secondary_school'] .'</br>
                                        Year Obtained: '. $qualification['year_obtained'] .'<br/>
                                    </p> 
                                    <p class="card__description" style="color: black; font-size: 18px;">
                                    Secondary School District: '. $qualification['secondary_school_district'] .'</br>                                 
                                    Secondary School Country: '. $qualification['secondary_school_country'] .'<br/>                                   
                                    </p>

                                </div>
                                </a>      
                            </li>';

                        }
                        else{
                            include_once('data.php');
                            $dataObj = new Data(); 
                            $data = $dataObj->get_all_user_by_reg_number($_GET['reg_num']);      
                            $address = $dataObj->get_address_by_user($_GET['reg_num']);       
                            $qualification = $dataObj->get_qualification_by_user($_GET['reg_num']);    
                            // var_dump($qualification);            
                            echo ' <li>
                                <a class="card"  style="height: 600px;"href="javascript:function() { return false; }">
                                <img src="assets/images/background.jpg" class="card__image" alt="" />
                                <div class="card__overlay">
                                    <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                                    <img class="card__thumb" src="https://www.jea.com/cdn/images/avatar/avatar-alt.svg" alt="" />
                                    <div class="card__header-text">
                                        <h3 class="card__title">'. $data['title'] . '. '. $data['firstname'] . '  '.  $data['middle_name'] .' </h3>            
                                        <span class="card__status">'. $data['reg_number'] . ' | '. $data['gender'] . ' | '. $data['nationality'] . ' | '. $data['created_at'] . '</span>
                                    </div>
                                    </div>                                
                                    <p class="card__description" style="color: black; font-size: 18px;">
                                        '. $address['home_district'] .'<br/>
                                        '. $address['village'] .'</br>
                                        '. $address['traditional_authority'] .'<br/>
                                        '. $address['cell_phone'] .'</br>                             
                                    </p> 
                                    <p class="card__description" style="color: black; font-size: 18px;">
                                        '. $address['email_address'] .'<br/>
                                        Highest Qualification: '. $qualification['highest_qualification'] .'<br/>
                                        Secondary School Name: '. $qualification['secondary_school'] .'</br>
                                        Year Obtained: '. $qualification['year_obtained'] .'<br/>                              
                                    </p> 
                                    <p class="card__description" style="color: black; font-size: 18px;">
                                    Secondary School District: '. $qualification['secondary_school_district'] .'</br>   
                                    Secondary School Country: '. $qualification['secondary_school_country'] .'<br/>                                    
                                    </p> 

                                </div>
                                </a>      
                            </li>';


                        }
                        
                        

                    ?>
                </ul>   
            
            </div>
        </div>
    </div>
</body>
</html>