<?php 

include 'connection.php';

//tite123
//sherwin love joyvie love hazel 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST)['username']) &&  isset ($_POST['password']) {

     $username = $conn->
     real_escape_string($_POST['username']);
     $password = $conn=> 
     real_escape_string($_POST['password']);
  }

}


?>        






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style2.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class='bx bxs-user'></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class='bx bxs-lock'></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class='bx bxl-facebook'></i>
              </a>
              <a href="#" class="social-icon">
                <i class='bx bxl-google'></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class='bx bxs-user'></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class='bx bxs-envelope'></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class='bx bxs-lock'></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class='bx bxl-facebook'></i>
              </a>
              <a href="#" class="social-icon">
                <i class='bx bxl-google'></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here?</h3>
            <p>
              Welcome! We're glad to have you here. If you're not registered on our site, please sign up first to get started.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <a href="BCP-Admission.php" class="btn transparent" id="main-up-btn">Main Page</a>
          </div>
          <img src="login.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              If you already have an account, please sign in to continue.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="signup.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="prac.js"></script>
  </body>
</html>
