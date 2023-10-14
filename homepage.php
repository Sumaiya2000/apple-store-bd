<?php
	session_start();
	require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Apple</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="common.css">

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
                        <a class="nav-link"  href="homepage.php" style="color: gray;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="iphone.php">iPhone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="macbook.php">MacBook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="ipad.php">iPad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="watch.php">Watch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="airpods.php">AirPods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="accessories.php"> Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="login.php">Account</a>
                    </li>
                    <li class="nav-item">
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
							</div>
                    </li>
            </ul>
          
        </div>
      </nav>

    <section id="home">
      <div class="container">
       <!-- <p style="font-size: 70px">Welcome to Apple</p> -->
      </div>
      <div class="typewriter">
        <!-- <center><img src="image/apple-logo-grey.png" alt="" style="width: 50%; padding-top: 100px;"> <br></center> -->
        <div class="pointer-fluid typewriter-text"><p style="text-align:center;">Think Different!</p></div>
      </div>

    </section>
    <footer class="mt-5 py-5">
      <div class="row ">
        <div class="footer-one col-lg-12 col-md-6 col-12">
          <p style="text-align: center; color: white; font-size: 30px">Apple Store Bangladesh</p>
          <p style="text-align: center; color: #d8d8d8; font-size: 15px;">
            The following purchases with Apple Card are ineligible to earn 5% back:
            monthly financing through <br>Apple Card Monthly Installments, Apple iPhone Payments, the iPhone Upgrade Program, and wireless carrier financing <br>
            plans; Apple Media Services; AppleCare+ monthly payments. Subject to credit approval. Valid only on qualifying purchases in<br>
            U.S. for new Apple Card customers who open an account and use it from 12/26/21 to 1/31/22 at Apple Store locations, apple.com, the Apple Store<br>
            App, or by calling 1-800-MY-APPLE. Accounts opened before 12/26/21 or after 1/31/22 do not qualify. New Apple Card users added to an Apple Card<br>
            Family account opened during offer period can earn 5% back on their own purchases. Not valid for existing Apple Card users who merge their Apple<br>
            Card accounts to become Co-Owners. 5% is total amount of Daily Cash that can be earned for qualifying Apple purchases using Apple Card. Returning<br>
            qualified items that were purchased during offer period may impact your cash back. 5% savings is earned as Daily Cash and transferred to your Apple<br>
            Cash card when transactions post to your Apple Card account. If you do not have an Apple Cash card, Daily Cash can be applied by you as a credit on<br>
            your statement balance. See the Apple Card Customer Agreement for more details on Daily Cash and qualifying transactions. Changes to your account status<br>
            during offer period may delay the fulfillment of your Daily Cash bonus.<br>
            To access and use all the features of Apple Card, you must add Apple Card to Wallet on an iPhone or iPad with the latest version of iOS or iPadOS.<br>
            Update to the latest version by going to Settings > General > Software Update. Tap Download and Install.<br>
            Available for qualifying applicants in the United States.<br>
            Apple Card is issued by Goldman Sachs Bank USA, Salt Lake City Branch.<br>
            Apple TV+ is $4.99/month after free trial. One subscription per Family Sharing group. Offer good for 3 months after eligible device activation.<br>
            Plan automatically renews until cancelled. Restrictions and other terms apply.<br>
          </p>
        </div>
      </div>
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-12 col-md-6 col-12">
          <center>
          <a href="https://www.facebook.com/"><img src="image/—Pngtree—facebook white icon_3570425.png" alt="" width="100"></a>
          <a href="https://www.instagram.com/"><img src="image/logo-instagram-png-41284.png" alt="" width="70"></a>
          <a href="https://www.twitter.com/"><img src="image/twitter-512.png" alt="" width="80"></i></a>
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