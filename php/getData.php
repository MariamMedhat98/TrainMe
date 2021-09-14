<?php

require_once("connection.php");
$query ='SELECT email FROM trainee';
$stm = $db->query($query);
$res=array();

while($row = $stm->fetchAll(PDO::FETCH_KEY_PAIR)){
    $res[]=$row;
}
echo json_encode($res);
 ?>