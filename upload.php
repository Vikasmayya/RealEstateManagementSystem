<?php
ob_start();
session_start();
ob_end_clean();
if(isset($_SESSION['UserData']['UserName'])) {
    $session_id = $_SESSION['UserData']['UserName'];
}else{
    ob_start();
    header("location: admin.php");
    ob_end_clean();
}
?>
<!DOCTYPE HTML>
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
    <a href="#menu">ADMIN</a>
</header>

<!-- Nav-->
<nav id="menu">
    <ul class="links">
        <li><a href="logout.php">LOG OUT</a></li>
    </ul>
</nav>
<section id="one" class="wrapper style3" >
    <div class="inner">
        <header class="card4">
            <h2> REAL ESTATE MANAGEMENT SYSTEM</h2>
            <hr>
            <h2>ADMIN PANEL</h2>
        </header>
    </div>
    <div class="card2" >
        <?php
        include_once 'config.php';
        if(isset($_POST['save'])){
            $owner = mysqli_real_escape_string($connection,$_POST['owner']);
            $site = mysqli_real_escape_string($connection,$_POST['site']);
            $price = mysqli_real_escape_string($connection,$_POST['price']);
            $address = mysqli_real_escape_string($connection,$_POST['address']);
            $place = mysqli_real_escape_string($connection,$_POST['place']);
            $sql = "INSERT INTO sites (owner, site, price, address, place) VALUES('$owner','$site','$price','$address','$place')";
            if (mysqli_query($connection,$sql)){
                    echo "<div class='wrapper style3'>";
                    echo "<div class='card2'>";
                    echo "<p style='text-align: center'>uploaded successfully!</p>";
                    echo "</div>";
                    echo "</div>";}
                else{
                    echo "<div class='wrapper style3'>";
                    echo "<div class='card2'>";
                    echo "<p style='text-align: center'>failed to upload!</p>";
                    echo "</div>";
                    echo "</div>";
                }
        }?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Owner Name</label>
        <label><input type="text" name="owner" placeholder="Owner Name..."></label>
        <label>Site Measurement</label>
        <label><input type="text" name="site" placeholder="Site Measurement..."></label>
        <label>Price</label>
        <label><input type="text" name="price" placeholder="Price..."></label>
        <label>Address</label>
        <label><input type="text" name="address" placeholder="Address..."></label>
        <label>Place</label>
        <label><input type="text" name="place" placeholder="Place..."></label>
        <input type="reset" name="reset" value="reset">
        <input type="submit" name="save" value="save">
    </form>
    </div>
</section>
<?php include_once 'footer.php'?>
</body>
</html>
