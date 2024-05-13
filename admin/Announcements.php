<div style="padding:12%">
    <h1 style="text-allign:center ">Announcements Students</h1>


    <table id="nameTable">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Type</th>
                <th>Announcement</th>
                <th>Added By</th>
                <th>Remove</th>
                

                
            </tr>
        </thead>
        <tbody>
            <?php
            
            
             $sr=1;
             $search_query = "SELECT * FROM `announcements`";
             $result_query = mysqli_query($con, $search_query);

             while ($row = mysqli_fetch_assoc($result_query)) {
                $announcement=$row['announcement'];
                $anId=$row['anId'];
                $addedBy=$row['addedBy'];
                $type=$row['type'];
               

                // Display table rows for each item in the armory
                echo"

            <tr >
                <td>$sr</td>
                <td>$type</td>
                <td >$announcement</td>
                <td>$addedBy</td>
                
               
                <td>
                <a href='removeAnn.php?removeAnn=$anId' class='btn btn-danger' style='background-color: #ff0000;
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