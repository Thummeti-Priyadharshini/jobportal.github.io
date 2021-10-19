<?php
 include 'config.php';
    $id=$_REQUEST['ID'];
    $cname=$_REQUEST['Company_Name'];
    $position=$_REQUEST['Position'];
    $skills=$_REQUEST['Skills'];
    $JDesc=$_REQUEST['Job_Desc'];
    $CTC=$_REQUEST['CTC'];

$sql="INSERT INTO job VALUES('$id','$cname','$position','$skills','$JDesc','$CTC')";
if(mysqli_query($conn,$sql))
echo "Job posted successfully";
else
echo "ERROR! Failed to post the job $sql".mysqli_error($conn);

 
?>