<?php

echo "<h3 style=\"text-align:center;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);margin-top:20px;text-decoration:underline;color:red\";>Assigment-02</h3>";

include_once './data.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>



    <h4 style="margin-left:30px;text-decoration:underline;text-shadow: 0px 0px 10px rgba(0,0,0,0.3);";>01. Student data and load data  - </h4>
    <div class="container my-5">
        <div class="row">

        <?php foreach( $team as $team ) : ?>

            <div class="col-md-3 my-5">
                <div class="card  shadow-lg p-3 mb-5 bg-body rounded">
                    <img src=" <?php echo $team['photo'] ?> "  style="height: 200px"; alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center text-info fw-bold"> <?php echo $team['name'] ?> </h4>
                        <h5 class="card-title text-center text-warning"> <?php echo $team['skill'] ?> </h5>
                        <h5 class="card-title text-center"> <?php echo 'Age-', $team['age'] ?> </h5>
                        <p class="card-text"><?php echo $team['des'] ?></p>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
        </div>
    </div>

       
     
    
</body>
</html>