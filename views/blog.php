<?php
    $conn = mysqli_connect("localhost", "root", "", "gers_db");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM line2_home";
    $result = mysqli_query($conn, $sql);
    $array2 = mysqli_fetch_all($result);
    //print_r($array2);

   $sql = "SELECT * FROM line3_home";
   $result = mysqli_query($conn, $sql);
   $array3 = mysqli_fetch_all($result);
   //print_r($array3);
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Blog</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4;
        }


        .blog-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: auto;
        }


        .blog-title {
            text-align: center;
            margin-bottom: 40px;
        }


        .blog-title h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }


        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }


        .blog-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }


        .blog-card:hover {
            transform: translateY(-5px);
        }


        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }


        .blog-card-content {
            padding: 20px;
        }


        .blog-card-content h3 {
            margin-top: 0;
            font-size: 22px;
            color: #333;
        }


        .blog-card-content p {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
        }


        .read-more {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background: #2b7a78;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }


        .read-more:hover {
            background: #205e5c;
        }


        @media screen and (max-width: 768px) {
            .blog-card img {
                height: 180px;
            }
        }
    </style>
</head>


<body>


    <section class="blog-section">
        <div class="blog-title">
            <h2>Explore Our Latest Tourism Website</h2>
            <p>Get inspired for your next adventure!</p>
            <p>Welcome to Dubai!, the city of your dreams</p>
        </div>


        <div class="blog-grid">
            <!-- Blog Post 1 -->
            <div class="blog-card">
                <img src="<?= $array2[0][1] ?>" alt="Beach destination">
                <div class="blog-card-content">
                    <h3><?= $array2[0][2] ?></h3>
                    <p><?= $array2[0][3] ?></p>
                    <a href="" class="read-more"><?= $array2[0][4] ?></a>
                </div>
            </div>


            <!-- Blog Post 2 -->
            <div class="blog-card">
                <img src="<?= $array2[1][1] ?>" alt="Mountain escape">
                <div class="blog-card-content">
                    <h3><?= $array2[1][2] ?></h3>
                    <p><?= $array2[1][3] ?></p>
                    <a href="#" class="read-more"><?= $array2[1][4] ?></a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="blog-card">
                <img src="<?= $array2[2][1] ?>" alt="City adventure">
                <div class="blog-card-content">
                    <h3><?= $array2[2][2] ?></h3>
                    <p><?= $array2[2][3] ?></p>
                    <a href="#" class="read-more"><?= $array2[2][4] ?></a>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">Dubai</h2>
                    <p class="blog-post-meta">From Wikipedia, the free encyclopedia</p>
                    <p>Not to be confused with Duba, Saudi Arabia. This article is about the city. For the emirate, see Emirate of Dubai. For other uses, see Dubai (disambiguation).</p>
                    <hr>
                    <p>Dubai[a] is the most populous city in the United Arab Emirates and the capital of the Emirate of Dubai.[10] It is located on a creek on the south-eastern coast of the Persian Gulf. As of 2025, the city population stands at 4 million,[7] 92% of whom are expatriates.[11] The wider urban area includes Sharjah and has a population of 5 million people as of 2023,[6] while the Dubaiâ€“Sharjahâ€“Ajman metropolitan area counts 6 million inhabitants.</p>
                    <h2>Etymology</h2>
                    <p>Main article:</p>
                    <blockquote class="blockquote">
                        <p>Main article: History of Dubai For a chronological guide, see Timeline of Dubai.</p>
                    </blockquote>


                    <br><br>
                    <!--Third 3 cards-->
                    <div class="container">
                        <div class="row">
                            <div class="card col" style="width: 35rem;">
                                <img src="<?= $array3[0][1]?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $array3[0][2]?></h5>
                                    <p class="card-text"><?= $array3[0][3]?></p>
                                    <a href="#" class="btn btn-primary"><?= $array3[0][4]?></a>
                                </div>
                            </div>
                            <div class="card col" style="width: 35rem;">
                                <img src="<?= $array3[1][1]?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $array3[1][2]?></h5>
                                    <p class="card-text"><?= $array3[1][3]?></p>
                                    <a href="#" class="btn btn-primary"><?= $array3[1][4]?></a>
                                </div>
                            </div>
                            <div class="card col" style="width: 35rem;">
                                <img src="<?= $array3[2][1]?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $array3[2][2]?></h5>
                                    <p class="card-text"><?= $array3[2][3]?></p>
                                    <a href="#" class="btn btn-primary"><?= $array3[2][4]?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>


                    <p>The history of human settlement in the area now defined by the United Arab Emirates is complex and extensive. It points to extensive trading links between the civilisations of the Indus Valley and Mesopotamia, and even as far afield as the Levant.[22] Archaeological finds in the emirate of Dubai, particularly at Al-Ashoosh, Al Sufouh, and the notably rich trove from Saruq Al Hadid[23] show settlement through the Ubaid and Hafit periods, the Umm Al Nar and Wadi Suq periods, and the three Iron Ages in the UAE. The area was known to the Sumerians as Magan and was a source of metallic goods, notably copper and bronze.[24]</p>
                    <h3>Establishment of modern Dubai</h3>
                    <p>Dubai is thought to have been established as a pearling and fishing village in the early 18th century[29] and was, by 1822, a town of some 700â€“800 members of the Bani Yas tribe and subject to the rule of Sheikh Tahnun bin Shakhbut of Abu Dhabi.[30] In 1822, a British naval surveyor noted that Dubai was at that time populated with a thousand people living in an oval-shaped town surrounded by a mud wall, scattered with goats and camels. The main footpath out of the village led to a reedy creek while another trailed off into the desert and merged into caravan routes.[31]:â€Š17â€Š</p>
                    <h2>Twin towns â€“ sister cities</h2>
                    <p>See also: List of twin towns and sister cities in UAE Dubai is twinned with:[345]</p>
                    <div class="row">
                        <ol class="col-md-4">
                            <li>Jordan Amman, Jordan</li>
                            <li>Lebanon Beirut, Lebanon</li>
                            <li>South Korea Busan, South Korea (2006)</li>
                            <li>South Africa Cape Town, South Africa</li>
                            <li>Morocco Casablanca, Morocco</li>
                        </ol>
                        <ul class="col-md-4">
                            <li>Jordan Amman, Jordan</li>
                            <li>Lebanon Beirut, Lebanon</li>
                            <li>South Korea Busan, South Korea (2006)</li>
                            <li>South Africa Cape Town, South Africa</li>
                            <li>Morocco Casablanca, Morocco</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>


</body>


</html>