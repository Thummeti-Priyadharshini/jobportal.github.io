<?php 
include 'config.php';
    $name=$_REQUEST['Name'];
    $email=$_REQUEST['Email'];
    $number=$_REQUEST['Phone_Number'];
    $password=$_REQUEST['Password'];

$sql="INSERT INTO register VALUES('$name','$email','$number','$password')";
if(mysqli_query($conn,$sql))
echo "Record inserted successfully";
else
echo "ERROR! Could not be able to execute $sql".mysqli_error($conn);

?>
