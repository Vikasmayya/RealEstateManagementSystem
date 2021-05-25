<?php
session_start();
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
        <li><a href="index.php">Home</a></li>
        <li><a href="bangalore.php">Bangalore</a></li>
        <li><a href="tumkur.php">tumkur</a></li>
        <li><a href="admin.php">admin</a></li>
    </ul>
</nav>
<section id="one" class="wrapper style3" >
    <div class="inner">
        <header class="align-center">
            <div class="card2">
                <h2>REAL ESTATE MANAGEMENT SYSTEM</h2>
                <hr>
                <h2>ADMIN LOGIN</h2>
            </div>
        </header>
    </div>
    <div class="card2">
        <form method="post"  action="login.php" onsubmit="return validateForm()" name="login-form">
            <div>
                <label for="email" class="pass">Email</label><br>
                <input type="text" id="email" placeholder="Enter Email" autocomplete="off" name="UserName"><br>
                <label for="pwd" class="pass">Password</label><br>
                <input type="password" id="pwd" placeholder="Enter Password" autocomplete="off" name="Password"><br>
                <label><input type="checkbox" onclick="myFunction()">Show Password</label>
                <div class="align-center" >
                    <button name="enter" onClick="validate()" type="submit"><b>Login</b></button>
                </div>
            </div>
            <div class="alert">
                <?php
                if (isset($_SESSION['error'])){
                    $error = $_SESSION['error'];
                    echo "<h3>$error</h3>";
                }
                ?>
            </div>
        </form>
    </div>
</section>
<?php include_once 'footer.php'?>
</body>
</html>
<script src="assets/js/login.js"></script>
<?php
unset($_SESSION['error']);
?>