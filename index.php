<!--Main Home Page-->

<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "test");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> RSB BANK</title>
<link rel="stylesheet" type="text/css" href="styles.css" >

  <style >
    label{		
		
      font-family: 'Garamond';
    }
			
	  .container{
			width: 500px;
			padding-left: 200px;	
		}
	
    body{
			background-color:#66b3ff;	
			font-family: 'Garamond';
			margin: 0;
		}

    form{		
    font-size: 4.0rem;
    line-height: 1.5;        
    padding-top: 70px;
    color: black;
    text-align: center;
    margin:auto;
    }
    /* Download Buttons */
    .download-button {
    margin: 5% 3% 5% 0;
    }

    .download-button:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    background-color:Black;
    }

    .money-button{
      border-radius: 0.5rem;
      padding: 1rem 2rem;
      font-size: 50%;
      background-color: #fff;
      color: #ff6600!important;
      transition: 0.3s;
    }    

    #footer #icon{
      display: block;   
      font-size: 2em;
      
    }
    
  /*** Adding Styles to Copyright Div ***/
      .copyright{
        overflow: hidden;
        padding: 1em 0em;
        border-top: 5px solid rgba(255, 255, 255, 0.08);
        text-align: center;
        background: #cce6ff;
    }
          
    .copyright p{
        letter-spacing: 1px;
        font-size: 1.5em;
        color: Black;
    }
          
    .copyright a
    {
        text-decoration: none;
        color: white;
    }
      
    /* Styling Social Icons */
    ul.contact{
        margin: 0;
        padding: 1em 0em 0em 0em;
        list-style: none;
    }
          
    ul.contact li{
        display: inline-block;
        padding: 0em 0.5em;
        font-size: 1em;
    }
      
    ul.contact li a{
        color: #FFF;
        display: inline-block;
        background: #ff6600;
        width: 50px;
        height: 50px;
        line-height: 45px;
        text-align: center;
    } 
    ul.contact li a:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);
      background-color:Black;
    }

    #shadow{
        box-shadow: 0 4px 8px 0 black, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      }
    .hi{
    font-size: 2rem;
    

    }
    .up{
    text-transform: Uppercase;
    font-size:2.5rem;
    }
    .be{
      color:#33334d;
      text-shadow: 0 0 2px 	#33334d;
  
    }
</style>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>	
<?php include 'connection.php' ?>

<!--Navbar-->
<nav class="navbar navbar-light navig">
<div class="pill-nav">
  <a class="default" >RSB</a>
  <a class="default" href="index.php">Home</a>
  <div class="topnav-right">   
  <a href="table.php">Users</a> 
  <a href="money.php">Transfer Money</a>
  <a href="transaction.php">Transaction History</a>  
  </nav>
  </div>

<!--image-->
<div>
<img id ="shadow" style="float: right; margin: 40px 40px 25px 25px;" src="img1.jpg" width="600" height="425" />
</div>
</div>

<!--Main heading-->
<div class="container">
	<form >
		<label class="up">Welcome to</label>
    <br>
    <label class="be"><b>Royal Spark Bank</label>
    <br>
    <label class="hi"><i><b>With you, at every step!</i></b></label>
    
    <br>
    <a href="money.php" class="btn btn-dark btn-lg download-button money-button">
            Transfer Money!
          </a>
  </form>
</div>


<br><br><br><br>
 
 <!--footer--> 
<footer id = "footer">                  
    <!-- Copyright Section -->
          <div class="copyright">
              <p>©  All rights reserved | The Sparks Foundation | Agrima Gupta</p>            
              <ul class="contact">
                  <li>
                      <a href="#" class="fa fa-twitter"> 
                      </a>
                  </li>
                    
                  <li>
                      <a href="#" class="fa fa-facebook">                         
                      </a>
                  </li>                    
                  <li>
                      <a href="#" class="fa fa-rss">                         
                      </a>
                  </li>
              </ul>
          </div>
      </footer>
</body>
</html>