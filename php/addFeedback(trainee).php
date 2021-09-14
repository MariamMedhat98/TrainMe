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
    $content = '0';
}else {
    $content = $_POST['star2'];
}
if(empty($_POST['star3'])){
    $questions = '0';
}else {
    $questions = $_POST['star3'];
}
if(empty($_POST['star4'])){
    $time = '0';
}else {
    $time = $_POST['star4'];
}if(empty($_POST['star5'])){
    $benefits = '0';
}else {
    $benefits = $_POST['star5'];
}

$recommend = $_POST['star6'];

$query="INSERT INTO trainee_feedback (trainee_name,training_code,general_rate,content,questions,time,benefits,recommend) VALUES
('$name','$code','$general','$content','$questions','$time','$benefits','$recommend')"; 

$stm = $db->prepare($query);
$stm->execute();

header("location:../pages/profile.php");

?>