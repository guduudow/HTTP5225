<?php
  if(isset($_POST['addPlayer'])) {
    print_r($_POST);
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
    $query = "INSERT INTO PlayerStats(player_name, position, matches_played, goals, assists, yellow_cards, red_cards, debut, final_match, country) VALUES ('$pname', '$position', '$matches', '$goals', '$assists', '$yellow', '$red', '$debut', '$final', '$country')";

    $player = mysqli_query($connect, $query);

    if($player) {
      echo ('success');
    } else {
      echo "Failed: " . mysqli_error($connect);
    }
  } else {
    echo "<h1>ACCESS DENIED.</h1>";
  }
?>