<?php
require_once("connection.php");
session_start();

$id= $_POST['ID_c'];
$name= $_POST['Name_c'];
$eMail= $_POST['Email_c'];
$address= $_POST['Address_c'];
$password= $_POST['Password_c'];

$query="INSERT INTO organization (id,name,address,email,password) VALUES
($id,'$name','$address','$eMail','$password')"; 

$stm = $db->prepare($query);
$stm->execute();

$_SESSION["ID_c"] = $id;
$_SESSION["Password_c"] = $password;

header("location:../pages/subfield/web(log).php");
?> 