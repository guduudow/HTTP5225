<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <?php
            function getUsers(){
                $url = 'https://jsonplaceholder.typicode.com/users';
                $data = file_get_contents($url);
                return json_decode($data, true);
            }
            $users = getUsers();
            for ($i = 0; $i < count ($users); $i++){
                    echo '<div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                            <p class="card-text">Username: ' . $users[$i]['username'] .'</p>
                            <p class="card-text">Email: <a href="#">' . $users[$i]['email'] . '</a></p>
                            <p class="card-text">Street: ' . $users[$i]['address']['street'] . '</p>
                            <p class="card-text">Suite: ' . $users[$i]['address']['suite'] . '</p>
                            <p class="card-text">City: ' . $users[$i]['address']['city'] . '</p>
                            <p class="card-text">Zipcode: ' . $users[$i]['address']['zipcode'] . '</p>
                            <a href="#" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>';
            }
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>