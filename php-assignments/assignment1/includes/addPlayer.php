<?php
  if(isset($_POST['addPlayer'])) {
    print_r($_POST);
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
    $query = "INSERT INTO PlayerStats(player_name, position, matches_played, goals, assists, debut, final_match, country, imageURL) VALUES ('$pname', '$position', '$matches', '$goals', '$assists', '$debut', '$final', '$country', '$image')";

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