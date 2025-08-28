<?php
$conn = mysqli_connect("localhost", "root", "", "gers_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM line5_home";
$result = mysqli_query($conn, $sql);
$array5 = mysqli_fetch_all($result);
//print_r($array3);

$sql = "SELECT * FROM line4_home";
$result = mysqli_query($conn, $sql);
$array4 = mysqli_fetch_all($result);
//print_r($array3);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Main Content</title>
</head>
<style>
    .card {
        margin-right: 1%;
    }


    .card-img-top {
        height: 40vh;
        width: 100%;
    }
</style>


<body>
    <?php
    //Include the navigation bar or the header.php
    require_once __DIR__ . '/../nav/header.php';


    //Include the carousel after navigation bar
    require_once __DIR__ . '/../carousel/carousel.php';


    //Include blog in views/blog.php
    include_once("blog.php");
    ?>


    <br>
    <hr><br>


    <!---------------->
    <!--Custom Cards-->
    <!---------------->
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">The Beauty of Dubai</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">


            <!--first Card-->
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= $array4[0][1] ?>');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    </div>
                </div>
            </div>


            <!--first Card-->
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= $array4[1][1] ?>');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    </div>
                </div>
            </div>


            <!--first Card-->
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('<?= $array4[2][1] ?>');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <!------------->
    <!--Jumbotron-->
    <!------------->
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                    <title></title>
                </svg>
                <h2>History of Dubai</h2>
            </a>
        </header>
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Duabi</h1>
                <p class="col-md-12 fs-4">The earliest written record of Dubai (Dibei) is accredited to Muhammad al-Idrisi, who mapped the coast of the UAE in the tenth century AD. Circa 1580, the state jeweler of Venice, Gasparo Balbi, documented the pearling industry of Dubai and other cities currently presiding in UAE territory.[1] Though traditionally conservative, the UAE is one of the most liberal countries in the Gulf, with other cultures and beliefs generally tolerated. Politically it remains authoritarian, however, relations with neighbouring Iran have been tense because of an ongoing territorial dispute over Gulf islands. The UAE was one of only three countries to recognise Taliban rule in Afghanistan.</p>
                <button class="btn btn-primary btn-lg" type="button">View more</button>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quis sed sapiente fuga consequatur recusandae? Minus nisi sequi nulla iusto, voluptates laborum rem praesentium quos, repudiandae aspernatur dicta reiciendis atque.</p>
                    <button class="btn btn-outline-light" type="button">Visit</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Title</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem earum, cumque optio provident soluta, velit, praesentium odio ex necessitatibus quidem aliquam impedit? Molestiae iusto quod hic, facere veritatis neque cum?</p>
                    <button class="btn btn-outline-secondary" type="button">Visit</button>
                </div>
            </div>
        </div>
        <footer class="pt-3 mt-4 text-body-secondary border-top"></footer>
    </div>


    <!----------------->
    <!--First 3 cards-->
    <!----------------->
    <div class="container">
        <div class="row">
            <div class="card col" style="width: 35rem;">
                <img src="<?= $array5[0][1] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $array5[0][2] ?></h5>
                    <p class="card-text"><?= $array5[0][3] ?></p>
                    <a href="#" class="btn btn-primary"><?= $array5[0][4] ?></a>
                </div>
            </div>
            <div class="card col" style="width: 35rem;">
                <img src="<?= $array5[1][1] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $array5[1][2] ?></h5>
                    <p class="card-text"><?= $array5[1][3] ?></p>
                    <a href="#" class="btn btn-primary"><?= $array5[1][4] ?></a>
                </div>
            </div>
            <div class="card col" style="width: 35rem;">
                <img src="<?= $array5[2][1] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $array5[2][2] ?></h5>
                    <p class="card-text"><?= $array5[2][3] ?></p>
                    <a href="#" class="btn btn-primary"><?= $array5[2][4] ?></a>
                </div>
            </div>
        </div>
    </div>


    <?php
    //Include the footer
    require_once __DIR__ . '/../nav/footer.php';
    ?>
</body>


</html>