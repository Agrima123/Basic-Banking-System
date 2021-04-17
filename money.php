<!--Transfer Money Page-->

<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "test");
?> 

<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Transfer money</title>
	<style type="text/css">
		form{
		
			font-size: 2.5rem;
            line-height: 1.5;
           
			margin: auto;
			padding-top: 90px;
			color: black;
			text-align: center;
		}
		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 10px;
			
		}
		.container{
			width: 400px;
			padding-left: 200px;
			
		}
		.container input{
			width:100%;
			clear: both;
			height: 35px;
			border: 50px;
			color:black;
		}
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: blue;
			margin-left: 200px;
		}
		
		.press{
			padding-top: 50px;
			padding-left: 250px;
			margin-left: 200px;
		}
		body{
			
			margin: 0;
			background-color:#ff4d4d;
			font-family: 'Garamond';
		}
		.click{
			width: 200px;
			background-color: #476b6b;
			color: white;
			font-size: 25px;
			margin-left: 300px;
			margin-top:30px;
			height:40px;
			font-family: 'Garamond';
		}
		.click:hover{
			background-color: rgba(19, 135, 243, 0.74);	
		}
		a{
      color: blue;
      font-size:20px;
	  
    	}
		#shadow{
			box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		
		
	</style>
  <link rel="stylesheet" type="text/css" href="styles.css" >
</head>
<body>

<!--Navbar--> 

<nav class="navbar navbar-light navig">
  <div class="pill-nav">
  <a class="default" >RSB</a>
  <a class="default" href="index.php">Home</a>
  <div class="topnav-right">   
  <a href="table.php">Users</a> 
  <a class="active" href="money.php">Transfer Money</a>
  <a href="transaction.php">Transaction History</a>
</nav>
</div>
</div>

<div>
<img id ="shadow" style="float: right; margin: 30px 30px 15px 15px;" src="img6.jpg" width="700" height="625" />
</div>
	
	<!-- Users-->

	<div class="container">
		<form action="transfer.php" method="post">
			<label><b>Sender</b></label>
			<input list="names" id="sender_name1" type="text" name="sender_name1", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Agrima Gupta"></option>
				<option value="Hana Gupta"></option>
				<option value="Deepa Gupta"></option>
				<option value="Manish Gupta"></option>
				<option value="Vivo Goswami"></option>
				<option value="Tanu Poojary"></option>
				<option value="Vedha Naik"></option>
				<option value="Nivi Mishra"></option>
				<option value="Neetya Dewangan"></option>
				<option value="Anjali Mehta"></option>
				
			</datalist>
		</br>
			<label><b>Receiver</b></label>
			<input list="namess" type="" id="receiver_name1" name="receiver_name1" placeholder="Enter name here"  required>
			<datalist id="namess">
			<option value="Agrima Gupta"></option>
				<option value="Hana Gupta"></option>
				<option value="Deepa Gupta"></option>
				<option value="Manish Gupta"></option>
				<option value="Vivo Goswami"></option>
				<option value="Tanu Poojary"></option>
				<option value="Vedha Naik"></option>
				<option value="Nivi Mishra"></option>
				<option value="Neetya Dewangan"></option>
				<option value="Anjali Mehta"></option>
			</datalist>
		</br>
			<label><b>Amount </b></label>
			<input type="number" id="amount" name="amount" placeholder="Enter amount here" required></div>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
			
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	
</body>
</html>