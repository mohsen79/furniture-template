<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <h2 class="h2">wellcome dear mohsen</h2>
    <a href="main.php" class="out">
        <ul>
            <li>log out</li>
        </ul>
    </a>
    <?php
        require "connection.php";
        $sql = "SELECT * FROM `admin`";
        $result = $connect->prepare($sql);
        $result->execute();
        while($row=$result->fetch(PDO::FETCH_OBJ)){
    ?>
            <img src="<?php echo $row->src ?>" class="prof">
        <? } ?>
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
    <div class="pftxt"></div>
</body>

</html>