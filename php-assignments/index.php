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
          Players
        </h1>
      </div>
    </div>
  </div>
  <?php 
    include('../includes/connect.php'); //connection string
    $query = 'SELECT 
    PlayerStats.playerid,
    PlayerStats.player_name,
    PlayerStats.position,
    PlayerStats.matches_played,
    PlayerStats.goals,
    PlayerStats.assists,
    PlayerStats.debut,
    PlayerStats.final_match,
    PlayerStats.country,
    PlayerStats.imageURL,
    GROUP_CONCAT(Teams.logoURL) AS logos
FROM 
    PlayerStats
JOIN 
    Roster ON PlayerStats.playerid = Roster.playerid
JOIN 
    Teams ON Roster.teamid = Teams.teamid
GROUP BY 
    PlayerStats.playerid,
    PlayerStats.player_name,
    PlayerStats.position,
    PlayerStats.matches_played,
    PlayerStats.goals,
    PlayerStats.assists,
    PlayerStats.debut,
    PlayerStats.final_match,
    PlayerStats.country,
    PlayerStats.imageURL;
';

    $players = mysqli_query($connect, $query); //actually try to establish connection
    
    if(mysqli_connect_error()){
      die("Connection error: " . mysqli_connect_error());
    }
  ?>
  <div class="container">
    <div class="row">
        <?php
        foreach ($players as $row) {

          if($row['final_match']!= null ){
            $finalgame = "<p class='card-text'>Final: ". $row['final_match'] ."</p>";
          } else {
            $finalgame = "";
          }

            echo '<div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="' . $row['imageURL'] . '" class="card-img-top" alt="Player Image" style="height: auto;">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['player_name'] . '</h5>
                            <p class="card-text">Position: ' . $row['position'] . '</p>
                            <p class="card-text">Matches Played: ' . $row['matches_played'] . '</p>
                            <p class="card-text">Goals: ' . $row['goals'] . '</p>
                            <p class="card-text">Assists: ' . $row['assists'] . '</p>
                            <p class="card-text">Debut: ' . $row['debut'] . '</p>
                            ' . $finalgame . '
                            <p class="card-text">Country: ' . $row['country'] . '</p>
                            <div class="mt-3">
                                <h6>Teams:</h6>';

            // Concatenate the logo URLs
            foreach (explode(",", $row['logos']) as $logo) {
                echo '<img src="' . $logo . '" alt="Team Logo" class="team-logo mx-3 py-3" style="max-width: 20%; height: auto;">';
            }

            // Close the HTML tags
            echo '</div>
                  <div class="col-lg-2 d-flex align-items-center">
                    <form method="GET" action="update.php">
                      <input type="hidden" name="playerid" value="' . $row['playerid'] .'">
                      <button type="submit" name="edit" class="btn btn-sm btn-info my-5 mx-5">Edit</button>
                    </form>
                    <form method="GET" action="includes/deletePlayer.php">
                        <input type="hidden" name="playerid" value="' . $row['playerid'] .'">
                        <button type="submit" name="delete" class="btn btn-sm btn-danger my-5 mx-5">Delete</button>
                    </form>
                  </div>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

</body>
</html>