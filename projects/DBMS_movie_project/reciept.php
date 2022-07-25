<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reciept</title>
    <link rel="stylesheet" href="./style2.css" />
  </head>
  <body>
    <div id="reciept">
      <h2>Booking Successful!!</h2>

      <?php
          
          $ticket_id=$_GET['id'];
          //echo($ticket_id);
   $servername="localhost";
   $username="root";
    $password="";
    $database="dbms_movie_project";
    //echo($ticket_id);
    $con=mysqli_connect($servername,$username,$password,$database);
    if($con)
    {
        $sql="SELECT * from `user` NATURAL JOIN `ticket` where ticket_id='$ticket_id'";
        // $sql="SELECT * from `user`;
        // -- $sql="SELECT * from `ticket`;

        $res=mysqli_query($con,$sql);
        $num=mysqli_num_rows($res);
        
        $row=mysqli_fetch_assoc($res);
        
        echo("Reciept : ");
        echo("<br>"); echo("Ticket ID : ".$row['ticket_id']); echo("<br />");
      echo("Name is : ".$row['name']); echo("<br />"); echo("Movie Name :
      ".$row['movie_name']); echo("<br />"); echo("Threater is :
      ".$row['threater']); echo("<br />"); echo("Number of Tickets :
      ".$row['count']); } ?>
    </div>
  </body>
</html>
