<?php include_once 'config.php';?>
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
    <a href="#menu">QUOTE</a>
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
    <article >
        <div class="inner">
            <header class="card4">
                <h2> REAL ESTATE MANAGEMENT SYSTEM</h2>
                <hr>
                <h2>QUOTE</h2>
            </header>
        </div>
        <!-- Blog entries -->
        <div class="card6">
                <?php
                if(isset($_GET['site_id'])) {
                    $id = mysqli_real_escape_string($connection, $_GET['site_id']);
                    $sql = "SELECT * FROM sites WHERE site_id='$id'";
                    $result = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        $queryId = isset($_GET['site_id']) ? $_GET['site_id'] : '';
                        echo "<div class='card6'>";
                        echo "<h3 style='text-align: center'>Site Dimensions : " . $row['site'] . "</h3>";
                        echo "<h3 style='text-align: center'>Site price per square foot : " . $row['price'] . "</h3>";
                        echo "<h3 style='text-align: center'>Current Site Owner : " . $row['owner'] . "</h3>";
                        echo "<h3 style='text-align: center'>Address : " . $row['address'] . "</h3>";
                        echo "<h3 style='text-align: center'>Place : " . $row['place'] . "</h3>";
                        echo "</div>";
                    }
                }
                ?>
                <form action="thanks.php?site_id=<?php echo $queryId;?>" method="post" enctype="multipart/form-data">
                    <label style='text-align: center'>Name</label>
                    <label style='text-align: center'><input type="text" name="name" placeholder="Name..."></label>
                    <label style='text-align: center'>Contact Number</label>
                    <label style='text-align: center'><input type="text" name="contact" placeholder="Contact Number..."></label>
                    <label style='text-align: center'>Email Id</label>
                    <label style='text-align: center'><input type="text" name="email" placeholder="email..."></label>
                   <label><input onchange="document.getElementById('pay').disabled = !this.checked" type="checkbox" checked="checked">Advance amount : Rs 5000/-</input></label>
                    <label>A Refund will be initiated if the property has not met your requirements according to our terms and conditions.</label>
                    <label><input onchange="document.getElementById('pay').disabled = !this.checked" type="checkbox" checked="checked">By Continuing You Agree to our terms and conditions. </input></label>
                    <input id="pay" type="submit" name="save" value="PAY">
                    <input type="reset" name="reset" value="reset">
                </form>
            </div>
            </article>
</section>
<?php include_once 'footer.php'?>
</body>
</html>