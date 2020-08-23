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
                <a href="main.php">
                    <li>home</li>
                </a>
                <a href="contact.php">
                    <li>contact us</li>
                </a>
            </ul>
            <i class="fas fa-lightbulb" id="light" data="off"></i><i class="fa fa-search" id="search-icon" data="close"></i>
            <i class="fas fa-bars" id="bars" data="close"></i>
            <?php
            if (isset($_COOKIE["member"])) {
                $adminname = $_GET["oklogin"];
            ?>
                <div class="log">wellcome <?php echo $adminname ?></div>
                <div class="logout"><a href="backend.php?logout=0" class="logout-btn">log out</a></div>
            <?php } else {
            ?>
                <div class="log"><a href="logup.php">sign up/sign in</a></div>
            <?php
            } ?>
        </div>
        <div class="res-menu">
            <form name="act2">
                <input type="search" class="search2" placeholder="SEARCH..." id="search2" name="input2"><i class="fas fa-times" id="times2" onclick="act2.input2.value=''"></i>
            </form>
            <div id="result2"></div>
            <ul class="li2">
                <a href="main.php">
                    <li>home</li>
                </a>
                <a href="contact.php">
                    <li>contact us</li>
                </a>
            </ul>
        </div>
    </div>
    <img class="main-pic" src="img/main.jpg">
    <div class="main-back"></div>
    <div class="fade-menu">
        <div class="top-menu">
            <ul class="fade-menu-li">
                <li><a href="#steel">steel furniture</a></li>
                <li><a href="#comfortable">comfortable furniture</a></li>
            </ul>
        </div>
        <div class="sel" id="steel">
            <div><img src="img/fade2.jpg"></div>
            <div>
                <div class="fade-txt">
                    <p class="p">steel market</p>
                </div>
            </div>
        </div>
        <div class="sel" id="comfortable">
            <div><img src="img/fade1.jpg"></div>
            <div>
                <div class="fade-txt">
                    <p class="p">comfortable market</p>
                </div>
            </div>
        </div>
    </div>
    <div class="slide-all">
        <div class="slide-box">
            <div class="slide">
                <div class="img-box"><img src="img/slide1.jpg"></div>
                <div class="img-box"><img src="img/slide2.jpg"></div>
                <div class="img-box"><img src="img/slide3.jpg"></div>
                <div class="img-box"><img src="img/slide4.jpg"></div>
            </div>
        </div>
        <div class="next"></div>
        <div class="prev"></div>
    </div>
    <div class="menu-time">
        <ul>
            <div class="menu-time2">
                <li><img src="img/time1.jpg"></li>
            </div>
            <div class="menu-time2">
                <li><img src="img/time2.jpg"></li>
            </div>
            <div class="menu-time2">
                <li><img src="img/time3.jpg"></li>
            </div>
            <div class="menu-time2">
                <li><img src="img/time4.jpg"></li>
            </div>
            <div class="menu-time2">
                <li><img src="img/time5.jpg"></li>
            </div>
            <div class="menu-time2">
                <li><img src="img/time6.jpg"></li>
            </div>
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
    echo "<script>alert('wellcome dear $adminname')</script>";
}

?>