<?php
  if(isset($_GET['delete'])) {
    // Array ( [fname] => Ederes [lname] => Gure [marks] => 100 [imageURL] => asdl;kasl;d [grades] => )
    $id = $_GET['id'];

    // connection string
    include('../includes/connect.php');
    $query = "DELETE FROM students WHERE `id` = '$id'";

    $student = mysqli_query($connect, $query);

    if($student) {
      header("Location: ../index.php");
    } else {
      echo "Failed: " . mysqli_error($connect); 
    }
  }else {
    echo "YOU SHOULDNT BE HERE. THE UNITED STATES DEPARTMENT OF JUSTICE AND HOMELAND SECURITY HAS BEEN NOTIFIED OF YOUR LOCATION.";
  }
?>