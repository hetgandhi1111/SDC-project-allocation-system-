<div style="padding:12%">
    <h1 style="text-allign:center ">Requests</h1>


    <table id="nameTable" style='border-radius: 30px;'>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name Of Faculty</th>
                <th>MUJ ID</th>
                <th>Designation</th>
                <th>Specialization</th>
                <th>Mobile No</th>
                <th>E-mail ID</th>
                <th>Alloted Students</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            $regNo= $_SESSION['regNo'];
            
             $sr=1;
             $search_query = "SELECT * FROM `requests` where regNo=$regNo";
             $result_query = mysqli_query($con, $search_query);

             while ($row = mysqli_fetch_assoc($result_query)) {
                $facultyId=$row['facultyId'];
                $search_query2 = "SELECT * FROM `faculty` where facultyId='$facultyId'";
                $result_query2 = mysqli_query($con, $search_query2);
                $row2 = mysqli_fetch_assoc($result_query2);

                // Access the column values
                $name=$row2['name']; 
                $facultyId=$row2['facultyId']; 
                $phoneNo=$row2['phoneNo']; 
                $email=$row2['email']; 
                $studentsAlloted=$row2['studentsAlloted']; 
                $driveLink=$row2['driveLink']; 
                $designation=$row2['designation']; 
                $specialization=$row2['specialization']; 

                // Display table rows for each item in the armory
                echo"

            <tr >
                <td>$sr</td>
                <td >$name</td>
                <td>$facultyId</td>
                <td>$designation</td>
                <td>$specialization</td>
                <td>$phoneNo</td>
                <td>$email</td>
                <td>$studentsAlloted</td>
                
           </tr>";
           
$sr+=1;
            }


            
            ?>