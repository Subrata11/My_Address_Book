<?php
session_start();

if(isset($_SESSION['usr_id'])  && isset($_SESSION['email'])) {
  
  header("Location: home.php");

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
              
               
            <form action="database_search.php" method="post">
				Search: <input type="text" name="search" placeholder=" Search here ... "/><input type="submit" value="Submit" />
	    	</form>
        <br>
 

 
 
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




 