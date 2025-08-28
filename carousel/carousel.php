<?php
    $conn = mysqli_connect("localhost", "root", "", "gers_db") or die('connection error');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM line1_home";
    $result = mysqli_query($conn, $sql);
    $array1 = mysqli_fetch_all($result);
    //print_r($array1);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
</head>
<style>
    img {
        height: 70vh;
    }
</style>


<body> 
    <br>
    <hr><br>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $array1 [0][1]?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $array1 [0][2]?></h5>
                    <p><?= $array1 [0][3]?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $array1 [1][1]?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $array1 [1][2]?></h5>
                    <p><?= $array1 [1][3]?></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= $array1 [2][1]?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $array1 [2][2]?></h5>
                    <p><?= $array1 [2][3]?></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>


</html>