<?php
session_start();
	include("connection.php");
	include("functions.php");
	$queryx="select email from temp_cus";
	$datax=mysqli_query($con,$queryx);
	$dx=mysqli_fetch_assoc($datax);
	$emailx=$dx['email'];
	//read from database from customer table
	$query1 = "select customer_id, name, email, phone, building, road, city from customer where email='$emailx'";
	$data1 = mysqli_query($con, $query1);
	$total = mysqli_num_rows($data1);
	if($total>0){
		while($result = mysqli_fetch_array($data1)){
			$customerID = $result[0];
			$name = $result[1];
			$email = $result[2];
			$phone = $result[3];
			$building = $result[4];
			$road = $result[5];
			$city = $result[6];
		}
	}
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Apple</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="products.css">

</head>
<body style="background-image: linear-gradient(ghostwhite, floralwhite)">
  
    <!-- NAVIGATION -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container-fluid">
        <img src="image/apple-logo-black.png" width = "40" height = "40"alt="">
        <!-- NAME -->
        Apple Store
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link"  href="user_homepage.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="user_iphone.php">iPhone</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="user_macbook.php">MacBook</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="user_ipad.php">iPad</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="user_watch.php">Watch</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="user_airpods.php">AirPods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="user_accessories.php">Accessories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="logout.php">Log Out</a>
              </li>
              <li class="nav-item">
                        <form method="post">
                        <div class= "searchBox">
                          <input type="text" class= "searchText" name="search" placeholder = "Type to search...">
                          <a href = "#" class = "searchBtn"><i class="far fa-search"></i></a>
						</form>
							<?php	
							if($_SERVER['REQUEST_METHOD'] == "POST")
								{
									//something was posted
									$device=$_POST['search'];
									$iphone="iphone";
									$macbook="macbook";
									$ipad="ipad";
									$airpods="airpods";
									$watch="watch";
									$accessories="accessories";
									if($device === $iphone){
										header("Location: user_iphone.php");
										die;
									}
									elseif($device === $macbook){
										header("Location: user_macbook.php");
										die;
									}
									elseif($device === $ipad){
										header("Location: user_ipad.php");
										die;
									}
									elseif($device === $airpods){
										header("Location: user_airpods.php");
										die;
									}
									elseif($device === $watch){
										header("Location: user_watch.php");
										die;
									}
									elseif($device === $accessories){
										header("Location: user_accessories.php");
										die;
									}
								}	
							?>
                      </li>
              </li>
              <li class="nav-item">
                <a href = "cart.php"><i class="far fa-shopping-bag"></i></a>

              </li>
            </ul>
          </div>
        </div>
      </nav>
	  
	
	  
	<!--display customers information-->
    <div class="categories">
		<br><br><br><br><br><br><br>
        <h2 class="title">Profile</h2>
        <div class="small-container cart-page">
            <!-- TABLE -->
            <center>
              <table style="width: 500px;">
                <tr>
                  <th style="text-align: center;">Customer ID</th>
                </tr>
                <tr>
                  <td style="text-align: center;"><?php echo $customerID; ?></td>
                </tr>
              </table>
            </center>
            <center>
              <table style="width: 500px;">
                <tr>
                  <th style="text-align: center;">Name</th>
                </tr>
                <tr>
                  <td style="text-align: center;"><?php echo $name;?></td>
                </tr>
              </table>
            </center>
            <center>
              <table style="width: 500px;">
                <tr>
                  <th style="text-align: center;">Email</th>
                </tr>
                <tr>
                  <td style="text-align: center;"><?php echo $email; ?></td>
                </tr>
              </table>
            </center>
            <center>
              <table style="width: 500px;">
                <tr>
                  <th style="text-align: center;">Phone</th>
                </tr>
                <tr>
                  <td style="text-align: center;"><?php echo $phone; ?></td>
                </tr>
              </table>
            </center>
            <center>
              <table style="width: 500px;">
                <tr>
                  <th style="text-align: center;">Building</th>
                </tr>
                <tr>
                  <td style="text-align: center;"><?php echo $building; ?></td>
                </tr>
              </table>
            </center>
            <center>
              <table style="width: 500px;">
                <tr>
                  <th style="text-align: center;">Road</th>
                </tr>
                <tr>
                  <td style="text-align: center;"><?php echo $road; ?></td>
                </tr>
              </table>
            </center>
            <center>
              <table style="width: 500px;">
                <tr>
                  <th style="text-align: center;">City</th>
                </tr>
                <tr>
                  <td style="text-align: center;"><?php echo $city; ?></td>
                </tr>
              </table>
            </center>
        </div>
    </div>
		<center>
		<form method="get">
                <a href="confirm_cart.php?email=<?php echo $email;?>" style="color: rgb(100, 100, 100); font-size: 30px;"><b>View Cart</b></a>
		</form>
        </center>
		<br>
		<br>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>