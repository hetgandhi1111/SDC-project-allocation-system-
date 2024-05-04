



<div style="padding:5%">
    <h1>Student Requests</h1>
    <br>
    <br>
    <input type="text" id="searchInput" oninput="searchTable()" placeholder="Search by name">


    <table id="nameTable">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>registration number</th>
                <th>Faculty Id</th>
                <th>Date</th>
                <th>Proposal</th>
                <th>project name</th>
                <th>remove</th>
            </tr>
        </thead>
        <tbody>
      
            <?php
            $regNo=$_GET['req'];
             $sr=1;
             $search_query = "SELECT * FROM `requests` where regNo='$regNo'";
             $result_query = mysqli_query($con, $search_query);
             $row_count=mysqli_num_rows($result_query);
             if ($row_count<=0) {
             echo"<h3>no requests available</h3>";
             }
             while ($row = mysqli_fetch_assoc($result_query)) {
                // Access the column values
                
                $facultyId=$row['facultyId']; 
                $date=$row['date']; 
                $proposal=$row['proposal']; 
                $project_name=$row['project_name']; 
              
                

                // Display table rows for each item in the armory
                echo"

            <tr >
                <td>$sr</td>
                <td>$regNo</td>
                <td>$facultyId</td>
                <td>$date</td>
                <td>$proposal</td>
                <td>$project_name</td>
               
                <td>
                <a href='/proj-alloc/admin/index.php?removeReq=$regNo&facultyId=$facultyId' style='background-color:rgb(48, 172, 255);
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16pxt;' >OPEN</a>
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


