<?php
  session_start();
    session_unset();
    echo "<script>
                alert('session dis');
                </script>";
    header('location:signin.php');
  ?>