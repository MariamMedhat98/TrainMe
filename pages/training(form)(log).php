<?php
 session_start();
 if(isset($_SESSION['Email_comp']) && isset($_SESSION['Password_comp'])){
 }
 elseif(isset($_SESSION['ID_c']) && isset($_SESSION['Password_c'])){
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
        <title>Training_info</title>
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
      <div class = "all" >
        <div class ="container">
          <!--header-->
          
          <div class ="header">      
            <h1>Training Info</h1>
          </div>

          <!--Training_info-->
          <form action="../php/addDataTraining.php" method="POST">
            <div class="form-group training" style="height: 800px;">
              
                <label  class="col-sm-2  control-label col-xs-12">Field :</label>
                <div class="col-sm-4 col-xs-12 " >
                  <select class = "Field Grade form-control" name="Field" style="width: 98%;margin-bottom:20px; margin-left: -30px; margin-top: 13px; outline: none; border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
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

                <label  class="col-sm-2  control-label col-xs-12">Sub Field :</label>
                <div class="col-sm-4 col-xs-12 " >
                  <select class = "Field Grade form-control" name="SubField" style="width: 98%;margin-bottom:20px; margin-left: -30px; margin-top: 13px; outline: none; border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
                      <option value="NULL">Null</option>
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

                <label class="col-sm-2  col-xs-12 control-label ">Code :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="number" class="form-control" name = "Code" placeholder="Enter your Code" required >
                </div>

                <label  class="col-sm-2 control-label col-xs-12 m" >Title :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="text" class="form-control"name = "title" placeholder="Enter your title">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >Address :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="text" class="form-control" name = "address" placeholder="Enter your Address">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >Location :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="text" class="form-control" name = "location" placeholder="Enter your Location">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >Training Hours :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="number" class="form-control" name = "Training_Hours" placeholder="Enter The Training Hours">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >End Date :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="date" class="form-control" name = "End_Date" placeholder="Enter The End Date">
                </div>


                <label  class="col-sm-2 control-label col-xs-12" >Phone :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="text" class="form-control" name = "Phone" placeholder="Enter your Phone number">
                </div>

                <label  class="col-sm-2 control-label col-xs-12" >Vacancies Number :</label>
                <div class="col-sm-4 col-xs-12">
                  <input type="number" class="form-control" name = "Vacancies_Number" placeholder="Enter The Vacancies number ">
                </div>
                
        
                <label  class="col-sm-2 control-label col-xs-4">Email :</label>
                <div class="col-sm-4 col-xs-4">
                  <input type="text" class="form-control" name = "email" placeholder="Enter your Email ">
                </div>


                <div class = "col-sm-4 col-xs-8 " style="padding: 14px 0px 20px 0px;">
                  <input type="radio" id="male" name="online" value="online" >
                  <label for="online" style="margin: 0px 35px 0px 6px">Online</label>
                  <input type="radio" id="female" name="online" value="offline">
                  <label for="offline" style="margin: 0px 26px 0px 6px">Offline</label>
                  </div>

                <div class="checkbox  col-sm-2  col-xs-4" style="margin-top: 1.5%;margin-left: -80px;">
                  <label style="margin-left: 0%;">
                    <input type="checkbox" name = "Certificate"> Certificate 
                  </label>
                </div>
               

                <div class="checkbox  col-sm-8  col-xs-8">
                  <label><input type="checkbox" name = "Paid"> Paid </label>
                </div>

                <div class = "col-sm-4  col-xs-4" style="margin-left:30%;margin-top: -5%;">
                  <label style="margin-left: 0px;">Salary :</label>
                  <input type="number" name = "Salary" placeholder="optinal" style="margin-left:2%; margin-bottom: 0px; height: 30px;outline: none;border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
                </div>

                <label class="col-sm-2 control-label col-xs-12" style="margin-top:22px;">Requirements</label>
                <div class="col-sm-4 col-xs-12">
                  <textarea class="form-control" rows="10" style="margin: 17.4625px 29.325px 0px -30px; width: 350px; height: 134px;" name = "Requirements"></textarea>
                </div>
                  
                <label class="col-sm-2 control-label col-xs-12" style="margin-top:22px;">About Organization</label>
                <div class="col-sm-4 col-xs-12">
                  <textarea class="form-control" rows="10" style="margin: 17.4625px 29.325px 0px -30px; width: 350px; height: 134px;" name = "About_Organization"></textarea>
                </div>

                <div class="col-sm-offset-4 col-sm-2 col-xs-3 sub" style="    padding-top: 45px;" >
                  <input type="submit" class="form-control btn btn-info"  style ="font-size:15px; ">
                </div>

                <div class=" col-sm-2 col-xs-3 reset" style="padding-top: 45px;"> 
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
