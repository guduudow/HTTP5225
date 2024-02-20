<?php
  if(isset($_POST['updatePlayer'])) {
    print_r($_POST);
    $id = $_POST['playerid'];
    $pname = $_POST['player_name'];
    $position = $_POST['position'];
    $matches = $_POST['matches_played'];
    $goals = $_POST['goals'];
    $assists = $_POST['assists'];
    $yellow = $_POST['yellow_cards'];
    $red = $_POST['red_cards'];
    $debut = $_POST['debut'];
    $final = $_POST['final_match'];
    $country = $_POST['country'];

    // connection string
    include("../includes/connect.php");
    $query = "UPDATE PlayerStats SET player_name = '$pname', position = '$position', matches_played = '$matches', goals = '$goals', assists = '$assists', yellow_cards = '$yellow', red_cards = '$red', debut = '$debut', final_match = '$final', country = '$country'";

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