<?php
require('functions.php');
session_start();
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$email="";
$query="select * from admin where email ='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($query_run)){
  $email=$row['email'];
}
?>
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
             <a class="navbar-brand" href="adminprofile.php">Admin Profile </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <strong>Welcome:<?php echo  $_SESSION['email'] ?></strong>
                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                          <a class="nav-link" href="logout.php">Log-Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class="card  " style="width: 18rem;">
            <div class="card-body btn btn-info ">
              <h5 class="card-title btn btn-light">Registered Users:</h5>
             <p class="card-text ">No. of total users: <?php echo get_register_count();?></p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
             </div>
        </div>
        <br>
        <div class="card  " style="width: 18rem;">
            <div class="card-body btn btn-info ">
              <h5 class="card-title btn btn-light">Bus Tickets Booked:</h5>
             <p class="card-text ">No. of total bus tickets:<?php echo get_bus_count();?></p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
             </div>
        </div>
        <br>
        <div class="card  " style="width: 18rem;">
            <div class="card-body btn btn-info ">
              <h5 class="card-title btn btn-light">hotel Booked:</h5>
             <p class="card-text ">Total no. of persons hotel booked:<?php echo get_hotel_count();?></p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
             </div>
        </div>
        <br>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>