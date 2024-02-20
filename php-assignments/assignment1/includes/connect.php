<?php
  $connect = mysqli_connect('localhost', 'root', 'root', "FootbalStats");
  if(!$connect){
    die("Failed to connect..." . mysqli_connect_error());
  }
?>