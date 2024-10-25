<?php
include  "conn.php";

 $id=$_REQUEST['updateid'];

$query="SELECT * from why_choose where fw_id='".$id."'";
$fire=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($fire);
// print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title">Update Why Choose Us!</h4>
                           <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='features.php';">&times;</button>
                        </div>
                        <div class="modal-body">
                           <form action="features_update.php" method="POST">
                              <div class="row">
                                 <div class="mt-2 col-md-6">
                                    <label>Title:</label>
                                    <input type="hidden" name="fw_id" class="form-control" value="<?=$row['fw_id'];?>">
                                    <input type="text" name="fw_title" class="form-control" value="<?=$row['fw_title'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Description:</label>
                                    <input type="text" name="fw_desc" class="form-control" value="<?=$row['fw_desc'];?>">
                                 </div>
                                 <div class="col-md-12 text-center mt-5">
                                    <button class="btn text-white" style="background-color:rgb(33,65,98);">Save</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                    </div>
                </div>
</body>
</html>

<script>
        // Open the modal when the page loads
        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        };
        
</script>

<?php



if(isset($_POST['fw_title'])){
  $query="UPDATE why_choose SET fw_title='".$_POST['fw_title']."',fw_desc='".$_POST['fw_desc']."'WHERE fw_id='".$_POST['fw_id']."'";

  $fire=mysqli_query($conn,$query);
  if($fire){
   echo "<script>alert('Succsessfully Update');window.location.href='features.php'</script>";
   
  }
  else{
   echo "Error: ";
  }
}
?>