<?php

    include('includes/connect.php');
    // this function has the dynamic products displayed 
    include('functions/common_function.php');
    session_start();

    if(!isset($_SESSION['regNo'])){
        echo "<script> alert('Please login ')</script>";
        echo "<script> window.open('users_area/user_login.php','_self')</script>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <link rel="icon" type="image/x-icon" href="images/sdc.webp">
    
    <link rel="shortcut icon" href="./images/logo.jpg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    

</head>
<body>
    <header>
        <div class="logo" title="Document Management System">
            <img src="images\black.webp" alt="" style="width:200%">
           
        </div>
        <div class="navbar">
            <a href="/proj-alloc/index.php?profile=$regNo" class="active">
            <span class="material-symbols-outlined">
account_circle
</span>                <h3>Profile</h3>
            </a>
            <a href="/proj-alloc/index.php?homePage" class="active">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="/proj-alloc/index.php?chooseMinor" onclick="timeTableAll()">
            <span class="material-symbols-outlined">
check_box
</span>
                <h3>Choose Minor Project</h3>
            </a> 
            <a href="https://mujslcm.jaipur.manipal.edu:122/Student/Academic/ViewTimeTableForStudent" >
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a> 
            <a href="https://mujslcm.jaipur.manipal.edu:122/Student/Academic/GradesForStudent">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Grades</h3>
            </a>
            <a href="/proj-alloc/index.php?requests">
            <span class="material-symbols-outlined">
mark_email_unread
</span>
                <h3>Requests</h3>
            </a>
            <a href="users_area/user_logout.php">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>



      
        
    </header>







    
    
    <?php
            if(isset($_GET['homePage'])){
                include('homePage.php');
            }
            
            if(isset($_GET['chooseMinor'])){
                include('chooseMinor.php');
            }
            if(isset($_GET['proposal'])){
                include('proposal.php');
            }
            if(isset($_GET['profile'])){
                include('profile.php');
            }
            if(isset($_GET['requests'])){
                include('requests.php');
            }
            if(isset($_GET['facultyDetail'])){
                include('facultyDetail.php');
            }
            ?>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="timeTable.js"></script>
<script src="app.js"></script>
</body>
</html>
