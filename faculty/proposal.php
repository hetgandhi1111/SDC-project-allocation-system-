<?php


$regNo=$_GET['accepted'];
echo"<p>$regNO</p>";

$facultyId=$_SESSION['facultyId'];

$search_query = "SELECT * FROM `faculty` where facultyId='$facultyId'";
$result_query = mysqli_query($con, $search_query);

// while ($row = mysqli_fetch_assoc($result_query)) {
$faculty = mysqli_fetch_assoc($result_query);
$maxCap=$faculty['maxCap'];
$studentsAlloted=$faculty['studentsAlloted'];

$search_query2 = "SELECT * FROM `students` where regNo='$regNo'";
$result_query2 = mysqli_query($con, $search_query2);

// while ($row = mysqli_fetch_assoc($result_query)) {
$students = mysqli_fetch_assoc($result_query2);

$search_query3 = "SELECT * FROM `requests` where regNo='$regNo' AND facultyId='$facultyId'";
$result_query3 = mysqli_query($con, $search_query3);

// while ($row = mysqli_fetch_assoc($result_query)) {
$requests = mysqli_fetch_assoc($result_query3);
$project_name=$requests['project_name'];
$proposal=$requests['proposal'];


$row_count=mysqli_num_rows($result_query3);

if($row_count==1){
    // update alloted to 1 from null value
    if(isset($_GET['accepted'])AND $studentsAlloted<$maxCap){
        $update="UPDATE `requests` SET `accepted`='1' WHERE regNo='$regNo' AND facultyId='$facultyId'";
        $result_query4 = mysqli_query($con, $update);
        if ($result_query4) {
            // DELETE REQ , ALLOT MENTOR, ADD TO ALLOTED, delete other requests ,faculty alloted +1
            $deleteReq="delete from `requests` WHERE regNo='$regNo'";
            $result_query5 = mysqli_query($con, $deleteReq);
            $updateStu="UPDATE `students` SET `mentorId`='$facultyId' WHERE regNo='$regNo'";
            $result_query6 = mysqli_query($con, $updateStu);
            $updateStu="UPDATE `students` SET `req`='0' WHERE regNo='$regNo'";
            $result_query6 = mysqli_query($con, $updateStu);
            $insert_query="insert into `alloted-students` (regNo,facultyId,proposal,project_name) values ('$regNo','$facultyId','$proposal','$project_name')";
            $sql_execute=mysqli_query($con,$insert_query);
            $studentsAlloted=$studentsAlloted+1;
            $updateFac="UPDATE `faculty` SET `studentsAlloted`='$studentsAlloted' WHERE facultyId='$facultyId'";
            $result_query6 = mysqli_query($con, $updateFac);

           



            



            
        }


    }
   
}






?>