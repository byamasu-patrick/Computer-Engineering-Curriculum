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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Admin Panel</title>
    <script src="assets/js/main.js"></script>
</head>
<body class="bg-primary">
    <div class="flex-v">
        <div class="navbar">
           <nav class="navbar-nav">
               <div>
                   <h1>University of Livingstonia</h1>
               </div>
               <div>
                   <ul class="navbar-list">
                       <li class="navbar-item"><a href="administrator.php">Dashboard</a></li>
                       <li class="navbar-item"><a href="register_student.php">Register Student</a></li> 
                       <li class="navbar-item" style="margin-left: 60px"><a href="logout.php">Logout</a></li>
                   </ul>
               </div>
           </nav>
        </div>
        <div>
            <div class="main" style="width: 60%;">
                <p class="sign" style="margin-bottom: 0px; padding-bottom: 0px;">Semester Registration form</p>
                <div class="container">
                    <div class="progress-bar">
                        <div class="step">
                            <p>
                                Details
                            </p>
                            <div class="bullet">
                                <span>1</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                            <p>
                                Address
                            </p>
                            <div class="bullet">
                                <span>2</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                            <p>
                                Marital 
                            </p>
                            <div class="bullet">
                                <span>3</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                            <p>
                                Qualification
                            </p>
                            <div class="bullet">
                                <span>4</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                            <p>
                                Parent
                            </p>
                            <div class="bullet">
                                <span>5</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                            <p>
                                Declaration
                            </p>
                            <div class="bullet">
                                <span>6</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                        <div class="step">
                            <p>
                                Submit
                            </p>
                            <div class="bullet">
                                <span>7</span>
                            </div>
                            <div class="check fas fa-check"></div>
                        </div>
                    </div>
                </div>
                <form class="form1 padding-top: 0px; margin-top: 0px;" method="POST" action="controllers/register_controller.php">
                    <div id="student-details tab" class="tab" style="display: none;">
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
                                <input class="un " class="center" type="text" name="reg_num" placeholder="Student Reg Number">
                                <input class="un " class="center" type="text" name="nation_id_num" placeholder="National Identification Number">
                                <input class="un " class="center u-b-r" type="number" name="semester_num" placeholder="Semester Number">
                                <input class="un " class="center u-b-r" type="number" name="room_num" placeholder="Room Number">
                                <b class="title" style="font-size: 14px; padding-bottom: 10px;">Date of Birth</b>
                                <input class="un " class="center u-b-r" type="date" name="dob" placeholder="Date of Birth">
                                <b class="title" style="font-size: 14px; padding-bottom: 10px;">Gender</b>
                                <select name="gender" class="un u-b-r">
                                    <option value="Choose">Choose</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other/Prefer not to disclose">Other/Prefer not to disclose</option>
                                </select>
                            </div>                        
                        </div>
                    </div>
                    <div id="address-details tab" class="tab" tyle="display: none;">
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
                            <p class="title">Postal Address</p>      
                                <textarea name="postal_address" style="width: 300px; margin-right: 46px; text-align: left;" class="center un u-b-r" rows="10" placeholder="Please enter you postal address, e.g. P.o.Box 566546 Dzalanyama Road, Area 47, Lilongwe, Central Region, Malawi"></textarea>
                            </div>                        
                        </div>
                    </div>
                    <div id="marital-details tab" class="tab" style="display: none;">
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
                                <textarea name="spouse_postal_address" style="width: 300px; margin-right: 46px; text-align: left;" class="center un u-b-r" rows="7" placeholder="Please enter you postal address, e.g. P.o.Box 566546 Dzalanyama Road, Area 47, Lilongwe, Central Region, Malawi"></textarea>
                            </div>                        
                        </div>
                    </div>
                     <div id="qualification-admission-details tab" class="tab" style="display: none;">
                        <p class="title">Qualification, Secondary School Details and Admission Details <small></small></p>
                        <div class="flex">
                            <div>
                                <input class="un " class="center" type="text" name="highest_qualification" placeholder="Your Highest Qualification">
                                <input class="un " class="center" type="text" name="secondary_school_name" placeholder="Secondary School Name">
                                <input class="un " class="center" type="date" name="year_obtained" placeholder="Year obtained">
                                <input class="un " class="center" type="phone" name="secondary_school_district" placeholder="Secondary School District">
                                <input class="un " class="center" type="text" name="secondary_school_country" placeholder="Secondary School Contry">
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
                                <select name="entry_type" class="un u-b-r" style="text-align: left;">
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
                    <div id="parent-details tab" class="tab" style="display: none;">
                        <p class="title">Parent/Guardian/Sponsor Information</small></p>
                        <input class="un " class="center" type="text" name="sponsor_name" style="width: 87%;" placeholder="Parent/Guardian/Sponsor Name">
                        <input class="un " class="center" type="text" name="sponsor_occupation" style="width: 87%;" placeholder="Occupation">
                        <input class="un " class="center" type="phone" name="sponsor_cell_phone" style="width: 87%;" placeholder="Cell Phone No">
                        <input class="un " class="center" type="email" name="sponsor_email_address" style="width: 87%;" placeholder="Email Address">  
                        <textarea name="sponsor_postal_address" style="width: 87%; margin-right: 46px; text-align: left;" class="center un u-b-r" rows="7" placeholder="Please enter the postal address for your parent, guardian or sponsor, e.g. P.o.Box 566546 Dzalanyama Road, Area 47, Lilongwe, Central Region, Malawi"></textarea>
                    </div>
                    <div id="courses-details tab" class="tab" style="display: none; width: auto;">
                        <p class="title">Courses to be taken</small></p>
                        <div class="flex">
                            <div>
                                <select name="number_courses" class="un u-b-r">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>                                             
                        </div>
                        <div class="flex"  style="align-items: flex-start;">
                            <div>
                                <p class="title">Course Code</p>
                                <input class="un " class="center" type="text" name="course_code[]" placeholder="Course Code">
                                <input class="un " class="center" type="text" name="course_code[]" placeholder="Course Code">
                                <input class="un " class="center" type="text" name="course_code[]" placeholder="Course Code">
                            </div>
                            <div>   
                                <p class="title">Course Name</p>
                                <input class="un " class="center" type="text" name="course_name[]" placeholder="Course Name">
                                <input class="un " class="center" type="text" name="course_name[]" placeholder="Course Name">                         
                                <input class="un " class="center" type="text" name="course_name[]" placeholder="Course Name">                            
                            </div>
                            <div style="margin-right: 46px;">  
                                <p class="title">Num hrs / Week</p> 
                                <select name="number_of_hours_per_week[]" class="un ">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>  
                                <select name="number_of_hours_per_week[]" class="un ">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>  
                                <select name="number_of_hours_per_week[]" class="un ">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>                           
                            </div>                        
                        </div>
                        <div class="">
                            <p class="title" style="width: 90%; font-size: 16px;">Please list any information you feel we should know about your circumstances (e.g. Disability, Allergie and healthy history e.t.c.)</p>
                            <textarea name="additional_info" style="width: 90%; margin-right: 46px; text-align: left;" class="center un u-b-r" rows="10" placeholder="Write here..."></textarea>
                        </div>
                    </div>
                    <div id="aggreement tab" class="tab" style="display: none;">
                            <h3 class="title">Declaration:</h3>
                            <p class="title">Please tick in the space provided, if you agree with each statement below.</small></p>
                            <div class="center" style="margin-left: 46px; font-size: 14px; margin-bottom: 20px; color: rgb(38, 50, 56);font-weight: 700;">
                            <p class="par">
                                <input type="checkbox" name="aggreement[]" value="1" class="checkbox" /> I affirm that the information given on this form is true and correct. <br/>
                            </p>
                            <p class="par">
                                <input type="checkbox" name="aggreement[]" value="2" class="checkbox"/> _I have received, read understand the summary of the LAWS Campus Disciplinary 
                                and Residential Regulations, Disciplinary Proceedings and the Dress Code Statements.
                                I understand that it is my duty to abide these regulations.
                                <br/>
                            </p>
                            <p class="par">
                                <input type="checkbox" name="aggreement[]" value="3" class="checkbox"/> I understand that complete copies of LAWS Campus Regulations, Disciplinary 
                                Procedures, Criminal Proceedings and Dress Code Statement are available in the Library and 
                                Students Union Office and that it is my duty to read and familiarize myself with this 
                                document within one week of registration at LAWS Campus. <br/>
                            </p>
                            <p class="par">
                                <input type="checkbox" name="aggreement[]" value="4" class="checkbox"/> I understand that it is my responsibility to ensure that all fees are paid on my behalf for 
                                each semester before I will be allowed to register for each semester.
                                <br/>
                            </p>
                            <p class="par">
                                <input type="checkbox" name="aggreement[]" value="5" class="checkbox"/>  I understand that the University of LAWS is a special institution based on Christian 
                                values and that it is my duty to exhibit good Christian values, ethics and behavior at all 
                                times. I understand that morning devotions are part of the curriculum and that I am 
                                required to attend. <br/>
                            </p>                            
                            <p class="par">
                                <input type="checkbox" name="aggreement[]" value="6" class="checkbox"/> I understand that I will be subject to suspension or dismissal if I do not comply with 
                                college rules and regulations. <br/>
                            </p>
                        </div>
                    </div>
                    <div id="message tab" class="flex tab" style="justify-content: center; align-items: center; width: 90%; display: none; margin-bottom: 100px; margin-top:80px;">
                        <p class="title">
                            Thanks for using <span style="color: #9C27B0;">UNILIA Laws Campus Registration System</span>, you will receive an email if your registration has been approved.
                        </p>
                    </div>
                    <div class="submit-buttons">
                        <div>
                            <button type="submit" class="submit prev-btn">Prev</button>
                        </div>
                        <div>
                            <button type="submit" class="submit next-btn">Next</button> 
                        </div>               
                    </div>
                </form>     
            </div>
        </div>
    </div>
</body>
</html>