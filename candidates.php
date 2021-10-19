<?php 
include 'config.php';?>
<!DOCTYPE html>
<html>
<head><title>candidates applied Page</title>
<style>
    .sidebar {
  margin: 10px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body bgcolor="wheat">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" color="black"><h2>CANDIDATES APPLIED</h2></a>

    </div>
  </div>
</nav>
<div class="sidebar">
  <a  href="job.php">Jobs</a>
  <a href="index.php">Home</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="login.php">Sign Out</a>

</div>
<div class="container">


<table class="table" align="center" style="margin-left:60px;margin-top:20px;">
  <thead>
    <tr align="center" >
      <th scope="col">SNo</th>
      <th scope="col">candidate Name</th>
      <th scope="col">JobID</th>
      <th scope="col">Position</th>
      <th scope="col">year passout</th>
    
    </tr>
  </thead>
  <tbody>
  
    <?php 
    $sql="SELECT  FName,JobID,ApplyingFor,Yearpout FROM applied";
    $query=mysqli_query($conn,$sql);
    $i=1;
    while($rows = mysqli_fetch_assoc($query)){
        ?>
        <tr style="color:black; text-align:center;">
        <td class="text-center py-2" ><?php echo ++$i; ?></td>
            <td class="text-center py-2"><?php echo $rows['FName']; ?></td>
            <td class="text-center py-2"><?php echo $rows['JobID']; ?></td>
            <td class="text-center py-2"><?php echo $rows['ApplyingFor']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Yearpout']; ?></td>

            
        </tr>    
        <?php
}

        ?> 
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>