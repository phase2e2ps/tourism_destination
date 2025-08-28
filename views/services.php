<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Services</title>
</head>


<body>
    <?php
    //Include the navigation bar or the header.php
    include_once("../nav/header.php");


    ?>


    <br><br>
    <!--hero-->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6"> <img src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the worldâ€™s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start"> <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button> <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> </div>
            </div>
        </div>
    </div>


    <?php
    //Include the contact.php after below the navbar
    include_once("contact.php");
    ?>


    <!---------------->
    <!--Custom Cards-->
    <!---------------->
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">The Beauty of Dubai</h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">


            <!--first Card-->
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('../image/dubai7.webp');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    </div>
                </div>
            </div>


            <!--first Card-->
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('../image/dubai9.webp');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    </div>
                </div>
            </div>


            <!--first Card-->
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('../image/dubai10.webp');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>


</html>
<?php
include_once("../nav/footer.php");
?>