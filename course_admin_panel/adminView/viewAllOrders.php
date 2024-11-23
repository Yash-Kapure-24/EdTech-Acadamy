<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Customer name</th>
        <th>Card number</th>
        <th>expiry date</th>
        <th>cvc</th>
        <th>profit</th>
        
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM `payment`";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
          $query= "SELECT * FROM `product`";
          $query_run = mysqli_query($conn,$query);
          $rows = mysqli_fetch_assoc($query_run);
          $q = $rows["price"]/2;
          $db = "INSERT INTO `profit`(`profilt`) VALUES ('$q')";
          
    ?>
       <tr>
          <td><?=$row["cardholder name"]?></td>
          <td><?=$row["card number"]?></td>
          <td><?=$row["expiry_month"]?></td>
          <td><?=$row["cvc"]?></td>
          <td><?=$q?></td>
           
            
      <?php
        }
      }
      ?>
  
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>