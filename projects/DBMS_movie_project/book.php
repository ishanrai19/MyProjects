<?php

session_start();


// echo($movie_name);

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $servername="localhost";
    $username="root";
    $password="";
    $database="dbms_movie_project";

    $con=mysqli_connect($servername,$username,$password,$database);
    if($con)
    {
        echo("Database Connected");
       $count=$_POST['count'];
       $threater=$_POST['threater'];
       $email=$_SESSION["email"];
       $ticket_id=$_POST['ticket_id'];
//echo($ticket_id);
       $s="SELECT * FROM `ticket` where ticket_id='$ticket_id'";
       $rr=mysqli_query($con,$s);
       $n=mysqli_num_rows($rr);
       
       if($n!=0)
       {
           header('location:list.php');
       }
       else
       {
      // echo($email);
       if($count<=0)
       {
       header('location:booking.php');
       }
        
          else
          {
            $movie_name=$_SESSION["movie_name"];
            $sqll="INSERT INTO `ticket` (`ticket_id`, `count`, `time`, `email`, `movie_name`, `threater`) VALUES ('$ticket_id', '$count', current_timestamp(), '$email', '$movie_name', '$threater')";
            $ress=mysqli_query($con,$sqll);
    header("location:reciept.php?id=$ticket_id");
          }
}

    }
}
?>