<?php include 'db.php';?>
<!DOCTYPE html>
<html>
<head><title>Register Page</title>
<style>
  form{
    padding:40px;
    margin:100px 350px 10px 350px;
    background-color: white;                                                                                                 
    

  }
  body{
    
  background-image:url("login.jpg");
background-size: cover;
  }
  .new{                                                                                                                                                                
    text-align: center;

  }
  .new a{
    text-decoration: none;
  }
  .new a:hover{
    color:lightsalmon;
  }
   .forgot{
    text-align:center;
    text-decoration: none;
  }
  .forgot:hover{
    color:red;
  }

  </style>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form method="POST" action="login.php">
  
<div class="mb-3">
    <label for="exampleInputFullname1" class="form-label">FullName</label>
    <input type="text" class="form-control" id="exampleInputFullname1" name="Name"  required>
   
  </div>
  
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email" autofocus required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputNumber1" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputNumber1" name="Phone_Number" required>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputpPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2"  required>
   
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div>
  <button type="submit" class="btn btn-primary" name="submit" onclick="db.php">Register</button><br><br>
 
  <div class="new"><h4>Already have an account?</h4>&nbsp;<a href="login.php">Login</a></div>
  </div>
</form>

</div>
    </body>
</html>