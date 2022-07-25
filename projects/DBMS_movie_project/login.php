<?php

session_start();
function Alertt($msg)
{
    echo"<script>alert('$msg')</script>";
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $servername="localhost";
    $username="root";
    $password="";
    $database="dbms_movie_project";
    $con=mysqli_connect($servername,$username,$password,$database);
    if($con)
    {
        echo("Connection Successfull");
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $_SESSION["email"]=$email;
        if(empty($email))
        {
        header('location:loginform.php');
        }
        else if(empty($pass))
        {
         header('location:loginfrom.php');
        }
        else
        {
        $q="SELECT * FROM `user` where email='$email' ";
        $res=mysqli_query($con,$q);
        $rows=mysqli_num_rows($res);
        if($rows==0)
        {
            
            //Alertt("No such User...Register");
            header('location:registerform.php');
            echo("No such user...");  
        }
        else 
        {
            $qu="SELECT * FROM `user` where email='$email' && pass='$pass' ";
        $ress=mysqli_query($con,$qu);
        $rowss=mysqli_num_rows($ress);

        if($rowss==0)
        {
            
            Alertt("Incorrect Password");
            
            header('location:loginform.php');
            echo("Incorrect Password..."); 
        }
        else
        {
            echo("logged in");
            Alertt("Logged In Successfully");   
           header("location:list.php?email=$email");
        }    
}
}
    }
}


?>