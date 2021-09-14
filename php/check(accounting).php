<?php
require_once("connection.php");
session_start();

if ( $_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['Email_trainee'];
    $pass = $_POST['Password_trainee'];
    $query ='SELECT email,password FROM trainee';
    $stm = $db->query($query);
    $res=array();
    while($row = $stm->fetch(PDO::FETCH_ASSOC)){
        $res[]=$row;
    }
    $resLenght = count($res);

    if( empty($_POST['Email_trainee']) ==  true || empty($_POST['Password_trainee']) ==  true){
        header("location:../pages/field/accounting.php");
        exit();        
    }

    else{
        if (empty($res)){
            header("location:../pages/field/accounting.php");
            exit(); 
        }
        for( $i = 0 ; $i < $resLenght ; $i++){
                if ($_POST["Email_trainee"] == $res[$i]['email'] && $_POST["Password_trainee"] == $res[$i]['password']){
                $_SESSION["Email_trainee"] = $email;
                $_SESSION["Password_trainee"] = $pass;
                header("location:../pages/field/accounting(log).php");
                exit();
            }    
        }
        for( $x = 0 ; $x < $resLenght ; $x++){
            if ($_POST["Email_trainee"] != $res[$x]['email'] && $_POST["Password_trainee"] == $res[$x]['password']){
                header("location:../pages/field/accounting.php?emailErr= Wrong Email!");
                exit();
             }   
         } 
         for( $y = 0 ; $y < $resLenght ; $y++){
             if ($_POST["Email_trainee"] == $res[$y]['email'] && $_POST["Password_trainee"] != $res[$y]['password']){
                 header("location:../pages/field/accounting.php?passErr= Wrong Password!");
                 exit();
             }   
         } 
        for( $j = 0 ; $j < $resLenght ; $j++){
            if ($_POST["Email_trainee"] != $res[$j]['email'] && $_POST["Password_trainee"] != $res[$j]['password']){
                header("location:../pages/field/accounting.php");
                exit();
            }   
        } 
    }
}

else{
    header("location:../index/index(main).php");
    exit();
}
