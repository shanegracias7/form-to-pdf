<?php
   $db = mysqli_connect("localhost","root","","cybertrom");
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>