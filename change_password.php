<?php
  require('inc/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/advertise.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  footer{
    position: absolute;
    bottom: 0;
    width: 100%;
  }
</style>
<body >

	<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Adsells</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">HOME</a></li>
        <li><a href="my_products.php">MY PRODUCTS</a></li>
        <li><a href="bought_products.php">BOUGHT PRODUCTS</a></li>
        <li><a href="message.php">MESSAGES</a></li>
        <li><a href="about_us.php">ABOUT US</a></li>
        <li class="dropdown"><a href="change_password.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['email']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="change_password.php">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2>Change Password</h2>
  <form class="form-horizontal" action="change_password.php" method="post">
    <br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="curr_pass">Current Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="curr_pass" placeholder="Current Password" name="curr_pass" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="new_pass">New Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="new_pass" placeholder="New Password" name="new_pass" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="retype_new_pass">Current Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="retype_new_pass" placeholder="Retype New Password" name="retype_new_pass" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Change</button>
      </div>
    </div>
  </form>
</div>
<footer class="container-fluid bg-4 text-center">
  <p>@ 2018 Copyright: <a href="home.php">www.adsells.com </a>| Designed by Prajwal Ghoradkar</p> 
</footer>

<?php
   $email_id = $_SESSION['email'];
   if(isset($_POST['submit'])){
   $query1 = "SELECT * FROM Users WHERE Nitc_email_id = '$email_id'";
   $result1 = mysqli_query($db,$query1);
   $row1 = mysqli_fetch_assoc($result1); 
   $curr_password = mysqli_escape_string($db,$_POST['curr_pass']); //current password taken as input
   $current_pass = $row1["User_password"]; // current password of the user
   //echo $curr_password;
   //echo '<br>';
   //echo $current_pass;
   if($current_pass == $curr_password){
       $new_password = mysqli_escape_string($db,$_POST['new_pass']);
       $retype_new_password = mysqli_escape_string($db,$_POST['retype_new_pass']);
       if($new_password == $retype_new_password){
             $query2 = "UPDATE Users SET User_password = '$new_password' WHERE Nitc_email_id = '$email_id'";
             $result2 = mysqli_query($db,$query2);
             if($result2){
               echo "<script type='text/javascript'>alert('Password succesfully changed')</script>";
               
             }
       }else{
          echo "<script type='text/javascript'>alert('New Password and Retype Password are not same!')</script>";
          exit; 
       }
   }
   else{
       echo "<script type='text/javascript'>alert('Current Password you entered is Incorrect!')</script>";
   }

}
?>