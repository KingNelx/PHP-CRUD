
<?php
    require_once 'connect.php';
    $ID = $_GET['id'];
    if(isset($_POST['submit'])){
        $Heroe_Name = mysqli_real_escape_string($connect, $_REQUEST['character_name']);
        $Heroe_Role = mysqli_real_escape_string($connect, $_REQUEST['character_role']);
        $Heroe_LanePhase = mysqli_real_escape_string($connect, $_REQUEST['character_lane']);
        $Heroe_BestItem = mysqli_real_escape_string($connect, $_REQUEST['character_bestItem']);

            $sql = "UPDATE DotaHeroes SET  Heroe_Role = '$Heroe_Role', 
                    Heroe_LanePhase = '$Heroe_LanePhase', Heroe_BestItem =  '$Heroe_BestItem' ";
            $result = mysqli_query($connect, $sql);
            if($result){
               header('location: display.php');
            }else{
                echo "ERROR: " . mysqli_error($connect);
            }
            mysqli_close($connect);
    }
?>

<!Doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method = "POST">

            <div class="mb-3">
                <label  class="form-label">Character Name</label>
                <input type="text" class="form-control" placeholder="Character Name" name = "character_name" required>
            </div>
            
            <div class="mb-3">
                <label  class="form-label">Character Role</label>
                <input type="text" class="form-control" placeholder="Character Role" name = "character_role" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Character Laning Phase</label>
                <input type="text" class="form-control" placeholder="Character Lane Phase" name = "character_lane" required>
            </div>

            <div class="mb-3">
                <label  class="form-label">Character Best Item</label>
                <input type="text" class="form-control" placeholder="Character Best Item" name = "character_bestItem" required>
            </div>

            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
    </div>


</body>

</html>
