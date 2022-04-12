<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: index.php');
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
    <title>Dashboard</title>
</head>
<body class="bg-primary">
    <div class="flex-v">
        <div class="navbar">
           
        </div>
        <div>
            <div class="main" style="width: 60%;">
                <p class="sign" style="margin-bottom: 0px; padding-bottom: 0px;">Semester Registration form</p>
                <form class="form1 padding-top: 0px; margin-top: 0px;" method="POST" action="controllers/registration_controller.php">
                    <div id="student-details" style="display: none;">
                        <p class="title">Student Details <small>(please fill in all details accurately and tick where necessary)</small></p>
                        <div class="flex">
                            <div>
                                <select name="title" class="un u-b-r">
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                    <option value="Rev">Rev</option>
                                    <option value="Pastor">Pastor</option>
                                </select>
                                <input class="un " class="center" type="text" name="first_name" placeholder="First Name">
                                <input class="un " class="center" type="text" name="middle_name" placeholder="Middle Name">
                                <input class="un " class="center" type="text" name="last_name" placeholder="Last Name">
                                <input class="un " class="center" type="text" name="nationality" placeholder="Nationality">
                                <input class="un " class="center" type="text" name="hostel_name" placeholder="Hostel Name">
                            </div>
                            <div>                            
                                <input class="un " class="center" type="text" name="reg_num" placeholder="<?php echo isset($_SESSION['reg_num'])? $_SESSION['reg_num'] : ""; ?>" disabled>
                                <input class="un " class="center" type="text" name="nation_id_num" placeholder="National Identification Number">
                                <input class="un " class="center u-b-r" type="number" name="semester_num" placeholder="Semester Number">
                                <input class="un " class="center u-b-r" type="number" name="room_num" placeholder="Room Number">
                                <input class="un " class="center u-b-r" type="date" name="dob" placeholder="Date of Birth">
                                <select name="Gender" class="un u-b-r">
                                    <option value="Choose">Choose</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other/Prefer not to disclose">Other/Prefer not to disclose</option>
                                </select>
                            </div>                        
                        </div>
                    </div>
                    <div id="address-details" style="display: none;">
                        <p class="title">Address Details <small>(please make sure you fill in all addressses and contacts)</small></p>
                        <div class="flex">
                            <div>
                                <input class="un " class="center" type="text" name="home_district" placeholder="Home District">
                                <input class="un " class="center" type="text" name="village" placeholder="Village">
                                <input class="un " class="center" type="text" name="traditional_authority" placeholder="Traditional Authority(T/A)">
                                <input class="un " class="center" type="phone" name="cell_phone" placeholder="Cell Phone">
                                <input class="un " class="center" type="email" name="email_address" placeholder="Email Address">
                            </div>
                            <div>                            
                                <input class="un " class="center" type="text" name="reg_num" placeholder="<?php echo isset($_SESSION['reg_num'])? $_SESSION['reg_num'] : ""; ?>" disabled>
                                <textarea name="postal_address" style="width: 300px; margin-right: 46px; text-align: left;" class="center un u-b-r" rows="10" placeholder="Please enter you postal address, e.g. P.o.Box 566546 Dzalanyama Road, Area 47, Lilongwe, Central Region, Malawi"></textarea>
                            </div>                        
                        </div>
                    </div>
                    <div id="marital-details" style="display: none;">
                        <p class="title">Marital Status <small>(please tick one, if married. provide the  details of spouse)</small></p>
                        <div class="flex">
                            <div>
                                <div class="center" style="margin-left: 46px;margin-bottom: 20px; color: rgb(38, 50, 56);font-weight: 700;">
                                    <input type="radio" name="marital_status" value="Married"/> Married
                                    <input type="radio" name="marital_status" value="Single"/> Single
                                    <input type="radio" name="marital_status" value="Divorced"/> Divorced
                                </div>
                                <input class="un " class="center" type="text" name="spouse_home_district" placeholder="Spouse Home District">
                                <input class="un " class="center" type="text" name="spouse_village" placeholder="Spouse Village">
                                <input class="un " class="center" type="text" name="spouse_traditional_authority" placeholder="Spouse Traditional Authority(T/A)">
                                <input class="un " class="center" type="phone" name="spouse_cell_phone" placeholder="Spouse Cell Phone">
                                <input class="un " class="center" type="email" name="spouse_email_address" placeholder="Spouse Email Address">
                            </div>
                            <div>   
                                <input class="un " class="center" type="text" name="spouse_last_name" placeholder="Spouse Last Name">
                                <input class="un " class="center" type="text" name="spouse_first_name" placeholder="Spouse First Name">                         
                                <input class="un " class="center" type="text" name="spouse_middle_name" placeholder="Spouse Middle Name">
                                <textarea name="postal_address" style="width: 300px; margin-right: 46px; text-align: left;" class="center un u-b-r" rows="7" placeholder="Please enter you postal address, e.g. P.o.Box 566546 Dzalanyama Road, Area 47, Lilongwe, Central Region, Malawi"></textarea>
                            </div>                        
                        </div>
                    </div>
                     <div id="qualification-admission-details" style="display: none;">
                        <p class="title">Qualification, Secondary School Details and Admission Details <small></small></p>
                        <div class="flex">
                            <div>
                                <input class="un " class="center" type="text" name="highest_qualification" placeholder="Your Highest Qualification">
                                <input class="un " class="center" type="text" name="secondary_school_name" placeholder="Secondary School Name">
                                <input class="un " class="center" type="text" name="year_obtained" placeholder="Year obtained">
                                <input class="un " class="center" type="phone" name="secondary_school_district" placeholder="Secondary School District">
                                <input class="un " class="center" type="email" name="secondary_school_contry" placeholder="Secondary School Contry">
                            </div>
                            <div>  
                                <select name="program_of_study" class="un u-b-r" style="text-align: left;">
                                    <option value="">Program of Study</option>
                                    <option value="BEd.Sc">BEd.Sc</option>
                                    <option value="BEd.Hum">BEd.Hum</option>
                                    <option value="BEd.ICT">BEd.ICT</option>
                                    <option value="BEd.Env">BEd.Env</option>
                                    <option value="BEd.PH">BEd.PH</option>
                                    <option value="BEd.CEN">BEd.CEN</option>
                                    <option value="BEd.FSN">BEd.FSN</option>
                                    <option value="UCE">UCE</option>
                                </select>
                                <select name="program_of_study" class="un u-b-r" style="text-align: left;">
                                    <option value="">Entry Type</option>
                                    <option value="Internal">Internal</option>
                                    <option value="External">External</option>
                                </select>
                                <select name="entry_level" class="un u-b-r" style="text-align: left;">
                                    <option value="">Entry Level</option>
                                    <option value="First Year">First Year (Level 1)</option>
                                    <option value="Second year">Second Year (Level 2)</option>
                                    <option value="Third Year">Third Year (Level 3)</option>
                                </select>
                                <label for="date_of_admission" style="margin-left: 46px;">Admission Date</label><input class="un " class="center" type="date" name="date_of_admission" placeholder="Spouse Last Name">
                                <label for="date_of_first_reg" style="margin-left: 46px;">Date of First Registration</label><input class="un " class="center" type="date" name="date_of_first_reg" placeholder="Spouse First Name">                         
                                <label for="date_of_completion" style="margin-left: 46px;">Expected Date of Completion</label><input class="un " class="center" type="date" name="date_of_completion" placeholder="Spouse Middle Name">
                            </div>                        
                        </div>
                        
                    </div>
                    <div id="marital-details">
                        <p class="title">Parent/Guardian/Sponsor Information</small></p>
                        <input class="un " class="center" type="text" name="sponsor_name" style="width: 87%;" placeholder="Parent/Guardian/Sponsor Name">
                        <input class="un " class="center" type="text" name="sponsor_occupation" style="width: 87%;" placeholder="Occupation">
                        <input class="un " class="center" type="phone" name="sponsor_cell_phone" style="width: 87%;" placeholder="Spouse Traditional Authority(T/A)">
                        <input class="un " class="center" type="email" name="sponsor_email_address" style="width: 87%;" placeholder="Email Address">  
                        <textarea name="postal_address" style="width: 87%; margin-right: 46px; text-align: left;" class="center un u-b-r" rows="7" placeholder="Please enter the postal address for your parent, guardian or sponsor, e.g. P.o.Box 566546 Dzalanyama Road, Area 47, Lilongwe, Central Region, Malawi"></textarea>
                    </div>
                    
                    <button type="submit" class="submit next-btn">Next</button>
                
                </form>     
            </div>
        </div>
    </div>
</body>
</html>