<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tvs.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body {
      background-image: url('photos/12.jpg');
      }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Travel And Tourism </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="hotels.html">Hotels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact1.html">Contact Us</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="login.php">User Log-In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.html">Register User</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>
<center><h3>Admin Log-in Page</h3></center>
   <form action="" method="post">
   <div  style="width: 18rem;">
    <div class="mb-3">
      <label  class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" >
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit"  name="submit" class="btn btn-primary">Submit</button></div>
  </form>
<?php
 session_start();
 if(isset($_POST['submit']))
{
  $connection= mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"tms");
  $query="select * from admin where email='$_POST[email]'";
  $query_run=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($query_run))
  {
    if($row['email']==$_POST['email'])
    {
      if($row['password']==$_POST['password'])
        {
            $_SESSION['email']=$row['email'];
            header("Location:adminprofile.php");
        }
      else
        {
          echo "worng emailid and password ";
        }
    }
  }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>