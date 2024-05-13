<?php
 include('../includes/connect.php');
$anId=$_GET['removeAnn'];



$sq="delete from `announcements` where anId='$anId'";
$run=mysqli_query($con,$sq);



echo "<script> alert('Successfully Removed ')</script>";
echo "<script> window.open('index.php?announcements','_self')</script>";





?>