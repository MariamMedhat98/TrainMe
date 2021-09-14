<?php
require_once("connection.php");
session_start();

if ( $_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['Email_admin'];
    $pass = $_POST['Password_admin'];
    $query ='SELECT email,password FROM user_admin';
    $stm = $db->query($query);
    $res=array();
    while($row = $stm->fetch(PDO::FETCH_ASSOC)){
        $res[]=$row;
    }
    $resLenght = count($res);

    if( empty($_POST['Email_admin']) ==  true || empty($_POST['Password_admin']) ==  true){
        header("location:../index/index(main).php");
        exit();        
    }

    else{
        if (empty($res)){
            header("location:../index/index(main).php");
            exit(); 
        }
        for( $i = 0 ; $i < $resLenght ; $i++){
                if ($_POST["Email_admin"] == $res[$i]['email'] && $_POST["Password_admin"] == $res[$i]['password']){
                $_SESSION["Email_admin"] = $email;
                $_SESSION["Password_admin"] = $pass;
                header("location:../index/index(admin).php");
                exit();
            }    
        }
        for( $x = 0 ; $x < $resLenght ; $x++){
            if ($_POST["Email_admin"] != $res[$x]['email'] && $_POST["Password_admin"] == $res[$x]['password']){
                header("location:../index/index(main).php?emailErradm= Wrong Email!");
                exit();
             }   
         } 
         for( $y = 0 ; $y < $resLenght ; $y++){
             if ($_POST["Email_admin"] == $res[$y]['email'] && $_POST["Password_admin"] != $res[$y]['password']){
                header("location:../index/index(main).php?passErradm= Wrong Password!");
                 exit();
             }   
         } 
        for( $j = 0 ; $j < $resLenght ; $j++){
            if ($_POST["Email_admin"] != $res[$j]['email'] && $_POST["Password_admin"] != $res[$j]['password']){
                header("location:../index/index(main).php");
                exit();
            }   
        } 
    }
}

else{
   header("location:../index/index(main).php");
    exit();
}
