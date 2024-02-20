<?php
  include('includes/connect.php');
  include('includes/function.php');
  if(isset($_POST['login'])) {
    $query = 'SELECT *
            FROM users
            WHERE email = "'. $_POST['email'] .'"
            AND password = "'. md5($_POST['password']) .'"
            LIMIT 1';
    $result = mysqli_query($connect, $query);
   // var_dump($result); - equivalent to console.log() in JavaScript
    if(mysqli_num_rows($result)){
      $record = mysqli_fetch_assoc($result);
      $_SESSION['id'] = $record['id'];
      header('Location: admin/index.php');
      die();
    } else {
      set_message('Incorrect username or password.');
      header('Location: index.php');
      die();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <?php include('reusables/nav.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <?php echo get_message();?>
        </div>
      </div>
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Log In</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <form method="POST" action="">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>