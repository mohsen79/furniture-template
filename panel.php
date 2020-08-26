<html>
<?php session_start(); ?>

<head>
    <title><?php require "title.php" ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <h2 class="h2">wellcome dear <?php echo $_SESSION["adminname"]; ?></h2>
    <a href="main.php?adminout" class="out">
        <ul>
            <li>log out</li>
        </ul>
    </a>
    <img src="<?php echo $_SESSION["adminsrc"] ?>" class="prof">
    <div class="panel-bar">
        <ul>
            <a href="main.php">
                <li>HOME</li>
            </a>
            <a href="adminadd.php">
                <li>add admin</li>
            </a>
            <a href="edit.php">
                <li>edit</li>
            </a>
            <a href="members.php">
                <li>members</li>
            </a>
        </ul>
    </div>
    <div class="pftxt">
        name : <?php echo $_SESSION["adminname"]; ?><br><br>
        password : <?php echo $_SESSION["adminpas"]; ?><br><br>
        age : <?php echo $_SESSION["adminage"]; ?>
    </div>
</body>

</html>