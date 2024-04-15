<div style="padding:12%">
    <h1 style="text-allign:center ">Alloted Students</h1>


    <table id="nameTable">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name Of Student</th>
                <th>Reg No</th>
                <th>Project Title</th>
                <th>proposal</th>
                <th>Mobile No</th>
                <th>E-mail ID</th>
                <th>date accepted</th>
                <th>remove</th>

                
            </tr>
        </thead>
        <tbody>
            <?php
            $facultyId= $_SESSION['facultyId'];
            
             $sr=1;
             $search_query = "SELECT * FROM `alloted-students` where facultyId='$facultyId'";
             $result_query = mysqli_query($con, $search_query);

             while ($row = mysqli_fetch_assoc($result_query)) {
                $regNo=$row['regNo'];
                $search_query2 = "SELECT * FROM `students` where regNo='$regNo'";
                $result_query2 = mysqli_query($con, $search_query2);
                $row2 = mysqli_fetch_assoc($result_query2);
                $name=$row2['name'];
                $title=$row['project_name'];
                $proposal=$row['proposal'];
                $phoneNo=$row2['phoneNo'];
                $email=$row2['email'];
                $date=$row['date'];


                // Display table rows for each item in the armory
                echo"

            <tr >
                <td>$sr</td>
                <td >$name</td>
                <td>$regNo</td>
                <td>$title</td>
                <td>$proposal</td>
                <td>$phoneNo</td>
                <td>$email</td>
                <td>$date</td>
                <td>
                <a href='index.php?remove=$regNo' class='btn btn-danger' style='background-color: #ff0000;
                  border: none;
                  color: white;
                  padding: 15px 32px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;'>Remove</a>
                </td>
                
           </tr>";
           
$sr+=1;
            }


            
            ?>