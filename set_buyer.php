<?php 
   require('inc/config.php');
   //echo $_GET['id'];
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buyer Information</title>
	
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
          <li><a href="change_password.php">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2>Product Sold</h2>
  <form class="form-horizontal" action="set_buyer.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-3" for="advt_id">Advertisement ID</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="advt_id" placeholder="Advertisement ID" name="advt_id" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="product_name">Buyer Registered Email Id:</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="buyer_email" placeholder="Email Id" name="buyer_email" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-9">
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
</div>
<footer class="container-fluid bg-4 text-center">
  <p>@ 2018 Copyright: <a href="home.php">www.adsells.com </a>| Designed by Prajwal Ghoradkar</p> 
</footer>

<?php

if(isset($_POST['submit'])){
	$user_id = $_SESSION['email'];
	$advt_id = mysqli_escape_string($db,$_POST['advt_id']);
	$buyer_id = mysqli_escape_string($db,$_POST['buyer_email']);
	//check if buyer id is not same to the id which is logged in
	if($user_id == $buyer_id){
		echo "<script type='text/javascript'>alert('Buyer ID cannot be same as Logged in ID')</script>";
	}
    //$advt_id = $_SESSION['ad_id'];
    $advt_id_num = (int)$advt_id;
    //echo gettype($advt_id_num);
    
    $query = "UPDATE Advertisement SET buyer_id = '$buyer_id' WHERE advt_id = '$advt_id_num' and owner_id = '$user_id'";
    $result = mysqli_query($db,$query);
    
    if($result){
       echo "<script type='text/javascript'>alert('Updated Succesfully')</script>";	
    }
    else{
    	echo "<script type='text/javascript'>alert('Failed! Try again')</script>";
    }
}

?>