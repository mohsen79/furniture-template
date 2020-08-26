<html>

<head>
    <title><?php require "title.php" ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
    <?php require "backend.php" ?>
</head>

<body>

    <div class="admin-title">
        <h2>ADD AMIN</h2>
    </div>

    <div class="adminadd">
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="adminname" placeholder="username" id="adminname">
            <input type="password" name="adminpas" placeholder="password" id="adminpassword"><br><br><br>
            <input type="number" name="adminage" placeholder="age" id="adminpassword"><br><br>
            <input type="file" id="adminsrc" name="adminupload"><input type="submit" name="adminbtn" id="adminbtn" value="upload"><br><br>
            <input type="text" name="adminsrc" placeholder="src" id="adminpassword"><br><br><br>
            <a href="panel.php"><input type="button" id="back" value="BACK"></a>
            <input type="submit" id="add" value="ADD" name="addadmin-btn">
        </form>
    </div>

</body>

</html>