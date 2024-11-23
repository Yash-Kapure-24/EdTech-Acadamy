<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Language</title>
    <link rel="stylesheet" href="../css/course.css">
    <link rel="stylesheet" href="../css/form.css">
     <!-- Font Awesome Icon Library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="back">
        <button class="button"><a href="../main.php">Back</a></button>
    </div><br>
    <br><br><br><br><br><br>
    <main>

        <?php
          
          require './connection.php';
          $query = "SELECT * FROM product";
          $query_run = mysqli_query($con,$query);
          $check = mysqli_num_rows($query_run);

          if($check)
          {
            $row =  mysqli_fetch_assoc($query_run)
                ?>
    

        <div class="side-img">
            <img src="../course_admin_panel/<?php echo $row['product_image'];?>" alt="">
        </div>
        
        <div class="intro">

        </div>
        <div class="details">
            <h2><b><?php echo $row['product_name']?></b></h2>
            <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
            <?php echo $row['product_desc']?></p>
            <!-- <a href="#"><button class="apply">Apply</button></a> -->
        </div>
        <p style="margin-left: 40%;">
            <span class="fa fa-star" style="color: orange;"></span>
            <span class="fa fa-star" style="color: orange;"></span>
            <span class="fa fa-star" style="color: orange;"></span>
            <span class="fa fa-star" style="color: orange;"></span>
            <span class="fa fa-star" style="color: orange;"></span>
        </p>
    </main>

    <form class="form">
        <input type="submit" value="Buy This Course" class="btn" id="payButton">
    </form>

    <div class="popup" id="popup" style="background-color: #006989bf;">
        <center >
            <p id="popupMessage"><img src="https://www.dnapayments.com/storage/app/media/Click%20to%20Pay/610x475-Click-to-Pay.png" alt=""></p>
        </center>
        <center >
            <span class="close" id="closePopup"><a style="color: aliceblue;" href="..\payment\c-payent.php">Click to Pay</a></span>
        </center>
    </div>

</body>
<script src="../js/popup.js"></script>

</html>
<?php
              }

          
          else
          {

          }
          ?>
    