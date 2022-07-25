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
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if((empty($email)) || (empty($pass)))
        header('location:registerform.php');
        else
        {
        $q="SELECT * FROM `user` where email='$email'";
        $res=mysqli_query($con,$q);
        $rows=mysqli_num_rows($res);
        if($rows==0)
        {
            $qu="SELECT * FROM `user`";
        $ress=mysqli_query($con,$qu);
        $rowss=mysqli_num_rows($ress);
        if($rowss==0)
        {
            $sql="INSERT INTO `user` (`user_id`, `name`, `email`, `pass`) VALUES ('1', '$name', '$email', '$pass');";
            mysqli_query($con,$sql);
        }
        else
        {
            $sql="INSERT INTO `user` ( `name`, `email`, `pass`) VALUES ( '$name', '$email', '$pass')";
            mysqli_query($con,$sql);
        }
            Alertt("User Added Successfully..");
            
        $res=mysqli_query($con,$qu);
            header('location:loginform.php');
             
        }
        else if($rows==1)
        {
            
            Alertt("Already Exists.. Login..");
            
            header('location:loginform.php');
        }   

            
}
}
}



?>