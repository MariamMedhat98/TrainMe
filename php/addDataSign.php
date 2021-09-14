<?php
require_once("connection.php");
session_start();

$id= $_POST['NationalID_t'];
$fname= $_POST['FirstName_t'];
$lname= $_POST['LastName_t'];
$eMail= $_POST['Email_t'];
$phoneNo= $_POST['Phone_t'];
$password= $_POST['Password_t'];

$query="INSERT INTO trainee (national_id,first_name,last_name,email,phone_no,password) VALUES
($id,'$fname','$lname','$eMail','$phoneNo','$password')"; 

$stm = $db->prepare($query);
$stm->execute();

$_SESSION["NationalID_t"] = $id;
$_SESSION["Password_t"] = $password;

header("location:../index/index(log).php");

?> 