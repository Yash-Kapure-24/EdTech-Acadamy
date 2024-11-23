<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['p_name'];
        $desc= $_POST['p_desc'];
        $price = $_POST['p_price'];
        $category = $_POST['category'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;
        move_uploaded_file($temp,$finalImage);

         //for video
        //  $vname = $_FILES['file']['name'];
        //  $vtemp = $_FILES['file']['tmp_name'];
        //  $vsize = $_FILES['file']['size'];
         
        //  $location = "./videos/";
        //  $image = $location . $vname;
         
        //  $target_dire = "../videos/";
        //  $finalVideo = $target_dire . $vname;
         
        //  $sql_query = move_uploaded_file($vtemp, $finalVideo);
         
        //  if ($sql_query) {
        //      $q = "INSERT INTO `video`(`name`, `size`, `video`) VALUES ('$vname','$vsize','$finalVideo')";
        //  }
             
         $insert = mysqli_query($conn,"INSERT INTO product
         (product_name,product_image,price,product_desc,category_id) 
         VALUES ('$ProductName','$image',$price,'$desc','$category')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>