<?php
session_start();
	include("connection.php");
	include("functions.php");
	
	//read from database from customer table
	$query1 = "select customer_id, name, email, phone, building, road, city from customer";
	$data1 = mysqli_query($con, $query1);
	$total1 = mysqli_num_rows($data1);
	//read from database from order table
	$query2 = "select order_no, order_date, total_cost from orders";
	$data2 = mysqli_query($con, $query2);
	$total2 = mysqli_num_rows($data2);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Apple</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="products.css">

</head>
<body bgcolor="grey">
  
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
				<a href = "cart-viewer.php"><i class="far fa-shopping-bag"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	  
	
	  
	<!--display customers information-->
    <div class="categories">
        <h2 class="title">Customers</h2>
        <div class="small-container cart-page">
            <!-- TABLE -->
			<table>
				<tr>
					<th>Customer ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Building</th>
					<th>Road</th>
					<th>City</th>
				</tr>
				<?php
				if($total1>0){
				while($result = mysqli_fetch_array($data1)){
				?>
				<tr>
					<td><?php echo $result[0];?></td>
					<td><?php echo $result[1];?></td>
					<td><?php echo $result[2];?></td>
					<td><?php echo $result[3];?></td>
					<td><?php echo $result[4];?></td>
					<td><?php echo $result[5];?></td>
					<td><?php echo $result[6];?></td>
				</tr>
                <?php
					}
					}
				?>
			</table>
        </div>
    </div>

	<!--Display order list of the cutomers-->
    <div class="categories">
        <h2 class="title">Orders</h2>
        <div class="small-container cart-page">
            <!-- TABLE -->
			<table>
				<tr>
					<th>Order No.</th>
					<th>Order Date</th>
					<th>Bill</th>
					
				</tr>
				<?php
				if($total2>0){
				while($res = mysqli_fetch_array($data2)){
			?>
				<tr>
					<td><?php echo $res[0];?></td>
					<td><?php echo $res[1];?></td>
					<td>৳ <?php echo $res[2];?>/-</td>
					
		
				</tr>
              <?php 
				}
				}
				?>
			</table>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>