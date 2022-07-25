<?php

session_start();

$movie_name=$_GET['name'];
$_SESSION["movie_name"]=$movie_name;
?>
  
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
     
   </head>
   <body>
     
 
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
 </html>
     <div id="navbar">
         
         <ul>
             <li class="item"> <a href="#">Home</a></li>
             <li class="item"> <a href="#">Content</a></li>
             <li class="item"> <a href="#">Contact Us</a></li>
             <li class="item"> <a href="#">About</a></li>
              </ul>
     </div>
    
     
     <section id="form">
         <div class="headingg">
             <h3>Book Your Ticket for  
                 <?php
                  echo ($movie_name) 
                 ?>   </h3>
            </div>
            <form action="book.php?name=  <?php echo($movie_name) ?>" method="post">
                <div class="formmm " id="farm"> 
                    <div class="form-items">
                    <label for="ticket_id">Ticket ID : </label>
                        <input type="number" name="ticket_id" id="ticket_id" placeholder="Enter Ticket ID : ">
                    <label for="count">Number of Tickets : </label>
                        <input type="number" name="count" id="count" placeholder="Enter Count : ">
           <div class="bx"> <label for="threater">Location :</label>
            <select name="threater" id="threater">
                <option value="TI">Treasure Island</option>
                <option value="C21">C21</option>
                <option value="FD">Fundoor</option>
            </select>

        <!-- <div class="form-items">
                        <label for="threater">Threname</label><br>
                        <input type="text" name="threater" id="threater" placeholder="Enter Name : ">
                    </div> -->


      <button class="btn"> <a href="reciept.php"></a>Book Now</button>
    </div>
      </section>
</body>
</html>

 
 
 
  

