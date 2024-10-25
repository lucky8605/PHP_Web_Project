<?php
include  "conn.php";

$id=$_REQUEST['updateid'];

$query="SELECT * from courses where c_id='".$id."'";
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
                           <h4 class="modal-title">Update Courses</h4>
                           <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='courses.php';">&times;</button>
                        </div>
                        <div class="modal-body">
                           <form action="courses_update.php" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="mt-2 col-md-6">
                                    <label>Image:</label>
                                    <input type="hidden" name="c_id" value="<?=$row['c_id']?>">
                                    <input type="hidden" name="c_img" value="<?=$row['c_img']?>">
                                    <input type="file" name="c_img" class="form-control" value="">
                                    <img src="upload/<?=$row['c_img'];?>" style="height:100px;">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Title:</label>
                                    <input type="text" name="c_title" class="form-control" value="<?=$row['c_title'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Description:</label>
                                    <input type="text" name="c_desc" class="form-control" value="<?=$row['c_desc'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Course Price:</label>
                                    <input type="text" name="c_price" class="form-control" value="<?=$row['c_price'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Type:</label>
                                    <input type="text" name="c_type" class="form-control" value="<?=$row['c_type'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Duration:</label>
                                    <input type="text" name="c_duration" class="form-control" value="<?=$row['c_duration'];?>">
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

function image($name,$size,$temp,$path){
   $ext=explode(".",$name); //abc.jpg
   $a=rand(1,9999)."courses.".$ext[count($ext)-1]; 
   move_uploaded_file($temp,"$path".$a);
   return $a;
}

if(isset($_POST['c_title'])){
	

   
   if($_FILES['c_img']['name']!=""){
      $name=$_FILES['c_img']['name'];
      $size=$_FILES['c_img']['size'];
      $tmp=$_FILES['c_img']['tmp_name'];
      $path="upload/";
      $c_img=image($name,$size,$tmp,$path);
      
      $path='upload/'.$_POST['c_img'];
      unlink($path);
   }
   else{
      $c_img=$_POST['c_img'];
   }   

   $query="UPDATE `courses` SET `c_title`='".$_POST['c_title']."',`c_desc`='".$_POST['c_desc']."',`c_price`='".$_POST['c_price']."',`c_type`='".$_POST['c_type']."',`c_duration`='".$_POST['c_duration']."',`c_img`='".$_POST['c_img']."'
    WHERE c_id='".$_POST['c_id']."'";

  $fire=mysqli_query($conn,$query);
  if($fire){
   echo "<script>alert('Succsessfully Update');window.location.href='courses.php'</script>";
   
  }
  else{
   echo "Error: ";
  }
}
?>