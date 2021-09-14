<?php
require_once("connection.php");
session_start();

if ( $_SERVER['REQUEST_METHOD'] == "POST"){
   
}

else{
    header("location:../index/index(main).php");
    exit();
}
