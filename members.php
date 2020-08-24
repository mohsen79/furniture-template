<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

    <div class="admin-box">
        <table border="3px">
            <legend>admins</legend>
            <tr align="center">
                <td> USERNAME </td>
                <td>PASSWORD</td>
                <td>AGE</td>
                <td colspan="2px">CHANGE</td>
            </tr>
                <?Php
                require "connection.php" ;
                $sql = "SELECT * FROM `admin`";
                $result = $connect->prepare($sql);
                $result->execute();
                while($row10 = $result->fetch(PDO::FETCH_OBJ)){
            ?>
            <tr align="center">
                <td><?php echo $row10->username ?></td>
                <td><?php echo $row10->pas ?></td>
                <td><?php echo $row10->age ?></td>
                <td class="ed2"><a href="adminedit.php?adminid=<?php echo $row10->id ?>">edit</a></td>
                <td class="del"><a href="backend.php?id=<?php echo $row10->id ?>">delete</a></td>
            </tr>
            <? } ?>
        </table>
    </div>

    <div class="member-box">
        <table border="3px">
            <legend>members</legend>
            <tr align="center">
                <td> USERNAME </td>
                <td>PASSWORD</td>
                <td>AGE</td>
                <td colspan="2px">CHANGE</td>
            </tr>
            <?Php
                require "connection.php" ;
                $sql = "SELECT * FROM `sign up`";
                $result = $connect->prepare($sql);
                $result->execute();
                while($row = $result->fetch(PDO::FETCH_OBJ)){
            ?>
            <tr align="center">
                <td><?php echo $row->username ?></td>
                <td><?php echo $row->pas ?></td>
                <td><?php echo $row->age ?></td>
                <td class="ed2">edit</td>
                <td class="del"><a href="backend.php?id=<?php echo $row->id ?>">delete</a></td>
            </tr>
                <?php } ?>
        </table>
    </div>

    <a href="panel.php"> <input type="button" value="BACK" class="back2"> </a>
</body>

</html>