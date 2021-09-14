<?php 
require('connection.php');

$name = $_POST['name'];
$code = $_POST['code'];

if(empty($_POST['star'])){
    $general = '0';
}else {
    $general = $_POST['star'];
}
if(empty($_POST['star2'])){
    $behaviour = '0';
}else {
    $behaviour = $_POST['star2'];
}
if(empty($_POST['star3'])){
    $attendance = '0';
}else {
    $attendance = $_POST['star3'];
}
if(empty($_POST['star4'])){
    $time = '0';
}else {
    $time = $_POST['star4'];
}if(empty($_POST['star5'])){
    $active = '0';
}else {
    $active = $_POST['star5'];
}

$query="INSERT INTO company_feedback (trainee_name,training_code,general_rate,behaviour,attendance,time,active) VALUES
('$name','$code','$general','$behaviour','$attendance','$time','$active')"; 

$stm = $db->prepare($query);
$stm->execute();

header("location:../pages/profile(comp).php");

?>