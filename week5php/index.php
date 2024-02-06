<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
            </div>
        </div>
    </div>
    <?php 
        $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225'); //connection string
        $query = 'SELECT id, fname, lname, marks, grade, imageurl FROM students' ; //query string

        $students = mysqli_query($connect, $query); //actually try to establish a connection

        if(mysqli_connect_error()){
            die("Connection error: " . mysqli_connect_error());
        }
    ?>

    <div class="container">
        <div class="row">
        <?php 
            foreach($students as $student) {

                if($student['marks'] < 50) {
                    $bgClass = 'bg-danger';
                }else{
                    $bgClass = 'bg-success';
                }

                echo '<div class="col-md-4">
                <div class="card '  . $bgClass .  '">
                <img class="card-img-top" src="' .$student['imageurl'] . '" alt="student-pic"/>
                <div class="card-body">
                    <h5 class="card-title">' . $student['fname'] . ' ' . $student['lname'] . '</h5>
                    Mark: ' . $student['marks'] . '
                        </div>
                    </div>
                </div>';
            }
        ?>

        </div>
    </div>
</body>
</html>