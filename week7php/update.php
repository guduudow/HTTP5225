<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <?php include('reusables/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Update Student</h1>
            </div>
        </div>
    </div>
    <?php
        $id = $_GET['id'];
        $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225'); //connection string
        $query = "SELECT * FROM STUDENTS WHERE `id` = '$id'"; //query string
        $students = mysqli_query($connect, $query);

        $result = $students -> fetch_assoc();
      ?>
    <div class="row">
        <div class="col">
        <form action="includes/updateGrades.php" method="post">
          <input type="hidden" name="id" value="<?php echo $result['id'];?>"/>
            <div class="mb-3">
                <label for="fname" class="form-label">First Name: </label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fnameHelp" value="<?php echo $result['fname'];?>">
                <div id="fnameHelp" class="form-text">Le prénom de l'étudiant.</div>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name: </label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lnameHelp" value="<?php echo $result['lname'];?>">
                <div id="lnameHelp" class="form-text">Le nom de famille de l'étudiant.</div>
            </div>
            <div class="mb-3">
                <label for="marks" class="form-label">Marks: </label>
                <input type="text" class="form-control" id="marks" name="marks" aria-describedby="marksHelp" value="<?php echo $result['marks'];?>">
                <div id="marksHelp" class="form-text">La note de l'étudiant.</div>
            </div>
            <div class="mb-3">
                <label for="imageURL" class="form-label">Image Path: </label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageHelp" value="<?php echo $result['imageurl'];?>">
                <div id="imgUrlHelp" class="form-text">La photo de l'étudiant.</div>
            </div>
            <button type="submit"  name="updateStudent" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>