<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
global $con;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
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
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        body{
            overflow-x: hidden;
        }

        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .container {
            margin-top: auto;
        }

        /* Change button color on hover */
        .btn-secondary:hover {
            background-color: #ff7f50; /* More orangish color */
            color: white; /* Text color */
        }

        .btn-secondary {
            transition: background-color 0.3s;
        }

        .card-custom {
            max-width: 500px;
            background: rgba(255, 218, 185, 0.9); /* Light orangish color with opacity */
            border-radius: 20px;
            box-shadow: 2px 4px 8px 8px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>

<div class="topnav">
    <a class="active" href="user_login.php">Student Login</a>
    <a href="faculty_login.php">Faculty Login</a>
    <a href="admin_login.php">Admin Login</a>
</div>

<div class="container my-5 d-flex justify-content-center">
    <div class="card card-custom p-5">
        <h2 class="text-center p-3">Student Login</h2>
        <div class="card-body">
            <form action="" method="post">
                <!-- username -->
                <div class="form-outline mb-4">
                    <label for="regNo" class="form-label">Registration Number</label>
                    <input type="text" id="regNo" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="regNo">
                </div>
                <!-- password field -->
                <div class="form-outline mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="password">
                </div>
                <div class="mt-4 pt-2 d-flex justify-content-between">
                    <input type="submit" value="Login" class="bg-secondary py-2 px-3 border-0 btn-secondary" style="border-radius: 50px; color:white;" name="user_login">
                    <a href="user_registration.php" class="btn btn-secondary btn-secondary" style="border-radius: 50px;">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php
if (isset($_POST['user_login'])) {
    $regNo=$_POST['regNo'];
    $password=$_POST['password'];

    $select_query="select * from `students` where regNo='$regNo'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);

    // will only fetch one record(1st record) an cuz username is unique, only one record is needed
    $row_data=mysqli_fetch_assoc($result);

    if($row_count>0){
        if ($password== $row_data['password']) {
            // user exists
            if($row_count==1){
                $_SESSION['regNo']=$regNo;
                $_SESSION['role']='student';
                echo "<script> window.open('../index.php?homePage','_self')</script>";
            }
        }else{
            echo "<script> alert('invalid credentials')</script>";
        }
    }
}
?>
