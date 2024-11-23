<?php
   session_start();
   session_unset();
   echo "<script>
               alert('session dis');
               </script>";
   header('location:../admin_panel_login.php');
  ?>