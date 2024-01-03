<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form-Bootstrap-Demo</title>
</head>
<body>
  <?php  error_reporting(E_ERROR | E_PARSE);?> 
    <div id="Header"></div>
    <h2 class="text-center">Personal Details</h2>
    <div class="container bg-warning border border-dark shadow p-5 mb-5 rounded">
        <form method="post" action="Dbconnection.php">
            <!-- Name -->
            <div class="form-outline">
                <label for="userName" class="form-label">Name:</label>
                <input type="text" class="form-control" id="userName" name="myname"
                    placeholder="Enter your name">
                <br>
                <small id="showErrorName" class="text-danger" ><?php echo $nameError;?></small>
            </div>
            <!-- email -->
            <div class="mb-3">
                <label for="userEmail" class="form-label">Email address:</label>
                <input type="text" class="form-control" id="userEmail" name = "mymail" aria-describedby="emailHelp"
                    placeholder="Enter your email">
                    <br>
                    <small class="text-danger" id="showErrorEmail"><?php echo $emailError;?></small>
            </div>
            <!-- password -->
            <div class="mb-3">
                <label for="userPassword" class="form-label">Password:</label>
                <input type="password" class="form-control" id="userPassword" name="mypassword"  placeholder="Enter your passsword">
                <br>
                <small id ="showErrorPassword" class="text-danger"><?php echo $passError;?></small>
            </div>
            <!-- mobile -->
            <div class="mb-3">
                <label for="userMobile" class="form-label">Mobile no:</label>
                <input type="text" class="form-control" id="userMobile" name= "mycontact" placeholder="000-000-0000">
                <br>
                <small id="showErrorMobile" class="text-danger"><?php echo $phoneError;?></small>
            </div>
            <!-- dob -->
            <div class="mb-3">
                <label for="userDob" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="userDob" name = "myDob">
                <br>
                <small id ="showErrorDob" class="text-danger"><?php echo $dobError;?></small>
            </div>
            <!-- profile -->
            <div class="mb-3">
                <label for="formFile" class="form-label"> Profile Pic:</label>
                <input class="form-control" type="file" id="formFile" name ="myprofile">
                <br>
                <small class="show_error"><?php echo $fileError;?></small>
            </div>

            <!-- gender -->
            <div class="container">
                <h6>Gender:</h6>
                <div class="form-check">
                    <input class="form-check-input userGender" type="radio" name="gender" id="male"/>
                    <label class="form-check-label" for="flexRadioDefault">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input userGender" type="radio" name="gender" id="female"  />
                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                </div>
                <small class="text-danger" id="showErrorGender"><?php echo $genderError;?></small>
            </div>
            <!-- Courses -->
            <div class="container">
                <h6>Courses:</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="b.tech" name = "course" />
                    <label class="form-check-label" for="flexCheckDefault" >B.Tech</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input Mca" type="checkbox" value="mca" ,id="flexCheckChecke" name = "course"/>
                    <label class="form-check-label" for="flexCheckChecke" >Mca</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input Bca" type="checkbox" value="bca" id="flexCheckChecked" name = "course"/>
                    <label class="form-check-label" for="flexCheckChecked" id="Bca">Bca</label>
                </div>
                <small id="errorCourse" class="text-danger"><?php echo $courseError;?></small>
            </div>
            <!-- City Dropdown -->
            <h6 class="mx-3">City:</h6>
            <div class="btn-group mx-3 mb-3 ">
                <select class="border border-dark rounded p-1 bg-primary cities" aria-label="Default select example" id ="city">
                    <option name = "" value="0" name="default">Select your city</option>
                    <option name = "myCity" value="haridwar">Haridwar</option>
                    <option name = "myCity" value="roorkee">Roorkee</option>
                    <option name = "myCity" value="meerut">Meerut</option>
                    <option class= "line-break" value="other">Others</option>
                </select>
                <small class="text-danger" id="showErrorCity"><?php echo $cityError;?></small>
            </div>
            <br>
            <button type="submit" class="btn btn-primary rounded-pill w-100 mb-1 p-1" onclick="checkValidations(event)">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="Validation.js"></script>
</body>
<div id="Footer"></div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    $(function () {
      $("#Footer").load("Footer.html");
      $("#Header").load("Header.html");
    });
  </script>
</html>
