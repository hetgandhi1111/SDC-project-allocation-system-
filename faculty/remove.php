<?php

$regNo=$_GET['remove'];
$facultyId=$_SESSION['facultyId'];

$updateStu="UPDATE `students` SET `mentorId`=NULL WHERE regNo='$regNo'";
$result_query6 = mysqli_query($con, $updateStu);


$sq="delete from `alloted-students` where regno='$regNo' and facultyId='$facultyId'";
$run=mysqli_query($con,$sq);


$search_query = "SELECT * FROM `faculty` where facultyId='$facultyId'";
$result_query = mysqli_query($con, $search_query);

$row = mysqli_fetch_assoc($result_query);
$studentsAlloted=$row['studentsAlloted'];
$studentsAlloted-=1;



$updateStu="UPDATE `faculty` SET `studentsAlloted`='$studentsAlloted' WHERE facultyId='$facultyId'";
$result_query6 = mysqli_query($con, $updateStu);

echo "<script> alert('Successfully Removed ')</script>";
echo "<script> window.open('index.php?homePage','_self')</script>";





?>