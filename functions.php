<?php
 function get_register_count(){
    $connection= mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"tms");
  $register_count="";
  $query="select count(*) as register_count from register";
  $query_run=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($query_run))
  {
    $register_count=$row['register_count'];
  }
  return($register_count);
 }
 function get_bus_count(){
    $connection= mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"tms");
  $bus_count="";
  $query="select count(*) as bus_count from booking";
  $query_run=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($query_run))
  {
    $bus_count=$row['bus_count'];
  }
  return($bus_count);
 }
 function get_hotel_count(){
    $connection= mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,"tms");
  $hotel_count="";
  $query="select count(*) as hotel_count from hotelbooking";
  $query_run=mysqli_query($connection,$query);
  while($row=mysqli_fetch_assoc($query_run))
  {
    $hotel_count=$row['hotel_count'];
  }
  return($hotel_count);
 }
?>