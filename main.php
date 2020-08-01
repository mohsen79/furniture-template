<html>
<head>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
</head>
<body>
    <?php require "search.php" ?>


    <div class="search-back">
        <form name="act">
        <input type="search" class="search" placeholder="SEARCH..." id="search" name="input" ><i class="fas fa-times" id="times" onclick="act.input.value=''"></i>
        </form>
    </div>
    <div id="result"></div>

        <ul class="li">
            <a href="main.php"><li>home</li></a>
            <a href="contact.php"><li>contact us</li></a>
        </ul>
        <i class="fas fa-lightbulb" id="light" data="off"></i><i class="fa fa-search" id="search-icon" data="close"></i>
        <i class="fas fa-bars" id="bars" data="close"></i>
    <div class="menu"></div> 
    <div class="res-menu">
        <form name="act2">
        <input type="search" class="search2" placeholder="SEARCH..." id="search2" name="input2" ><i class="fas fa-times" id="times2" onclick="act2.input2.value=''"></i>
        </form>
        <div id="result2"></div>
        <ul class="li2">
            <a href="main.php"><li>home</li></a>
            <a href="contact.php"><li>contact us</li></a>
        </ul>
    </div>
    <img class="main-pic" src="img/main.jpg">
    <div class="main-back"></div> 

</body>
</html>