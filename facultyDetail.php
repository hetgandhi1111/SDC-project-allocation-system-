<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>




<?php

                    $facultyId=$_GET['facultyDetail'];
         $user_image="Select * from `faculty` where facultyId='$facultyId'";
                    $result_image=mysqli_query($con,$user_image);
                    $row_image=mysqli_fetch_array($result_image);
                    $user_image=$row_image['user_image'];
                    $name=$row_image['name'];
                    $phoneNo=$row_image['phoneNo'];
                    $email=$row_image['email'];
                    // $branch=$row_image['branch'];
                    // $year=$row_image['year'];
                    $studentsAlloted=$row_image['studentsAlloted'];
                    $designation= $row_image['designation'];
                    $specialization= $row_image['specialization'];



                    echo"
<div style='padding:10%'>
<div class='card'>
  <img src='users_area/user_images/$user_image' alt='admin' style='width:100%'>
  <h1>$name</h1>
  <p class='title'>$designation</p>
  <p>Manipal University</p>
  <p>$email</p>
  <p>$phoneNo</p>
</div>
</div>
";
?>
                
                    ?>








      