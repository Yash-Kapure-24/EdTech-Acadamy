<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login-page</title>
  <link rel="stylesheet" href="./css/admin-login.css">
  <style>
      .back a{
        text-decoration: none;
        color: white;
      }
      .back{
          font-family: "Roboto", sans-serif;
          text-transform: uppercase;
          outline: 0;
          background: #9aa7ff;
          width: 15%;
          border: 0;
          padding: 15px;
          color: white;
          font-size: 14px;
          -webkit-transition: all 0.3 ease;
          transition: all 0.3 ease;
          cursor: pointer;
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      }
  </style>
</head>
<body>
  <button class="back"><a href="indexx.php">Back</a></button>
<div class="login-page">
  <div class="form">
  <h1>Admin Panel</h1>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST" action="#">
      <input type="text" name="username" placeholder="Email Id"/>
      <input type="text" name="password" placeholder="Password"/>
      <button name="login">login</button>
      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
    </form>
  </div>
</div>
</body>
<script>
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

<?php 

include 'connection.php';

session_start(); // Start session

if(isset($_POST['login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $query = "SELECT * FROM `main-admin-panel` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($con, $query);

  if($result && mysqli_num_rows($result) > 0) {
    // Fetching user details
    $user = mysqli_fetch_assoc($result);
    // Store user information in session
    $_SESSION['username'] = $user['username'];
    // Redirect to admin panel
    header("Location: ./admin_panel/indexx.php");
    exit(); // Ensure script stops here
  } else {
    // $_SESSION['error'] = "Wrong Username or Password!";
    echo "<script>alert('wrong username or password');</script>";
    
  }
}
?>


</html>