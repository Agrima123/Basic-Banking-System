<!--Transaction History-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaction History</title>
	<style type="text/css">
		 table{
            width: 900px;
            height: 100px;
            color: black;
            font-size: 20px;
            border-collapse: collapse;
            font-family: 'Palatino Linotype';
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        tr, th, td {
        	 
            width: 880px;
           
        }
        th,td{
        	text-align: center;
            width: 900px;
           
        }
        th{
        	background-color: #66ccff ;
        	color: white;
            width: 880px;
            padding:15px
        }
        body{
        	
        	margin: 0;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Palatino Linotype';
            background-color:#d8ffcc;
        }
        .middle{
        	margin-left: auto;
        	margin-right: auto;
            width: 900px;   
        }
        h1{
        	text-align: center;
        	font-size: 40px;
            color: Black;    
        }
        a{
            color: white;
            font-size:20px;
        }
        
        tr:nth-child(even) {
            background-color:#ffcccc;
            font-size:20px;}
        tr:nth-child(odd) {
            background-color:white;
            font-size:20px;}

        tr:hover{
            background-color: 	#b3b3b3;
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
    <a href="money.php">Transfer Money</a>
    <a class="active" href="transaction.php">Transaction History</a>
        </nav>
    </div>
    </div>
	<?php include'connection.php' ?>
	<h1><i class="fa fa-history" aria-hidden="true"> Transaction History</i></h1>
	<table class="middle">
    <thead>
        <tr>
        <th>Sr. No</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>

		<?php $sql = "SELECT * FROM transaction1";
        $result = mysqli_query($conn, $sql);?>
    	<?php while( $row = mysqli_fetch_array($result)) : ?>
              
		<tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['transaction_id']; ?></td>
            <td><?php echo $row['sender']; ?></td>
            <td><?php echo $row['receiver']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['datetime']; ?> </td>
        </tr>
        <?php endwhile ?>
    </tbody>
	</table>

</body>
</html>