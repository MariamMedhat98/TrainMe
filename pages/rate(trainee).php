<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
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
          
          <div class ="header feed">      
            <h1>Trainee Feedback</h1>
          </div>

          <?php
              if(empty($_SESSION['choose'])){
                $_SESSION['choose']="";
              }
              else{
                $choose = $_SESSION['choose'];
              }
          ?>

          <!--Training_info-->
          <form action="../php/addFeedback(trainee).php" method="POST">
            <div class="form-group training" style="height: 730px;width: 199%;">

              <div>
                <label class="control-label" style="display: inline-block;margin-left: 30px">Trainee Name</label>
                <input type="text" class="form-control" name = "name" style="margin-left: 30px;display: inline-block;width:50%" placeholder="Enter Trainee Name" required >
              </div>

              <div class="">
                <label  class="control-label" style="display: inline-block;margin-left: 30px">Training Code</label>
                <input type="text" class="form-control" name = "code" style="margin-left: 30px;display: inline-block;width:50%" value= "<?php session_start(); echo $_SESSION['choose']?>" readonly>
              </div>

              <div class=" general" >
                <label  style="margin: 17px;font-size: 20px;margin-left: 2.5%;">Overall satisfaction with the training program?</label>
                  <div class="rating" style="top:58%;left: 65%;">
                    <input type="radio" name="star" id="star1" value="5"><label for="star1"></label>
                    <input type="radio" name="star" id="star2" value="4"><label for="star2"></label>
                    <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
                    <input type="radio" name="star" id="star4" value="2"><label for="star4"></label>
                    <input type="radio" name="star" id="star5" value="1"><label for="star5"></label>
                  </div>
                </div>

              <div class=" general" >
                <label  style="margin: 17px;font-size: 20px;margin-left: 2.5%;">Content of the training program?</label>
                  <div class="rating" style="top:67%;left: 65%;">
                    <input type="radio" name="star2" id="star6" value="5"><label for="star6"></label>
                    <input type="radio" name="star2" id="star7" value="4"><label for="star7"></label>
                    <input type="radio" name="star2" id="star8" value="3"><label for="star8"></label>
                    <input type="radio" name="star2" id="star9" value="2"><label for="star9"></label>
                    <input type="radio" name="star2" id="star10" value="1"><label for="star10"></label>
                  </div>
                </div>

              <div class=" general" >
                <label  style="margin: 17px;font-size: 20px;margin-left: 2.5%;">Trainer's ability to answer your questions?</label>
                  <div class="rating" style="top:76%;left: 65%;">
                    <input type="radio" name="star3" id="star11" value="5"><label for="star11"></label>
                    <input type="radio" name="star3" id="star12" value="4"><label for="star12"></label>
                    <input type="radio" name="star3" id="star13" value="3"><label for="star13"></label>
                    <input type="radio" name="star3" id="star14" value="2"><label for="star14"></label>
                    <input type="radio" name="star3" id="star15" value="1"><label for="star15"></label>
                  </div>
                </div>

              <div class=" general" >
                <label  style="margin: 17px;font-size: 20px;margin-left: 2.5%;">Trainer's ability to follow the schedule?</label>
                  <div class="rating" style="top:84.5%;left: 65%;">
                    <input type="radio" name="star4" id="star16" value="5"><label for="star16"></label>
                    <input type="radio" name="star4" id="star17" value="4"><label for="star17"></label>
                    <input type="radio" name="star4" id="star18" value="3"><label for="star18"></label>
                    <input type="radio" name="star4" id="star19" value="2"><label for="star19"></label>
                    <input type="radio" name="star4" id="star20" value="1"><label for="star20"></label>
                  </div>
                </div>

              <div class=" general" >
                <label  style="margin: 17px;font-size: 20px;margin-left: 2.5%;">Benefits gained from the training program?</label>
                  <div class="rating" style="top:93%;left: 65%;">
                    <input type="radio" name="star5" id="star21" value="5"><label for="star21"></label>
                    <input type="radio" name="star5" id="star22" value="4"><label for="star22"></label>
                    <input type="radio" name="star5" id="star23" value="3"><label for="star23"></label>
                    <input type="radio" name="star5" id="star24" value="2"><label for="star24"></label>
                    <input type="radio" name="star5" id="star25" value="1"><label for="star25"></label>
                  </div>
                </div>

                <label  style="margin: 17px;font-size: 20px;margin-left: 2.5%;">Would you recommend this training program to others?</label>
                  <div class="new-radio" style="width: 15%;margin: -58px 20px 0px 55%;">
                    <input type="radio" id="yes" name="star6" value="yes">
                    <label for="yes" style="margin: 20px 35px 0px 6px">Yes</label>
                    <input type="radio" id="no" name="star6" value="no">
                    <label for="no" style="margin: 20px 35px 0px 6px">No</label>
                  </div>

                <div class="col-sm-offset-4 col-sm-2 col-xs-3 sub" style="padding-top: 45px;" >
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
