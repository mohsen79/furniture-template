<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="responsive.css">
    </head>
    <body>

        <h2 class="edit-title">EDIT PAGE</h2>

        <div class="tbl-menu">
            <table border="2px">
                <legend>main menu</legend>
                <tr>
                    <th colspan="3px">title</th>
                </tr>
                <tr>
                    <td>home</td>
                    <td class="del">delete</td>
                </tr>
                <tr>
                    <td>about us</td>
                    <td class="del">delete</td>
                </tr>
            </table>
        </div>
        <div class="tbl-main-pic">
            <table border="2px">
                <legend>main pic</legend>
                <tr>
                    <th colspan="3px">src</th>
                </tr>
                <tr>
                    <td>name</td>
                    <td class="del">delete</td>
                </tr>
            </table>
        </div>
        <div class="tbl-fademenu-1">
            <table border="2px">
                <legend>fade menu section 1</legend>
                <tr>
                    <th colspan="3px">src</th>
                </tr>
                <tr>
                    <td>title</td>
                    <td class="del">delete</td>
                </tr>
                <tr>
                    <td>content</td>
                    <td class="del">delete</td>
                </tr>
                <tr>
                    <td>name</td>
                    <td class="del">delete</td>
                </tr>
            </table>
        </div>
        <div class="tbl-fademenu-2">
            <table border="2px">
                <legend>fade menu section 2</legend>
                <tr>
                    <th colspan="3px">src</th>
                </tr>
                <tr>
                    <td>title</td>
                    <td class="del">delete</td>
                </tr>
                <tr>
                    <td>content</td>
                    <td class="del">delete</td>
                </tr>
                <tr>
                    <td>name</td>
                    <td class="del">delete</td>
                </tr>
            </table>
        </div>
            <div class="tbl-slider">
                <table border="3px">
                    <legend>slider photos</legend>
                    <tr>
                        <th colspan="3px">src</th>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td class="del">delete</td>
                    </tr>
                </table>
            </div>
            <div class="tbl-menu-time">
                <table border="3px">
                    <legend>menu time photos</legend>
                    <tr>
                        <th colspan="3px">src</th>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td class="del">delete</td>
                    </tr>
                </table>
            </div>

        <fieldset>
            <legend>edit main menu</legend>
            <form method="post">
               title :&nbsp&nbsp&nbsp<input type="text" id="edit-main-menu" name="title"><input type="submit" name="ok" id="title-ok" value="ok">
            </form>
            <?php
                include "backend.php";
                if(isset($_GET["empty"])){
                    echo "<font color=red>fill the title</font>";
                    //echo "<script>alert('empty')</script>";
                }
                if(isset($_GET["ok"])){
                    echo "change has done successfully";
                  //  echo "<script>alert('success')</script>";
                }
                if(isset($_GET["error"])){
                   // echo "<script>alert('error')</script>";
                    echo "ERROR";
                }
            ?>
        </fieldset>
        <fieldset>
            <legend>edit main picture</legend>
            <form action="" method="post" enctype="multipart/form-data">
               select a photo :&nbsp&nbsp&nbsp<input type="file" id="edit-main-pic" name="pic-input">
               <input type="submit" name="send-photo" id="send-photo" value="send">
               <br><br>
               src : &nbsp&nbsp <input type="text" id="edit-main-upload"><input type="submit" name="upload-btn" id="upload-btn" value="upload">
            </form>
            <?php
                require "backend.php";
                if(isset($_GET["empty2"])){
                    echo "empty";
                } 
                if(isset($_GET["error2"])){
                    echo "ERROR";
                }
                if(isset($_GET["ok2"])){
                    //echo "file has been uploaded successfully <br>";
                 echo '<a href="'.$filename.'" > file address</a>';
                }
               // echo '<a href="'.$filename.'" > file address</a>';
            ?>
        </fieldset>
        <fieldset>
            <legend>edit main fade menu section 1</legend>
            <form action="" method="post">
               title :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="edit-fademenu-title"><br><br><br>
               content : &nbsp&nbsp&nbsp <input type="text" id="edit-fademenu-content">
               <br><br><br>
               src : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="fade-menu-src2"><br><br><br>
               <input type="button" id="fade-menu-ok" value="ok">
            </form>
        </fieldset>
        <fieldset>
            <legend>edit main fade menu section 2</legend>
            <form action="" method="post">
               title :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="edit-fademenu-title2"><br><br><br>
               content : &nbsp&nbsp&nbsp <input type="text" id="edit-fademenu-content2"><br><br><br>
               src : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="fade-menu-src"><br><br><br>
               <input type="button" id="fade-menu-ok2" value="ok">
            </form>
        </fieldset>
        <fieldset>
            <legend>edit slider pictures</legend>
            <form action="" method="post">
               select a photo :&nbsp&nbsp&nbsp<input type="file" id="edit-slider-pic"><br><br>
               src : &nbsp&nbsp <input type="text" id="edit-slider-upload"><input type="button" id="upload-btn2" value="upload">
            </form>
        </fieldset>
        <fieldset>
            <legend>edit menu time pictures</legend>
            <form action="" method="post">
               select a photo :&nbsp&nbsp&nbsp<input type="file" id="edit-mneu-time-pic"><br><br>
               src : &nbsp&nbsp <input type="text" id="edit-menu-time-upload"><input type="button" id="upload-btn3" value="upload">
            </form>
        </fieldset>

    </body>
</html>