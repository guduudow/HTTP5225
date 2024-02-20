<?php
  if(isset($_POST['updateStudent'])) {
    print_r($_POST);
    // Array ( [fname] => Ederes [lname] => Gure [marks] => 100 [imageURL] => asdl;kasl;d [grades] => )
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    // connection string
    include('../includes/connect.php');
    $query = "UPDATE students SET fname = '$fname', lname = '$lname', marks = '$marks', imageURL = '$imageURL' WHERE id = '$id'";

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