<?php
 session_start();
 if ( isset($_SESSION['Email_admin']) && isset($_SESSION['Password_admin'])){
 }
 else{
   header("location:../index/index(main).php");
   exit();
 }
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>TrainMe</title>
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
              <a class="navbar-brand" href="../index/index(admin).php">TrainMe</a> <!--a link that directs the user to the same page (#) -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../index/index(admin).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                <li class="header-active home-link"><a href="about(admin).php">About</a></li>
                <li><a href="FAQ(admin).php">FAQ</a></li>
                <li><a href="../php/logout.php">Log Out</a></li>
                </ul>
              </div>
            </div>
          </nav> 

        <section class="parag">
            <h1>About Us</h1><br>
              <div class="supdata">
                <p class="lead">
                  TrainMe is a web based and mobile applicantion that helps people of all ages to learn and grow in their careers. <br>
                  It allows them to find the perfect training opportunity that best fits their needs while also helping companies 
                  reach the right candidates for their training programs. <br>
                  Potential trainees can easily search for a training by browsing different opportunities in a specific field 
                  or by searching for a specific title or even a location for the training. <br> 
                  They can also apply for any opportunity simply by filling a form and submitting it through the app.
                  Users will get notified if their application is accepted or rejected. <br>
                  On the other hand, companies can also announce for available training programs by filling out an application
                  that contains all details about the training. <br> A number of applications from different applicants is sent to the company to choose from.
                </p>
              </div>
        </section>
        <section class="about-features text-center">
              <div class="row">
                  <div class="col-sm-4">
                      <i class="fa fa-group fa-4x"></i>
                      <h3>Connectivity</h3>
                      <p>Bringing you closer to the opportunities that would help you build your career</p>
                  </div>
                  <div class="col-sm-4">
                      <i class="fa fa-laptop fa-4x"></i>
                      <h3>Accessibility</h3>
                      <p>Accessible to all users at any time and anywhere</p>
                  </div>
                  <div class="col-sm-4">
                      <i class="fa fa-check fa-4x"></i>
                      <h3>Credibility</h3>
                      <p>Safe environment for you to share your ideas and experience</p>
                  </div>
              </div>
        </section>

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