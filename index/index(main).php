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
              <a class="navbar-brand" href="index(main).php">TrainMe</a> <!--a link that directs the user to the same page (#) -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
              <ul class="nav navbar-nav navbar-right">
                <li class="header-active home-link"><a href="index(main).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                <li><a href="../pages/about.php">About</a></li>
                <li><a href="../pages/FAQ.php">FAQ</a></li>
                <li class="dropdown">
                    <!-- aria haspopup means the link has a pop up menu-->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
                    <ul class="dropdown-menu">
                    <li id="loginT"><button id="login" type="submit">Trainee?</button></li>
  
                      <!-- adivider is a fine line to separate items in the menu -->
                      <li role="separator" class="divider"></li>

                      <li id="loginO"><button id="login" type="submit">Company?</button></li>
                      <li role="separator" class="divider"></li>

                      <li id="loginA"><button id="login" type="submit">Admin?</button></li>
  
                    </ul>
                  </li>
                </ul>

                <?php 
                    if(@$_GET['emailErr']==true)
                    {
                ?>
                  <div class="login-check" style="height: 300%;display: block;width: 41%;left: 30%;margin-top: 12%;">
                    <div class="close close3" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['emailErr'] ?></div>
                        <input class="check" type="submit" value="Try Again" style="text-align: center;font-size: 17px;
                            width: 22%; margin-left: 40%;background-color: lightslategrey;">
                      <!-- </form> -->
                    </div>
                <?php
                    }
                ?>

                <?php 
                    if(@$_GET['passErr']==true)
                    {
                ?>
                <div class="login-check" style="height: 300%;display: block;width: 41%;left: 30%;margin-top: 12%;">
                    <div class="close close3" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['passErr'] ?></div>
                      <form action="../php/check.php" method="POST"></form>
                        <input class="check" type="submit" value="Try Again" style="text-align: center;font-size: 17px;
                            width: 22%; margin-left: 40%;background-color: lightslategrey;" id="check">
                    </div>                              
                <?php
                    }
                ?>

                <?php 
                    if(@$_GET['emailErrcomp']==true)
                    {
                ?>
                <div class="login-check-company" style="height: 300%;display: block;width: 41%;left: 30%;margin-top: 12%;">
                    <div class="close close3" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['emailErrcomp'] ?></div>
                      <form action="../php/check(comp).php" method="POST"></form>
                        <input class="check-company" type="submit" value="Try Again" style="text-align: center;font-size: 17px;
                            width: 22%; margin-left: 40%;background-color: lightslategrey;" id="check">
                    </div>                              
                <?php
                    }
                ?>

                <?php 
                    if(@$_GET['passErrcomp']==true)
                    {
                ?>
                <div class="login-check-company" style="height: 300%;display: block;width: 41%;left: 30%;margin-top: 12%;">
                    <div class="close close3" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['passErrcomp'] ?></div>
                      <form action="../php/check(comp).php" method="POST"></form>
                        <input class="check-company" type="submit" value="Try Again" style="text-align: center;font-size: 17px;
                            width: 22%; margin-left: 40%;background-color: lightslategrey;" id="check">
                    </div>                              
                <?php
                    }
                ?>

<?php 
                    if(@$_GET['emailErradm']==true)
                    {
                ?>
                
                <div class="login-check-admin" style="height: 300%;display: block;width: 41%;left: 30%;margin-top: 12%;">
                      <div class="close close3" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['emailErradm'] ?></div>
                      <form action="../php/check(admin).php" method="POST"></form>
                        <input class="check-admin" type="submit" value="Try Again" style="text-align: center;font-size: 17px;
                            width: 22%; margin-left: 40%;background-color: lightslategrey;" id="check">
                    </div>                              
                <?php
                    }
                ?>

                <?php 
                    if(@$_GET['passErradm']==true)
                    {
                ?>
                <div class="login-check-admin" style="height: 300%;display: block;width: 41%;left: 30%;margin-top: 12%;">
                      <div class="close close3" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['passErradm'] ?></div>
                      <form action="../php/check(admin).php" method="POST"></form>
                        <input class="check-admin" type="submit" value="Try Again" style="text-align: center;font-size: 17px;
                            width: 22%; margin-left: 40%;background-color: lightslategrey;" id="check">
                    </div>                              
                <?php
                    }
                ?>
                    
                  <div class="login-view">
                  <div class="close"><i class="fa fa-window-close"></i></div>
                  <div class="login-text">Login With Your Account</div>
                  <form action="../php/check.php" method="POST">
                    <label for="Email" style="margin-left: 17.5%;">Email</label>
                    <input type="text" class="Email" id="Email" name="Email_trainee" placeholder="Email" required style="border-radius: 10px;"><br>
                    <label for="Password" style="margin-left: 16%; margin-right: -1.5%;">Password</label>
                    <input type="password" class="Password" id="Password" name="Password_trainee" placeholder="Password" required style="border-radius: 10px;">
                    <input type="submit" value="Login" id="login2">
                  </form>
                  <button id="signin">sign up</button>
                </div>
                
                <div class="sign-view">
                  <div class="close close2"><i class="fa fa-window-close"></i></div>
                  <div class="sign-text">Sign With New Account</div>
                  <form action="../php/addDataSign.php" method="POST">
                    <label for="NationalID" style="margin-right: 5.5%;margin-left: 7.5%; ">National ID</label>
                    <input type="NationalID" class="NationalID" id="NationalID" name="NationalID_t" placeholder="National ID" required style="border-radius: 10px;"><br>
                    <label for="FirstName" style="margin-right: 5.5%;margin-left: 8%;">First Name</label>
                    <input type="text" class="FirstName" id="FirstName" name="FirstName_t" placeholder="First Name" required style="border-radius: 10px;"><br>
                    <label for="LastName"  style="margin-right: 6%;margin-left: 7.9%;">Last Name</label>
                    <input type="text" class="LastName" id="LastName" name="LastName_t" placeholder="Last Name" required style="border-radius: 10px;"><br>
                    <label for="Email" style="margin-right: 9.9%;margin-left: 8%;">Email</label>
                    <input type="text" class="Email" id="Email" name="Email_t" placeholder="Email" required style="border-radius: 10px;"><br>
                    <label for="Phone" style="margin-right: 9.6%;margin-left: 7.9%;">Phone</label>
                    <input type="text" class="Phone" id="Phone" name="Phone_t" placeholder="Phone" required style="border-radius: 10px;"><br>
                    <label for="Password" style="margin-right: 7%;margin-left: 7.7%;">Password</label>
                    <input type="password" class="Password" id="Password" name="Password_t" placeholder="Password" required style="border-radius: 10px;"><br>
                    <input type="submit" value="SignUp" name="submit">
                  </form>
                </div>

                <div class="login-view-company">
                  <div class="close"><i class="fa fa-window-close"></i></div>
                  <div class="login-text" style="font-size: 47px;">Login With Your Company Account</div>
                  <form  action="../php/check(comp).php" method="POST">
                    <label for="Email" style="margin-left: 17.5%;">Email</label>
                    <input type="text" class="Email" id="Email" name="Email_comp" placeholder="Email" required style="border-radius: 10px;"><br>
                    <label for="Password" style="margin-left: 16%; margin-right: -1.5%">Password</label>
                    <input type="password" class="Password" id="Password" name="Password_comp" placeholder="Password" required style="border-radius: 10px;">
                    <input type="submit" value="Login">
                  </form>
                  <button id="signin-company">sign up</button>
                </div>
    
                <div class="sign-view-company">
                  <div class="close close2"><i class="fa fa-window-close"></i></div>
                  <div class="sign-text" style="font-size: 47px; margin-left: 8%;">Sign With New Company Account</div>
                  <form action="../php/addDataSign(comp).php" method="POST">
                    <label for="ID" style="margin-right: 10.5%;margin-left: 8%;">ID</label>
                    <input type="text" class="ID" id="ID" name="ID_c" placeholder="ID" required style="border-radius: 10px;"><br>
                    <label for="Name"  style="margin-right: 8%;margin-left: 7.6%;">Name</label>
                    <input type="text" class="Name" id="Name" name="Name_c" placeholder="Name" required style="border-radius: 10px;"><br>
                    <label for="Email" style="margin-right: 7.6%;margin-left: 8%;">Email</label>
                    <input type="text" class="Email" id="Email" name="Email_c" placeholder="Email" required style="border-radius: 10px;"><br>
                    <label for="Address" style="margin-right: 6%;margin-left: 7.7%;">Address</label>
                    <input type="text" class="Address" id="Address" name="Address_c" placeholder="Address" required style="border-radius: 10px;"><br>
                    <label for="Password" style="margin-right: 4.5%;margin-left: 7.8%;">Password</label>
                    <input type="password" class="Password" id="Password" name="Password_c" placeholder="Password" required style="border-radius: 10px;"><br>
                    <input type="submit" value="SignUp">
                  </form>
                </div>

                <div class="login-view-admin">
                    <div class="close"><i class="fa fa-window-close"></i></div>
                    <div class="login-text">Login With Your Account</div>
                    <form action="../php/check(admin).php" method="POST">
                      <label for="Email" style="margin-left: 18%;">Email</label>
                      <input type="text" class="Email" id="Email" name="Email_admin" placeholder="Email" required style="border-radius: 10px;"><br>
                      <label for="Password" style="margin-top: 4%; margin-left: 17%; margin-right: -1.5%;">Password</label>
                      <input type="password" class="Password" id="Password" name="Password_admin" placeholder="Password" required style="border-radius: 10px;">
                      <input type="submit" value="Login" style="margin: 3.8% 42%;">
                    </form>
                  </div>
  
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
                                  <li><a href="../pages/field/accounting.php"><?php echo $row["name_field"]?></a></li> 
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
                                  <li><a href="../pages/subfield/web.php"><?php echo $row["sub_field"]?></a></li> 
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
                                        <li><a href="../pages/subfield/arch.php"><?php echo $row["sub_field"]?></a></li> 
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