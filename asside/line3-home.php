<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Favicon & Manifest -->
    <link rel="icon" href="/DashboardKit/assets/favicon-ClzwYNjd.ico" />



    <!-- Google Fonts Style -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" /> -->
    <script type="module" crossorigin src="/DashboardKit/assets/main-D3eFMZ2j.js"></script>
    <link rel="stylesheet" crossorigin href="/DashboardKit/assets/main-C02-7ji_.css">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />


    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>
<style>
    .inquiry-container {
        margin: 3rem auto;
        max-width: 1000px;
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
    }


    table {
        width: 100%;
        border-collapse: collapse;
    }


    th,
    td {
        padding: 12px 16px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }


    th {
        background-color: #2c3e50;
        color: white;
    }


    .badge {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.85rem;
        color: white;
    }


    .pending {
        background-color: #f1c40f;
    }


    .resolved {
        background-color: #2ecc71;
    }


    .closed {
        background-color: #e74c3c;
    }




    .sidebar {
        width: 250px;
        background-color: #1e293b;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding-top: 60px;
        box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        z-index: 1000;
    }


    .sidebar a {
        color: #cbd5e1;
        text-decoration: none;
        font-size: 16px;
        padding: 15px 25px;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        border-left: 4px solid transparent;
    }


    .sidebar a i {
        font-size: 18px;
        transition: color 0.3s ease;
    }


    .sidebar a:hover {
        background-color: #334155;
        color: #fff;
        border-left: 4px solid #38bdf8;
        /* Light Blue accent */
    }


    .sidebar a:hover i {
        color: #38bdf8;
    }
</style>


<body>
    <h1><b style="margin-left: 50%; font-size: 50px;">Line3-Home</b></h1>
    <!-- Sidebar Navigation -->
    <tbody>
        <aside class="sidebar">
            <a href="../admin/admin-dashboard.php">
                <i style="color: white;" class="fa fa-house"></i>
                Dashboard
            </a>


            <a href="../admin/admin-profile.php">
                <i class="fa-solid fa-user"></i>
                User Profile
            </a>


            <a href="../admin/admin-email.php">
                <i class="fa-solid fa-envelope"></i>
                Email
            </a>


            <a href="../admin/admin-inquiry.php">
                <i class="fa-solid fa-magnifying-glass"></i>
                Inquiries
            </a>


            <a href="../admin/admin-logout.php">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a


                <br>
            <hr style="margin-left:20px; color:red;" width="200px">
            <br>
            <a href="line1-home.php">
                <i class="fa-solid fa-image"></i>
                Line1-Home
            </a>


            <a href="line2-home.php">
                <i class="fa-solid fa-image"></i>
                Line2-Home
            </a>


            <a href="line3-home.php">
                <i class="fa-solid fa-image"></i>
                Line3-Home
            </a>

            <a href="line4-home.php">
                <i class="fa-solid fa-image"></i>
                Line4-Home
            </a>

            <a href="line5-home.php">
                <i class="fa-solid fa-image"></i>
                Line5-Home
            </a>
        </aside>
        <style>
            .col-md-9 {
                margin-left: 250px;
                width: calc(100% - 250px) !important;
            }
        </style>
        <div class="row">
            <div class="col-md-9">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Descriptions</th>
                            <th>Button</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "gers_db");
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM line3_home";
                            $result = mysqli_query($conn, $sql);


                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {

                            ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><img src="<?= $row['img_tb']; ?>" alt="" width="100px" height="100px"></td>
                            <td><?= $row['title_tb']; ?></td>
                            <td><?= $row['desc_tb']; ?></td>
                            <td><?= $row['button_tb']; ?></td>
                            <td>
                                <a href="../asside-update/line3-home.php?id=<?= $row['id']; ?>">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                <?php
                                }
                            } else {
                                echo "<tr><td colspan='4'>No inquiries found.</td></tr>";
                            }
                ?>
                </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>