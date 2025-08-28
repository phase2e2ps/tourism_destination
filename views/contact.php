<?php
//Include database connections
require_once __DIR__ .'/../database/db_connections.php';


$a = "SELECT * FROM contact_tb";
$b = mysqli_query($conn, $a);
$c = mysqli_fetch_array($b);
//print_r($c);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>


<body>
    <?php
    //Include the navigation bar or the header.php
    require_once __DIR__ .'/../nav/header.php';
    ?>


    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Contact us by <br> sending your feedback</h1>
                <p class="col-lg-10 fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptas error delectus aspernatur numquam beatae dolorem cum accusantium dolores! Fugiat eveniet vel veniam ducimus magnam voluptates similique dolorum impedit est.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="" method="post">
                    <?php
                    //Include database connections
                    require_once __DIR__ .'/../database/db_connections.php';


                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $feedback = $_POST['feedback'];


                        $sql = "INSERT INTO contact_tb (name_tb, email_tb, message_tb) VALUES ('$name', '$email', '$feedback')";
                        $result = mysqli_query($conn, $sql);


                        if ($result == true)
                            echo "form submitted successfully!";
                    } else {
                        echo "no record found";
                    }
                    ?>
                    <div class="form-floating mb-3">
                        <input name="name" type="name" class="form-control" id="floatingInput" placeholder="name...">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="feedback" style="height: 200px;" type="message" class="form-control" id="floatingMessage" placeholder="feedback..">
                        <label for="floatingMessage">Feedback</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">By clicking Send, you agree to the terms of use.</small>
                </form>
            </div>
        </div>
    </div>
</body>


</html>