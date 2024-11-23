<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seller login-page</title>
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
  <h1>Course Seller Panel</h1>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="Password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST" action="#">
      <input type="text" name="firstname" placeholder="firstname">
      <input type="text" name="lastname" placeholder="lastname">
      <input type="text" name="email" placeholder="email/username">
      <input type="text" name="password" placeholder="password">
      <p class="message">Already registered? <a href="course_admin_login.php">Sign In</a></p>
      <button name="login" type="submit">login</button>
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
if(isset($_POST['login']))
{   
    //fetching the details from user 
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if the email already exists in the database
    $query = "SELECT * FROM `seller` WHERE email='$email'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        if(mysqli_num_rows($result) > 0)//it is executed when email is already registered
        {   
            echo "<script>
            alert('Email already taken');
            window.location.href='course_admin_login.php';
            </script>";
        }
        else
        {   
            // Insert the new user into the database
            $execute = "INSERT INTO `seller` (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
            if(mysqli_query($con, $execute))
            {
                // Redirect to login page after successful registration
                echo "
                <script>
                alert('Registered successfully');
                window.location.href='course_admin_login.php';
                </script>";
            }
            else 
            {   
                // Redirect to registration page after unsuccessful registration
                echo "
                <script>
                alert('Registration unsuccessful');
                window.location.href='course_admin_registration.php';
                </script>";
            }

        }
        
    }
    else //it is executed when query is not run 
    {
        echo "<script>
        alert('Query cannot run');
        window.location.href='course_admin_registration.php';
        </script>";
    }
}
?>



</html>