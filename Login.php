<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-dark">
    <h3 class="text-center text-light" style="margin-top: 100px;">Log In</h3>
  <div class="border border-secondary  bg-secondary text-light w-25 rounded mx-auto  h-100">
    <form class="container text-light mt-2 pb-5">
        <div class="mb-1">
          <label for="loginEmail" class="form-label d-flex justify-content-center mt-4">Email or Phone  </label>
          <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Email" >
          <small class="text-warning" id="emailError"></small>
          <!-- <div id="emailHelp" class="text-center form-text text-muted">We'll never share your email with anyone else.</div> -->
        <!-- </div> -->
        <div class="mb-3">
          <label for="loginPassword" class="form-label d-flex justify-content-center">Password</label>
          <input type="password" class="form-control" id="loginPassword" placeholder="Enter your Password">
          <small class="text-warning" id="passwordError"></small>
          <!-- <p styele="text-align: right;" class="mb-5 w-75 text-"><a class="text-right text-warning" href="#">forget password</a></p> -->
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">chcekbox</label>
        </div> -->
        <button type="submit" id="login" class="text-center btn btn-primary d-flex allign-item-center justify-content-center w-100" onclick="logInValidations(event);">log in</button>
        <small><a href="Signup.html" class="text-warning text-center">New User?</a></small><br>
        <small class="text-warning" id="errorLogin"></small>
      </form>
  </div>
  <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="Login.js"></script>
</body>
</html>