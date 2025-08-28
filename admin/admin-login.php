<?php
//Include the navigation bar or the header.php
require_once __DIR__ . '/../nav/header.php';
?>


<?php
// Error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect("localhost", "root", "", "gers_db") or  die('connection error');

#--Check if the Submit button was click--#
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];


    #--to get data from database--#
    $sql = "SELECT * FROM admin_tb WHERE name_tb ='$name'";
    $result = mysqli_query($conn, $sql);
    $pass = mysqli_fetch_array($result, MYSQLI_ASSOC);


    if ($pass) {
        if (password_verify($password, $pass["pass_tb"])) {
            header("location: admin-dashboard.php");
            die();
        } else {
            echo "Incorrect Password!";
        }
    } else {
        echo "Invalid Username!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>


    <!--Assets / style.css-->
    <link rel="stylesheet" href="../assets/style.css">
    <title>Admin Login Form</title>
</head>


<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="" method="post">
                    <div class="form-floating mb-3">
                        <input name="name" type="name" class="form-control" id="floatingInput" placeholder="Name...">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password...">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                            <br><br>
                            <p>----------------------------Or----------------------------</p>
                            <b>Don't have an account?
                                <a style="text-decoration: none;" href="admin-register.php">Register</a>
                            </b>
                            <br><br>
                        </label>
                    </div>
                    <button name="login" class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">By clicking Log In, you agree to the terms of use.</small>
                    <br><br>
                    <a style="margin-left: 20%; color: red; float:right;" href="../views/index.php"><b>Bac to Home</b></a>
                </form>
            </div>
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Administrator</h1>
                <p class="col-lg-10 fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum voluptatibus ab excepturi optio magnam. Animi explicabo culpa quo veniam aspernatur ad adipisci nulla eligendi nam fugit voluptatibus, totam odit fuga?</p>
            </div>
        </div>
    </div>
</body>


</html>