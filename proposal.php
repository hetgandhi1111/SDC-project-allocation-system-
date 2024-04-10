<div style="padding:10%">





    <h2 class="text-center m-4 mt-5 pt-3" style="text-align: center;">submit proposal</h2>
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">



 <!-- name -->
 <div class="form-outline mb-4">
                    <label for="project_name" class="form-label">project_name</label>
                    <input type="text" id="project_name" class="form-control" placeholder="Enter your project_name" autocomplete="off" required="required" name="project_name">
                </div>


                <!-- username -->
                <div class="form-outline mb-4">
                    <label for="proposal" class="form-label">submit your proposal in a drive link</label>
                    <input type="text" id="proposal" class="form-control" placeholder="Enter your proposal" autocomplete="off" required="required" name="proposal">
                </div>

                
               

                
            
                <div class="mt-4 pt-2">
                    <input type="submit" value="Submit" class="bg-secondary py-2 px-3 border-0" style='border-radius:50px; color:white;' name='proposal_submit'>
                    <a href="../index.php" class="bg-secondary py-2 px-3 border-0" style='text-decoration:none; border-radius:50px; color:white;' >RETURN TO HOME</a>



    
                    
                </div>
            </form>
        </div>
    </div>


</div>


<?php



if(isset($_POST['proposal_submit'])) {
    $regNo=$_SESSION['regNo'];
    $facultyId=$_GET['proposal'];
    $proposal= $_POST['proposal'];
    $project_name= $_POST['project_name'];
    
    
    
    
    
    
    
    

  
    
    // select query

    $select_query="select * from `requests` where regNo='$regNo' and facultyid='$facultyId'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('request already exists')</script>";
    }
    else{
        // insert query
    
    $insert_query="insert into `requests` (regNo,facultyid,proposal,project_name) values ('$regNo','$facultyId','$proposal','$project_name')";
    
    $sql_execute=mysqli_query($con,$insert_query);
   
    echo "<script> alert('requested succesfully')</script>";
    // echo "<script> window.open('profile.php','self')</script>";
    }



}

?>