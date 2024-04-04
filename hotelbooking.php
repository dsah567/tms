<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$query="insert into hotelbooking values(null,'$_POST[email]','$_POST[hname]',$_POST[noofpersons],$_POST[day])";
$query_run=mysqli_query($connection,$query);
?>
<script>
alert("your Hotel booked")
window.location.href="userprofile.php";
</script>