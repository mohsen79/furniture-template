<html>

<head>
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
        <h2>EDIT FADE MENU SECTION 1</h2>
    </div>
    <div class="section1">
        <form method="post">
            <?php

            $section1id = $_GET["section1id"];
            $sql = "SELECT * FROM `fade menu1` WHERE id=?";
            $result = $connect->prepare($sql);
            $result->bindvalue(1, $section1id);
            $result->execute();
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            ?>
                <input type="text" name="section1-title" placeholder="title" id="username" value="<?php echo $row->title ?>">
                <input type="text" name="section1-content" placeholder="content" id="password" value="<?php echo $row->content ?>"><br><br><br>
                <input type="text" name="section1-src" placeholder="src" id="password" value="<?php echo $row->src ?>">
            <?php } ?>
            <a href="edit.php"><input type="button" id="back" value="HOME"></a>
            <input type="submit" id="enter" value="UPDATE" name="section1-btn">
        </form>
    </div>

</body>

</html>
<?php require "backend.php"; ?>