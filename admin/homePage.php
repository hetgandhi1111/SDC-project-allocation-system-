



<div style="padding:5%">
    <h1>Student List</h1>
    <br>
    <br>
    <input type="text" id="searchInput" oninput="searchTable()" placeholder="Search by name">


    <table id="nameTable" style="border-radius: 30px;">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Image</th>
                <th>Name Of student</th>
                <th>registration ID</th>
                <th>branch</th>
                <th>year</th>
                <th>Mobile No</th>
                <th>E-mail ID</th>
                <th>mentor ID </th>
                <th>Requests</th>
                
            </tr>
        </thead>
        <tbody>
      
            <?php
             $sr=1;
             $search_query = "SELECT * FROM `students`";
             $result_query = mysqli_query($con, $search_query);

             while ($row = mysqli_fetch_assoc($result_query)) {
                // Access the column values
                
                $user_image=$row['user_image']; 
                $name=$row['name']; 
                $regNo=$row['regNo']; 
                $phoneNo=$row['phoneNo']; 
                $branch=$row['branch']; 
                $email=$row['email']; 
                $year=$row['year']; 
            
           
           
                $mentorId=$row['mentorId']; 
                

                // Display table rows for each item in the armory
                echo"

            <tr >
                <td>$sr</td>
                <td>  <img src='../users_area/user_images/$user_image' alt='John'style='width:100px'></td>
                <td>$name</td>
                <td>$regNo</td>
                <td>$branch</td>
                <td>$year</td>
                <td>$phoneNo</td>
                <td>$email</td>
                <td>$mentorId</td>
                <td>
                <a href='/proj-alloc/admin/index.php?req=$regNo' style='background-color:rgb(48, 172, 255);
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: 30px;
                font-size: 16pxt;' >show requests</a>

                
                </td>

                
                 
                
                    
                
               
           </tr>";
           
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
  <!-- <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


