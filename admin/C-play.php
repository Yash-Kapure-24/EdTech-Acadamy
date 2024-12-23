<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Language</title>
    <link rel="stylesheet" href="../css/courseplay.css">
     <!-- ration icon font awsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/description.css">
</head>

<body>
<br>
<?php
          
          require '../connection.php';
          $query = "SELECT * FROM product";
          $query_run = mysqli_query($con,$query);
          $check = mysqli_num_rows($query_run);

          if($check)
          {
              while($row =  mysqli_fetch_assoc($query_run))
              {
              
                ?>
    
    <div class="back">
        <button class="button"><a href="../main.php">Back</a></button>
    </div>
<br>
    <div class="container">
        <div class="main-video-container">
            <p class="rigth" style="text-align: right; margin-top: 10px;">
                <header>
                    <h1><?php echo $row['product_name'];?><small> <i>Beginer to Advance</i></small></h1>
                  </header>

                  <!-- Video -->

                  <iframe style="margin-left: 50%; margin-top: 5%; margin-bottom: 10%;" width="560" height="315" class="main-video"
                  src="../admin_panel/uploads/30 Second Explainer Videos.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br><br>
                  
                  <main>
                    <span class="course-details">
                      <p><?php echo $row['product_desc'];?></p>
                    </span><br>
                  
                    <section class="rating">
                        <p>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star checked" style="color: orange;"></span>
                            <span class="fa fa-star" style="color: orange;"></span>
                            <span class="fa fa-star"></span>
                        </p>
                      <p>(160,800 ratings)</p>
                      <p>2,127,251 students</p>
                    </section>
                  </main>
            </p>
        </div> 
        <div class="main-video-container">
            <h3 class="main-video__title"><?php echo $row['product_name'];?></h3>
        </div>

    </div>
<?php
              }

          }
          else
          {

          }
          ?>
    
</body>
<script src="../js/courseplay.js"></script>

</html>