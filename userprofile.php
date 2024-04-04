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

$sna="";
$emaila="";
$hname="";
$noofpersonsa="";
$daya="";
$query="select * from hotelbooking where email ='$_SESSION[email]'";
$query_run=mysqli_query($connection,$query);
while($rowa=mysqli_fetch_assoc($query_run)){
  $sna=$rowa['sn'];
  $emaila=$rowa['email'];
  $hname=$rowa['hname'];
  $noofpersonsa=$rowa['noofpersons'];
  $daya=$rowa['day'];
}

?>
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
            <a class="nav-link active" aria-current="page" href="hotelbooking.html">Hotel Booking</a>
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

<?php

if ($from==null){
  echo null;
}
else{
echo "<br><br><p> Tickets</p>";
$fare = array("Bengaluru"=>"300","Chitradurga"=>"300","Mysore"=>"200","Hyderabad"=>"800","Goa"=>"900","Patna"=>"3000");
$totalFare=($fare[$from]+$fare[$to])*$noofpersons;
echo "Your Ticket ID is ".$sn."<br>";
echo "your ".$noofpersons." tickets is booked from ".$from." to ".$to." on day ".$day."<br>";
echo 'your total fare is '.$totalFare;
}

if ($hname==null){
  echo null;
}
else{
echo "<br><br><p> Hotel Booking</p>";
$price = array("TajHotels"=>"300","TheOberoiGroup"=>"300","NambiarClubBellezea"=>"200","NovotelGoaResort"=>"800","HOTELMAGADHI"=>"900");
$totalPrice=$price[$hname]*$noofpersonsa;
echo "Your Hotel Booking ID is ".$sna."<br>";
echo "your ".$noofpersonsa." tickets is booked in ".$hname." on day ".$daya."<br>";
echo 'your total fare is '.$totalPrice;
}
?>

</body>
</html>