<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
        <div class="chezy"><img src="logoo.png"></li></div>

        <ul class="nav-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About me</a></li>
            <li><a href="#" onclick="alert('belum bisa')"> News </a></li>
            <li><button><a href="login.php">Sign in</a></button></li>
        </ul>
        
        <ul id="logo" >
            <li><img src="night-mode.png" alt="Logo"></li>
        </ul>
    </div>
<main>
    <section class="login-bungkus">
        <form action="admin.php">
            <label style="color: white" for="email">email nakama</label>
            <input type="email" name="email" id="email">
    
            <label style="color: white" for="username">nick nakama</label>
            <input type="text" name="username" id="username">
    
            <label style="color: white;" for="password">password</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="submit">
        </form>
    </section>

</main>

<h1 style="color: white">
<?php

    if(isset($_POST["username"])) {
        $email = $_POST ["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "tampilan user yang baru login";
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;

    }


?>
</h1>



<footer>
<section class="copyright">
    <h2>©copyright designed by CheeZyy</h2>
</section>
</footer>

<script src="script.js"></script>
</body>
</html>