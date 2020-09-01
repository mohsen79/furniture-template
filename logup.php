<html>

<head>
    <title><?php require "title.php" ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
    <?php require "backend.php"; ?>
</head>

<body style="background:lightpink">
    <div class="login-title">
        <h2>SIGN UP</h2>
    </div>
    <div class="sign-up">
        <form method="post">
            <input type="text" name="username" placeholder="username" id="username">
            <input type="password" name="pas" placeholder="password" id="password"><br><br><br>
            <input type="number" name="age" placeholder="age" id="age">
            <a href="main.php"><input type="button" id="back" value="HOME"></a>
            <input type="submit" id="enter" value="sign up" name="signup">
        </form>
        <a href="login.php" class="acount"><p class="haveacount">have got an acount?</p></a>
    </div>
</body>

</html>