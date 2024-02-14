<?php

if(isset($_POST['grades'])) {
  print_r($_POST);
  // Array ( [fname] => Ederes [lname] => Gure [marks] => 100 [imageURL] => asdl;kasl;d [grades] => )
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $marks = $_POST['marks'];
  $imageURL = $_POST['imageURL'];

  // connection string
  include('../includes/connect.php');
  $query = "INSERT INTO students(fname, lname, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL')";

  $student = mysqli_query($connect, $query);

  if($student) {
    echo ('success');
  } else {
    echo "Failed: " . mysqli_error($connect); 
  }
}else {
  echo "YOU SHOULDNT BE HERE. THE UNITED STATES DEPARTMENT OF JUSTICE AND HOMELAND SECURITY HAS BEEN NOTIFIED OF YOUR LOCATION.";
}



 
?>