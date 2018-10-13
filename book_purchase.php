<?php 
   require('inc/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Purchase</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="css/advertise.css">
	<link rel="stylesheet" type="text/css" href="css/purchase.css">
</head>
<body style="background-color: #212F3C;">
 
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
        <li class="dropdown"><a href="book_purchase.php" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['email']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="change_password.php">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Side navigation -->
<div class="sidenav">
  <a href="laptop_purchase.php">Laptop</a>
  <a href="mobile_purchase.php">Mobile</a>
  <a href="book_purchase.php">Books</a>
  <a href="purchase.php">All Products</a>
</div>


<?php

$query = "SELECT * FROM Advertisement ";
$result = mysqli_query($db,$query);
while ($row = mysqli_fetch_assoc($result)) {
    //echo $row["item_name"];
    //echo $row["date_of_init"];
    //echo $row["date_of_exp"];
    //echo '<br>';
    $id = $row["advt_id"];
    $email_id = $row["owner_id"];
    if($row["item_type"]==="Book"){
        $query2 = "SELECT * FROM Book WHERE product_id = '$id'";
    	$result2 = mysqli_query($db,$query2);
    	$row2 = mysqli_fetch_assoc($result2);
        

    	$query3 = "SELECT * FROM Users WHERE Nitc_email_id = '$email_id'";
    	$result3 = mysqli_query($db,$query3);
    	$row3 = mysqli_fetch_assoc($result3);

        
        $i=0;
        $query4 = "SELECT * FROM Author WHERE product_id = '$id'";
        $result4 = mysqli_query($db,$query4);
        while($row4 = mysqli_fetch_assoc($result4)){
             if($i==0){
                  $author1 = $row4["author_name"];
                  $i++; 
             }
             else if($i==1){
             	  $author2 = $row4["author_name"];
             	  $i++;
             }
             else if($i==2){
             	  $author3 = $row4["author_name"];
             	  $i++;
             }
        }
        /*$row4 = mysqli_fetch_assoc($result4);
        $author = $row4["author_name"];
    	*/?>
    <div class="container">
            <div class="row row-margin-bottom">
            <div class="col-md-9 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="images/book.jpg">
                        </div>
                        
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                <b><?php echo $row["item_name"]; ?></b>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-header">
                            	<p>Name of Book: <b><?php echo $row2["name_of_book"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                            	<p>Author Name: <b><?php echo $author1." ".$author2." ".$author3; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                            	<p>Condition: <b><?php echo $row2["condition_book"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-desc">
                                <p> Ad Description: <?php echo $row2["ad_description"]; ?> </p>
                                <hr>
                            </div>
                            <div class="lib-row lib-price">
                            	<p>Expected Price: Rs <b><?php echo $row2["expected_price"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                            	<p>Contact Details: <b><?php echo $row3["User_name"]." ".$row3["Mobile_no"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                            	<p>Email ID: <b><?php echo $row["owner_id"];?></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            
        </div>
</div>	
    	
 <?php	
    }

}
  ?>
 <footer class="container-fluid bg-4 text-center">
  <p>@ 2018 Copyright: <a href="home.php">www.adsells.com </a>| Designed by Prajwal Ghoradkar</p> 
</footer>