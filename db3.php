<?php include 'config.php';

$name=$_REQUEST['FName'];
$applyfor=$_REQUEST['ApplyingFor'];
$id=$_REQUEST['JobID'];
$qual=$_REQUEST['Qualification'];
$year=$_REQUEST['Yearpout'];

$sql="INSERT INTO applied VALUES('$name','$applyfor','$id','$qual','$year')";
if(mysqli_query($conn,$sql))
echo "applied  successfully";
else
echo "ERROR! Could not be able to execute $sql".mysqli_error($conn);
?>