<?php

$host = "localhost";
$user = "root";
$password = "";
$dbN = "finalproject";
try{
  $conn = new PDO("mysql:host=$host;dbname=$dbN",$user,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $conn->query("SELECT send_receive.age,send_receive.higher_degree,send_receive.general_grade,
  send_receive.academic_year,send_receive.graduation_year,send_receive.college,send_receive.code,send_receive.national_id
  FROM send_receive INNER JOIN accepted ON accepted.graduation_year = send_receive.graduation_year AND accepted.code = send_receive.code
  AND send_receive.general_grade = accepted.general_grade AND send_receive.higher_degree = accepted.higher_degree AND send_receive.age = accepted.age
  AND send_receive.academic_year = accepted.academic_year AND send_receive.college = accepted.college");
}
catch(PDOException $e){
    echo "connection error" . $e->getMessage();
}

while($row = $sql->fetch(PDO::FETCH_ASSOC))
{
    $National_Id= array($row["national_id"]);

    foreach($National_Id as $value) {
        $stm = $conn->query("SELECT * FROM trainee WHERE national_id = $value");
        while ($row = $stm->fetch(PDO::FETCH_ASSOC)) 
        {
            echo($row ["first_name"]." ".$row ["last_name"] . "\r\n");
        }
    }
}
?>
