<?php
require_once("connection.php");
session_start();

$Field= $_POST['Field'];

if(empty($_POST['SubField'])){
  $SubField = 'NULL';
}else {
  $SubField = $_POST['SubField'];
}

$query="INSERT INTO field (name_field,sub_field) VALUES ('$Field','$SubField')"; 

$stm = $db->prepare($query);
$stm->execute();

header("location:../pages/addfield(admin).php");

?> 