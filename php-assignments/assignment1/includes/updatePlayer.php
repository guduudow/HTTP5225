<?php
  if(isset($_POST['updatePlayer'])) {
    print_r($_POST);
    $id = $_POST['playerid'];
    $pname = $_POST['player_name'];
    $position = $_POST['position'];
    $matches = $_POST['matches_played'];
    $goals = $_POST['goals'];
    $assists = $_POST['assists'];
    $debut = $_POST['debut'];
    $final = $_POST['final_match'];
    $country = $_POST['country'];
    $image = $_POST['imageURL'];

    // connection string
    include("../includes/connect.php");
    $query = "UPDATE PlayerStats SET player_name = '$pname', position = '$position', matches_played = '$matches', goals = '$goals', assists = '$assists', debut = '$debut', final_match = '$final', country = '$country', imageURL = '$image' WHERE id = '$id'";

    $player = mysqli_query($connect, $query);

    if($player) {
      header("Location: ../index.php");
    } else {
      echo "Failed: " . mysqli_error($connect);
    }
  } else {
    echo "<h1>Access Denied.</h1>";
  }
?>