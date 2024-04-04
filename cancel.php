<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$query="delete from booking  where email='$_SESSION[email]' ";
$query_run=mysqli_query($connection,$query);
?>
<script>
alert("your ticket is canceled")
window.location.href="userprofile.php";
</script>