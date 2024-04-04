<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$sn="";
$email="";
$from="";
$to="";
$noofpersons="";
$day="";
$query="select * from booking where email ='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($query_run)){
  $sn=$row['sn'];
  $email=$row['email'];
  $from=$row['from'];
  $to=$row['to'];
  $noofpersons=$row['noofpersons'];
  $day=$row['day'];
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
      <a class="navbar-brand" href="userprofile.php">User Profile </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="booking.html">Bus Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="changetickets.php">Change Tickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log-Out</a>
          </li>
        </ul>
      </div>
    </div>
   </nav>
<spam><strong>Welcome:<?php echo  $_SESSION['name'] ?></strong></spam><br>
<spam><strong>Welcome:<?php echo  $_SESSION['email'] ?></strong></spam><br>
<?php echo "Journey starts from ".$from." to ".$to; ?><br><br>
<button > <a href="cancel.php" >Cancel Tickets</a></button>
<centre><h3>changing Tickets</h3></centre>
<form action="update.php" method="post">
<div  style="width: 18rem;">
<div class="mb-3">
  <label  class="form-label">No. Of Persons</label>
  <input type="text" name="noofpersons" class="form-control" value="<?php echo $noofpersons; ?>">
</div>
<div class="mb-3">
  <label  class="form-label">Day(Bookin only allow in that  paticular month)</label>
  <input type="text" name="day" class="form-control" value="<?php echo $day; ?>">
</div>
<button type="submit" class="btn btn-primary">Submit</button></div>
</body>
</html>