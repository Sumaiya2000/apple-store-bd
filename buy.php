<?php
	session_start();
	require_once("connection.php");
	
	if (isset($_GET['buy'])){
		$pid=$_GET['buy'];
		
		$table=$_GET['table'];
		if($table==="iphone"){
			$query1="SELECT p.pid,p.model,p.price from product p, iphone i where p.pid='$pid' and i.pid='$pid'";
		}
		elseif($table==="accessories"){
			$query1="select ac.img,p.model,p.price,p.pid from accessories AS ac inner join product AS p on ac.pid='$pid' and p.pid='$pid'";
		}
		elseif($table==="macbook"){
			$query1="select m.img,p.model,p.price from macbook m, product p where m.pid='$pid' and p.pid='$pid'";
		}
		elseif($table==="ipad"){
			$query1="select ip.img,p.model,p.price from ipad ip, product p where ip.pid='$pid' and p.pid='$pid'";
		}
		elseif($table==="watch"){
			$query1="select w.img,p.model,p.price from watch w, product p where w.pid='$pid' and p.pid='$pid'";
		}
		elseif($table==="airpods"){
			$query1="select ap.img,p.model,p.price from airpods ap, product p where ap.pid='$pid' and p.pid='$pid'";
		}
		
		$data1=mysqli_query($con,$query1);
		$result=mysqli_fetch_array($data1);
		$model=$result[1];
		$price=$result[2];
		$quantity=1;
		$sub=$price*$quantity;
		$fetch="select email from temp where email!='NULL'";
		$w=mysqli_query($con,$fetch);
		$remail=mysqli_fetch_assoc($w);
		$t=$remail['email'];
		
		$deletenull="delete from temp where pid='-1'";
		mysqli_query($con,$deletenull);
		$query="insert into temp (pid,model,price,subprice,quantity,email) values ('$pid','$model','$price','$sub','$quantity','$t')";
		mysqli_query($con,$query);
		
		if($table==="iphone"){
			header("Location: user_iphone.php");
		}
		elseif($table==="accessories"){
			header("Location: user_accessories.php");
		}
		elseif($table==="macbook"){
			header("Location: user_macbook.php");
		}
		elseif($table==="ipad"){
			header("Location: user_ipad.php");
		}
		elseif($table==="watch"){
			header("Location: user_watch.php");
		}
		elseif($table==="airpods"){
			header("Location: user_airpods.php");
		}
		

		
		die;
		}
	elseif (isset($_GET['remove'])){
		$pid=$_GET['remove'];
		
		$q="Delete from temp where pid='$pid'";
		mysqli_query($con,$q);
	header("Location: cart.php");	}
	
	elseif(isset($_GET['tot'])){
		$tot=$_GET['tot'];
		$order="INSERT INTO `cart`(`total_cost`) VALUES ('$tot')";
		mysqli_query($con,$order);
		$order_no="select order_no from cart where total_cost='$tot'";
		$sssss=mysqli_query($con,$order_no);
		$sss=mysqli_fetch_assoc($sssss);
		$ss=$sss['order_no'];
		$cusID="select email from temp where email!='NULL'";
		$cus=mysqli_query($con,$cusID);
		$customer=mysqli_fetch_assoc($cus);
		$gives=$customer['email'];
		$main="insert into orders (order_no,total_cost,gives) values ('$ss','$tot','$gives')";
		mysqli_query($con,$main);
		$em="update cart set email='$gives' where total_cost='$tot'";
		mysqli_query($con,$em);
		$abcd="select * from temp";
		$x=mysqli_query($con,$abcd);
		if(mysqli_num_rows($x)>0){
			while($y=mysqli_fetch_array($x)){
		
		//insert into multi cart
		$a="insert into pid (order_no,pid) values ('$ss','$y[0]')";
		$b="insert into price (order_no,price,pid) values ('$ss','$y[2]','$y[0]')";
		$c="insert into model(order_no,model,pid) values('$ss','$y[1]','$y[0]')";
		$d="insert into quantity(order_no,quantity,pid) values ('$ss','$y[4]','$y[0]')";
		mysqli_query($con,$a);
		mysqli_query($con,$b);
		mysqli_query($con,$c);
		mysqli_query($con,$d);
		}}
		$deleteTemp="delete from temp";
		mysqli_query($con,$deleteTemp);
		
		
		header("Location: user_profile.php");
	
	}
	
?>	