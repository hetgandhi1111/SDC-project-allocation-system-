<?php

    include('../includes/connect.php');
    // this function has the dynamic products displayed 
    include('../functions/common_function.php');
    session_start();

    if(!isset($_SESSION['adminId'])){
        echo "<script> alert('Please login ')</script>";
        echo "<script> window.open('../users_area/user_login.php','_self')</script>";
    }
    $adminId=$_SESSION['adminId'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
<!-- 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
   
    <link rel="icon" type="image/x-icon" href="../images/sdc.webp">
    
    <link rel="shortcut icon" href="../images/logo.jpg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    

</head>
<body>
    <header>
        <div class="logo" title="Document Management System">
            <img src="../images/black.webp" alt="" style="width:200%">
           
        </div>
        <div class="navbar ">
            <!-- <a href="/proj-alloc/admin/index.php?homePage" class="active">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a> -->
           


            
            <a href="/proj-alloc/admin/index.php?homePage" class="active">
            <span class="material-symbols-outlined">
group
</span>
                <h3>Students List</h3>
            </a>
    
 



            <a href="/proj-alloc/admin/index.php?facultyList" onclick="timeTableAll()">
            <span class="material-symbols-outlined">
supervised_user_circle
</span>
                <h3>Faculty List</h3>
            </a> 
            <a href="/proj-alloc/admin/index.php?adminList" onclick="timeTableAll()">
            <span class="material-symbols-outlined">
shield_person
</span>
                <h3>Admin List</h3>
            </a> 
            <a href="addFaculty.php" >
            <span class="material-symbols-outlined">
group_add
</span>
                <h3>Add Faculty</h3>
            </a> 
            <a href="addAdmin.php">
            <span class="material-symbols-outlined">
admin_panel_settings
</span>
                <h3>Add Admin</h3>
            </a>   


            <a href="/proj-alloc/admin/index.php?announcements">
            <span class="material-symbols-outlined">
admin_panel_settings
</span>
                <h3>View Announcement</h3>
            </a>   
            <a href="/proj-alloc/admin/index.php?announcements">
            <span class="material-symbols-outlined">
admin_panel_settings
</span>
                <h3>Add Announcement</h3>
            </a>   
             
           
            <a href="../users_area/user_logout.php">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <!-- <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div> -->



        
    </header>







    
    
    <?php
            if(isset($_GET['homePage'])){
                include('homePage.php');
            }
            
            if(isset($_GET['req'])){
                include('req.php');
            }
            if(isset($_GET['removeReq'])){
                include('removeReq.php');
            }
            if(isset($_GET['removeAlloc'])){
                include('removeAlloc.php');
            }
            if(isset($_GET['facultyList'])){
                include('facultyList.php');
            }
           
            if(isset($_GET['showAlloc'])){
                include('showAlloc.php');
            }
            if(isset($_GET['adminList'])){
                include('adminList.php');
            }
            if(isset($_GET['announcements'])){
                include('Announcements.php');
            }
           
            ?>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>
