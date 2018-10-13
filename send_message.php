<?php
  require('inc/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Title</title>
	<link rel="stylesheet" type="text/css" href="css/advertise.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .color-white{
    color: white;
  }
</style>
<style type="text/css">
  footer{
    position: absolute;
    bottom: 0;
    width: 100%;
  }
</style>
<body>

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
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['email']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2>Send Messages</h2>
  <form class="form-horizontal" action="send_message.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="advt_id">Email ID :</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email_id" placeholder="Email ID of Receiver" name="email_id" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 " for="msg">Message description</label>
      <div class="col-sm-10">          
        <textarea class="form-control" id="msg" placeholder="Message description" name="msg"></textarea>  
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-9">
        <button type="submit" id="submit" name="submit" class="btn btn-primary">SEND</button>
      </div>
    </div>
</form>
</div>
<footer class="container-fluid bg-4 text-center">
  <p> <a href="home.php">www.adsells.com </a>| Designed by Prajwal Ghoradkar</p> 
</footer>

<?php
  $email_id = $_SESSION['email'];
  if(isset($_POST['submit'])){
    $rec_email = mysqli_escape_string($db,$_POST['email_id']);
    $message = mysqli_escape_string($db,$_POST['msg'] );

    $today_date =  date("Y-m-d");
    $time = date("h:i A");
    //echo $today_date." ".$time;
    //echo $time;
    $query = "INSERT INTO Messages (sender_id,receiver_id,message,msg_date,msg_time) VALUES ('$email_id','$rec_email','$message','$today_date','$time')";
    $result = mysqli_query($db,$query);
    if($result){
         echo "<script type='text/javascript'>alert('Message sent Successfully!')</script>";
    }
    else{
         echo "<script type='text/javascript'>alert('Error in sending message!!! Please try again.')</script>";
    }
  }
?>
