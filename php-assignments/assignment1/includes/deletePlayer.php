<?php
  if(isset($_GET['delete'])) {
    $id = $_GET['playerid'];

    // connection string
    include('connect.php');
    $query = "DELETE FROM PlayerStats WHERE `playerid` = '$id'";

    $student = mysqli_query($connect, $query);

    if($student) {
      header("Location: ../index.php");
    } else {
      echo "Failed: " . mysqli_error($connect); 
    }
  } else {
    echo "ACCESS DENIED.";
  }
?>