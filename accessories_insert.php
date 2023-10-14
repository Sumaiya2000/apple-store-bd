<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$img=$_POST['image'];
		$pid = $_POST['pid'];
		$model=$_POST['model'];
		$avail=$_POST['availability'];
		$price=$_POST['price'];
		

		if(!empty($pid) && !empty($model))
		{
			//save to database
			
			$query2 = "insert into accessories (img,pid) values ('$img','$pid')";
			$query1 = "INSERT INTO `product`(`pid`, `availability`, `model`, `price`, `stored in`) VALUES ('$pid','$avail','$model','$price','')";
	
			mysqli_query($con, $query1);
			mysqli_query($con, $query2);

			header("Location: admin_accessories.php");
			die;
		}else
		{
			echo "Please enter valid information!";
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Accessories | Apple</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="common.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
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
                        <a class="nav-link"  href="admin_homepage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_iphone.php">iPhone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_macbook.php">MacBook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_ipad.php">iPad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_watch.php">Watch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_airpods.php">AirPods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_accessories.php">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_panel.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <div class= "searchBox">
                          <input type="text" class= "searchText" placeholder = "Type to search...">
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
										header("Location: admin_iphone.php");
										die;
									}
									elseif($device === $macbook){
										header("Location: admin_macbook.php");
										die;
									}
									elseif($device === $ipad){
										header("Location: admin_ipad.php");
										die;
									}
									elseif($device === $airpods){
										header("Location: admin_airpods.php");
										die;
									}
									elseif($device === $watch){
										header("Location: admin_watch.php");
										die;
									}
									elseif($device === $accessories){
										header("Location: admin_accessories.php");
										die;
									}
								}	
							?>
					
                      </li>
                      <li class="nav-item">
                        <a href="cart-viewer.php"><i class="far fa-shopping-bag"></i></a>
                      </li>
                </ul>
            </div>
        </div>
    </nav>

    <form method="post" action="#" class="signup-form">

        <h1 style="padding-top: 130px">NEW ACCESSORIES</h1>

        <div class="txtb">
            <input id="text" type="text" name="image" required>
            <span data-placeholder="Image path"></span>
        </div>
		<div class="txtb">
            <input id="text" type="number" name="pid" required>
            <span data-placeholder="Product ID"></span>
        </div>
        <div class="txtb">
            <input id="text" type="text" name="model" required>
            <span data-placeholder="Model"></span>
        </div>
        <div class="txtb">
            <input id="text" type="number" name="availability" required>
            <span data-placeholder="Available"></span>
        </div>
		<div class="txtb">
            <input id="text" type="number" name="price" required>
            <span data-placeholder="Price"></span>
        </div>
		

		<input id="button" type="submit" class="signbtn" value="ADD">
	</form>
    <script src="main.js" type="text/javascript"></script>

    

</body>
</html>