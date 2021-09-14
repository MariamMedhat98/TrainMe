 <?php
require("connection.php");

$code = $_POST['Code'];
$Phone = $_POST['Phone'];
$title = $_POST['title'];
$email = $_POST['email'];
$address = $_POST['address'];
$location = $_POST['location'];
$training_hours = $_POST['Training_Hours'];
$end_date = $_POST['End_Date'];
$vacancies_number = $_POST['Vacancies_Number'];
$requirements = ($_POST['Requirements']);
$about_organization = $_POST['About_Organization'];

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

if(empty($_POST['online'])){
    $Onilne = '';
}else {
    $Onilne = $_POST['online'];
}

if(empty($_POST['Certificate'])=='on'){
    $Certificate = "Have";
}
else{
    $Certificate = "Dont have";
}

if(empty($_POST['Paid'])=='on'){
    $Paid = 1;
}
else{
    $Paid = 0;
}

if(empty($_POST['Salary'])){
    $salary = 0;
}
else{
    $salary = $_POST['Salary'];
}


$query="INSERT INTO training_info (field,sub_field,code,address,location_training,phone_no,email,title,salary,online_training,training_hours,end_date,vacancies_no,requirements,about_organization,certificate,paid) VALUES
('$name_field','$SubField',$code,'$address','$location','$Phone','$email','$title',$salary,'$Onilne',$training_hours,'$end_date',$vacancies_number,'$requirements','$about_organization','$Certificate',$Paid)";
$stm = $db->prepare($query);
$done=$stm->execute();
header("location:../pages/accepted(form).php");
?>