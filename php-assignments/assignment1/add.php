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
          Add Player
        </h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="includes/addPlayer.php" method="POST">
          <div class="mb-3">
            <label for="player_name" class="form-label">Player Name:</label>
            <input type="text" class="form-control" id="player_name" name="player_name" aria-describedby="pNameHelp" />
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Position:</label>
            <input type="text" class="form-control" id="position" name="position" aria-describedby="posHelp"/>
          </div>
          <div class="mb-3">
            <label for="matches_played" class="form-label">Matches Played:</label>
            <input type="text" class="form-control" id="matches_played" name="matches_played" aria-describedby="matchesHelp"/>
          </div>
          <div class="mb-3">
            <label for="goals" class="form-label">Goals:</label>
            <input type="text" class="form-control" id="goals" name="goals" aria-describedby="goalHelp" />
          </div>
          <div class="mb-3">
            <label for="assists" class="form-label">Assists:</label>
            <input type="text" class="form-control" id="assists" name="assists" aria-describedby="assistsHelp"/>
          </div>
          <div class="mb-3">
            <label for="debut" class="form-label">Debut:</label>
            <input type="text" class="form-control" id="debut" name="debut" aria-describedby="debutHelp"/>
          </div>
          <div class="mb-3">
            <label for="final_match" class="form-label">Final Match:</label>
            <input type="text" class="form-control" id="final_match" name="final_match" aria-describedby="fmHelp"/>
          </div>
          <div class="mb-3">
            <label for="country" class="form-label">Country:</label>
            <input type="text" class="form-control" id="country" name="country" aria-describedby="countryHelp" />
          </div>
          <div class="mb-3">
            <label for="imageURL" class="form-label">ImageURL:</label>
            <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURLHelp" />
          </div>
          <button type="submit" name="addPlayer" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>