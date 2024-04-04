<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$query="insert into booking values(null,'$_POST[email]','$_POST[from]','$_POST[to]',$_POST[noofpersons],$_POST[day])";
$query_run=mysqli_query($connection,$query);
?>
<script>
alert("your ticket booked")
window.location.href="userprofile.php";
</script>