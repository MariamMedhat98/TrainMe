<?php
require_once("connection.php");
session_start();
if ( $_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['choice'])){
      $_POST['choice']="";
    }
    else{
      $choose = $_POST['choice']; 
      $stm =  $db->query("SELECT end_date from training_info WHERE code = $choose"); 
      $row = $stm->fetch(); 
      $end_date = $row['end_date'];
      $today = date("Y-m-d");

      if($end_date > $today){
       echo "<script type='text/jscript'> if(confirm('Only At End Of Training!!')){document.location.href='../pages/profile.php'};</script>";
      }
      else {  
       $_SESSION['choose'] = $choose;
       header("location:../pages/rate(comp).php");
     } 
    }
  } 
?>
