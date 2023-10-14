<?php 

session_start();

	include("connection.php");
	include("functions.php");
	
	$admin1 = "taposhi@apple.com";
	$admin2 = "sumaiya@apple.com";
	$admin3 = "redowan@apple.com";
	$admin4 = "zunayed@apple.com";
	$admin5 = "abir@apple.com";
	$admin="admin@apple.com";


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{

			//read from database
			$query = "select * from login where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password )
						
					{	
						if ($user_data['email'] === $admin1){
							$_SESSION['email'] = $user_data['email'];
							header("Location: admin_homepage.php");
							die;

						}
						elseif($user_data['email'] === $admin2){
							$_SESSION['email'] = $user_data['email'];
							header("Location: admin_homepage.php");
							die;
						}
						elseif($user_data['email'] === $admin3){
							$_SESSION['email'] = $user_data['email'];
							header("Location: admin_homepage.php");
							die;
						}
						elseif($user_data['email'] === $admin4){
							$_SESSION['email'] = $user_data['email'];
							header("Location: admin_homepage.php");
							die;
						}
						elseif($user_data['email'] === $admin5){
							$_SESSION['email'] = $user_data['email'];
							header("Location: admin_homepage.php");
							die;
						}
						elseif($user_data['email'] === $admin){
							$_SESSION['email'] = $user_data['email'];
							header("Location: admin_homepage.php");
							die;
						}
						else{
							$_SESSION['email'] = $user_data['email'];
							$var= $user_data['email'];
							$q="insert into temp (pid,email) values (-1,'$var')";
							mysqli_query($con,$q);
							$q1="insert into temp_cus (email) values ('$var')";
							mysqli_query($con,$q1);
						
							header("Location: user_homepage.php");
							die;
						}
						
					}
				}
			}
			
			echo "wrong email or password!";
		}else
		{
			echo "wrong email or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Apple</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="common.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

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
                        <a class="nav-link"  href="homepage.php">Home</a>
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
                        <a class="nav-link"  href="accessories.php">Accessories</a>
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
							if(isset($_POST['search']))
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
        </div>
    </nav>
    <form method="post" action="#" class="signup-form">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        <h1>LOG IN</h1>

        <div class="txtb">
            <input type="text" name = "email" required>
            <span data-placeholder="Email"></span>
        </div>

        <div class="txtb">
            <input type="password" name = "password" required>
            <span data-placeholder="Password"></span>
        </div>
		
        <input id="button" type="submit" class="signbtn" value="Log In">
		

        <div class="bottom-text">
            Don't have an account? <a href="signup.php">Sign Up!</a>
        </div>
    </form>

    <!--<script>
        $(".txtb input").on("focus", function(){
            $(this).addClass("focus");
        });

        $(".txtb input").on("blur", function(){
            if($(this).val() == "")
                $(this).removeClass("focus");
        })
    </script>-->
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
