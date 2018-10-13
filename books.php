<?php
  require('inc/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Title</title>
	<link rel="stylesheet" type="text/css" href="css/advertise.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .color-white{
    color: white;
  }
</style>
<body style="background-color: #212F3C;">

	<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Adsell</a>
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

<!-- Top navigation -->
<div class="topnav">

  <!-- Left-aligned links (default) -->
  <a href="laptop.php">Laptop</a>
  <a href="mobile.php" >Mobile phone</a>
  <a href="books.php" class="active">Books</a>
  <!-- Right-aligned links -->
  <div class="topnav-right">
    
  </div>

</div>

	<div class="container">
  <h2 class="color-white">Post an Advertisement</h2>
  <form class="form-horizontal" action="books.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2 color-white" for="name_of_book">Name of Book</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name_of_book" placeholder="Name of Book" name="name_of_book" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 color-white" for="author1">Author Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="author1" placeholder="Author Name1" name="author1" required>
      </div>
      <br>
      <br>

      <div class="col-sm-2 ">
      </div>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="author2" placeholder="Author Name2" name="author2" >
      </div>
      
      <br>
      <br>

      <div class="col-sm-2">
      </div>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="author3" placeholder="Author Name3" name="author3" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 color-white" for="condition">Condition</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="condition" placeholder="Condition" name="condition"></input>  
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 color-white" for="description">Ad description</label>
      <div class="col-sm-10">          
        <textarea class="form-control" id="description" placeholder="Ad description" name="description"></textarea>  
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 color-white" for="expected_price">Expected Price</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="expected_price" placeholder="Expected Price" name="expected_price" required>
      </div>
    </div>
    <!--<div class="form-group">
      <label class="control-label col-sm-2" for="photos">Photos for your Ad</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="photos" placeholder="Photos for your Ad" name="photos" >
      </div>
    </div>-->
    <!--<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>-->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>

<?php
    //$db = mysqli_connect('localhost','root','password','olx_schema');
    $today =  date("Y-m-d");
    $expiry = Date("Y-m-d",strtotime("+10 days"));
    //echo $today." ".$expiry;
    $owner_email = $_SESSION['email'];
    //echo $owner_email;

    /*$date = date("Y-m-d");
    $timestamp = strtotime($date);
    if ($timestamp === FALSE) {
        $timestamp = strtotime(str_replace('/', '-', $date));
     }*/
    //echo $timestamp;
    
    if(isset($_POST['submit'])){
      $nameOfBook = mysqli_escape_string($db,$_POST['name_of_book']);
      $author1 = mysqli_escape_string($db,$_POST['author1']);
      $author2 = mysqli_escape_string($db,$_POST['author2']);
      $author3 = mysqli_escape_string($db,$_POST['author3']);
      $condition = mysqli_escape_string($db,$_POST['condition']);
      $description = mysqli_escape_string($db,$_POST['description']);
      $expectedPrice = mysqli_escape_string($db,$_POST['expected_price']);
      $book = "Book";

      $query1 = "INSERT INTO Advertisement (item_name,item_type,date_of_init,date_of_exp,owner_id) VALUES ('$nameOfBook','$book','$today','$expiry','$owner_email')";
      $result1 = mysqli_query($db,$query1);
      if($result1){
            $query2 = "SELECT advt_id FROM Advertisement where item_name = '$nameOfBook' and owner_id = '$owner_email'";
            $result2 = mysqli_query($db,$query2);

            $row = mysqli_fetch_assoc($result2);
            $temp =  $row["advt_id"];
            $query3 = "INSERT INTO Book (product_id,name_of_book,condition_book,ad_description,expected_price)
             VALUES ('$temp','$nameOfBook','$condition','$description','$expectedPrice')";

            $result3 = mysqli_query($db,$query3);
            if($result3){
                  if($author1)
                  $query4 = "INSERT INTO Author (product_id,author_name) VALUES ('$temp','$author1')";
                  $result4 = mysqli_query($db,$query4);
                  if($author2){
                    $query5 = "INSERT INTO Author (product_id,author_name) VALUES ('$temp','$author2')";
                  $result5 = mysqli_query($db,$query5);
                  }
                  if($author3){
                    $query6 = "INSERT INTO Author (product_id,author_name) VALUES ('$temp','$author3')";
                  $result6 = mysqli_query($db,$query6);
                  }
                  echo "<script type='text/javascript'>alert('Successfully Advertised')</script>";      
            }
            else{
                  echo "<script type='text/javascript'>alert('Failed! Please try again')</script>";
            } 

      }else{
        echo "<script type='text/javascript'>alert('Failed! Please try again')</script>";
      }
      
    }


?>