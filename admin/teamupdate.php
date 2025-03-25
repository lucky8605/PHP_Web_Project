<?php
include  "conn.php";

$id=$_REQUEST['updateid'];

$query="SELECT * from team where team_id='".$id."'";
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
                           <h4 class="modal-title">Update Team</h4>
                           <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='team.php';">&times;</button>
                        </div>
                        <div class="modal-body">
                           <form action="teamupdate.php" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="mt-2 col-md-6">
                                    <label>Image:</label>
                                    <input type="hidden" name="team_id" value="<?=$row['team_id']?>">
                                    <input type="hidden" name="team_img" value="<?=$row['team_img']?>">
                                    <input type="file" name="team_img" class="form-control" value="">
                                    <img src="upload/<?=$row['team_img'];?>" style="height:100px;">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Name:</label>
                                    <input type="text" name="team_name" class="form-control" value="<?=$row['team_name'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Position:</label>
                                    <input type="text" name="team_Position" class="form-control" value="<?=$row['team_Position'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>facebook link:</label>
                                    <input type="text" name="f_link" class="form-control" value="<?=$row['f_link'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Twitter link:</label>
                                    <input type="text" name="t_link" class="form-control" value="<?=$row['t_link'];?>">
                                 </div>
                                 <div class="mt-2 col-md-6">
                                    <label>Instagram link:</label>
                                    <input type="text" name="i_link" class="form-control" value="<?=$row['i_link'];?>">
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
   $a=rand(1,9999)."team.".$ext[count($ext)-1]; 
   move_uploaded_file($temp,"$path".$a);
   return $a;
}

if(isset($_POST['team_name'])){
   if($_FILES['team_img']['name']!=""){
      $name=$_FILES['team_img']['name'];
      $size=$_FILES['team_img']['size'];
      $tmp=$_FILES['team_img']['tmp_name'];
      $path="upload/";
      $team_img=image($name,$size,$tmp,$path);
      
      $path='upload/'.$_POST['team_img'];
      unlink($path);
   }
   else{
      $team_img=$_POST['team_img'];
   }   
   $query="UPDATE team SET team_name='".$_POST['team_name']."',team_Position='".$_POST['team_Position']."',f_link='".$_POST['f_link']."',t_link='".$_POST['t_link']."',i_link='".$_POST['i_link']."',team_img='".$team_img."' 
   WHERE team_id='".$_POST['team_id']."'";

	$fire=mysqli_query($conn,$query);
  if($fire){
   echo "<script>alert('Succsessfully Update');window.location.href='team.php'</script>";
   
  }
  else{
   echo "Error: ";
  }
}
?>