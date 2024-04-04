<?php
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"tms");
$query="insert into contactus values(null,'$_POST[name]','$_POST[phonenumber]','$_POST[email]','$_POST[problem]')";
$query_run=mysqli_query($connection,$query);
?>
<script>
alert("Form successfully Submited.")
window.location.href="contact1.html";
</script>