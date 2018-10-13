<?php
 require('inc/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adsells</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.tp1{
	color: white;
	font-size: 80px;
	margin-top: 200px;
}

</style>
<body>
    <header>
    <div class="row">

      <h3 style="float: left; padding-left: 35px; color: white; font-size: 40px;font-weight: bold;"><span >Ad</span><span>Sells</span></h3>	
        
    	<ul class="main-nav">
    		<li class="active"><a href="home.php">HOME</a></li>
    		<li><a href="my_products.php">MY PRODUCTS</a></li>
        <li><a href="bought_products.php">BOUGHT PRODUCTS</a></li>
        <li><a href="message.php">MESSAGES</a></li>
    		<li><a href="about_us.php">ABOUT US</a></li>
    		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="home.php" ><?php echo $_SESSION['email']; ?><span class="caret"></span></a>
    		<ul class="dropdown-menu">
    			<li><a href="change_password.php">Change Password</a></li>
    			<li><a href="logout.php">Logout</a></li>
    		</ul>
    		</li>
    	</ul>
    </div>
    <!--<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>-->

<center>
    <div class="text-center">
        <h1 class="tp1">Are You Ready?</h1>

        <div class="button">
        	<a href="advertise.php" class="btn-one button_n">Advertise</a>
        	<a href="purchase.php" class="btn-two button_n">Purchase</a>
        </div>
    </div>
    </center>
    </header>

<footer class="container-fluid bg-4 text-center">
  <p>@ 2018 Copyright: <a href="home.php">www.adsells.com </a>| Designed by Prajwal Ghoradkar</p> 
</footer>

    
</body>
</html>


