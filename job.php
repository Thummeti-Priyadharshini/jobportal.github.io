<?php include 'db3.php' ?>
<!DOCTYPE html>
<html>
<head><title>Jobs Page</title>
<style>
    
    .container1{

text-align: center;
color:red;
font-weight: bold;
margin-top: 50px;
margin-bottom: 100px;
border:5px double black;
border-radius: 15px;
line-height: 70px;

    }
  
    .container1 p{
      font-style:oblique;
      font-size: 30px;
      color:green;
    }
    .container1 h3{
      font-style: italic;
      font-family: cursive;
      font-size: 40px;
    }
     
    </style>
    <script>
      function alerting(){
        alert("Applied job");

      }
      </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body bgcolor="yellow">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="candidates.php">Candidates Applied</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>

        </li>
        <li class="nav-item">
          <a class="nav-link " href="login.php">Sign Out</a>
          
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container1">
    
<h3><u>JOBS PORTAL</u></h3>
<p>Best jobs available Matching your skills</p>
</div><hr>
<div class="row">
<?php

$sql="SELECT Company_Name,Position,ID,Skills,Job_Desc,CTC from job";

$result=mysqli_query($conn, $sql);


while($rows = mysqli_fetch_assoc($result)){
  ?>


<div class="col-md-4">

<div class="jobs">

<h2 style="text-align: center;color:indigo;"><?php echo $rows['Company_Name']?></h3> 
<h3 style="text-align: center;color:red;font-size:40px;"><?php echo $rows['Position']?></h4>
<button style="text-align: center;color:green;font-size:20px;align:center;border-radius:20px;"><b style="font-size:20px; color:black;"><i>JobID :&nbsp;</i></b><?php echo $rows['ID']?></button>
 <p style="color: black;font-size:15px;"><b style="font-size:20px; color:hotpink;"><i>Skills Required :&nbsp;</i></b><?php echo $rows['Skills']?></p>
 <p style="color: black; text-align: justify;"><b style="font-size:20px; color:hotpink;"><i>Job Description :&nbsp;</i></b><?php echo $rows['Job_Desc']?></p>

<p><b style="font-size:20px; color:hotpink;">CTC :&nbsp;</b><?php echo $rows['CTC']?></p>
<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="fal">

Apply

</button>

</div>

</div>
<?php

}
?>

    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="job.php">
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="FName">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for:</label>
            <input type="text" class="form-control" name="ApplyingFor">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">JobID:</label>
            <input type="text" class="form-control" name="JobID">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="Qualification">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout:</label>
            <input type="text" class="form-control" name="Yearpout">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="apply" onclick="alerting()">Apply</button>
      </form>
      </div>
    </div>
  </div>
</div>          
                
                     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>

</body>
</html>