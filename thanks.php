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
    <a href="#menu">CONGRATS</a>
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
                <h2>CONGRATULATIONS</h2>
            </header>
        </div>
        <!-- Blog entries -->
        <div class="row">
            <div class="card">
                <div>
                    <div class="card">
                        <?php
                        include_once 'config.php';
                        if (isset($_GET['site_id'])){
                            $id =mysqli_real_escape_string($connection,$_GET['site_id']);
                        if(isset($_POST['save'])){
                            $name = mysqli_real_escape_string($connection,$_POST['name']);
                            $contact = mysqli_real_escape_string($connection,$_POST['contact']);
                            $email = mysqli_real_escape_string($connection,$_POST['email']);
                            $sid = $id;
                            $amount = 5000;
                            $sql ="INSERT INTO userdata (name , contact, email, amount, site_id)  VALUES('$name','$contact','$email','$amount', '$sid')";
                            if (mysqli_query($connection,$sql)){
                                $sql1 = "SELECT * FROM sites where site_id='$id'";
                                $result = mysqli_query($connection, $sql1);
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<div class='card1'>";
                                    echo "<div class='card2'>";
                                    echo "<h3 style='text-align: center'>CONGRATULATIONS!</h3>";
                                    echo "<h3 style='text-align: center'>Your Quote for the following property has been successfully Registered!!</h3>";
                                    echo "<h3>Site Dimensions : " . $row['site'] . "</h3>";
                                    echo "<h3>Site price per square foot : " . $row['price'] . "</h3>";
                                    echo "<h3>Current Site Owner : " . $row['owner'] . "</h3>";
                                    echo "<h3>Address : " . $row['address'] . "</h3>";
                                    echo "<h3>Place : " . $row['place'] . "</h3>";
                                    echo "<h3 style='text-align: center'>Our Team will contact you soon!!</h3>";
                                    echo "<h3 style='text-align: center'>A Refund will be initiated if the property has not met your requirements according to our terms and conditions.</h3>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }else{
                                echo "<div class='wrapper style3'>";
                                echo "<div class='card2'>";
                                echo "<p style='text-align: center'>Ooops! An error occurred. Please Upload your details once again.</p>";
                                echo "</div>";
                                echo "</div>";
                            }
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </article>
</section>
<?php include_once 'footer.php'?>
</body>
</html>