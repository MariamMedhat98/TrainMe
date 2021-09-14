<?php
 session_start();
 if(isset($_SESSION['Email_comp']) && isset($_SESSION['Password_comp'])){
  $email = $_SESSION['Email_comp'];
 }
 elseif(isset($_SESSION['ID_c']) && isset($_SESSION['Password_c'])){
 }
 else{
   header("location:../index/index(log).php");
   exit();
 }
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Web Development</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/app.js"></script>
        <link rel='stylesheet' href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css" />
        <link rel="stylesheet" href="../css/style.css" media="all" />
    </head>
    <body>
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

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="../index/index(log).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                  <li><a href="../pages/about(log).php">About</a></li>
                  <li><a href="../pages/FAQ(log).php">FAQ</a></li>
                  <li><a href="../php/logout.php">Log Out</a></li>
                  <li><a href="../pages/profile.php" ><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
                </div>
              </div>
            </nav>
            
        <!--BREADCRUMB CODE -->
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
              <br><br>
            </form>
        </div> 

        <?php  
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "final";
            try{
              $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = $conn->query("SELECT code,title from training_info WHERE  email = '$email' and sub_field = 'Architecture Engineering'")->fetchAll(PDO::FETCH_KEY_PAIR);  
            }
            catch(PDOException $e){
                echo "connection Failed" .$e->getMessage();
            }
        ?>

        <div style="text-align: center; min-height: 500px; background-color:lightslategray; padding-top: 260px;"> 
          <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
          <label style="font-size: 20px; line-height: 55px; text-shadow: 1px 0px 2px #093c52; margin-left: 0%">Choose Code</label>
            <select name="choice" style="width: 16%; margin-left: 1%; outline: none; height: 34px;">
              <?php
                foreach ($sql as $key => $value){
                    echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                }   
              ?>
            </select>
              <input class="btn control_btn" style="background-color: #066cb1; width: 9%; margin-left: 2%; line-height: 150%;color:#ccc;" type="submit" value="Delete">
            </form>
        </div>

        <?php
              if ( $_SERVER['REQUEST_METHOD'] == "POST"){
                if(empty($_POST['choice'])){
                  $_POST['choice']="";
                }
                else{
                  $choose = $_POST['choice'];
                  try{
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $db = "final";
                    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stm = $conn->query("DELETE FROM training_info WHERE code = $choose");
                    header("location:../pages/subfield/arch(log).php");
                  }
                  catch(PDOException $e){
                    echo $e->getMessage();
                  }
              }
            }
          ?>
        
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
                            </div>
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