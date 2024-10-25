<<?php
 session_start();
 session_destroy();

 //unset($_SESSION['name']);  //One Value Emty 

 header('location:../index.php'); 
?>