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
  <h1>Log in</h1>
    <form class="register-form">
      <input type="text" placeholder="Name"/>
      <input type="password" placeholder="Password"/>
      <input type="text" placeholder="Email Id"/>
      <button>create</button>
      <p class="message">Already registered? <a href="course_admin_resistration.php">Sign In</a></p>
    </form>
    <form class="login-form" method="POST" action="#">
      <input type="text" name="username" placeholder="Email Id"/>
      <input type="text" name="password" placeholder="Password"/>
      <button name="login">login</button>
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
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM `seller` WHERE email='$username' AND password='$password'";
    $result = mysqli_query($con, $query);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            // Fetching user details
            $user = mysqli_fetch_assoc($result);
            // Store user information in session
            $_SESSION['username'] = $user['username'];

            // Regenerate session ID to prevent session fixation
            session_regenerate_id(true);

            // Redirect to admin panel
            header("Location: ./course_admin_panel/indexx.php");
            exit(); // Ensure script stops here
        } else {
            // Invalid login credentials
            echo "<script>alert('Wrong username or password');</script>";
        }
    } else {
        // Error in query execution
        echo "<script>alert('Error: ".mysqli_error($con)."');</script>";
    }
}
?>


</html>