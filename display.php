<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"> <a href="user.php" class="text-light"> Add New Hero </a> </button>
    <table class="table table table-hover">
      <thead>
        <tr>
          <th scope="col">Hero ID</th>
          <th scope="col">Hero Name</th>
          <th scope="col">Hero Role</th>
          <th scope="col">Hero Laning Phase</th>
          <th scope="col">Hero Best Item</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php

        $sql = "SELECT * FROM DotaHeroes";
        $result = mysqli_query($connect, $sql);

        if ($result) {
          while ($row = mysqli_fetch_array($result)) {
            $Heroe_ID = $row['Heroe_ID'];
            $Heroe_Name  = $row['Heroe_Name'];
            $Heroe_Role = $row['Heroe_Role'];
            $Heroe_LanePhase =  $row['Heroe_LanePhase'];
            $Heroe_BestItem = $row['Heroe_BestItem'];
            echo '<thead>
        <tr>
        <th scope="row"> ' . $row['Heroe_ID'] . ' </th>
        <td>' . $row['Heroe_Name'] . '</td>
        <td>' . $row['Heroe_Role'] . '</td>
        <td>' . $row['Heroe_LanePhase'] . '</td>
        <td>' . $row['Heroe_BestItem'] . '</td>
        <td> 
        <button class="btn btn-primary"> <a href="update.php? id = '. $row['Heroe_ID'].' " class = "text-light"> Update</a> </button>
        <button class="btn btn-danger"> <a href="delete.php? id = '. $row['Heroe_ID'].'" class = "text-light">  Delete</a> </button>
        </td> 
        </tr>
      </thead>';
          }
        } else {
          echo "NO DATA WERE FOUND IN DATABASE OR NO SQL QUERY WERE MATCH ";
        }
        mysqli_close($connect);
        ?>

      </tbody>
    </table>
  </div>


</body>

</html>
