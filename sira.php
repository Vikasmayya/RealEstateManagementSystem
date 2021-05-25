<?php include_once 'config.php'?><!DOCTYPE HTML>
<html lang="html">
<head>
    <title>REAL ESTATE MANAGEMENT SYSTEM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="subpage">
<!-- Header -->
<header id="header">
    <h4 class="logo"> <a href="index.php">REAL ESTATE MANAGEMENT SYSTEM</a></h4>
    <a href="#menu">SIRA</a>
</header>
<!-- Nav-->
<nav id="menu">
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="bangalore.php">Bangalore</a></li>
        <li><a href="tumkur.php">tumkur</a></li>
        <li><a href="admin.php">admin</a></li>
    </ul>
</nav>
<!--one -->
<section id="one" class="wrapper style3">
    <article>
        <div class="inner">
            <header class="card4">
                <h2> REAL ESTATE MANAGEMENT SYSTEM</h2>
                <hr>
                <h2>SIRA</h2>
            </header>
        </div>
        <!-- Blog entries -->
        <div class="row">
            <div class="card">
                <div>
                    <?php
                    $sql = "SELECT * FROM sites WHERE FIND_IN_SET ('sira',place)";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<div>";
                        echo "<h3>Site Dimensions : " . $row['site'] . "</h3>";
                        echo "<h3>Site price per square foot : " . $row['price'] . "</h3>";
                        echo "<h3>Current Site Owner : " . $row['owner'] . "</h3>";
                        echo "<h3>Address : " . $row['address'] . "</h3>";
                        echo "<h4><a class='button' href='file.php?site_id=" . $row['site_id'] . "'> <b>QUOTE »</b></a></h4>";
                        echo "<hr></div>";
                    }?>
                </div>
            </div>
        </div>
    </article>
</section>
<?php include_once 'footer.php'?>
</body>
</html>