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
    <title>Accepted Students</title>
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
                $stm = $conn->query("SELECT * FROM send_receive WHERE organization_id = $choose");
                ?>
            <div class = "header">
                <h1 class="pr" style="font-size: 45px; margin-top:7%;margin-right: 55px;color: #EDEDED;">All Accepted Trainees</h1>
            </div>
            <div class='container con' style="border-radius: 15px;margin-top: 2%;margin-bottom: 5%;">
            <div style="margin-top: 50px; min-height: 550px;">
            <?php
                          while($row = $stm->fetch(PDO::FETCH_ASSOC))
                          {
                              $national_ids= array($row["national_id"]);

                              foreach($national_ids as $value) {
                                $stm2 = $conn->query("SELECT * FROM trainee WHERE national_id = $value");
                                while ($row2 = $stm2->fetch(PDO::FETCH_ASSOC)) 
                                {
                                  ?>
                                  <div class="col-sm-12 col-xs-12" style="padding: 0px 50px 20px 70px;">
                                    <label  class="control-label ">Name:</label>
                                    <p class ="in"style="padding: 0px 0px; margin: 0px 0px; font-size: 20px; width: 40%;display:inline-block;" type="text" class="form-control " name = "UserName" placeholder=" Name "><?php echo($row2["first_name"]." ".$row2["last_name"])?></p>
                        <label  class="control-label ">Phone Number:</label>
                        <p class ="in"style= " padding: 0px 0px; margin: 0px 0px; font-size: 20px; width: 30%;display:inline-block;" type="text" class="form-control " name = "UserName" placeholder=" Name "><?php echo($row2["phone_no"])?></p>
                                    <hr>
                                  </div>
                                  <?php
                             }
                            }
                          }
                         }
                          catch(PDOException $e){
                            echo $e->getMessage();
                          }
                         }
                        }
                       ?>

                      <a href="../php/logout.php" style="width: 13%;margin:5% 0px 0px 38%; font-size: 19px;line-height: 30px;" class = "btn btn-primary">Logout</a>
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
