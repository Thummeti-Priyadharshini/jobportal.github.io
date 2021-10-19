<?php include 'db2.php' ?>
<!DOCTYPE html>
<html>
<head><title>Welcome to AdminDashboard</title>
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
  background-color:green;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: green;
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
<script>
    function pop(){
alert("Successfully posted job!");

    }
    </script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" color="black" ><h2>ADMIN DASHBOARD</h2></a>

    </div>
  </div>
</nav>
<div class="sidebar">
  <a href="job.php">Jobs portal</a>
  <a href="candidates.php">Candidates Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="login.php">Sign Out</a>
</div>

<!-- Page content -->
<div class="content">
<p>
  
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Jobs
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST" action="index.php" >
  
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">ID</label>
    <input type="text" class="form-control" id="exampleInput1" name="ID">
    
  </div>
  <div class="mb-3">
    <label for="exampleInput1" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="exampleInput1" name="Company_Name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInput2" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInput2" name="Position">
  </div>
  <div class="mb-3">
    <label for="exampleInput2" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="exampleInput2" name="Skills">
  </div>
  <div class="mb-3">
    <label for="exampleInput3" class="form-label">Job Description</label>
    <input type="textarea" class="form-control" id="exampleInput3" name="Job_Desc">
  </div>
  <div class="mb-3">
    <label for="exampleInput4" class="form-label">CTC</label>
    <input type="text" class="form-control" id="exampleInput4" name="CTC">
  </div>
 
  <button type="submit" class="btn btn-primary" name="post" onclick="db2.php">Post</button>
</form>

  </div>
 
</div>
<table class="table">
  <thead>
    <tr align="center">
      <th scope="col" >SNo</th>
      <th scope="col">JobID</th>

      <th scope="col">company name</th>
      <th scope="col">position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
<tbody>
    <?php 

    $sql="SELECT ID, Company_Name, Position ,CTC FROM job";
    
    $result=mysqli_query($conn,$sql);
    $i=1;
    while($rows = mysqli_fetch_assoc($result)){
        ?>
        <tr style="color:black;">
        <td class="text-center py-2"><?php echo ++$i; ?></td>
            <td class="text-center py-2"><?php echo $rows['ID']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Company_Name']; ?></td>
            <td class="text-center py-2"><?php echo $rows['Position']; ?></td>
            <td class="text-center py-2"><?php echo $rows['CTC']; ?></td>
            
        </tr>     
        <?php
}

        ?> 
        </tbody>
    </table>

    </div>
</div>
        
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>