    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">


    <!--Navbar at the top -->
    <style>
        #i,
        #a {
            display: inline;
        }


        #i {
            color: red;
            font-size: 20px;
        }
    </style>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><i style="color: skyblue;" class="fa fa-earth"></i> Tourist Destination</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <i id="i" class="fa fa-home"></i>
                        <a id="a" class="nav-link" href="http://localhost/Cabelin/tourism_distination/views/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <i id="i" class="fa fa-tools"></i>
                        <a id="a" class="nav-link" href="http://localhost/Cabelin/tourism_distination/views/services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <i id="i" class="fa fa-phone"></i>
                        <a id="a" class="nav-link" href="../views/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <i id="i" class="fa fa-earth"></i>
                        <a id="a" class="nav-link" href="../views/explore.php">Explore</a>
                    </li>
                    <li class="nav-item">
                        <i id="i" class="fa fa-lock"></i>
                        <a id="a" class="nav-link" href="../admin/admin-login.php">Admin</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>