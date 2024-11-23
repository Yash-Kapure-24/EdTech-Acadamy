<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    // Collecting the data from user
    $firstname=mysqli_real_escape_string($con, $_POST['FirstName']);
    $lastname=mysqli_real_escape_string($con, $_POST['LastName']);
    $email=mysqli_real_escape_string($con, $_POST['Email']);
    $number=mysqli_real_escape_string($con, $_POST['PhoneNumber']);
    $message=mysqli_real_escape_string($con, $_POST['message']);

    // Check if email already exists
    $query = "SELECT `email` FROM `form` WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0)
    {
        echo "<script>alert('Email already exists');
        window.location.href='indexx.php';</script>";
    }
    else
    {
        // Insert the record
        $insert_query = "INSERT INTO `form`(`firstname`, `lastname`, `email`, `number`, `message`) VALUES ('$firstname','$lastname','$email','$number','$message')";
        if(mysqli_query($con, $insert_query))
        {
            echo "<script>alert('Form is submitted');
            window.location.href='indexx.php';</script>";
            
        }
        else
        {
            echo "<script>alert('Technical error please try again');
            window.location.href='indexx.php';</script>";
        }
    }
}
?>
