<?php 
   require('inc/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Products</title>
	
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
        <li><a href="bought_products.php">MY PRODUCTS</a></li>
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

<?php
$user_id = $_SESSION['email'];
$query = "SELECT * FROM Advertisement where buyer_id = '$user_id'";
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result) == 0){
  echo "<script type='text/javascript'>alert('You have not Bought any Product')</script>";
}
while ($row = mysqli_fetch_assoc($result)) {
    //echo $row["item_name"];
    //echo $row["date_of_init"];
    //echo $row["date_of_exp"];
    //echo '<br>';
    $id = $row["advt_id"];
    $email_id = $row["owner_id"];
     
    if ($row["item_type"]==="Laptop") {
      $query2 = "SELECT * FROM Laptop WHERE product_id = '$id'";
      $result2 = mysqli_query($db,$query2);
      $row2 = mysqli_fetch_assoc($result2);
        

      $query3 = "SELECT * FROM Users WHERE Nitc_email_id = '$email_id'";
      $result3 = mysqli_query($db,$query3);
      $row3 = mysqli_fetch_assoc($result3); 
       ?>
      <div class="container">
            <div class="row row-margin-bottom">
            <div class="col-md-9 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="images/laptop_hp.jpg">
                        </div>
                        
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                <b><?php echo $row["item_name"]; ?></b>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-data">
                            <p>Advt ID: <b><?php echo $row["advt_id"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Manufacturer: <b><?php echo $row2["manufacturer"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Model Name: <b><?php echo $row2["model_name"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Year Of Purchase: <b><?php echo $row2["year_of_purchase"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Battery Status: <b><?php echo $row2["battery_status"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-desc">
                                <p> Ad Description: <?php echo $row2["ad_description"]; ?> </p>
                                <hr>
                            </div>
                            <div class="lib-row lib-price">
                              <p>Expected Price: Rs <b><?php echo $row2["expected_price"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Contact Details: <b><?php echo $row3["User_name"]." Mobile No: ".$row3["Mobile_no"]; ?></b></p>
                            </div>
                            <input type="hidden" name="id" value="4">
                            <div class="lib-row lib-data">
                              <p>Email ID: <b><?php echo $row["owner_id"];?></b></p>
                            </div>
                            <?php
                               if ($row["buyer_id"]) {
                               	?>
                               	 <div class="lib-row lib-data">
                              <p>Sold to: <b><?php echo $row["buyer_id"];?></b></p>
                            </div>
                            <?php 
                               }
                            ?>
                        </div>	
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <!--<?php $_SESSION['ad_id']=$id; ?>-->        
           <!-- <a href="set_buyer.php?id=<?php echo $row["advt_id"]; ?>"><button type="submit" id="sold" name="sold" class="btn btn-primary">SOLD</button></a>-->
                   
        </div>
        
</div>

<?php
    }
    else if($row["item_type"]==="Mobile"){
        $query2 = "SELECT * FROM Mobile WHERE product_id = '$id'";
      $result2 = mysqli_query($db,$query2);
      $row2 = mysqli_fetch_assoc($result2);
        

      $query3 = "SELECT * FROM Users WHERE Nitc_email_id = '$email_id'";
      $result3 = mysqli_query($db,$query3);
      $row3 = mysqli_fetch_assoc($result3);

      ?>
        <div class="container">
            <div class="row row-margin-bottom">
            <div class="col-md-9 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="images/mobile.jpg">
                        </div>
                        
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                               <b> <?php echo $row["item_name"]; ?></b>
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-data">
                            <p>Advt ID: <b><?php echo $row["advt_id"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Manufacturer: <b><?php echo $row2["manufacturer"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Model Name: <b><?php echo $row2["model_name"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Year Of Purchase: <b><?php echo $row2["year_of_purchase"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-desc">
                                <p> Ad Description: <?php echo $row2["ad_description"]; ?> </p>
                                <hr>
                            </div>
                            <div class="lib-row lib-price">
                              <p>Expected Price: Rs <b><?php echo $row2["expected_price"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Contact Details: <b><?php echo $row3["User_name"]." Mobile No: ".$row3["Mobile_no"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Email ID: <b><?php echo $row["owner_id"];?></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <!--<?php $_SESSION['ad_id']=$id; ?>-->
            <!--<a href="set_buyer.php?id=<?php echo $row["advt_id"]; ?>"><button type="submit" id="sold" name="sold" class="btn btn-primary">SOLD</button></a>-->

        </div>
</div>  
<?php
    }
    else if($row["item_type"]==="Book"){
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
                            <div class="lib-row lib-data">
                            <p>Advt ID: <b><?php echo $row["advt_id"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
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
                              <p>Contact Details: <b><?php echo $row3["User_name"]." Mobile No: ".$row3["Mobile_no"]; ?></b></p>
                            </div>
                            <div class="lib-row lib-data">
                              <p>Email ID: <b><?php echo $row["owner_id"];?></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-1"></div>-->
            <!--<?php $_SESSION['ad_id']=$id; ?>-->
           <!--<a href="set_buyer.php?id=<?php echo $row["advt_id"]; ?>"><button type="submit" id="sold" name="sold" class="btn btn-primary">SOLD</button></a>-->


        </div>
</div>  
      
 <?php  
    }
  }
  ?>


<footer class="container-fluid bg-4 text-center">
  <p>@ 2018 Copyright: <a href="home.php">www.adsells.com </a>| Designed by Prajwal Ghoradkar</p> 
</footer>


