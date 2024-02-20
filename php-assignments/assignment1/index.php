<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="shared/styles.css" rel="stylesheet"/>
</head>
<body>
  <?php include('shared/nav.php')?>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5 mt-4 mb-4">
          Player Catalog
        </h1>
      </div>
    </div>
  </div>
  <?php 
    $connect = mysqli_connect('localhost', 'root', 'root', 'FootbalStats'); //connection string
    $query = 'SELECT * FROM PlayerStats';

    $players = mysqli_query($connect, $query); //actually try to establish connection
    
    if(mysqli_connect_error()){
      die("Connection error: " . mysqli_connect_error());
    }
  ?>
  <div class="container">
    <div class="row">
      <?php
        foreach($players as $player) {

          if($player['final_match']!= null ){
            $finalgame = "<br>Final: ". $player['final_match'] ."<br>";
          } else {
            $finalgame = "<br>";
          }


          echo '<div class="col-md-4">
                  <div class="card-body border">
                    <h5 class="card-title">' . $player['player_name'] .'</h5><br>
                    Position: ' . $player['position'] . '<br>
                    Matches: '. $player['matches_played'] .'<br>
                    Goals: '. $player['goals'] .'<br>
                    Assists: '. $player['assists'] .'<br>
                    Yellow Cards: '. $player['yellow_cards'] .'<br>
                    Red Cards: '. $player['red_cards'] .'<br>
                    Debut: ' .$player['debut']. '
                    '. $finalgame .'
                    Country: '. $player['country'] .'
                  </div>
                <div class="card-footer">
                    <form method="GET" action="update.php">
                        <input type="hidden" name="playerid" value="' . $player['playerid'] .'">
                        <button type="submit" name="edit" class="btn btn-sm btn-info">Edit</button>
                    </form>
                    <form method="GET" action="includes/deletePlayer.php">
                        <input type="hidden" name="playerid" value="' . $player['playerid'] .'">
                        <button type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>';
          }
      ?>
    </div>
  </div>
</body>
</html>