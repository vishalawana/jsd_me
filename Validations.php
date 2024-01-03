<?php
// ini_set('memory_limit', '512M');
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST["myname"];
    $email = $_POST["mymail"];
    $password = $_POST["mypassword"];
    $phone = $_POST["mycontact"];
    $dob = $_POST["myDob"];
    $profile = $_POST["myprofile"];
    $gender = isset($_POST["gender"])? $_POST["gender"]:null;
    $courses = isset($_POST["course"])?$_POST["course"]:null;
    // $image = $_FILES['myprofile'];
    $city = isset($_POST['myCity'])? $_POST['myCity']: null;

    global $nameError, $emailError, $passError, $phoneError, $profileError, $dobError, $genderError , $cityError ;
    $nameError = $emailError = $passError = $phoneError = $profileError = $dobError = $genderError = $cityError = "";
    global $flag;
    $flag = true;
    // name 
    if (empty($name) ){
        $nameError = "*required";
    }else if(strlen($name) < 3 || strlen($name) > 15){
     $nameError = "*invalid name input (name can only be in range of 3 to 15 characters.)";
     $flag = true;
    }else if(!preg_match("/^[a-zA-Z]/", $name)){
        $nameError = "*name cannot be a number" ;
        $flag=true;
    }
    //email
    if (strlen($email) == 0){
      $emailError = "*required";
      $flag=true;
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = '*Email should contain @ and should have atleast one character between @ and .';
        $flag=true;
    }else if(strlen($email)>30){
        $emailError = "*invalid email";
        $flag=true;
    }
    //contact
    $phoneRegex = '/^[0-9]{10}$/';
    if (!preg_match($phoneRegex, $phone)) {
       $phoneError = "*invalid contact number";
       $flag=true;
    }else if(strlen($phone) == 0){
        $phoneError = "*required";
        $flag=true;
    }
    //password
    $passwordRegex = '/^(?=.*[A-Z])(?=.*[\d])(?=.*[\W_]).{6,}$/';
    if (!preg_match($passwordRegex, $password)) {
        $passError = "Invalid password. .'$password' Password should be at least 8 characters long and should contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
        $flag=true;
    }else if(strlen($password) == 0){
        $passError = "*required";
    }
    if (!$courses) {
       $courseError = "*please select a valid course";
       $flag=true;
    }
    //dob
    $today = new DateTime();
    $formattedToday = $today->format('Y-m-d');
    if (empty($dob)){
        $dobError = "*required";
    }else if( $dob === $formattedToday){
        $dobError = 'DOB is invalid';
       $flag=true;
    }
    //profile
    // if ($image == null) {
    //     $fileError = 'Select an image to upload.';
    //     $flag=true;
    //  }
     
    //Gender
    if (empty($gender)) {
    $genderError = 'Please fill gender.';
    $flag=true;
    }
    //courese
    if(!$courses){
    $courseError = "*please select a valid course";
    $flag=true;
    }
}


