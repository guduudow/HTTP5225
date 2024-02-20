<?php
  include('../includes/connect.php');
  include('../includes/function.php');
  if(isset($_POST['addUser'])){
    $query = 'INSERT INTO users (name, email, password) 
      VALUES (
        "' . mysqli_real_escape_string($connect, $_POST['name']) .'",
        "' . mysqli_real_escape_string($connect, $_POST['email']) .'",
        "' . md5($_POST['password']) .'"
      )';

    $user = mysqli_query($connect, $query);

    set_message('User has been created.');
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <?php include('../reusables/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo get_message(); ?>
            </div>
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Manage Users</h1>
            </div>
        </div>
        <div class="row">
        <div class="col">
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Name of user</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Email of user</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
                <div id="marksHelp" class="form-text">Password of user</div>
            </div>
            <button type="submit"  name="addUser" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
    </div>