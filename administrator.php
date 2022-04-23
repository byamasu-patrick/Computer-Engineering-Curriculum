<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        if($_SESSION['account_type'] != 'Admin'){
            header('Location: index.php');
        }
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
                       <li class="navbar-item"><a href="administrator.php">Dashboard</a></li>
                       <li class="navbar-item"><a href="register_student.php">Register Student</a></li>
                       <li class="navbar-item" style="margin-left: 60px"><a href="logout.php">Logout</a></li>
                       <li class="navbar-item" style="margin-left: 60px; color: black;"><?php echo isset($_SESSION['reg_num'])? $_SESSION['reg_num'] : ""; ?></a></li>
                       <li class="navbar-item" style="color: black;"><?php echo isset($_SESSION['reg_num'])? $_SESSION['account_type'] : ""; ?></a></li>
                   </ul>
               </div>
           </nav>
        </div>
        <div>
            <div class="main" style="width: 70%;">
                <p class="sign" style="margin-bottom: 0px; padding-bottom: 0px;">Registered Student</p>
                <ul class="cards">
                    <?php 

                        include_once('data.php');
                        $dataObj = new Data();  
                        $data = $dataObj->get_all_user();                      
                        $index = 0;
                        while($index < count($data)){
                            $address = $dataObj->get_address_by_user($data[$index]['reg_number']);
                            echo ' <li>
                            <a class="card" href="javascript:function() { return false; }">
                            <img src="assets/images/background.jpg" class="card__image" alt="" />
                            <div class="card__overlay">
                                <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                                <img class="card__thumb" src="https://www.jea.com/cdn/images/avatar/avatar-alt.svg" alt="" />
                                <div class="card__header-text">
                                    <h3 class="card__title">'. $data[$index]['title'] . '. '. $data[$index]['firstname'] . '  '.  $data[$index]['middle_name'] .' </h3>            
                                    <span class="card__status">'. $data[$index]['reg_number'] . ' | '. $data[$index]['gender'] . ' | '. $data[$index]['nationality'] . ' | '. $data[$index]['created_at'] . '</span>
                                </div>
                                </div>
                                <p class="card__description">
                                     '. $address['home_district'] .'<br/>
                                     '. $address['village'] .'</br>
                                     '. $address['traditional_authority'] .'<br/>
                                     '. $address['cell_phone'] .'</br>
                                     '. $address['email_address'] .'<br/>
                                     
                                </p> 
                                <p class="card__description">                                    
                                    <form action="viewdetails.php" method="POST">
                                        <input type="hidden" value="'. $data[$index]['reg_number'] .'" name="reg_num"/>
                                        <button type="submit" class="submit next-btn" style="float: right; height: auto; padding: 10px;background: #D7BDCA;">View Details</button>  
                                    </form>      
                                    <form action="controllers/delete_student.php" method="POST">
                                        <input type="hidden" value="'. $data[$index]['reg_number'] .'" name="reg_num"/>
                                        <button type="submit" class="submit next-btn" style="float: right; height: auto; padding: 10px;background: black;">Delete</button>  
                                    </form>                    
                                </p>
                            </div>
                            </a>      
                        </li>';
                            $index++;
                        }

                    ?>
                </ul>   
            <div>
                <!-- <button type="submit" class="submit next-btn" style="float: right; margin-bottom: 50px;"> Next</button>  -->
            </div>  
            </div>
        </div>
    </div>
</body>
</html>