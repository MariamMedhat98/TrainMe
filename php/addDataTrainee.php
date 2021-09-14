 <?php
 require_once("connection.php");

$Phone = $_POST['Phone'];
$college = $_POST['college'];
$university = $_POST['University'];
$higherDegree = $_POST['higher_degree'];
$graduation_year = $_POST['graduation_year'];
$age = $_POST['age_trainee'];
$academic_year = $_POST['academic_year'];
$general_grade = $_POST['general_grade'];

if(empty($_POST['gender'])){
    $gender = '';
}else {
    $gender = $_POST['gender'];
}

if($_POST['Field'] == 'Accounting and Finance'){
    $name_field = 'Accounting and Finance';
}else if($_POST['Field'] == 'Administration'){
    $name_field = 'Administration';
}else if($_POST['Field'] == 'Art and creative'){
    $name_field = 'Art and creative';
}else if($_POST['Field'] == 'Banking'){
    $name_field = 'Banking';
}else if($_POST['Field'] == 'Business and Management'){
    $name_field = 'Business and Management';
}else if($_POST['Field'] == 'Computer Science'){
    $name_field = 'Computer Science';
}else if($_POST['Field'] == 'Education and Teaching'){
    $name_field = 'Education and Teaching';
}else if($_POST['Field'] == 'Engineering'){
    $name_field = 'Engineering';
}else if($_POST['Field'] == 'Healthcare and Medical'){
    $name_field = 'Healthcare and Medical';
}else if($_POST['Field'] == 'Languages'){
    $name_field = 'Languages';
}else if($_POST['Field'] == 'Law'){
    $name_field = 'Law';
}else if($_POST['Field'] == 'Marketing'){
    $name_field = 'Marketing';
}else if($_POST['Field'] == 'Sales and Busisness Development'){
    $name_field = 'Sales and Busisness Development';
}else if($_POST['Field'] == 'Tourism'){
    $name_field = 'Tourism';
}


if($_POST['SubField'] == 'NULL'){
    $SubField = 'NULL';
}else if($_POST['SubField'] == 'Web Development'){
    $SubField = 'Web Development';
}else if($_POST['SubField'] == 'Mobile Development'){
    $SubField = 'Mobile Development';
}else if($_POST['SubField'] == 'Software Testing'){
    $SubField = 'Software Testing';
}else if($_POST['SubField'] == 'Information Technology'){
    $SubField = 'Information Technology';
}else if($_POST['SubField'] == 'Cyber Security'){
    $SubField = 'Cyber Security';
}else if($_POST['SubField'] == 'Architecture Engineering'){
    $SubField = 'Architecture Engineering';
}else if($_POST['SubField'] == 'Civil Engineering'){
    $SubField = 'Civil Engineering';
}else if($_POST['SubField'] == 'Computer Engineering'){
    $SubField = 'Computer Engineering';
}else if($_POST['SubField'] == 'Enviromental Engineering'){
    $SubField = 'Enviromental Engineering';
}

$NationalId = $_POST['NationalId'];
$OrganizationId = $_POST['OrganizationId'];
$Code = $_POST['code_trainig'];


$query="INSERT INTO send_receive (national_id,organization_id,age,phone,gender,higher_degree,general_grade,academic_year,graduation_year,university,college,name_field,sub_field,code) 
 VALUES ('$NationalId',$OrganizationId,$age,'$Phone','$gender','$higherDegree','$general_grade','$academic_year',$graduation_year,'$university','$college','$name_field','$SubField',$Code)";
$stm = $db->prepare($query);
$stm->execute();
header("location:../pages/trainer(form)(log).php");
?>