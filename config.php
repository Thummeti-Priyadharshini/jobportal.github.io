<?php 
$server='localhost';
$username='root';
$password='';
$database='jobs';
$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error );
}
else echo"";
?>