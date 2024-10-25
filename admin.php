<?php
session_start();

include "head.php";
include "nav.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
   <style type="text/css">
   	label{
   		color: white;
   	}
   </style>
</head>
<body>
	<form action="admin.php" method="POST">
   <div class="container">
   	<div class="row justify-content-center mt-5 p-5" id="login">
   		<div class="col-md-5">
   			<div class="card bg-warning ">
   				<div class="card-header">
   					<h1 class="text-center text-info font-wegight-bold">Log In</h1>
   				</div>
   				<div class="card-body">
   					<div class="row">
   						<div class="col-md-12">

   						<label>Username :</label>
   						<input type="text" name="username" class="form-control" required>
   						<label>Password :</label>
   						<input type="password" name="password" class="form-control" required>
   						</div>
   						<div class="col-md-12 text-center mt-3">
   							<button  class="btn btn-primary">Log IN</button>
   						</div>
   					</div>
   				</div>
   				<div class="card-footer text-center">
   					<p>New User<a href="register.php"> Register Here</a></p>
   				</div>

   			</div>
   		</div>
   	</div>
   </div>
   </form>
</body>
</html>
<?php
if (isset($_POST['username'])) {

	$user=trim($_POST['username']);
	$password=trim($_POST['password']);

 $query="SELECT * from login  where (email='".$user."' OR mobile='".$user."')AND password='".$password."'";
	$conn=mysqli_connect('localhost','root','','a2z_web_project');
	$q=mysqli_query($conn, $query);
	$arr=mysqli_fetch_assoc($q);


	if (($user==$arr['mobile'] || $user==$arr['email'])&& $password=$arr['password']) {
		// echo "LOG IN SUCCESS";
		$_SESSION['name']=$arr['name'];
        echo "<script>alert('Log In Success');window.location.href='admin/index.php';</script>";
        // header("Location: admin/index.php");
    }
	else{
		echo "LOG IN FAILD";
	}
}
?>

<?php
 include "footer.php";
?>