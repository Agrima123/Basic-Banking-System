<!--Sucessful Transaction-->

<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>	
	<style>
		 .click{
		    width: 20px;
			background-color: #33cc33;
			color: white;
			font-size: 25px;
			font-family:'Palatino Linotype';
			
		}
		.click:hover{
			background-color: black
			-webkit-animation: glow 1s ease-in-out infinite alternate;
  			-moz-animation: glow 1s ease-in-out infinite alternate;
  			animation: glow 1s ease-in-out infinite alternate;

		}
        .container{
			width: 400px;
			padding-left: 400px;
			font-size:80px;
			font-family:'Palatino Linotype';
			align:center;
			
			
		}
		.container input{
			width:100%;
			clear: both;
			font-size: 70px;			
		}
		
    	
		h2{
      		font-size: 40px;
      		text-align: center;
      		color: black;
      		text-shadow: 1px 1px 2px black, 0 0 5px white;
			  font-family:'Palatino Linotype';

    	}

		body{
			font-family:'Palatino Linotype';
		}
		
		.hi {
  			width: 340px;
  			padding: 10px;
  			border: 5px solid #ff6666;
  			margin: 0;
  			text-align: center;
  			color:#003380;
  			box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  			background-color:#ff8080;
		}
		
	</style>
</head>
<body>

  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name1 = $_POST["sender_name1"];
	$receiver_name1 = $_POST["receiver_name1"];
	$amount = $_POST["amount"];
	
	?>
	
	<h2>Congratulations!! Transfer from <?php echo $sender_name1 ?> to <?php echo $receiver_name1 ?> is successful</h2>
	<center><div class="hi">
	<h2><i class="fa fa-money" aria-hidden="true"> Amount <u><?php echo$amount ?></u> </i></h2>
	</div>
	</center>
	<br><br>
	<div>
	<img style="float: right; margin: 30px 30px 15px 15px;" src="img7.gif" width="400" height="300" />
	</div>
	
	<div class="container">
	<button><a href="transaction.php"><b>Check Transaction History</b></a></button>
	</div>


</body>
</html>