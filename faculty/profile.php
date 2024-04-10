<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>



<?php
$regNo=$_SESSION['regNo'];
$search_query = "SELECT * FROM `students` where regNo='$regNo'";
$result_query = mysqli_query($con, $search_query);

$row = mysqli_fetch_assoc($result_query);
$name=$row['name'];
$branch=$row['branch'];
$phoneNo=$row['phoneNo'];
$email=$row['email'];
$user_image=$row['user_image'];
echo"
<div style='padding:10%'>
<div class='card'>
  <img src='users_area/user_images/$user_image' alt='John'style='width:100%'>
  <h1>$name</h1>
  <p class='title'>$branch</p>
  <p>Manipal University</p>
  <p><button>$email</button></p>
  <p><button>$phoneNo</button></p>
</div>
</div>
";
?>