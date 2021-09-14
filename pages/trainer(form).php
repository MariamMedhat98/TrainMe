<?php
 session_start();
 if(isset($_SESSION['Email_trainee']) && isset($_SESSION['Password_trainee'])){
 }
 elseif(isset($_SESSION['NationalID_t']) && isset($_SESSION['Password_t'])){
 }
 else{
   header("location:../index/index(log).php");
   exit();
 }
?> 
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trainee_info</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src= "../js/respond.js"></script>
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/font-awesome.min.css">
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
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="../index/index(log).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                  <li><a href="about(log).php">About</a></li>
                  <li><a href="FAQ(log).php">FAQ</a></li>
                  <li><a href="../php/logout.php">Log Out</a></li>
                  <li><a href="profile.php" ><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
                </div>
              </div>
            </nav>
      <div class = "all">
        <div class ="container">
          <!--header-->
          
          <div class ="header">    
            <h1>Trainee Info</h1>
          </div>

          <?php
            $host = "localhost";
            $user = "root";
            $password = "";
            $db = "final";
            try{
              $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = $conn->query("SELECT national_id,national_id  from trainee")->fetchAll(PDO::FETCH_KEY_PAIR);  
              $sql1 = $conn->query("SELECT id,id from organization")->fetchAll(PDO::FETCH_KEY_PAIR); 
              $sql2 = $conn->query("SELECT code,code from training_info")->fetchAll(PDO::FETCH_KEY_PAIR);
            }
            catch(PDOException $e){
                echo "connection error" . $e->getMessage();
            }
            ?>

          <!--Trainer_info-->
          <form action="../php/addDataTrainee.php" method="POST">
            <div class="form-group trainer">

            <label class="col-sm-2 control-label col-xs-12 ">Age :</label>
                <div class="col-sm-4 col-xs-12">
                <select class = "control-label Grade"  name = "age_trainee" style=" margin-top: 15px;width: 175px;margin-left: -25px;">
                <?php
                            for($i = 18; $i <= 30; $i++){
                                echo "<option value= $i>" . $i . "</option>";
                            }
                        ?>
                </select>
                </div>

                <label  class="col-sm-2 control-label col-xs-12 " >Phone :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="text" class="form-control" name = "Phone" placeholder="Enter your Phone Number">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >College :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="text" class="form-control" name = "college" placeholder="Enter your College Name">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >University :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="text" class="form-control" name = "University" placeholder="Enter The University Name">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >Academic year :</label>
                <div class="col-sm-4 col-xs-12">
                <select class = "Grade" name="academic_year" style="margin-top: 14px;width: 175px;">
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                    <option value="Fourth">Fourth</option>
                    <option value="Fifth">Fifth</option>
                    <option value="Sixth">Sixth</option>
                    <option value="Seventh">Seventh</option>
                    <option value="Eighth">Eighth</option>
                  </select>
                </div>

                <label class = "control-label col-sm-2 col-xs-12" style="margin-top: 25px;">Higher Degree :</label>
                <div class = "col-sm-4 col-xs-12">
                  <input type="text" name="higher_degree" class="form-control" cols = "30" style="margin-top: 20px; margin-left:-30px;" placeholder="Enter your higher degree">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >Graduation Year :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="number" class="form-control" name = "graduation_year" id = "paid" placeholder="Enter your year ">
                </div>

                <div class = "col-sm-4 col-xs-12">
                  <label class = "control-label" style="padding-right: 90px ; margin-top: 15px;" >Genral Grade :</label>
                  <select class = "Grade" name="general_grade" style="margin-left: -53px;">
                    <option value="Excellent">Excellent</option>
                    <option value="very Good">very Good</option>
                    <option value="Good">Good</option>
                    <option value="Pass">Pass</option>
                  </select>  
                </div>

                <div class= "clearfix"></div>

                <label class = "control-label col-sm-2 col-xs-12"> Gender :</label>
                <div class = "col-sm-4 col-xs-12 " style="margin-left: -12px; padding: 16px 0px 0px 0px;">
                  <input type="radio" id="male" name="gender" value="male" >
                  <label for="male" style="margin: 0px 35px 0px 6px">Male</label>
                  <input type="radio" id="female" name="gender" value="female">
                  <label for="female" style="margin: 0px 35px 0px 6px">Female</label>
                </div> 

                <div class = "col-sm-4 col-xs-12" style="margin-left: 14px; margin-bottom: 16px;">
                  <label class = "control-label" style="padding-right: 90px ; margin-top: 15px;" >Code Trainig :</label>
                <select class = "Grade" name="code_trainig" style="margin-left: -46px;">
                    <?php
                      foreach ($sql2 as $key => $value){
                        echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                      }   
                    ?>
                  </select> 
                </div>

                <div class = "col-sm-6 col-xs-12">
                  <label class = "control-label" style="padding-right: 165px ; padding-top: 16px;" >Field :</label> 
                  <select class = "Field Grade" name="Field" style="width: 210px; margin-left: -33px;">
                    <option value="Accounting and Finance">Accounting and Finance</option>
                    <option value="Administration">Administration</option>
                    <option value="Art and creative">Art and creative</option>
                    <option value="Banking">Banking</option>
                    <option value="Business and Management">Business and Management</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Education and Teaching">Education and Teaching</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Healthcare and Medical">Healthcare and Medical</option>
                    <option value="Languages">Languages</option>
                    <option value="Law">Law</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Sales and Busisness Development">Sales and Busisness Development</option>
                    <option value="Tourism">Tourism</option>
                  </select>  
                </div>

                <div class = "col-sm-6 col-xs-12">
                  <label class = "control-label" style="padding-right: 133px ; padding-top: 16px;" >SubField :</label>
                  <select class = "SubField Grade" name="SubField" style="width: 210px; margin-left: -58px;">
                    <option value="NULL">NULL</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Mobile Development">Mobile Development</option>
                    <option value="Software Testing">Software Testing</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Architecture Engineering">Architecture Engineering</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Computer Engineering">Computer Engineering</option>
                    <option value="Enviromental Engineering">Enviromental Engineering</option>
                  </select> 
                </div>
                
                <div class = "col-sm-4 col-xs-12">
                  <label class = "control-label" style="padding-right: 46px ; padding-top: 35px;" >National Id Trainee :</label> 
                  <select class = "NationalId Grade" name="NationalId">
                    <?php
                      foreach ($sql as $key => $value){
                        echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                      }   
                    ?>
                  </select> 
                </div>

                <div class = "col-sm-6 col-xs-12"  style="padding-left: 205px ;">
                  <label class = "control-label" style="padding-right: 78px; padding-top: 35px;" >Organization Id :</label>
                  <select class = "OrganizationId Grade" name="OrganizationId" style="margin-left: -53px;">
                   <?php
                    foreach($sql1 as $key => $value){
                      echo "<option value=\"" . $key . "\">" . $value . "</option>\r\n";
                    }
                  ?>
                  </select>  
                </div> 

                <div class= "clearfix"></div>
                <div class="col-sm-offset-4 col-sm-2 col-xs-3 sub" >
                  <input type="submit" name='submit' class="form-control btn btn-info"  style ="font-size:15px; ">
                </div>

                <div class=" col-sm-2 col-xs-3 reset" > 
                  <input type="reset" class="form-control btn btn-info" value = "Reset"  style ="font-size:15px;">
                </div>
            </div>
          </form>
        </div>
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