<!--List of users page-->

<?php
	
		$conn = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User List</title>
    <style type="text/css">
        table, th,tr,td{
            border: 1px solid #dddddd;
            font-family:'Garamond';
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
                       
        }
        table{
            width: 700px;
            height: 500px;
            color: black;
            font-size: 20px;
            box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-collapse :collapse;
        }
        h1{
            text-align: center;
            color:Black;
            font-size: 50px;
            margin-top:10px;
            font-family:'Verdana';    
        }
        
        body{
            
            background-repeat: no-repeat;
            background-color:#ff704d;
            background-size: cover;
            margin: 0;
            
        }
        th, td,tr{
            text-align: center; 
            font-size:20px; 

        }
        th{
            background-color:#005580;
            color: black;           
            padding:7px;
        }
        a{
            font-size:25px;
        }
       
        tr:nth-child(even) {
            background-color:#99ddff;
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
            <a class="active" href="table.php">Users</a>      
            <a href="money.php">Transfer Money</a>
            <a href="transaction.php">Transaction History</a>
       
    </div>
</div>
</nav>

    <br>
    <!--User Table-->
    <h1><i class="fa fa-users" aria-hidden="true">  Our Users </i></h1>
    <div>
    <img id ="shadow" style="float: right; margin: 30px 50px 50px 50px;" src="img11.png" width="450" height="450" />
	</div>
    
    <table class="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
           
        </tr>
    </thead>
    <tbody>

        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT id, name1, email, balance FROM user";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name1']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>
</body>
</html>