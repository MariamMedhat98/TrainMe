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
              <a class="navbar-brand" href="../index/index(admin).php">TrainMe</a> <!--a link that directs the user to the same page (#) -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
              <ul class="nav navbar-nav navbar-right">
                <li class="header-active home-link"><a href="../index/index(admin).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                <li><a href="../pages/about(admin).php">About</a></li>
                <li><a href="../pages/FAQ(admin).php">FAQ</a></li>
                <li><a href="../php/logout.php">Log Out</a></li>
                </ul>
              </div>
            </div>
          </nav>
  
          <section class="fields" style="padding-top: 20%;">
            <!-- <div class="categories" style="font-size: 25px;">
            <div class="categ">
              <div class="sub1">
          <ul style="text-align: left;">
            <li>Accounting and Finance</li>
            <li>Administration</li>
            <li>Art and creative</li>
            <li>Banking</li>
            <li>Business and Management</li>
            <li id="toggle1">Computer Science
                <i class="glyphicon glyphicon-chevron-down"></i>
                <ul class="unstyled inner inner1"> 
                    <li>Web Development</li> 
                    <li>Mobile Development</li> 
                    <li>Software Testing</li>
                    <li>Information Technology</li>
                    <li>Cyber Security</li> 
                </ul> 
            </li> 
            <li>Education and Teaching</li>
            </ul>
            </div>

              <div class="sub2">
                <ul>
            <li id="toggle2">Engineering
            <i class="glyphicon glyphicon-chevron-down"></i>
            <ul class="inner inner2"> 
                <li>Architecture Engineering</li> 
                <li>Civil Engineering</li> 
                <li>Computer Engineering</li> 
                <li>Enviromental Engineering</li> 
            </ul> 
            </li>
            <li>Healthcare and Medical</li>
            <li>Languages</li>
            <li>Law</li>
            <li>Marketing</li>
            <li>Sales and Busisness Development</li>
            <li>Tourism</li>
          </ul>
            </div>
      </div> -->

<form style="margin: 0 95px;" action="../php/addfield.php" method="POST">
  <div class="buttons" >
  <div style="display: inline-block;">
    <label class="control-label" style="display: inline-block;margin-left: 90px;font-size: 25px;">New Field</label>
    <input type="text" name="Field" style="height: 36px;width: 261px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;
    background-image: none;border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);margin-left: 40px;" placeholder="Enter New Field" required >
  </div>

  <div style="display: inline-block;">
    <label  class="control-label" style="display: inline-block;margin-left: 90px;font-size: 25px;">New Subfield</label>
    <input type="text" name="SubField" style="height: 36px;width: 261px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;
    background-image: none;border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);margin-left: 40px;" placeholder="Enter New Subfield">
  </div>
  <button type="submit" class="btn btn-1" style="font-size: 25px;width:177px;color:#ccc;text-decoration:none;background-color:#066cb1;margin-bottom: 0px;display: block;margin-left: 38%;">Save</button>
  </div>
</form>

          <!-- <select class = "Field Grade form-control" name="Field" style=" width: 20%;margin-bottom:20px; margin-left:40px; margin-top: 1px; outline: none; border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
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
                <select class = "Field Grade form-control" name="Sub Field" style="width: 20%;margin-bottom:20px; margin-left: 290px; margin-top: 1px; outline: none; border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
                    <option value="Accounting and Finance">Web Development</option>
                    <option value="Engineering">Architecture Engineering</option>
                    <option value="NULL">NULL</option>
                </select> -->
                        
                  
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