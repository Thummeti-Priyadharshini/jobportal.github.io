<?php include 'config.php';
session_start();


    $email=$_REQUEST['Email'];
    $password=$_REQUEST['Password'];
    $query="SELECT * FROM register WHERE 'Email'='$email' AND 'Password'='$password' " ;
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_fetch_row($result)==1){
        header("location:index.php");
    }
    else

    $error="Email or Password is incorrect";
    
?>
