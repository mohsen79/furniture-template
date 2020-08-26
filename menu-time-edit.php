<html>

<head>
    <title><?php require "title.php" ?></title>
    <?php
    require "connection.php";
    ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>

    <div class="section1-title">
        <h2>EDIT MENU TIME</h2>
    </div>
    <div class="section1">
        <form method="post">
            <?php

            $menutimeid = $_GET["menu-timeid"];
            $sql = "SELECT * FROM `menu time` WHERE id=?";
            $result = $connect->prepare($sql);
            $result->bindvalue(1, $menutimeid);
            $result->execute();
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            ?>
                <input type="text" name="menu-time-content" placeholder="content" id="username" value="<?php echo $row->content ?>">
                <input type="text" name="menu-time-src" placeholder="src" id="password" value="<?php echo $row->src ?>"><br><br><br>
            <?php } ?>
            <a href="edit.php"><input type="button" id="back" value="HOME"></a>
            <input type="submit" id="enter" value="UPDATE" name="menu-time-btn">
        </form>
    </div>

</body>

</html>
<?php require "backend.php"; ?>