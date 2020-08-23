<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="responsive.css">
    </head>
    <body>

        <div class="admin-title"><h2>EDIT AMIN</h2></div>
        
    <div class="adminadd">
        <form method="post">
        <input type="text" name="adminnameedit" placeholder="username" id="adminname">
        <input type="password" name="adminpasedit" placeholder="password" id="adminpassword"><br><br><br>
        <input type="password" name="adminageedit" placeholder="age" id="adminpassword">
        <a href="panel.php"><input type="button" id="back" value="BACK"></a>
        <input type="submit" id="add" value="ADD" name="addadminedit-btn">
        </form>
    </div>

    </body>
</html>
<?php require "backend.php" ?>