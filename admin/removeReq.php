<?php



$regNo=$_GET['removeReq'];
$facultyId=$_GET['facultyId'];


$search_query = "SELECT * FROM `students` where regNo='$regNo'";
$result_query = mysqli_query($con, $search_query);

$row = mysqli_fetch_assoc($result_query);
$req=$row['req'];
$req-=1;


$sq="delete from `requests` where regno='$regNo' and facultyId='$facultyId'";
$run=mysqli_query($con,$sq);

$updateStu="UPDATE `students` SET `req`='$req' WHERE regNo='$regNo'";
$result_query6 = mysqli_query($con, $updateStu);



echo "<script> alert('Successfully Removed ')</script>";
echo "<script> window.open('index.php?homePage','_self')</script>";




?>