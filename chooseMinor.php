
<?php
$regNo=$_SESSION['regNo'];
$search_query2 = "SELECT * FROM `students` where regNo='$regNo'";
$result_query2 = mysqli_query($con, $search_query2);

// while ($row = mysqli_fetch_assoc($result_query)) {
$students = mysqli_fetch_assoc($result_query2);

$mentorId=$students['mentorId'];
$req=$students['req'];

if ($mentorId!=NULL) {
  echo "<script> alert('ALREADY ALLOTED ')</script>";
  echo "<script> window.open('index.php?homePage','_self')</script>";
 
}
if(!($req<3)){
  echo "<script> alert('Can Only Req to 3 faculties')</script>";
  echo "<script> window.open('index.php?homePage','_self')</script>";
  
}

?>


<div style="padding:5%">
    <h1>Faculty List</h1>
    <br>
    <br>
    <input type="text" id="searchInput" oninput="searchTable()" placeholder="Search by name">


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
                <th>Problem Statement</th>
                <th>Apply</th>
            </tr>
        </thead>
        <tbody>
      
            <?php
             $sr=1;
             $search_query = "SELECT * FROM `faculty`";
             $result_query = mysqli_query($con, $search_query);

             while ($row = mysqli_fetch_assoc($result_query)) {
                // Access the column values
                $name=$row['name']; 
                $facultyId=$row['facultyId']; 
                $phoneNo=$row['phoneNo']; 
                $email=$row['email']; 
                $studentsAlloted=$row['studentsAlloted']; 
                $driveLink=$row['driveLink']; 
                $designation=$row['designation']; 
                $specialization=$row['specialization']; 
                $maxCap=$row['maxCap']; 

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
                <td>
                <a href='$driveLink' style='background-color:rgb(48, 172, 255);
                border: none;
                color: white;
                padding: 15px 32px;
                border-radius: 30px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16pxt;' target='_blank'>OPEN</a>

                
                </td>";

                if ($studentsAlloted<$maxCap   ) {
                  echo"  <td><a href='index.php?proposal=$facultyId' class='btn btn-success' style='background-color: #04AA6D;
                  border: none;
                  border-radius: 30px;
                  color: white;
                  padding: 15px 32px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;'>Apply</a></td>";
                }else{
                    echo"  <td><button style='background-color: #f44336;
                    border-radius: 30px;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;' class='' onclick='openProposalForm2()'>FULL</button></td>";
                }
               
           echo" </tr>";
           
$sr+=1;
            }


            
            ?>
    

            
        </tbody>
    </table>
   
 
    <script>
        function  openProposalForm2(){
            alert("Faculty Already has 12 students");
        }
      </script>
<script>
    function searchTable() {
      var searchQuery = document.getElementById('searchInput').value.toLowerCase();
      var tableRows = document.getElementById('nameTable').getElementsByTagName('tbody')[0].getElementsByTagName('tr');

      for (var i = 0; i < tableRows.length; i++) {
        var rowData = tableRows[i].textContent.toLowerCase();

        if (rowData.includes(searchQuery)) {
          tableRows[i].style.display = '';
        } else {
          tableRows[i].style.display = 'none';
        }
      }
    }
  </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
