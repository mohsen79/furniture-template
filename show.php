<html>

<head>
    <title><?php require "title.php" ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

    <?php

    require "connection.php";
    $photoid = $_GET["photoid"];
    $sql = "SELECT * FROM `menu time` WHERE id=?";
    $result = $connect->prepare($sql);
    $result->bindvalue(1, $photoid);
    $result->execute();
    $row = $result->fetch(PDO::FETCH_OBJ);

    ?>
    <h2></h2>
    <div class="img-back">
        <img src="<?php echo $row->src ?>"><br><br>
        <div class="show-text">
            <p><?php echo $row->content ?></p>
        </div>
        <a href="main.php"><input type="button" value="BACK" class="back"></a>
    </div>


</body>

</html>