<?php
// Enable full error reporting (during development)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Database connection
$conn = mysqli_connect("localhost", "root", "", "gers_db") or die('Connection error');




if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];




    // ✅ Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);




    // ✅ Insert into database
    $sql = "INSERT INTO admin_tb (name_tb, pass_tb) VALUES ('$name', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        echo "Admin registered successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
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
    <title>Admin Registration Form</title>
</head>


<body>
    <!-------------------------->
    <!--Amin-registration-form-->
    <!-------------------------->
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Administrator</h1>
                <p class="col-lg-10 fs-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta voluptatibus omnis debitis nesciunt suscipit magni laboriosam magnam labore blanditiis, saepe vero quibusdam eos error ipsam quod illum sequi. Doloribus, exercitationem.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="" method="post">
                    <div class="form-floating mb-3">
                        <input name="name" type="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                            <br><br>
                            <p>----------------------------Or----------------------------</p>
                            <b>Already have an account?
                                <a style="text-decoration: none;" href="admin-login.php">Log In</a>
                            </b>
                            <br><br>
                        </label>
                    </div>
                    <button name="register" class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                    <hr class="my-4">
                    <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
                    <br><br>
                    <a style="margin-left: 20%; color: red; float:right;" href="../views/index.php"><b>Back to Home</b></a>
                </form>
            </div>
        </div>
    </div>
</body>


</html>