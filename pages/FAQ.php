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
    <body style="background-color: lightslategrey;">
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
              <a class="navbar-brand" href="../index/index(main).php">TrainMe</a> <!--a link that directs the user to the same page (#) -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../index/index(main).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="header-active home-link"><a href="FAQ.php">FAQ</a></li>
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
                  <form action="../php/check(FAQ).php" method="POST"></form>
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
                  <form action="../php/check(FAQ)(comp).php" method="POST"></form>
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
                  <form action="../php/check(FAQ)(comp).php" method="POST"></form>
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
                    <form action="../php/check(FAQ).php" method="POST">
                      <label for="Email" style="margin-left: 17.5%;">Email</label>
                      <input type="text" class="Email" id="Email" name="Email_trainee" placeholder="Email" required style="border-radius: 10px;"><br>
                      <label for="Password" style="margin-left: 16%; margin-right: -1.5%;">Password</label>
                      <input type="password" class="Password" id="Password" name="Password_trainee" placeholder="Password" required style="border-radius: 10px;">
                      <input type="submit" value="Login">
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
                    <form  action="../php/check(FAQ)(comp).php" method="POST">
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
          
        <section class="parag">
            <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                <div class="container2">
                
                    <h1>Frequently Asked Questions </h1><br>
                    <div class="panel-group supdata2" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                          <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                              What are the benefits of TrainMe?
                            </a>
                          </h3>
                        </div>
                        <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0" style="margin-left: 0px; padding-left:0px; margin-bottom: 25px;">
                          <div class="panel-body px-3 mb-4">
                            <ul>
                              <li style="font-size: 22px">It helps people of all ages to learn and grow in their careers.</li>
                              <li style="font-size: 22px">It allows them to find the perfect training  opportunity that best fits their needs.</li>
                              <li style="font-size: 22px">It also  helps companies reach the right candidates for their  training programs.</li>
                              <li style="font-size: 22px">The project focuses on facilitating the idea of internship hunt.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      
                      <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                          <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                              How easy is it to find and apply for a training?
                            </a>
                          </h3>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1" style="margin-left: 0px; padding-left:0px; margin-bottom: 25px;">
                          <div class="panel-body px-3 mb-4">
                          <ul>
                            <li style="font-size: 22px">Potential trainees can easily search for a training by browsing different opportunities in a specific field.</li>
                            <li style="font-size: 22px">A trainee can apply for any opportunity simply by filling a form and submitting it through the app.</li>
                          </ul>
                          </div>
                        </div>
                      </div>
                      
                      <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                          <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                              How easy is it for a company to announce for a new training?
                            </a>
                          </h3>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2" style="margin-left: 0px; padding-left:0px; margin-bottom: 25px;">
                          <div class="panel-body px-3 mb-4">
                          <ul>
                            <li style="font-size: 22px">companies can also announce  for available training programs by filling out an  application that contains all details about the  training.</li>
                            <li style="font-size: 22px">A number of applications from different applicants  is sent to the company to choose from.</li>
                          </ul>
                          </div>
                        </div>
                      </div>
                      
                      <div class="panel panel-default">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                          <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                              What makes TrainMe different?
                            </a>
                          </h3>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3" style="margin-left: 0px; padding-left:0px; margin-bottom: 25px;">
                          <div class="panel-body px-3 mb-4">
                            <ul>
                              <li style="font-size: 22px">Helps companies manage the number of applications they receive with each opportunity they are offering.</li>
                              <li style="font-size: 22px">Helps both companies and trainees rate each other through the app.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
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