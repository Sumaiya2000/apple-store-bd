<?php
	session_start();
	require_once("connection.php");
	$query1 = "select ac.img,p.model,p.price from accesories AS ac inner join product AS p on ac.pid=p.PID";
	$data1 = mysqli_query($con, $query1); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accessories | Apple</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="products.css">

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
                        <a class="nav-link"  href="admin_homepage.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_iphone.html">iPhone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_macbook.html">MacBook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_ipad.html">iPad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_watch.html">Watch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_airpods.html">AirPods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_accessories.html" style="color: gray;">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="admin_panel.html">Admin</a>
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
										header("Location: iphone.php");
										die;
									}
									elseif($device === $macbook){
										header("Location: macbook.php");
										die;
									}
									elseif($device === $ipad){
										header("Location: ipad.php");
										die;
									}
									elseif($device === $airpods){
										header("Location: airpods.php");
										die;
									}
									elseif($device === $watch){
										header("Location: watch.php");
										die;
									}
									elseif($device === $accessories){
										header("Location: accessories.php");
										die;
									}
								}	
							?>
                      </li>
                      <li class="nav-item">
                        <a href = "cart-viewer.html"><i class="far fa-shopping-bag"></i></a>
                      </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="categories">
        <h2 class="title">Accessories</h2>
        <div class="small-container">
            <div class="row">
			<?php
				if(mysqli_num_rows($data1)>0){
					while($result = mysqli_fetch_array($data1)){?>
                <div class="col-12">
                    <div>
                    <center>
                    <img src=<?php echo $result[0]; ?> alt="" width=400px >
                    </center>
                    </div>
                    <h4 class="pName"><?php echo $result[1]; ?></h4>
                    <p>৳ <?php echo $result[2]; ?>/-</p>
					<?php
					if (isset($_POST['delete'])){
						$pid=$_POST['pid'];
						$del="DELETE FROM `accesories` WHERE pid='$pid'";
					
						mysqli_query($con,$del);
						header("Location: admin_iphone.php");
						die;
				}
				?>
				<?php
					if (isset($_POST['modify'])){
						$pid=$_POST['pid'];
						$price=$_POST['price'];
						$del=" UPDATE `product` SET `price`='$price' WHERE pid='$pid' ";
					
						mysqli_query($con,$del);
						header("Location: admin_iphone.php");
						die;
				}
				?>
					<form method="post">
                    <input type="number" class="cartbtn" name="pid" value="" placeholder="New Price"> <br>
                    <input type="number" class="cartbtn" name="price" value="" placeholder="Product ID"> <br>
                    <input type="submit" class="signbtn" value="Modify"> <br>
                    <input type="submit" class="modbtn" value="Delete">
					</form>
                </div>
				 <?php
			
						}
					}
					?>
               
            </div>
            <br>
            <center>
                <a href="accessories_insert.html" style="color: rgb(100, 100, 100); font-size: 30px;"><b>ADD PRODUCT</b></a>
            </center>
        </div>
    </div>

    <footer class="mt-5 py-5">
        <div class="row ">
            <div class="footer-one col-lg-12 col-md-6 col-12">
                <p style="text-align: center; color: white; font-size: 30px">Apple Store Bangladesh</p>

            </div>
        </div>
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-12 col-md-6 col-12">
                <center>
                    <a href="https://www.facebook.com/"><img src="image/—Pngtree—facebook white icon_3570425.png" alt="" width="100"></a>
                    <a href="https://www.instagram.com/"><img src="image/logo-instagram-png-41284.png" alt="" width="70"></a>
                    <a href="https://www.twitter.com/"><img src="image/twitter-512.png" alt="" width="80"></i></a>
                </center>
                <center>
                    <div><img src="image/visa-logo-png-2028.png"alt="" width="200"></div>
                </center>

                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p style = "text-align: center; color: white;">66 Mohakhali, Dhaka 1212</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p style = "text-align: center; color: white;">+880 12 3456 7890</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p style = "text-align: center; color: white;">contact@apple.com.bd</p>
                </div>
            </div>

        </div>
        <div class="copywrite mt-5">
            <div class="row container mx-auto">
                <div class="col-lg-12 col-md-6 col-12 text-nowrap">
                    <p>Apple Store Bangladesh & copy 2021. All Rights Reserved.  </p>
                </div>

            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>