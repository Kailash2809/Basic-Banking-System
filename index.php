<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>
    <style type="text/css">
    
    .main-img{
      width:100%;
      margin: 0;
    }
    .main-text{
      text-align: center;
      font-size: 40px;
    }
    .p2{
      font-size: 30px;
    }
    .button1 {
      background-color:#000000a6;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      
      font-size: 20px;
      margin: 4px 2px;
      border-radius: 60px;
    }
	.button2 {
      background-color:#000000a6;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
     
      font-size: 20px;
      margin: 10px 10px;
      border-radius: 60px;
    }
    
    .button1:hover{
      background-color:black;
      text-decoration: none;
      color: white;
      font-size: 21px;
    }
    .button2:hover{
      background-color:black;
      text-decoration: none;
      color: white;
      font-size: 21px;
    }
      
    
	.view-btn2{
      text-align:center ;
    }
	.mo{
		  padding: 50px 50px;
		   margin: 10% 20%;
	}
  .footer p{
    font-family: sans-serif;
  }
  body {
    background-image: url("images/home-img.jpg");
  }
  .logo {
    width: 203px;
    height: 88px;
    margin-top: -2.5rem;
  }
  .marquee-head {
    color: red;
    font-size: 32px;
    margin-right: 5rem;
    margin-left: 12.5rem;
  }
  footer {
    color: white;
    background-color: black;
    margin-bottom: -0.7rem;
    padding-bottom: 0.5rem;
    padding-top: 0.5rem;
    padding-left: 25rem;
    padding-right: 25rem;
    margin-left: -1.5rem;
    width:49.49%;
  }
  footer marquee {
    margin-left:8rem;
    margin-right:8rem;
  }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
 
      <marquee class="marquee-head"> Welcome to Sahu Bank </marquee>
  <img src="images/logo.png" class="logo">
  </nav>
  
 <div class="mo" >
 <div class="view-btn2">
     
  </div>
  <br></br>
  <div class="view-btn2">
     <a href="viewusers.php" class="button1">Customer Details</a>
  </div>
  <br></br>
   
  <div class="view-btn2">
     <a href="transactionDetails.php" class="button2">Transaction History</a>
  </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  
  
   <footer class="footer1" align="center"> <br>
    <div  style="height: 60%">
    <marquee>&copy; Sahu Bank PVT LTD.</marquee>
 
    </div>
  </footer>
  
  
  
  </body>
</html>
