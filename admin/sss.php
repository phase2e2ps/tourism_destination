<?php
session_start();
?>




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
    <h1><b style="margin-left: 50%; font-size: 50px;">Profile</b></h1>
    <!-- Sidebar Navigation -->
    <tbody>
        <aside class="sidebar">
            <a href="admin-dashboard.php">
                <i style="color: white;" class="fa fa-house"></i>
                Dashboard</a>


            <a href="admin-profile.php">
                <i class="fa-solid fa-user"></i>
                User Profile</a>


            <a href="admin-email.php">
                <i class="fa-solid fa-envelope"></i>
                Email</a>


            <a href="admin-inquiry.php">
                <i class="fa-solid fa-magnifying-glass"></i>
                Inquiries</a>


            <a href="admin-logout.php">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout</a>


            <br>
            <hr style="margin-left:20px; color:red;" width="200px">
            <br>
            <a href="./admin-bottom-sidebar.php/dubai-collections.php">
                <i class="fa-solid fa-earth-americas"></i>
                DUBAI COLLECTIONS</a>


            <a href="./admin-bottom-sidebar.php/custom -cards.php">
                <i class="fa-solid fa-image"></i>
                Custom cards</a>


            <a href="./admin-bottom-sidebar.php/features.php">
                <i class="fa-solid fa-wrench"></i>
                Features with title</a>
        </aside>
        <div class="container">
            <div class="row">
                <div class="responsive" style="width: 88.7%;">
                    <table style="margin-left: 14%;">
                        <thead>
                            <tr>
                                <th>th1</th>
                                <th>th2</th>
                                <th>th3</th>
                                <th>th4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                ?>
                            <tr>
                                <td>
                                    <?php echo $row['name_tb']; ?></td>
                                </td>
                                <td>
                                    <?php echo $row['email_tb']; ?></td>
                                </td>
                                <td>
                                    <?php echo $row['contact_tb']; ?></td>
                                </td>
                                <td>
                                    <?php echo $row['contact_tb']; ?></td>
                                </td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <tbody>
</body>


</html>