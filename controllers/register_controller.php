<?php
    session_start();
    include_once('../models/registration.php');
    include_once('../models/address.php');
    include_once('../models/merital_status.php');
    include_once('../models/qualification.php');
    include_once('../models/parent.php');
    include_once('../models/enrolled_courses.php');
    include_once('../models/declaration.php');
   if ($_POST['title']) {
            
        # code...
        $address_details = array(
            'home_district' => trim($_POST['home_district']),
            'village' => trim($_POST['village']),
            'traditional_authority' => trim($_POST['traditional_authority']),
            'cell_phone' => trim($_POST['cell_phone']),
            'email_address' => trim($_POST['email_address']),
            'reg_num' => trim($_POST['reg_num']),
            'postal_address' => trim($_POST['postal_address'])
        );
        // var_dump($_POST);
        $student_details = array(
            'title' => trim($_POST['title']),
            'first_name' => trim($_POST['first_name']),
            'middle_name' => trim($_POST['middle_name']),
            'last_name' => trim($_POST['last_name']),
            'nationality' => trim($_POST['nationality']),
            'hostel_name' => trim($_POST['hostel_name']),
            'reg_num' => trim($_POST['reg_num']),
            'nation_id_num' => trim($_POST['nation_id_num']),
            'semester_num' => trim($_POST['semester_num']),
            'room_num' => trim($_POST['room_num']),
            'dob' => trim($_POST['dob']),
            'gender' => trim($_POST['gender'])
        );

        $merital_details = array(
            'marital_status' => trim($_POST['marital_status']),
            'spouse_home_district' => trim($_POST['spouse_home_district']),
            'spouse_village' => trim($_POST['spouse_village']),
            'spouse_traditional_authority' => trim($_POST['spouse_traditional_authority']),
            'spouse_cell_phone' => trim($_POST['spouse_cell_phone']),
            'spouse_email_address' => trim($_POST['spouse_email_address']),
            'spouse_last_name' => trim($_POST['spouse_last_name']),
            'spouse_first_name' => trim($_POST['spouse_first_name']),
            'spouse_middle_name' => trim($_POST['spouse_middle_name']),
            'postal_address' => trim($_POST['spouse_postal_address']),
            'reg_num' => trim($_POST['reg_num'])
        );
        $qualification_details = array(
            'highest_qualification' => trim($_POST['highest_qualification']),
            'secondary_school_name' => trim($_POST['secondary_school_name']),
            'year_obtained' => trim($_POST['year_obtained']),
            'secondary_school_district' => trim($_POST['secondary_school_district']),
            'secondary_school_country' => trim($_POST['secondary_school_country']),
            'program_of_study' => trim($_POST['program_of_study']),
            'entry_type' => trim($_POST['entry_type']),
            'entry_level' => trim($_POST['entry_level']),
            'date_of_admission' => trim($_POST['date_of_admission']),
            'date_of_first_reg' => trim($_POST['date_of_first_reg']),
            'date_of_completion' => trim($_POST['date_of_completion']),
            'reg_num' => trim($_POST['reg_num'])
        );
        $sponsor_details = array(
            'sponsor_name' => trim($_POST['sponsor_name']),
            'sponsor_occupation' => trim($_POST['sponsor_occupation']),
            'sponsor_cell_phone' => trim($_POST['sponsor_cell_phone']),
            'sponsor_email_address' => trim($_POST['sponsor_email_address']),
            'sponsor_postal_address' => trim($_POST['sponsor_postal_address']),
            'reg_num' => trim($_POST['reg_num'])
        );
        
        $registration = new Registration();
        $address = new AddressDetails();
        $merital_status = new MeritalStatus();
        $qualification = new Qualification();
        $sponsor = new Guardian();
        $courses = new EnrolledCourses();
        $dec = new Declaration();

        if ($registration->create($student_details)){
            if ($address->create($address_details) && ($_POST['marital_status'] == 'Married')){
                if ($merital_status->create($merital_details)) {
                    if($qualification->create($qualification_details)){
                        if($sponsor->create($sponsor_details)){
                            //
                                $maxIndex =  $_POST['number_courses'];
                                $index = 0;
                                while($index < $maxIndex){
                                    $sponsor_details = array(
                                        'course_code' => $_POST['course_code'][ $index ],
                                        'course_name' => $_POST['course_name'][ $index ],
                                        'number_of_hours_per_week' => $_POST['number_of_hours_per_week'][ $index ],
                                        'additional_info' => trim($_POST['additional_info']), 
                                        'reg_num' => trim($_POST['reg_num'])
                                    );
                                    $index++;
                                    $courses->create($sponsor_details);
                                }
                                $maxLength =  count($_POST['aggreement']);
                                $ind = 0;
                                while($ind < $maxLength){
                                    $declaration_details = array(
                                        'aggreement' => trim($_POST['aggreement'][$ind]),
                                        'reg_num' => trim($_POST['reg_num'])
                                    );
                                    $ind++;
                                    if($dec->create($sponsor_details)){
                                        header("Location: ../index.php");
                                    }
                                }
                            }

                        }
                    }
                }
            }
            else{

            }

   }