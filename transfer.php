<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<style type="text/css">
		body{
			background-color:#e6f2ff;
			margin: 0;
			background-size: cover;
			font-family:'Palatino Linotype';
		}
		h2{
			text-align: center;
			font-size: 60px;
		}
		
		button{
      		font-size: 30px;
      		padding: 25px 50px;
      		justify-content: center;
      		background-color: #ff9933;
			color:white;
			font-family:'Palatino Linotype';
			
		}
		a{
      color: white;
      font-size:20px;
		}

		.container{
			padding-left: 800px;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

	<body>

	<!--Navbar-->
	<nav class="navbar navbar-light navig">
	<div class="pill-nav">
	<a class="default" >RSB</a>
  	<a class="default" href="index.php">Home</a>
  	<div class="topnav-right">   
  	<a href="table.php">Users</a>
  	<a href="transaction.php">Transaction History</a>
  	<a href="money.php">Transfer Money</a>
    </nav>
  	</div>
	</div>
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name1 = $_POST["sender_name1"];
	$receiver_name1 = $_POST["receiver_name1"];
	$amount = $_POST["amount"];
	

	 $sql5="SELECT name1,id,balance FROM user WHERE name1='$sender_name1'";
	$result5=mysqli_query($conn, $sql5); 
	$row=mysqli_fetch_array($result5) ;
	$money= $row['balance'];

	
	 $sql3 = "SELECT name1,id,balance  FROM user WHERE name1='$receiver_name1' ";
	$result3 = mysqli_query($conn, $sql3); 
    $row=mysqli_fetch_array($result3) ;
	$money1= $row['balance'];

	
	if ($amount < 1){ 
	 	include 'user.php';
	 } 
	elseif ($money < $amount) {
	 	include 'user2.php';
	 	
	 }
    // $query1 = "UPDATE `customer` SET `balance`='".$sum1."' WHERE `userid` = '".$ruserid."'";
	else{
	 	$sql4 = "UPDATE `user` SET `balance`=balance-$amount WHERE `name1`='".$sender_name1."'";
		$sql2= "UPDATE `user` SET `balance`=balance+$amount WHERE `name1`='".$receiver_name1."' ";
 		$result2 = mysqli_query($conn, $sql2); 
 		$result3 = mysqli_query($conn, $sql4);
 		//$sql = "INSERT INTO transaction1 VALUES ('$sender_name1','$receiver_name1',  $amount)";
		//$result = mysqli_query($conn, $sql); 
		$sql7 = "INSERT INTO transaction1( `sender`, `receiver`, `amount`) VALUES ('$sender_name1','$receiver_name1','$amount')";
$query = mysqli_query($conn, $sql7);
 		include 'user1.php';
 	
 	}
	?>
	
	

</body>
</html>
