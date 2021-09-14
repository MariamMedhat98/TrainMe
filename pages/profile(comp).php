<?php
 session_start();
 $Email = '';
 if(isset($_SESSION['Email_comp']) && isset($_SESSION['Password_comp'])){
  $pass = $_SESSION['Password_comp'];
  $email = $_SESSION['Email_comp'];
 }
 elseif(isset($_SESSION['ID_c']) && isset($_SESSION['Password_c'])){
  $pass = $_SESSION['Password_c'];
  $email = $_SESSION['Email_comp'];
 }
 else{
   header("location:../index/index(main).php");
   exit();
 }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src= "../js/respond.js"></script>
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" media="all" />
    <title>Profile</title>
</head>
<body class="body_prof">
  <!-- NAVBAR CODE -->
  <nav class="navbar navbar-default navbar-inverse navbar-custom navbar-fixed-top">
    <div class="container-fluid"> <!-- fluid is used so that the container takes up the whole space of the page with no margins on the sides -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Both are the only two objects shown on mobile screen -->
    <div class="navbar-header">
    <!-- a toggle button when clicked drops down a menu that shows the rest of objects on the navbar -->
    <!-- data target identifies what shows up when the toggle button is clicked -->
    <!-- aria expanded when set to false means that the objects in the toggle menu are collapsed -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <!-- spans used to show the 3 bars right under each other shown in the toggle button  icon -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index/index(log).php">TrainMe</a> <!--a link that directs the user to the same page (#) -->
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
        <ul class="nav navbar-nav navbar-right">
            <li><a href="../index/index(log).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
            <li><a href="about(log).php">About</a></li>
            <li><a href="FAQ(log).php">FAQ</a></li>
            <li class="header-active home-link"><a href="#" ><span class="glyphicon glyphicon-user"></span></a></li>
        </ul>
        </div>
        </div>
    </nav>

    <?php
      $host = "localhost";
      $user = 'root';
      $password = "";
      $db = "final";
      try{
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stm = $conn->query("SELECT id,name,email,address,password from organization WHERE password = $pass"); 
        $row = $stm->fetch(); 
        $sql = $conn->query("SELECT code,title from training_info WHERE email = '$email' ")->fetchAll(PDO::FETCH_KEY_PAIR);  
    }
    catch(PDOException $e){
          echo "connection Failed" .$e->getMessage();
      }
    ?>


        <div class = "header">
            <h1 class="pr" style="font-size: 45px; margin-top:7%;margin-right: 55px;color: #EDEDED;">Profile</h1>
        </div>

    <div class = 'container con' style="border-radius: 15px;margin-top: 2%;margin-bottom: 5%;">
          <form class="form_prof" action="accepted_students.php" method="POST">
            <div class="form-group profile">
                <div class="col-sm-12 col-xs-12 ">
                    <img src="../images/5-512.png" class = "image" > 
                    <p class = "in" style="margin-left: 0px; font-size:20px; width: 50%;display: inline-block;" ><?php echo $row['name']?></p>
                    <hr>
                </div>

                <div class="col-sm-12 col-xs-12 " >
                  <label  class="  control-label ">Name :</label>
                  <p class ="in" style="margin-left: 0px; font-size:20px; width: 50%;display: inline-block;" type="text" class="form-control " name = "UserName" ><?php echo $row['name']?></p>
                </div>
                <hr>

                <div class="col-sm-12 col-xs-12 " >
                  <label  class="control-label">ID :</label>
                  <p class ="in" type="text" style="margin-left: 0px; font-size:20px; width: 50%;display: inline-block;" class="form-control " name = "Phone" ><?php echo $row['id']?></p>
                </div>
                <hr>

                <div class="col-sm-12 col-xs-12 " >
                  <label  class="  control-label ">Email :</label>
                  <p class ="in" type="text" style="margin-left: 0px; font-size:20px; width: 50%;display: inline-block;" class="form-control " name = "Email"><?php echo $row['email']?></p>
                </div>
                <hr>
                
                <div class="col-sm-12 col-xs-12 " >
                  <label  class="control-label">Address :</label>
                  <p class ="in" type="text" style="margin-left: 0px; font-size:20px; width: 50%;display: inline-block;" class="form-control " name = "Phone"><?php echo $row['address']?></p>
                </div>
                
            </div> 
          </form>
          <form class="form_prof" action="accepted_students.php" method="POST">
            <label style="font-size: 20px; line-height: 55px; text-shadow: 1px 0px 2px #093c52; margin-left: 5%">Choose Training Title To view Submitted Trainees</label>
            <select name="choice" class="form-control" style="width: 22%; margin-left: 57%;margin-top: -4.5%;" action="accepted_students.php">
              <?php
                foreach ($sql as $key => $value){
                    echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                }   
              ?>
            </select>
              <input class = "btn btn-primary" style="color:#EDEDED; width: 9%; margin-left: 82%; line-height: 22px;margin-top: -37px;font-size: 19px;" type="submit" value="view">
          </form>
          <form class="form_prof" action="../php/check(feedback)(comp).php" method="POST">
            <label style="font-size: 20px; line-height: 55px; text-shadow: 1px 0px 2px #093c52; margin-left: 5%">Choose Training Title To Give Feedback About Trainees</label>
            <select name="choice" class="form-control" style="width: 22%; margin-left: 57%; margin-top: -4.5%;" action="accepted_students.php">
              <?php
                foreach ($sql as $key => $value){
                    echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                }   
              ?>
            </select>
            <input class = "btn btn-primary" style="color:#EDEDED; width: 9%; margin-left: 82%; line-height: 22px;margin-top: -34px;font-size: 19px;" type="submit" value="choose">
          </form>
          <form class="form_prof" action="feedback_result.php" method="POST">
            <label style="font-size: 20px; line-height: 55px; text-shadow: 1px 0px 2px #093c52; margin-left: 5%">Choose Training Title To view Best Trainees</label>
            <select name="choice" class="form-control" style="width: 22%; margin-left: 57%; margin-top: -4.5%;" action="feedback_result.php">
              <?php
                foreach ($sql as $key => $value){
                    echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                }   
              ?>
            </select>
            <input class = "btn btn-primary" style="color:#EDEDED; width: 9%; margin-left: 82%; line-height: 22px;margin-top: -34px;font-size: 19px;" type="submit" value="view">
          </form>
          <a href="../php/logout.php" style="width: 14%;margin: 0px 0px 3% 41%;line-height: 30px;font-size: 20px;" class = "btn btn-primary">Logout</a>
    </div>

    <footer>
        <div class="supfooter1">
        <div class="logo">TrainMe</div>
          <p> 
            TrainMe is a web based and mobile applicantion that helps people of all ages to learn and grow in their careers. 
            It allows them to find the perfect training opportunity that best fits their needs while also helping companies 
            reach the right candidates for their training programs.
          </p>
          <div class="follow">
            <a href="#" class="follow-facebook " target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="follow-twitter " target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="follow-instagram " target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="#" class="follow-linkedin " target="_blank">
              <i class="fa fa-linkedin"></i>
            </a>
            <a href="#" class="follow-google " target="_blank">
              <i class="fa fa-google-plus"></i>
            </a>
          </div>
        </div>

        <div class="supfooter2">
          <section class="contact-us text-center">
            <div class="fields">
              <i class="fa fa-phone fa-2x"></i>
              <h2>Got Questions?</h2>
              <p class="lead"> For Further Inquiries..Feel Free To Contact Us Anytime </p>
              <!-- Start of contact form -->
              <form role="form">
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Username">                    
                        </div>-
                        <div class="form-group">
                          <input type="text" class="form-control input-lg" placeholder="Email">                    
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control input-lg" placeholder="Phone">                    
                        </div>   
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                          <textarea class="form-control input-lg" placeholder="Type Your Message Here.."></textarea>
                          <!-- btn-block (wider button that fills the screen) -->
                          <button class="btn btn-primary btn-lg btn-block">Contact Us</button>
                        </div>
                    </div>
                </form>
              </div>
            </section>
        </div>
  
        <div class="copyright text-center">
          Copyright &copy;2020 <span> TrainMe </span> Inc.
        </div>
      </footer>
</body>
</html>