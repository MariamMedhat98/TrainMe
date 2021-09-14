<?php
 require_once("connection.php");

$college = $_POST['college'];
$higherDegree = $_POST['higher_degree'];
$graduation_year = $_POST['graduation_year'];
$age = $_POST['age_trainee'];
$academic_year = $_POST['academic_year'];
$general_grade = $_POST['general_grade'];
$code = $_POST['code_trainig'];

$query="INSERT INTO accepted (code,age,college,higher_degree,graduation_year,general_grade,academic_year) 
VALUES ($code,$age,'$college','$higherDegree',$graduation_year,'$general_grade','$academic_year')";
$stm = $db->prepare($query);
$stm->execute();
header("location:../pages/field/accounting(log).php");
?>