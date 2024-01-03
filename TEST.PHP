<?php
//Connect to the database

$name = $password1 = $email = $courses = $gender = $contact = $dob = $city = "";
$nameError = $emailError = $contactError = $passwordError = $dateOfBirthError = $cityError = $genderError = $coursesError = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the registration form
    $name = $_POST['username'];
    $password1 = ($_POST['password']);
    $email = $_POST['email'];
    $city = $_POST["city"];
    $courses = isset($_POST["courses"]) ? $_POST["courses"] : [];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];
    $flag = 0;
    echo "$username<br>";
    echo "$email<br>";
    // if(empty ($courses)){
    //     echo "y  e   s  ftg ";
    //  }
    //echo $courses[0];
    // echo $city;
    
    function hasLength($input)
    {
        return strlen($input);
    }
    //Name validation
    if (!hasLength($name)) {
        $nameError = "*Name is required";
        $flag = 1;
        echo "name $flag";
    } elseif (strlen($name) < 3 || strlen($name) > 30) {
        $flag = 1;
        $nameError = "*Name length should be between 3 and 30 characters";
        echo "name 2$flag";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
        $nameError = "*Name should only contain alphabets";
        $flag = 1;
        echo "name 3 $flag";
    } else {
        $nameError = "";
    }
    //email validation
    if (!hasLength($email)) {
        $emailError = "*Email is required";
        $flag = 1;
        echo "name4 $flag";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "*Not a valid email";
        $flag = 1;
        echo "name5 $flag";
    } else {
        $emailError = "";
    }
    //Mobile number validation
    if (empty($contact)) {

        $contactError = "*Mobile number is required";
        $flag = 1;
        echo "name6 $flag";
    } elseif (!preg_match('/^\d+$/', $contact)) {
        $contactError = "*Mobile number must contain only digits";
        $flag = 1;
        echo "name7 $flag";
    } elseif (strlen($contact) < 10 || strlen($contact) > 10) {
        $contactError = "*Mobile number must be of exactly 10 digits";
        $flag = 1;
        echo "name8 $flag";
    } else {
        echo "$contact<br>";
    }
    //Password validation;
    $passwordRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/';
    if (!preg_match($passwordRegex, $password1)) {
        $passwordError = "Invalid password format.";
        $flag = 1;
        echo "flag 1234";
        echo " <br> $password1 <br>";
    } else {
        echo "<br> Password: " . $password1 . "<br>";
    }

//birthday validation
    if (empty($dob)) {
        $dateOfBirthError = "Please enter your birthday.";
        $flag = 1;
        echo "flag000";
    } else {
        // Convert birthday to Date object
        $birthday = new DateTime($dob);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthday)->y;

        // Check if the person is 18 or older
        if ($age < 18) {
            $dateOfBirthError = "You must be 18 years or older to register.";
            $flag = 1;
        } else {
            echo "<br>Birthday: " . $dob. "<br>";
        }
    }
    //City validation
    if (empty($city)) {
        $cityError = "*City is required";
        $flag = 1;
        echo "name14 $flag";
    } else {
            $city= $city[0];
    }
    //Gender validation
    if (!hasLength($gender)) {
        $genderError = "*Gender is required <br>";
        $flag = 1;
        echo "name15 $flag";
    } else {
        $genderError = "";
    }
    // Course validation
    if (empty($courses)) {
        $coursesError = "please select";
        $flag = 1;
        echo "name16 $flag";
    }
    // echo "        flag = $flag         ";
    else {
        $courses= $courses[0];
}


    if ($flag == 0) {
        try {
            $host = "localhost";
            $username = "root";
            $password = "Rubi@123";
            $database = "registration";
            $signupPassword = password_hash($password1, PASSWORD_DEFAULT);
            $conn = new mysqli($host, $username, $password, $database);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // check if email exists or not
            $checkEmail = "SELECT * FROM users where email='$email'";
            $checkedEmail = $conn->query($checkEmail);
            if ($checkedEmail->num_rows > 0) {
                $emailError="user with this email already exist";
                $flag = 1;
                echo "<br> Error in the email <br>";
                $conn->close();
            }
            // // Insert data into the 'users' table
            else{
                $sqlUsers = "INSERT INTO users (email, password, created_at, 
                    updated_at) VALUES ('$email', '$signupPassword', CURRENT_TIMESTAMP, 
                    CURRENT_TIMESTAMP)";
                    echo "I am above if: ";
                if ($conn->query($sqlUsers) === TRUE) {
                    $id = $conn->query("SELECT ID FROM users WHERE Email = '$email'");
                    if ($id) {      
                        // Fetch the user ID
                        $row = $id->fetch_assoc();
                        if ($row) {
                            $user_id =  $row['ID'];
                            echo "User ID: ". $user_id. "<br>";
                        } else {
                            echo "No user found for the specified email.\n";
                        }
                    } else {
                        // Display an error message if the query fails
                        echo "Error: " . $conn->error;
                    }
                    // Insert into 'user_details' table
                    $sql_details = "INSERT INTO users_details (users_id, username, DOB, course, city,gender,contact) VALUES ('$user_id','$name', '$dob','$courses','$city', '$gender','$contact' )";
        
                    if ($conn->query($sql_details) === TRUE) {
                        header("Location:Login.php");
                    } else {
                        echo "Error inserting record into 'user_details' table: " . $conn->error;
                    }
                //     // Insert data into the 'user_details' table
                //     $sqlDetails = "INSERT INTO users_details (users_id, username, 
                //                         gender, city, course, contact,DOB) VALUES ('$userId', '$username', 
                //                         '$gender', '$city', '$courses', '$contact','')";
                //     // echo "hello errorr where wre you";
                //     // $conn->query($sqlDetails);
                //     // echo "hey eror come in front ";
                //     if ($conn->query($sqlDetails) === TRUE) {
                //         header("Location:Login.php");

                //     } else {
                //         echo "Error: " . $sqlDetails . "<br>" . $conn->error;
                //     }
                // } else {
                //     echo "Error: " . $sqlUsers . "<br>" . $conn->error;
                }
                // Close the database connection

                $conn->close();
            }
        } catch (mysqli_sql_exception $e) {
            echo "" . $e->getMessage() . "<br>";
        }
    }
}

?>
