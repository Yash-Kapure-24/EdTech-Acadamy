<!DOCTYPE html>
<html>
<head>
  <title>EdTech Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="https://www.smarttech.com/-/media/project/smart/www/education/homepage/english-uk/edtech-assessment-tool-logo-network-background.jpg?h=800&iar=0&w=800&rev=480248468a3a441b9198852c8ca9255c&hash=31F35DEE3ADF95DEF84ACCADB4103CCC" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<body >
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px; color:white;"></i>
                    <h4 style="color:white;">Total Student</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from resisteration";
                        $sql_query = mysqli_query($conn,$sql);
                        // $result=$conn-> query($sql);
                        $user_total=0;
                        if ($user_total=mysqli_num_rows($sql_query)){
                            
                    
                                $user_total=$user_total+1;
                            }
                            $user_total=$user_total-1;
                        
                        echo $user_total;
                    ?>
                    </h5>
                </div>
            </div>
           
            <div class="col-sm-3">
            <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px; color:white"></i>
                    <h4 style="color:white;">Total Courses</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from product";
                        $sql_query = mysqli_query($conn,$sql);
                        // $result=$conn-> query($sql);
                        $user_total=0;
                        if ($user_total=mysqli_num_rows($sql_query)){
                            
                    
                                $user_total=$user_total+1;
                            }
                            $user_total=$user_total-1;
                        
                        echo $user_total;
                    ?>
                   </h5>
                </div>
            </div>

            <div class="col-sm-3">
            <div class="card">
                    <i class="fa fa-th mb-2" style="font-size: 70px; color:white"></i>
                    <h4 style="color:white;">Total Sellers</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from seller";
                        $sql_query = mysqli_query($conn,$sql);
                        // $result=$conn-> query($sql);
                        $user_total=0;
                        if ($user_total=mysqli_num_rows($sql_query)){
                            
                    
                                $user_total=$user_total+1;
                            }
                            $user_total=$user_total-2;
                        
                        echo $user_total;
                    ?>
                   </h5>
                </div>
            </div>
       
            
        <?php
            if (isset($_GET['category']) && $_GET['category'] == "success") {
                echo '<script> alert("Category Successfully Added")</script>';
            }else if (isset($_GET['category']) && $_GET['category'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['size']) && $_GET['size'] == "success") {
                echo '<script> alert("Size Successfully Added")</script>';
            }else if (isset($_GET['size']) && $_GET['size'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                echo '<script> alert("Variation Successfully Added")</script>';
            }else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>