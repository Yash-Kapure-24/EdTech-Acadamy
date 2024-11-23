<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="stylesheet" href=".\css\signup.css">
</head>
<body>

<div class="login-container">
    <center><h1>EdTech acadamy</h1></center>
    <div class="login-form">
        <h2>Sign Up</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">*First name</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">*Last name</label>
                <input type="text" id="text" name="lastname" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <label for="Email">*Email id</label>
                <input type="email" id="email" name="email" placeholder="Enter Email id" required>
            </div>
            <div class="form-group">
                <label for="password">*password </label>
                <input type="text" size="10" id="phone" name="password" placeholder="Enter password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Sign up</button>
                <button type="submit"><a href="indexx.php">Back</a></button> 
            </div>
            <div>Already have create account?<a href="signin.php" class="login">Login</a></div>
        </form>
    </div>
</div>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{   
    //fetching the details from user 
    $firstname= $_POST['username'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    // Check if the email already exists in the database
    $query = "SELECT email, phone FROM resisteration WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if($result)
    {
        if(mysqli_num_rows($result) > 0)//it is exicuted when email is already resistered
        {   
            //fetching the data from database
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['email']==$_POST['email'])//it is exicuted when email is already resitered
            {
                echo "<script>
                alert('username already taken');
                window.location.href='signup.php';
                </script>";
            }
        }
        else
        {   
            
            // Insert the new user into the database
            $execute = "INSERT INTO resisteration (firstname, lastname, email, phone) VALUES ('$firstname', '$lastname', '$email', '$password')";
            if(mysqli_query($con, $execute))
            {
                // Redirect to login page after successful registration
                echo "
                <script>
                alert('Registered successfully');
                window.location.href='signin.php';
                </script>";
            }
            else 
            {   // Redirect to login page after successful registration
                echo "
                <script>
                alert('Registered unsuccessfully');
                window.location.href='signup.php';
                </script>";
            }

        }
        
    }
    else //it is exicuted when query is not run 
    {
        echo "<script>
        alert(query cannot run);
        window.location.href='signun.php';
        </script>";
    }
}
?>


</body>
</html>

