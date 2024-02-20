<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <?php include('shared/nav.php')?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5 mt-4 mb-4">
          Update Player
        </h1>
      </div>
    </div>
  </div>
  <?php 
    $id = $_GET['playerid'];
    $connect = mysqli_connect('localhost', 'root', 'root', 'FootbalStats');
    $query = "SELECT * FROM PlayerStats WHERE `playerid` = '$id'";
    $players = mysqli_query($connect, $query);

    $result = $players -> fetch_assoc();
  ?>
  <div class="row">
    <div class="col">
      <form action="includes/updatePlayer.php" method="POST">
        <input type="hidden" name="playerid" value="<?php echo $result['playerid'];?>"/>
          <div class="mb-3">
            <label for="player_name" class="form-label">Player Name:</label>
            <input type="text" class="form-control" id="player_name" name="player_name" aria-describedby="pNameHelp" value="<?php echo $result['player_name'];?>"/>
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Position:</label>
            <input type="text" class="form-control" id="position" name="position" aria-describedby="posHelp" value="<?php echo $result['position'];?>"/>
          </div>
          <div class="mb-3">
            <label for="matches_played" class="form-label">Matches Played:</label>
            <input type="text" class="form-control" id="matches_played" name="matches_played" aria-describedby="matchesHelp" value="<?php echo $result['matches_played'];?>"/>
          </div>
          <div class="mb-3">
            <label for="goals" class="form-label">Goals:</label>
            <input type="text" class="form-control" id="goals" name="goals" aria-describedby="goalHelp" value="<?php echo $result['goals'];?>">
          </div>
          <div class="mb-3">
            <label for="assists" class="form-label">Assists:</label>
            <input type="text" class="form-control" id="assists" name="assists" aria-describedby="assistsHelp" value="<?php echo $result['assists'];?>">
          </div>
          <div class="mb-3">
            <label for="yellow_cards" class="form-label">Yellow Cards:</label>
            <input type="text" class="form-control" id="yellow_cards" name="yellow_cards" aria-describedby="ycHelp" value="<?php echo $result['yellow_cards'];?>">
          </div>
          <div class="mb-3">
            <label for="red_cards" class="form-label">Red Cards:</label>
            <input type="text" class="form-control" id="red_cards" name="red_cards" aria-describedby="rcHelp" value="<?php echo $result['red_cards'];?>">
          </div>
          <div class="mb-3">
            <label for="debut" class="form-label">Debut:</label>
            <input type="text" class="form-control" id="debut" name="debut" aria-describedby="debutHelp" value="<?php echo $result['debut'];?>">
          </div>
          <div class="mb-3">
            <label for="final_match" class="form-label">Final Match:</label>
            <input type="text" class="form-control" id="final_match" name="final_match" aria-describedby="fmHelp" value="<?php echo $result['final_match'];?>">
          </div>
          <div class="mb-3">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="country" name="country" aria-describedby="countryHelp" value="<?php echo $result['country'];?>">
          </div>
          <button type="submit" name="updatePlayer" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>