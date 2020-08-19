<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<?php include "backend.php"; ?>

<body>
    <h2 class="edit-title">EDIT PAGE</h2>


    <div class="tbl-menu">
        <table border="2px">
            <legend>main menu</legend>
            <tr>
                <th colspan="3px">title</th>
            </tr>
            <?php

            $ins1 = "SELECT * FROM `main menu` ORDER BY `id` DESC;";
            $conn = mysqli_connect("localhost", "root", "mysql", "furniture");
            $result1 = mysqli_query($conn, $ins1);
            while ($fetch = mysqli_fetch_assoc($result1)) {
            ?>
                <tr>
                    <td><?php echo $fetch['title'] ?></td>
                    <td class="del">delete</td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tbl-main-pic">
        <table border="2px">
            <legend>main pic</legend>
            <tr>
                <th colspan="3px">src</th>
            </tr>
            <?php

            $ins2 = "SELECT * FROM `main picture` ORDER BY `id` DESC;";
            $conn2 = mysqli_connect("localhost", "root", "mysql", "furniture");
            $result2 = mysqli_query($conn2, $ins2);
            while ($fetch2 = mysqli_fetch_assoc($result2)) {
            ?>
                <tr>
                    <td><?php echo $fetch2["src"] ?></td>
                    <td class="del">delete</td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tbl-fademenu-1">
        <table border="2px">
            <legend>fade menu section 1</legend>
            <tr>
                <?php

                $ins3 = "SELECT * FROM `fade menu1` ORDER BY `id` DESC;";
                $conn3 = mysqli_connect("localhost", "root", "mysql", "furniture");
                $result3 = mysqli_query($conn3, $ins3);
                while ($fetch3 = mysqli_fetch_assoc($result3)) {
                ?>
            <tr>
                <th style="width:100px">title</th>
                <td><?php echo $fetch3["title"] ?></td>
                <td class="del" style="width:100px">delete</td>
            </tr>
            <tr>
                <th>content</th>
                <td><?php echo $fetch3["content"] ?></td>
                <td class="del">delete</td>
            </tr>
            <tr>
                <th>src</th>
                <td><?php echo $fetch3["src"] ?></td>
                <td class="del">delete</td>
            </tr>
        <?php } ?>
        </table>
    </div>
    <div class="tbl-fademenu-2">
        <table border="2px">
            <legend>fade menu section 2</legend>
            <?php

            $ins4 = "SELECT * FROM `fade menu2` ORDER BY `id` DESC;";
            $conn4 = mysqli_connect("localhost", "root", "mysql", "furniture");
            $result4 = mysqli_query($conn4, $ins4);
            while ($fetch4 = mysqli_fetch_assoc($result4)) {
            ?>
                <tr>
                    <th style="width:100px">title</th>
                    <td><?php echo $fetch4["title"] ?></td>
                    <td class="del" style="width:100px">delete</td>
                </tr>
                <tr>
                    <th>content</th>
                    <td><?php echo $fetch4["content"] ?></td>
                    <td class="del">delete</td>
                </tr>
                <tr>
                    <th>src</th>
                    <td><?php echo $fetch4["src"] ?></td>
                    <td class="del">delete</td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tbl-slider">
        <table border="3px">
            <legend>slider photos</legend>
            <tr>
                <th colspan="3px">src</th>
            </tr>
            <?php

            $ins5 = "SELECT * FROM `slider` ORDER BY `id` DESC;";
            $conn5 = mysqli_connect("localhost", "root", "mysql", "furniture");
            $result5 = mysqli_query($conn5, $ins5);
            while ($fetch5 = mysqli_fetch_assoc($result5)) {
            ?>
                <tr>
                    <td><?php echo $fetch5["src"] ?></td>
                    <td class="del" style="width:100px">delete</td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tbl-menu-time">
        <table border="3px">
            <legend>menu time photos</legend>
            <tr>
                <th colspan="3px">src</th>
            </tr>
            <?php

            $ins6 = "SELECT * FROM `menu time` ORDER BY `id` DESC;";
            $conn6 = mysqli_connect("localhost", "root", "mysql", "furniture");
            $result6 = mysqli_query($conn6, $ins6);
            while ($fetch6 = mysqli_fetch_assoc($result6)) {
            ?>
                <tr>
                    <td><?php echo $fetch6["src"] ?></td>
                    <td class="del" style="width:100px">delete</td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <fieldset>
        <legend>edit main menu</legend>
        <form method="post">
            title :&nbsp&nbsp&nbsp<input type="text" id="edit-main-menu" name="title"><input type="submit" name="ok" id="title-ok" value="ok">
        </form>
        <?php
        if (isset($_GET["empty"])) {
            echo "<font color=red>fill the title</font>";
        }
        if (isset($_GET["ok"])) {
            echo "<font color=green>ok</font>";
        }
        if (isset($_GET["error"])) {
            echo "<font color=red>ERROR</font>";
        }
        ?>
    </fieldset>
    <fieldset>
        <legend>edit main picture</legend>
        <form action="" method="post" enctype="multipart/form-data">
            select a photo :&nbsp&nbsp&nbsp<input type="file" id="edit-main-pic" name="pic-input">
            <input type="submit" name="send-photo" id="send-photo" value="phtot address">
            <br><br>
            src : &nbsp&nbsp <input type="text" id="edit-main-upload" name="main-pic"><input type="submit" name="upload-btn" id="upload-btn" value="upload">
        </form>
        <?php
        //require "backend.php";
        if (isset($_GET["empty2"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["error2"])) {
            echo "<font color=red>ERROR</font>";
        }
        if (isset($_GET["empty3"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["ok3"])) {
            echo "<font color=green>ok</font>";
        }
        if (isset($_GET["error3"])) {
            echo "<font color=red>ERROR</font>";
        }

        ?>
    </fieldset>
    <fieldset>
        <legend>edit main fade menu section 1</legend>
        <?php
        // $ins = "SELECT * FROM `fade menu1` ORDER BY  `id` DESC ; "; 
        // $result = $connect->prepare($ins);
        // $result->execute();
        // $fetch = $result->fetch(PDO::FETCH_ASSOC);  
        // while($fetch){
        // $conn = mysqli_connect("localhost", "root", "mysql", "furniture");
        // $ins = "SELECT * FROM `fade menu1` ORDER BY  `id` DESC ; ";
        // $result = mysqli_query($conn, $ins);
        // while ($fetch = mysqli_fetch_assoc($result)) {


        ?>
        <form action="" method="post" enctype="multipart/form-data">
            title :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="edit-fademenu-title" name="fade-title1"><br><br><br>
            content : &nbsp&nbsp&nbsp <input type="text" id="edit-fademenu-content" name="fade-con1">
            <br><br><br>
            select a photo :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="file" name="fade-pic"><br>
            src : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="fade-menu-src" name="fade-src1"><br><br><br>
            <input type="submit" id="fade-menu-ok" value="ok" name="fade-btn1"><input type="submit" name="fade-pic-btn" id="fade-pic" value="photo adress">
        </form>
        <?php
        //}
        if (isset($_GET["empty4"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["ok4"])) {
            echo  "<font color=green>ok</font>";
        }
        if (isset($_GET["error4"])) {
            echo "<font color=red>ERROR</font>";
        }

        ?>
    </fieldset>
    <fieldset>
        <legend>edit main fade menu section 2</legend>
        <form action="" method="post" enctype="multipart/form-data">
            title :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="edit-fademenu-title2" name="fade-title2"><br><br><br>
            content : &nbsp&nbsp&nbsp <input type="text" id="edit-fademenu-content2" name="fade-con2"><br><br><br>
            select a photo :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="fade-pic2"><br>
            src : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="fade-menu-src2" name="fade-src2"><br><br><br>
            <input type="submit" id="fade-menu-ok2" value="ok" name="fade-btn2"><input type="submit" name="fade-pic-btn2" id="fade-pic" value="photo address">
        </form>
        <?php
        //}
        if (isset($_GET["empty5"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["ok5"])) {
            echo "<font color=green>ok</font>";
        }
        if (isset($_GET["error5"])) {
            echo "<font color=red>ERROR</font>";
        }

        ?>
    </fieldset>
    <fieldset>
        <legend>edit slider pictures</legend>
        <form action="" method="post" enctype="multipart/form-data">
            select a photo :&nbsp&nbsp&nbsp<input type="file" id="edit-slider-pic" name="pic-input2">
            <input type="submit" name="send-photo2" id="send-photo" value="phtot address">
            <br><br>
            src : &nbsp&nbsp <input type="text" id="edit-slider-upload" name="slider-pic"><input type="submit" id="upload-btn2" value="upload" name="upload-btn2">
        </form>
        <?php
        // include "backend.php";
        if (isset($_GET["empty6"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["ok6"])) {
            echo "<font color=green>ok</font>";
        }
        if (isset($_GET["error6"])) {
            echo "<font color=red>ERROR</font>";
        }
        if (isset($_GET["empty14"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["ok14"])) {
            echo "<font color=green>ok</font>";
        }
        if (isset($_GET["error14"])) {
            echo "<font color=red>ERROR</font>";
        }


        ?>
    </fieldset>
    <fieldset>
        <legend>edit menu time pictures</legend>
        <form action="" method="post" enctype="multipart/form-data">
            select a photo :&nbsp&nbsp&nbsp<input type="file" id="edit-mneu-time-pic" name="time-input3">
            <input type="submit" name="send-btn3" value="photo address" id="send-photo3">
            <br><br>
            src : &nbsp&nbsp <input type="text" id="edit-menu-time-upload" name="time-src"><input type="submit" id="upload-btn3" value="upload" name=upload-btn3>
        </form>
        <?php
        if (isset($_GET["empty15"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["ok15"])) {
            echo "<font color=green>ok</font>";
        }
        if (isset($_GET["error15"])) {
            echo "<font color=red>ERROR</font>";
        }
        if (isset($_GET["empty16"])) {
            echo "<font color=red>empty</font>";
        }
        if (isset($_GET["ok16"])) {
            echo "<font color=green>ok</font>";
        }
        if (isset($_GET["error16"])) {
            echo "<font color=red>ERROR</font>";
        }


        ?>
    </fieldset>

</body>

</html>