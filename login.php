<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tvs.php</title>
    <style>
body {
  background-image: url('photos/12.jpg');
}
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Travel And Tourism</a>
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
            <a class="nav-link" href="admin.php">Admin Log-In</a>
          </li>
        </ul>
      </div>
    </div>
   </nav>
   <center><h3>Log-in Page</h3></center>
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
  $query="select * from register where email='$_POST[email]'";
  $query_run=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($query_run))
  {
    if($row['email']==$_POST['email'])
    {
      if($row['password']==$_POST['password'])
        {
            $_SESSION['name']=$row['name'];
            $_SESSION['age']=$row['age'];
            $_SESSION['phonnuember']=$row['phonenumber'];
            $_SESSION['address']=$row['address'];
            $_SESSION['email']=$row['email'];
            header("Location:userprofile.php");
        }
      else
        {
          echo "worng emailid and password ";
        }
    }
  }
}
?>
  </body>
</html>