<?php
 session_start();
 if ( isset($_SESSION['Email_admin']) && isset($_SESSION['Password_admin'])){
 }
 else{
   header("location:../index/index(main).php");
   exit();
  }
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Accounting</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../js/jquery-1.11.1.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/app.js"></script>
        <link rel='stylesheet' href="../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/style.css" media="all">
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
              <a class="navbar-brand" href="../../index/index(admin).php">TrainMe</a> <!--a link that directs the user to the same page (#) -->
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">                
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="../../index/index(admin).php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
                  <li><a href="../about(admin).php">About</a></li>
                  <li><a href="../FAQ(admin).php">FAQ</a></li>
                  <li><a href="../../php/logout.php">Log Out</a></li>
                  </ul>
                  </div>
          </div>
            </nav>

                  <?php 
                    if(@$_GET['emailErr']==true)
                    {
                ?>
                  <div class="login-check" style="height: 300%;display: block;width: 41%;left: 30%;margin-top: 12%;">
                      <div class="close" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
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
                      <div class="close" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['passErr'] ?></div>
                      <form action="../php/check(accounting).php" method="POST"></form>
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
                      <div class="close" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['emailErrcomp'] ?></div>
                      <form action="../php/check(accounting)(comp).php" method="POST"></form>
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
                      <div class="close" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['passErrcomp'] ?></div>
                      <form action="../php/check(accounting)(comp).php" method="POST"></form>
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
                      <div class="close" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
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
                      <div class="close" style="margin-bottom: 0px;"><i class="fa fa-window-close"></i></div>
                      <div class="login-text" style="color: red; margin: 5% 0px 0px 0px;font-size: 45px;"><?php echo $_GET['passErradm'] ?></div>
                      <form action="../php/check(admin).php" method="POST"></form>
                        <input class="check-admin" type="submit" value="Try Again" style="text-align: center;font-size: 17px;
                            width: 22%; margin-left: 40%;background-color: lightslategrey;" id="check">
                    </div>                              
                <?php
                    }
                ?>
                    
        <!--BREADCRUMB CODE-->
        <div class="breadcrumb-holder">
          <div class="container-b" style="height: 30px;">
            <ul class="navbar-nav navbar-right">
              <li id="delete"><a href="../../php/delete(accounting)(admin).php" style="margin-right: -15%; padding-top: 0px; cursor: pointer;">Delete Training?</a></li>
            </ul>
          </div>
        </div>

        <div class="intro">
            <h1>Accounting</h1>
        </div>
        
        <div class="container-o">
            <form class="side-menu-o company-meta-o" action="" method="POST">
                <h2 style="text-align: center;">Filter your results</h2>
                <div style="margin-top: 30px;">
                <h4 style="display: inline;width: 22%;margin-top: 13px;">Location</h4>
                <select class = "Field Grade form-control" name="Location" style="width: 66%;margin-bottom:20px; margin-left: 77px; margin-top: -27px; outline: none; border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
                    <option value="All" selected> All</option>
                    <option value="New Cairo"<?php echo (isset($_POST['Location']) && $_POST['Location'] === 'New Cairo') ? 'selected' : ''; ?>>New Cairo</option>
                    <option value="Nasr City"<?php echo (isset($_POST['Location']) && $_POST['Location'] === 'Nasr City') ? 'selected' : ''; ?>>Nasr City</option>
                    <option value="Maadi"<?php echo (isset($_POST['Location']) && $_POST['Location'] === 'Maadi') ? 'selected' : ''; ?>>Maadi</option>
                    <option value="Heliopolis"<?php echo (isset($_POST['Location']) && $_POST['Location'] === 'Heliopolis') ? 'selected' : ''; ?>>Heliopolis</option>
                    <option value="Sheraton"<?php echo (isset($_POST['Location']) && $_POST['Location'] === 'Sheraton') ? 'selected' : ''; ?>>Sheraton</option>
                    <!-- <option value="Obour">Obour</option>
                    <option value="Downtown">Downtown</option>
                    <option value="Zamalek">Zamalek</option>
                    <option value="Dokki">Dokki</option>
                    <option value="Mohandessin">Mohandessin</option>
                    <option value="Giza">Giza</option>
                    <option value="6th of October">6th of October</option>
                    <option value="Sheikh Zayed">Sheikh Zayed</option>
                    <option value="Smart Village">Smart Village</option>
                    <option value="Alexandria">Alexandria</option>
                    <option value="Tanta">Tanta</option>
                    <option value="Dakahlia">Dakahlia</option>
                    <option value="Gharbia">Gharbia</option>
                    <option value="Sharkia">Sharkia</option>
                    <option value="Monufya">Monufya</option> -->
                </select>
                </div>
                <div style="margin-top: 30px;">
                <h4 style="display: inline;width: 22%;margin-top: 13px;">Online</h4>
                <select class = "Field Grade form-control" name="State" style="width: 66%;margin-bottom:20px; margin-left: 77px; margin-top: -27px; outline: none; border: 1px solid #ccc;border-radius: 4px;box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
                <option value="All" selected>All</option>
                <option value="Online" <?php echo (isset($_POST['State']) && $_POST['State'] === 'Online') ? 'selected' : ''; ?>>Online</option>
                <option value="Offline" <?php echo (isset($_POST['State']) && $_POST['State'] === 'Offline') ? 'selected' : ''; ?>>Offline</option>
              </select>
                </div>
                <input type="submit" name="submit" value="Ok" style="background-color: #3096CE; font-size: 16px; text-align: center; font-weight: bolder; cursor: pointer; color: #fff; margin: 5% 25%; padding: 2%; border: none; border-radius: 10px;">
            </form>
            
        <div class="details-o">
        <?php
                $host = "localhost";
                $user = "root";
                $password = "";
                $db = "final";
               try{
                    $connection = mysqli_connect($host, $user, $password, $db); 
              }
               catch(PDOException $e){
                    echo "connection Failed" .$e->getMessage();
                }
                ?>
            <?php
                  try{
                    if(!isset($_POST['submit']))
                    {
                      $sql = "SELECT * FROM training_info";

                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) {
                        if($row["field"]=="Accounting and Finance"){
                      ?>
                      <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                      <span class="company-name" style="font-size: 22px;">
                              <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                          </span>
                          <br><br>                 
                          <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                          <br>
                          <span>Hours: <span><?php echo $row["training_hours"]?></span>
                          <br>
                          <span>Paid: <span><?php echo $row["paid"]?></span>
                      </div>  
  
                    <?php       
                      } 
                 }
                    }
                    if(isset($_POST['submit'])){
                      if($_POST['Location']=="All"&& $_POST['State']=="All"){
                        $sql = "SELECT * FROM training_info";
                        $query= mysqli_query($connection, $sql);
                        while($row = mysqli_fetch_assoc($query)) { 
                          if($row["field"]=="Accounting and Finance"){
                          ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                          <span class="company-name" style="font-size: 22px;">
                                  <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                              </span>
                              <br><br>                 
                              <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                              <br>
                              <span>Hours: <span><?php echo $row["training_hours"]?></span>
                              <br>
                              <span>Paid: <span><?php echo $row["paid"]?></span>
                          </div>  
      
                              <?php 
                            }
                          }             
                        }
                          else if($_POST['Location']=="All"&&$_POST['State']=="Online"){
                            $sql = "SELECT * FROM training_info WHERE online_training='online'";
                            $query= mysqli_query($connection, $sql);
                            while($row = mysqli_fetch_assoc($query)) { 
                              if($row["field"]=="Accounting and Finance"){
                              ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                              <span class="company-name" style="font-size: 22px;">
                                      <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                                  </span>
                                  <br><br>                 
                                  <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                                  <br>
                                  <span>Hours: <span><?php echo $row["training_hours"]?></span>
                                  <br>
                                  <span>Paid: <span><?php echo $row["paid"]?></span>
                              </div>  
          
                                  <?php 
                                }
                              }
                              } 
                              else if($_POST['Location']=="All"&&$_POST['State']=="Offline"){
                                $sql = "SELECT * FROM training_info WHERE online_training='offline'";
                                $query= mysqli_query($connection, $sql);
                                while($row = mysqli_fetch_assoc($query)) {
                                  if($row["field"]=="Accounting and Finance"){ 
                                  ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                                  <span class="company-name" style="font-size: 22px;">
                                          <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                                      </span>
                                      <br><br>                 
                                      <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                                      <br>
                                      <span>Hours: <span><?php echo $row["training_hours"]?></span>
                                      <br>
                                      <span>Paid: <span><?php echo $row["paid"]?></span>
                                  </div>  
              
                                      <?php 
                                    }
                                  } 
                                }
                  else if($_POST['Location']=="New Cairo" && $_POST['State']=="Online"){
                  $sql = "SELECT * FROM training_info WHERE location_training='New Cairo' AND online_training= 'online'";
                  $query= mysqli_query($connection, $sql);
                  while($row = mysqli_fetch_assoc($query)) {
                    if($row["field"]=="Accounting and Finance"){ 
                    ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                    <span class="company-name" style="font-size: 22px;">
                            <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                        </span>
                        <br><br>                 
                        <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                        <br>
                        <span>Hours: <span><?php echo $row["training_hours"]?></span>
                        <br>
                        <span>Paid: <span><?php echo $row["paid"]?></span>
                    </div>  

                        <?php 
                      }
                    }
                    }
                    else if($_POST['Location']=="New Cairo"&& $_POST['State']=="Offline" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='New Cairo' AND online_training='offline'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) {
                        if($row["field"]=="Accounting and Finance"){ 
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="New Cairo"&& $_POST['State']=="All" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='New Cairo'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Nasr City"&& $_POST['State']=="Online"){
                      $sql = "SELECT * FROM training_info WHERE location_training='Nasr City' AND online_training='online'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)){
                        if($row["field"]=="Accounting and Finance"){ 
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  

                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Nasr City"&& $_POST['State']=="Offline" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='Nasr City' AND online_training='offline'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Nasr City"&& $_POST['State']=="All" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='Nasr City'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Maadi" && $_POST['State']=="Online"){
                      $sql = "SELECT * FROM training_info WHERE location_training='Maadi' AND online_training='online'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  

                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Maadi"&& $_POST['State']=="Offline" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='Maadi' AND online_training='offline'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) {
                        if($row["field"]=="Accounting and Finance"){ 
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Maadi"&& $_POST['State']=="All" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='Maadi'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Heliopolis"&& $_POST['State']=="Online"){
                      $sql = "SELECT * FROM training_info WHERE location_training='Heliopolis' AND online_training='online'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  

                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Heliopolis"&& $_POST['State']=="Offline" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='Heliopolis' AND online_training='offline'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Heliopolis"&& $_POST['State']=="All" ){
                      $sql = "SELECT * FROM training_info WHERE location_training='Heliopolis'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  
        
                      <?php  
                    }
                    }
                  }
                    else if($_POST['Location']=="Sheraton"&& $_POST['State']=="Online"){
                      $sql = "SELECT * FROM training_info WHERE location_training='Sheraton' AND online_training='online'";
                      $query= mysqli_query($connection, $sql);
                      while($row = mysqli_fetch_assoc($query)) { 
                        if($row["field"]=="Accounting and Finance"){
                        ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                        <span class="company-name" style="font-size: 22px;">
                                <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                            </span>
                            <br><br>                 
                            <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                            <br>
                            <span>Hours: <span><?php echo $row["training_hours"]?></span>
                            <br>
                            <span>Paid: <span><?php echo $row["paid"]?></span>
                        </div>  

                      <?php  
                    }
                    }
                  }
                  else if($_POST['Location']=="Sheraton"&& $_POST['State']=="Offline"){
                    $sql = "SELECT * FROM training_info WHERE location_training='Sheraton' AND online_training='offline'";
                    $query= mysqli_query($connection, $sql);
                    while($row = mysqli_fetch_assoc($query)) { 
                      if($row["field"]=="Accounting and Finance"){
                      ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                      <span class="company-name" style="font-size: 22px;">
                              <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                          </span>
                          <br><br>                 
                          <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                          <br>
                          <span>Hours: <span><?php echo $row["training_hours"]?></span>
                          <br>
                          <span>Paid: <span><?php echo $row["paid"]?></span>
                      </div>  
            
                    <?php  
                  }
                  }
                }
                  else if($_POST['Location']=="Sheraton" && $_POST['State']=="All"){
                    $sql = "SELECT * FROM training_info WHERE location_training='Sheraton'";
                    $query= mysqli_query($connection, $sql);
                    while($row = mysqli_fetch_assoc($query)) { 
                      if($row["field"]=="Accounting and Finance"){
                      ?>
                    <?php $code= $row['code']; ?>
                      <div class="company-meta" id="first">
                      <span class="company-name" style="font-size: 22px;">
                              <a style="text-decoration: none;" href= "../details(log).php?id= <?php echo $code ?>" title="Training"><span><?php echo $row["title"]?></span></a>
                          </span>
                          <br><br>                 
                          <span>Email: </span><a style="text-decoration: none;" href ="<?php echo $row["email"]?>" class="location location-desktop"><span><?php echo $row["email"]?></span></a>
                          <br>
                          <span>Hours: <span><?php echo $row["training_hours"]?></span>
                          <br>
                          <span>Paid: <span><?php echo $row["paid"]?></span>
                      </div>  
            
                    <?php  
                  }
                }
                  }
              }
            }
               catch(PDOException $e){
                    echo "connection Failed" .$e->getMessage();
                }
                ?>
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