<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Summary</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
           .logo {
    width: 203px;
    height: 88px;
  }
          body {
        background-image: url("images/home-img.jpg");
      /* background-size: cover; */
      
      }
    .logo-text{
	  font-size:20px;
      color: white;
      padding-top: 15px;

	  
    }
	 .nav-link1{
    float: right;
    font-size: 25px;
    font-weight: 700;
    margin-right: -11rem;
    margin-top: -2rem;
    color: blue;

    }
    .list-customer{
      padding-left: 1100px;
    }

    .nav-link1:hover{
      color: black;
      text-decoration: none;
    }
    h2{
      text-align: center;
      /* margin-top: 5px; */
      text-decoration: none;
      font-family: sans-serif;
      color: #000dff;
      font-weight: bold;
    }
    .transaction-table {
      background-color: #00000087;
    }
    th, td{
      color: white;
    }
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-color:#343a4000 !important">

  <img src="images/logo.png" class="logo">


<ul class="navbar-nav">
<li class="list-customer">
<a class="nav-link1" href="index.php">Home</a>
</li>
</ul>
</nav>
        <div class="container divStyle" >
        <h2>Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table roundedCorners  tabletext table-hover table-striped table-condensed transaction-table" >
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th> Transferred Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';
			

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['credits']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>