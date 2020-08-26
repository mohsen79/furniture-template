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

    <div class="section2-title">
        <h2>EDIT FADE MENU SECTION 2</h2>
    </div>
    <div class="section2">
        <form method="post">
            <?php

            $section2id = $_GET["section2id"];
            $sql = "SELECT * FROM `fade menu2` WHERE id=?";
            $result = $connect->prepare($sql);
            $result->bindvalue(1, $section2id);
            $result->execute();
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            ?>
                <input type="text" name="section2-title" placeholder="title" id="username" value="<?php echo $row->title ?>">
                <input type="text" name="section2-content" placeholder="content" id="password" value="<?php echo $row->content ?>"><br><br><br>
                <input type="text" name="section2-src" placeholder="src" id="password" value="<?php echo $row->src ?>">
            <?php } ?>
            <a href="edit.php"><input type="button" id="back" value="HOME"></a>
            <input type="submit" id="enter" value="UPDATE" name="section2-btn">
        </form>
    </div>

</body>

</html>
<?php require "backend.php"; ?>