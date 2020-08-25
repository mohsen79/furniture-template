<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

    <div class="admin-title">
        <h2>EDIT MEMBER</h2>
    </div>

    <div class="memberedit">
        <form method="post">
            <?php

            require "connection.php";
            $memberid = $_GET["memberid"];
            $sql = "SELECT * FROM `sign up` WHERE id=?";
            $result = $connect->prepare($sql);
            $result->bindvalue(1, $memberid);
            $result->execute();
            while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            ?>
                <input type="text" name="membernameedit" placeholder="username" id="adminname" value="<?php echo $row->username ?>">
                <input type="password" name="memberpasedit" placeholder="password" id="adminpassword" value="<?php echo $row->pas ?>"><br><br><br>
                <input type="number" name="memberageedit" placeholder="age" id="adminpassword" value="<?php echo $row->age ?>">
            <?php } ?>
            <a href="panel.php"><input type="button" id="back" value="BACK"></a>
            <input type="submit" id="add" value="UPDATE" name="memberedit-btn">
        </form>
    </div>

</body>

</html>
<?php require "backend.php" ?>