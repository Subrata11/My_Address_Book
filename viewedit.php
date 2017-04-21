<?php
session_start();
 

if(isset($_SESSION['usr_id'])  && isset($_SESSION['email'])) {
	header("Location: home.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;
 $ID=$_GET['id'];
 

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
	    background-color: #cccccc;
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
 <legend><h3>Make your Phone Book</h3><h3>You can Add,Delete,Edit,Search from the database Easily.</h3></legend>
</center>
 
 

   <h1>Edit data</h1>

     <div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="edited.php?id=<?php echo $ID;?>" method="post" name="signupform">
				<fieldset>
					<legend>
					<center>Edit Data.</legend></center>
                <input type="hidden" name="name" placeholder="ID" required value="<?php echo $ID;?>" class="form-control" />

                  <?php
                  include_once 'dbconnect.php';
 
		 	      mysql_connect("localhost","root","");
			      mysql_select_db("tst123");

                 $ID=$_GET['id'];
					
				 $row=mysql_query("SELECT * FROM userinfo WHERE id=$ID");

                   if($row === FALSE) { 
				die(mysql_error()); // TODO: better error handling
			}

		   while($data=mysql_fetch_array($row)) {

		   	?>


              
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" name="name" placeholder="Enter Full Name" required value="<?php echo  $data['name'];?>" class="form-control" />
<!-- 						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
 -->					</div>
					
					<div class="form-group">
						<label for="name">Email:</label>
						<input type="text" name="email" placeholder="Email" required value=<?php echo  $data['email'];?>" class="form-control" />
						<!-- <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span> -->
					</div>

					<div class="form-group">
						<label for="name">Address:</label>
						<input type="text" name="Address" placeholder="Address" required class="form-control" value="<?php echo  $data['Address'];?>" />
<!-- 						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
 -->					</div>

					<div class="form-group">
						<label for="name">Phone Number:</label>
						<input type="text" name="Phone" placeholder="Phone" required class="form-control" value="<?php echo  $data['Phone'];?>" />
						<!-- <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span> -->
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="Update" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
<!-- 		Already Registered? <a href="login.php">Login Here</a>
 -->		</div>
	</div>
</div>









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
<?php
}
?>

