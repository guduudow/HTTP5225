<?php
  $connect = mysqli_connect('sql311.infinityfree.com', 'if0_35758289', '8zm9N1Aw2Ntn1', 'if0_35758289_http5225');
  if(!$connect){
    die("Failed to connect..." . mysqli_connect_error());
  }

  header('Content-type: text/html; charset=UTF-8');
