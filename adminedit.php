<html>

<head>
    <title><?php require "title.php" ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

    <div class="admin-title">
        <h2>EDIT AMIN</h2>
    </div>

    <div class="adminedit">
        <form method="post">
            <?php

            require "connection.php";
            $adminid = $_GET["adminid"];
            $sql = "SELECT * FROM `admin` WHERE id=?";
            $result = $connect->prepare($sql);
            $result->bindvalue(1, $adminid);
            $result->execute();
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            ?>
                <input type="text" name="adminnameedit" placeholder="username" id="adminname" value="<?php echo $row->username ?>">
                <input type="password" name="adminpasedit" placeholder="password" id="adminpassword" value="<?php echo $row->pas ?>"><br><br><br>
                <input type="text" name="adminsrcedit" placeholder="src" id="adminpassword" value="<?php echo $row->src ?>"><br><br><br>
                <input type="number" name="adminageedit" placeholder="age" id="adminpassword" value="<?php echo $row->age ?>">
            <?php } ?>
            <a href="members.php"><input type="button" id="back" value="BACK"></a>
            <input type="submit" id="add" value="UPDATE" name="adminedit-btn">
        </form>
    </div>

</body>

</html>
<?php require "backend.php" ?>