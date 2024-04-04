<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$query="insert into register values('$_POST[name]',$_POST[age],'$_POST[address]','$_POST[phonenumber]','$_POST[email]','$_POST[password]')";
$query_run=mysqli_query($connection,$query);
?>
<script>
alert("Registeration successfully....You may now log in.")
window.location.href="login.php";
</script>