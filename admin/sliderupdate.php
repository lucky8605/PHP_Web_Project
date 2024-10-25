<?php
include  "conn.php";

$id=$_REQUEST['updateid'];

$query="SELECT * from slider where slider_id='".$id."'";
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
                           <h4 class="modal-title">Update Slider</h4>
                           <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='slider.php';">&times;</button>
                        </div>
                        <div class="modal-body">
                           <form action="sliderupdate.php" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="mt-2 col-md-6">
                                    <label>Image:</label>
                                    <input type="hidden" name="slider_id" value="<?=$row['slider_id']?>">
                                    <input type="hidden" name="slider_img" value="<?=$row['slider_img']?>">
                                    <input type="file" name="slider_img" class="form-control" value="">
                                    <img src="upload/<?=$row['slider_img'];?>" style="height:100px;">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Title:</label>
                                    <input type="text" name="slider_title" class="form-control" value="<?=$row['slider_title'];?>">
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
   $a=rand(1,9999)."slider.".$ext[count($ext)-1]; 
   move_uploaded_file($temp,"$path".$a);
   return $a;
}

if(isset($_POST['slider_title'])){
	

   
   if($_FILES['slider_img']['name']!=""){
      $name=$_FILES['slider_img']['name'];
      $size=$_FILES['slider_img']['size'];
      $tmp=$_FILES['slider_img']['tmp_name'];
      $path="upload/";
      $slider_img=image($name,$size,$tmp,$path);
      
      $path='upload/'.$_POST['slider_img'];
      unlink($path);
   }
   else{
      $slider_img=$_POST['slider_img'];
   }   


   $query="UPDATE slider SET slider_title='".$_POST['slider_title']."',slider_img='".$slider_img."' WHERE slider_id='".$_POST['slider_id']."'";

	$fire=mysqli_query($conn,$query);
  if($fire){
   echo "<script>alert('Succsessfully Update');window.location.href='slider.php'</script>";
   
  }
  else{
   echo "Error: ";
  }
}
?>