<?php
require_once("connection.php");
session_start();

if ( $_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['Email_comp'];
    $pass = $_POST['Password_comp'];
    $query ='SELECT email,password FROM organization';
    $stm = $db->query($query);
    $res=array();
    while($row = $stm->fetch(PDO::FETCH_ASSOC)){
        $res[]=$row;
    }
    $resLenght = count($res);

    if( empty($_POST['Email_comp']) ==  true || empty($_POST['Password_comp']) ==  true){
        header("location:../pages/subfield/web.php");
        exit();        
    }

    else{
        if (empty($res)){
            header("location:../pages/subfield/web.php");
            exit(); 
        }
        for( $i = 0 ; $i < $resLenght ; $i++){
                if ($_POST["Email_comp"] == $res[$i]['email'] && $_POST["Password_comp"] == $res[$i]['password']){
                $_SESSION["Email_comp"] = $email;
                $_SESSION["Password_comp"] = $pass;
                header("location:../pages/subfield/web(log).php");
                exit();
            }    
        }
        for( $x = 0 ; $x < $resLenght ; $x++){
            if ($_POST["Email_comp"] != $res[$x]['email'] && $_POST["Password_comp"] == $res[$x]['password']){
                header("location:../pages/subfield/web.php?emailErrcomp= Wrong Email!");
                exit();
             }   
         } 
         for( $y = 0 ; $y < $resLenght ; $y++){
             if ($_POST["Email_trainee"] == $res[$y]['email'] && $_POST["Password_trainee"] != $res[$y]['password']){
                 header("location:../pages/subfield/web.php?passErrcomp= Wrong Password!");
                 exit();
             }   
         } 
        for( $j = 0 ; $j < $resLenght ; $j++){
            if ($_POST["Email_comp"] != $res[$j]['email'] && $_POST["Password_comp"] != $res[$j]['password']){
                header("location:../pages/subfield/web.php");
                exit();
            }   
        } 
    }
}

else{
    header("location:../index/index(main).php");
    exit();
}
