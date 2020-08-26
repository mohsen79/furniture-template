<html>
<haed>
    <title><?php require "title.php" ?></title>
    <?php
    require "backend.php";
    ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
</haed>

<body>

    <div class="login-title">
        <h2>SIGN IN</h2>
    </div>
    <div class="sign-in">
        <form method="post">
            <input type="text" name="username" placeholder="username" id="username">
            <input type="password" name="pas" placeholder="password" id="password">
            <a href="main.php"><input type="button" id="back" value="HOME"></a>
            <input type="submit" id="enter" value="sign in" name="signin">
        </form>
    </div>

</body>

</html>