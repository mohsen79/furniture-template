<html>

<head>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>
    <?php require "search.php";
    require "backend.php";
    ?>

    <div class="all-search-menu">
        <div class="search-back">
            <form name="act">
                <input type="search" class="search" placeholder="SEARCH..." id="search" name="input"><i class="fas fa-times" id="times" onclick="act.input.value=''"></i>
            </form>
        </div>
        <div id="result"></div>
        <div class="menu">
            <ul class="li">
            <?php
                require "connection.php";
                $sql2 = "SELECT * FROM `main menu`";
                $result2 = $connect->prepare($sql2);
                $result2->execute();
                while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {

                ?>
                <a href="main.php">
                    <li><?php echo $row2->title ?></li>
                </a>
                <? } ?>
            </ul>
            <i class="fas fa-lightbulb" id="light" data="off"></i><i class="fa fa-search" id="search-icon" data="close"></i>
            <i class="fas fa-bars" id="bars" data="close"></i>
            <?php
            if (isset($_COOKIE["member"])) {
            ?>
                <div class="log">wellcome <?php echo $_SESSION["adminname"] ?></div>
                <div class="logout"><a href="backend.php?logout=0" class="logout-btn">log out</a></div>
            <?php } else {
            ?>
                <div class="log"><a href="logup.php">sign up/sign in</a></div>
            <?php
            }
            if (isset($_GET["adminout"])) {
                setcookie("member", "ADMIN", time() - (86400 * 7));
                header("location:main.php");
            }
            ?>
        </div>
        <div class="res-menu">
            <form name="act2">
                <input type="search" class="search2" placeholder="SEARCH..." id="search2" name="input2"><i class="fas fa-times" id="times2" onclick="act2.input2.value=''"></i>
            </form>
            <div id="result2"></div>
            <ul class="li2">
                <?php
                require "connection.php";
                $sql2 = "SELECT * FROM `main menu`";
                $result2 = $connect->prepare($sql2);
                $result2->execute();
                while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {

                ?>
                    <a href="main.php">
                        <li><?php echo $row2->title ?></li>
                    </a>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php

    require "connection.php";
    $sql = "SELECT * FROM `main picture`";
    $result = $connect->prepare($sql);
    $result->execute();
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {

    ?>
        <img class="main-pic" src="<?php echo $row->src ?>">
    <?php } ?>
    <div class="main-back"></div>
    <div class="fade-menu">
        <div class="top-menu">
            <ul class="fade-menu-li">
            <?php
                require "connection.php";
                $sql2 = "SELECT * FROM `fade menu1`";
                $result2 = $connect->prepare($sql2);
                $result2->execute();
                while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {

                ?>
                <li><a href="#steel"><?php echo $row2->title ?></a></li>
                <? }
                require "connection.php";
                $sql2 = "SELECT * FROM `fade menu2`";
                $result2 = $connect->prepare($sql2);
                $result2->execute();
                  while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {
                ?>

                <li><a href="#comfortable"><?php echo $row2->title ?></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="sel" id="steel">
            <?php
            $sql2 = "SELECT * FROM `fade menu1`";
            $result2 = $connect->prepare($sql2);
            $result2->execute();
            while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {
                ?>
            <div><img src="<?php echo $row2->src ?>"></div>
            <?php } ?>
            <div>
                <div class="fade-txt">
                    <?php

                require "connection.php";
                $sql2 = "SELECT * FROM `fade menu1`";
                $result2 = $connect->prepare($sql2);
                $result2->execute();
                while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {

                ?>
                    <p class="p"><?php echo $row2->content ?></p>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="sel" id="comfortable">
        <?php

            require "connection.php";
            $sql2 = "SELECT * FROM `fade menu2`";
            $result2 = $connect->prepare($sql2);
            $result2->execute();
            while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {

        ?>
            <div><img src="<?php echo $row2->src ?>"></div>
            <?php } ?>
            <div>
                <div class="fade-txt">
                <?php

                require "connection.php";
                $sql2 = "SELECT * FROM `fade menu2`";
                $result2 = $connect->prepare($sql2);
                $result2->execute();
                while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {

                ?>
                    <p class="p"><?php echo $row2->content ?></p>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-all">
        <div class="slide-box">
            <div class="slide">
            <?php
                    $sql2 = "SELECT * FROM `slider`";
                    $result2 = $connect->prepare($sql2);
                    $result2->execute();
                    while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {
                    ?>
                <div class="img-box">
                    <img src="<?php echo $row2->src ?>">
            </div>
            <?php } ?>

            </div>
        </div>
        <div class="next"></div>
        <div class="prev"></div>
    </div>
    <div class="menu-time">
        <ul>
        <?php              
            $sql2 = "SELECT * FROM `menu time`";
            $result2 = $connect->prepare($sql2);
            $result2->execute();
            while ($row2 = $result2->fetch(PDO::FETCH_OBJ)) {
            ?>
            <div class="menu-time2">
                <a href="show.php?photoid=<?php echo $row2->id ?>"><li><img src="<?php echo $row2->src ?>"></li></a>
            </div>
            <? } ?>
        </ul>
    </div>

</body>

</html>
<?php

if (isset($_GET["oklogup"])) {
    echo "<script>alert('you enrolled successfully')</script>";
}
if (isset($_GET["errorlogup"])) {
    echo "<script>alert('ERROR')</script>";
}
if (isset($_GET["oklogin"])) {
    echo "<script>alert('wellcome dear $_SESSION[adminname]')</script>";
}
?>