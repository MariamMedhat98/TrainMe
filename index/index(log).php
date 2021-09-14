<?php
  session_start();
  if ( isset($_SESSION['Email_trainee']) && isset($_SESSION['Password_trainee'])){
  }
  elseif(isset($_SESSION['Email_comp']) && isset($_SESSION['Password_comp'])){
  }
  elseif(isset($_SESSION['NationalID_t']) && isset($_SESSION['Password_t'])){
  }
  elseif(isset($_SESSION['ID_c']) && isset($_SESSION['Password_c'])){
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
              <a class="navbar-brand" href="index(log).php">TrainMe</a> <!--a link that directs the user to the same page (#) -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
              <ul class="nav navbar-nav navbar-right">
                <li class="header-active home-link"><a href="index(log).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                <li><a href="../pages/about(log).php">About</a></li>
                <li><a href="../pages/FAQ(log).php">FAQ</a></li>
                <li><a href="../php/logout.php">Log Out</a></li>
                <li><a href="../pages/profile.php" ><span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
              </div>
            </div>
          </nav>
   
        <!-- CAROUSEL CODE -->
        <!-- class slide is responsible for the smooth transition between slides -->
        <!-- data ride attribute is responsible for loading the slider immediately after the page loads -->
        <div id="carousel-trial" class="carousel slide hidden-xs" data-ride="carousel">
          <!-- Indicators are the three little hollow dots at the bottom of the carousel-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-trial" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-trial" data-slide-to="1"></li>
            <li data-target="#carousel-trial" data-slide-to="2"></li>
            <li data-target="#carousel-trial" data-slide-to="3"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <!-- a larger div to contain all carousel slides -->
          <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img  class="img responsive" src="../images/2.jpg" alt="...">
              <div class="carousel-caption hidden-xs">
                <h1 style="text-shadow: 2px 2px 2px black; font-size:44px"> Programming </h1>
                <p class="lead" style="text-shadow: 2px 2px 2px black; font-size:22px; line-height: 1.5"> Programming is the process of creating a set of instructions that tell a computer how to perform a task.
                Programming can be done using a variety of programming languages.</p>
              </div>
            </div>
            
            <div class="item">
              <img class="img responsive" src="../images/3.png" alt="...">
              <div class="carousel-caption hidden-xs" style="margin-bottom: 60px;">
                <h1 style="text-shadow: 2px 2px 2px black; font-size:44px"> Healthcare and Medical </h1>
                <p class="lead" style="text-shadow: 2px 2px 2px black; font-size:22px; line-height: 1.5"> Medicine is the science, and practice of caring for a patient and managing the diagnosis, treatment or palliation of their injury.
                 Medicine encompasses a variety of health care practices evolved to maintain and restore health by the prevention and treatment of illness.</p>
              </div>
            </div>

            <div class="item">
              <img class="img responsive" src="../images/5.jpg" alt="...">
              <div class="carousel-caption hidden-xs">
                <h1 style="text-shadow: 2px 2px 2px black; font-size:44px"> Architecture Engineering </h1>
                <p class="lead" style="text-shadow: 2px 2px 2px black; font-size:22px; line-height: 1.5"> Architectural engineering is an engineering that deals with the technological aspects and 
                multi-disciplinary approach to planning, design, construction and operation of buildings.</p>
              </div>
            </div>

            <div class="item">
              <img class="img responsive" src="../images/4.jpg" alt="...">
              <div class="carousel-caption hidden-xs" style="margin-bottom: 60px;">
                <h1 style="text-shadow: 2px 2px 2px black; font-size:44px"> Web Development </h1>
                <p class="lead" style="text-shadow: 2px 2px 2px black; font-size:22px; line-height: 1.5"> Web development is the work involved in developing a Web site for the Internet or an intranet.
                 Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services.</p>
              </div>
            </div>
            
          </div>      
          <!-- Controls (prev and next) -->
          <a class="left carousel-control" href="#carousel-trial" role="button" data-slide="prev" style="top: 55px;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-trial" role="button" data-slide="next" style="top: 55px;">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- FIELDS SECTION -->
        <section class="fields">
            <div class="categories">
                    <h1>Fields</h1> 
                    <div class="categ">
                      <div class="sub1">
                            <?php
                      $host = "localhost";
                      $user = "root";
                      $password = "";
                      $db = "final";
                    try{
                          $connection = mysqli_connect($host, $user, $password, $db);
                          $sql = "SELECT * FROM field";

                          $query= mysqli_query($connection, $sql);
                          while($row = mysqli_fetch_assoc($query)) {
                            if($row["name_field"]=="Accounting and Finance"){
                              ?>
                              <ul>
                                  <li><a href="../pages/field/accounting(log).php"><?php echo $row["name_field"]?></a></li> 
                              </ul>
                            <?php 
                                }

                            elseif($row["name_field"]!="Accounting and Finance" && $row["name_field"]!="Computer Science" && $row["name_field"]!="Engineering"){
                              ?>
                                <ul>
                                  <li><a><?php echo $row["name_field"]?></a></li> 
                                </ul>
                              <?php
                            }
                            
                            elseif($row["name_field"]=="Computer Science" && $row["sub_field"]=="Cyber Security"){
                          ?>
                          <ul>
                          <li id="toggle1"><a><?php echo $row["name_field"]?></a>
                              <i class="glyphicon glyphicon-chevron-down"></i> </li>
                              <ul class="unstyled inner inner1" style="padding-top: 0px;">
                                  <li><a><?php echo $row["sub_field"]?></a></li> 
                              </ul>
                          </ul>
                         <?php 
                             }

                             elseif($row["name_field"]=="Computer Science" && $row["sub_field"]!="Web Development"){
                              ?>
                              <ul>
                              <ul class="unstyled inner inner1" style="padding-top: 0px;">
                                  <li><a><?php echo $row["sub_field"]?></a></li> 
                              </ul>
                              </ul>
                            <?php 
                                }

                             elseif($row["name_field"]=="Computer Science" && $row["sub_field"]=="Web Development"){
                              ?>
                              <ul>
                              <ul class="unstyled inner inner1" style="padding-top: 0px;">
                                  <li><a href="../pages/subfield/web(log).php"><?php echo $row["sub_field"]?></a></li> 
                              </ul>
                              </ul>
                            <?php 
                                }
                                
                                elseif($row["name_field"]=="Engineering" && $row["sub_field"]=="Architecture Engineering"){
                                  ?>
                                  </div>
                                <div class="sub2">
                                  <ul>
                                  <li id="toggle2"><a><?php echo $row["name_field"]?></a> 
                                  <i class="glyphicon glyphicon-chevron-down"></i> </li>
                                    <ul class="inner inner2" style="padding-top: 0px;">
                                        <li><a href="../pages/subfield/arch(log).php"><?php echo $row["sub_field"]?></a></li> 
                                    </ul>
                                  </ul>
                                <?php 
                                    }

                        elseif ($row["name_field"]=="Engineering"){
                          ?>
                          <ul>
                              <ul class="inner inner2" style="padding-top: 0px;"> 
                                  <li><a><?php echo $row["sub_field"]?></a></li> 
                              </ul> 
                            </li>
                          </ul>
                            <?php
                        }    
                    }
                    }
                    catch(PDOException $e){
                          echo "connection Failed" .$e->getMessage();

                      }
                      ?>
                    </div>
                  </div>
        </section>    
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