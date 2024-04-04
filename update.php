<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$query="update  booking set noofpersons='$_POST[noofpersons]',day='$_POST[day]' where email ='$_SESSION[email]' ";
$query_run=mysqli_query($connection,$query);
?>
<script>
alert("your ticket booked")
window.location.href="userprofile.php";
</script>