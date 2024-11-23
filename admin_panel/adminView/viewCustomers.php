<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Full Name </th>
        <th class="text-center">Email</th>
        <th class="text-center">Password</th>
        <!-- <th class="text-center">password</th> -->
        <th class="text-center" colspan="2">Action</th>
        
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from resisteration";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["firstname"]?> <?=$row["lastname"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["phone"]?></td>
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['product_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Delete</button></td>


      
      <!-- <td><?=$row["registered_at"]?></td> -->
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>