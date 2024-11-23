<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href=".\css\signin.css">
</head>
<body>

<div class="login-container">
    <center><h1>EdTech acadamy</h1></center>
    <hr width="25%">
    <hr width="50%">
    <hr width="25%">
    <div class="login-form">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Email I'd:</label>
                <input type="text" id="username" placeholder="Email I'd" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Login</button>
                <button type="submit"><a href="indexx.php">Back</a></button>
            </div>
            <div>
                No Created Account?<a href="signup.php" class="acc">Create Account</a>
            </div>
        </form>
    </div>
</div>

<?php
include 'connection.php';
session_start();   
if(isset($_POST['submit']))
{ 
    $email= $_POST['username'];
    $password= $_POST['password'];

    $query = "SELECT email FROM resisteration WHERE email='$email'";
    $pass = "SELECT phone FROM resisteration WHERE phone='$password'";
    $result = mysqli_query($con, $query);
    $requests = mysqli_query($con, $pass);

    if($result)
    {   
    
        if(mysqli_num_rows($result)==1)
        {
            
            if(mysqli_num_rows($requests)==1)
            {
                $_SESSION['logged_in']=true;
                header("location: main.php");
            }
            else
            {
                echo "<script>
                alert('incorrect password');
                </script>";
            }
        }
        else 
        {
            echo "<script>
                alert('username cannot resistered');
                window.location.href='signup.php';
                </script>";
        }
    }
    else{
        echo "<script>
        alert(query cannot exicuted);
        </script>";
    }
}

?>
</body>
</html>