<?php
session_start();

if(isset($_SESSION['usr_id'])  && isset($_SESSION['email'])) {
  
  header("Location: home.php");
  $id=$_SESSION['usr_id'];

}



?>



<!DOCTYPE html>
<html>
<head>
  <title>Phone Book</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" >
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link href='img/pb1.png' rel='icon' type='image/x-icon'/>

  <style>
  body  {
      background-image: url("img/4.jpg");
      background-color: #000;
      
  }
  </style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-folder-open"></span>   Manage Your Phonebook</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['usr_id'])) { ?>
        <li><a href="home.php"> <span class="glyphicon glyphicon-plus-sign"></span>   Add</a></li>
        <li><a href="edit.php"> <span class="glyphicon glyphicon-edit"></span>  Edit</a></li>
        <li><a href="view.php"> <span class="glyphicon glyphicon-eye-open"></span>  View</a></li>
        <li><a href="delete.php"> <span class="glyphicon glyphicon-remove"></span>  Delete</a></li>
        <li><a href="search.php"> <span class="glyphicon glyphicon-search"></span>  Search</a></li>
        <li><p class="navbar-text">Hi! <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['usr_name']; ?></p></li>
        <li><a href="logout.php"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        <?php } else { ?>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</a></li>
        <li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
<center> 
 <legend ><h3>Make your Phone Book</h3><h3>You can Add,Delete,Edit,Search from the database Easily.</h3></legend>
</center>
<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
  
    
  <h1>Search data</h1>

          <div class="container">

            <div class="row">



<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "tst123";

    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from userinfo where  name LIKE '%$search%' OR email LIKE '%$search%' OR Address LIKE '%$search%' OR Phone  LIKE '%$search%' LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
 
				echo "<table style='color:white;' class='table table-bordered '>";	
                echo "<tr><td >User Name</td><td >Email</td><td >Address</td><td >Phone</td></tr>";				
            while ($results = $query->fetch()) {
 
				echo "<tr><td >";			
                echo $results['name'];
				echo "</td><td >";
                echo $results['email'];
				echo "</td><td >";
                
                echo $results['Address'];
                echo "</td><td >";
                echo $results['Phone'];
	 	
            }
				echo "</table>";		
        } else {
            echo '<h2>Nothing found in the Database.Please try again...<h2>';
        }
?>





         <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

            <div class="container">
                <div class="navbar-text pull-left">
                    <p> <span class="glyphicon glyphicon-globe"></span> 2017 We Are "One"</p>
                </div>
                <div class="navbar-text pull-right">
                    <a href="#"><i class="fa fa-facebook-square fa-2x icon-padding"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-2x icon-padding"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-2x icon-padding"></i></a>
					
                </div>
            </div>

        </div>






<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
