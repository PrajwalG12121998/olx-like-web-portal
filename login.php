<?php
    
?>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>
  <!--<header class="login_h">
  <h2>Rent IT On<h2>
</header>-->
<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<!--form start-->

<form action='login.php' method="post" class="form-container">
  <h1>Login Form</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>
  <!--<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>-->
  <br>
  <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success btn-block">
  <br>
  <p>If not Registered <a href="register.php">Click Here</a></p>
</form>

            <!--form ends-->
		</div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>

<?php
  //$db = mysqli_connect('localhost','root','password','olx_schema');
   require('inc/config.php');
   if(isset($_POST['submit'])){
     $email_address = mysqli_escape_string($db,$_POST['email']);
     $password = mysqli_escape_string($db,$_POST['password']);

     $query = "SELECT *FROM Users WHERE Nitc_email_id = '$email_address' AND User_password= '$password'";
     $result = mysqli_query($db,$query);

     if(mysqli_num_rows($result)==1){
           $_SESSION['email'] = $email_address;
           $_SESSION['success'] = "You are now logged in";
           header('location: home.php');
     }
     else{
           echo "<script type='text/javascript'>alert('Failed to Login! Incorrect Email or Password')</script>";
     }
   }
?>
