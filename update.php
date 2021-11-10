<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD OPERATION</title>
</head>

<body>

    <div class="container my-5">
        <form method="POST">

            <div class="mb-3">
                <label for="studentName" class="form-label">Full Name</label>
                <input type="text" class="form-control" required placeholder="Full Name" name="studentName">
            </div>

            <div class="mb-3">
                <label for="studentCourse" class="form-label">Student Course</label>
                <input type="text" class="form-control" required placeholder="Student Course" name="studentCourse">
            </div>

            <div class="mb-3">
                <label for="studentEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" required placeholder="Email address" name="studentEmail">
            </div>

            <div class="mb-3">
                <label for="studentPassword" class="form-label">Password</label>
                <input type="password" class="form-control" required placeholder="Password" name="studentPassword">
            </div>

            <div class="mb-3">
                <label for="studentContactNumber" class="form-label">Contact Number</label>
                <input type="text" class="form-control" required placeholder="Contact Number" name="studentContactNumber">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>

<?php
require_once 'connect.php';

$ID = $_GET['id'];
if (isset($_POST['submit'])) {
    $studentName = mysqli_real_escape_string($connect, $_REQUEST['studentName']);
    $studentCourse = mysqli_real_escape_string($connect, $_REQUEST['studentCourse']);
    $studentEmail = mysqli_real_escape_string($connect, $_REQUEST['studentEmail']);
    $studentPassword = mysqli_real_escape_string($connect, $_REQUEST['studentPassword']);
    $studentContactNumber = mysqli_real_escape_string($connect, $_REQUEST['studentContactNumber']);

    $sql = "UPDATE Students SET studentID = $ID, studentName = '$studentName', studentCourse = '$studentCourse', studentEmail = '$studentEmail'
                , studentPassword = concat(substr('$studentPassword', 1, 5), repeat('#', char_length('$studentPassword') - 5)), studentContactNumber = '$studentContactNumber' WHERE studentID = $ID";

    $result = mysqli_query($connect, $sql);

    if (!$result) {
        die(mysqli_error($connect));
    } else {
        header('location: view.php');
    }

    mysqli_close($connect);
}
?>
