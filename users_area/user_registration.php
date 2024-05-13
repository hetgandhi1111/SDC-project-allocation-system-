<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />

    <style>
        body {
 background-image: url("../admin/media/lgback.jpg");
 background-color: #cccccc;
}
    </style>
</head>
<body>
<div class="container-fluid" style=" border:8px; margin-top:20px;  background:white; opacity: 0.8;width: 800px;  box-shadow: 2px 4px 8px 8px rgba(0, 0, 0, 0.1);">
    <h2 class="text-center m-4 mt-5 pt-3">New User registration</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">



 <!-- name -->
 <div class="form-outline mb-4">
                    <label for="name" class="form-label">name</label>
                    <input type="text" id="regNo" class="form-control" placeholder="Enter your name" autocomplete="off" required="required" name="name">
                </div>


                <!-- username -->
                <div class="form-outline mb-4">
                    <label for="regNo" class="form-label">registration number</label>
                    <input type="text" id="regNo" class="form-control" placeholder="Enter your regNo" autocomplete="off" required="required" name="regNo">
                </div>

                
               

                 <!-- password feild -->
                 <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                </div>

                <!-- confirm password feild -->
                <div class="form-outline mb-4">
                    <label for="conf_user_password" class="form-label">Confirm Password</label>
                    <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm your password" autocomplete="off" required="required" name="conf_user_password">
                </div>

               <!-- email -->
               <div class="form-outline mb-4">
                    <label for="email" class="form-label">email (outlook)</label>
                    <input type="text" id="email" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="email">
                </div>


               <div class="form-outline mb-4">
                    <label for="phoneNo" class="form-label">phoneNo</label>
                    <input type="text" id="phoneNo" class="form-control" placeholder="Enter your phoneNo" autocomplete="off" required="required" name="phoneNo">
                </div>

                <div class="form-outline mb-4">
                    <label for="branch" class="form-label">branch</label>
                    <select name="branch" id="branch" class="form-select" required="required">
            <option value="Computer Science and Engineering">CSE</option>
            <option value="Computer and Computer Engineering"> CCE</option>
            <option value="Artificial Intelligence and Machine Learning"> AIML</option>
            <option value="Internet of Things">IOT</option>
            <!-- Add more options based on your columns -->
        </select>
                </div>
                <div class="form-outline mb-4">
                <label for="user_image" class="form-label">User image</label>
                    <input type="file" id="user_image" class="form-control" required="required" name="user_image">
                </div>

                <div class="form-outline mb-4">
                <label for="year" class="form-label">enter your year</label>
        <select name="year" id="year" class="form-select" required="required">
            <option value="1">first</option>
            <option value="2"> second</option>
            <option value="3"> third</option>
            <option value="4">fourth</option>
            <!-- Add more options based on your columns -->
        </select>


                </div>

                
                <div class="mt-4 pt-2">
                    <input type="submit" value="REGISTER" class="bg-secondary py-2 px-3 border-0" style='border-radius:50px; color:white;' name='user_register'>
                    <a href="../index.php" class="bg-secondary py-2 px-3 border-0" style='text-decoration:none; border-radius:50px; color:white;' >RETURN TO HOME</a>



    
                    
                </div>
            </form>
        </div>
    </div>
</div>

    
</body>
</html>

<!-- php code -->

<!-- is there anything wrong with the code below?
 -->



<?php



if(isset($_POST['user_register'])) {
    $regNo=$_POST['regNo'];
    $name=$_POST['name'];
    

    $user_password=$_POST['user_password'];
    $conf_user_password=$_POST['conf_user_password'];
    $email=$_POST['email'];
    $phoneNo=$_POST['phoneNo'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];

    
    // select query

    $select_query="select * from `students` where regNo='$regNo'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('regNo already exists')</script>";
    }else if($user_password!=$conf_user_password){
        echo "<script>alert('password does not match')</script>";
    }else{
        // insert query
    
    $insert_query="insert into `students` (regNo,name,password,email,phoneNo,branch,year,user_image) values ('$regNo','$name','$user_password','$email','$phoneNo','$branch','$year','$user_image')";
    
    $sql_execute=mysqli_query($con,$insert_query);
    move_uploaded_file($user_image_tmp,"./user_images/$user_image");

    echo "<script> alert('register succesful')</script>";
    // echo "<script> window.open('profile.php','self')</script>";
    echo "<script> window.open('./user_login.php','_self')</script>";
    }



}

?>