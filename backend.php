<?php

session_start();
include_once "connection.php";


// main menu
if (isset($_POST["ok"])) {
    if (empty($_POST["title"])) {
        header("location:edit.php?empty=0");
        exit;
    } else {
        $title = $_POST["title"];
        $ins = "INSERT INTO `main menu` (title) VALUES ('$title')";
        $result = $connect->prepare($ins);
        $result->execute();
        if ($result) {
            header("location:edit.php?ok=1");
            exit;
        } else {
            header("location:edit.php?error=2");
            exit;
        }
    }
}

// main photo send
if (isset($_POST["send-photo"])) {
    if (empty($_FILES["pic-input"])) {
        header("location:edit.php?empty2=3");
        exit;
    } else {
        $filename = $_FILES["pic-input"]["name"];
        $filetemp = $_FILES["pic-input"]["tmp_name"];
        if (is_uploaded_file($filetemp)) {
            if (move_uploaded_file($filetemp, $filename)) {
                // "file has been uploaded successfully<br>";
                //  echo "<a href='".$filename."'> file address </a>";
                // $address = (stream_resolve_include_path($filename));
                echo "<script>alert('the photo address : " . $filename . "')</script>";
            } else {
                header("location:edit.php?error2=5");
                exit;
            }
        }
    }
}
//main photo upload
if (isset($_POST["upload-btn"])) {
    if (empty($_POST["main-pic"])) {
        header("location:edit.php?empty3=7");
        exit;
    } else {
        $src = $_POST["main-pic"];
        $ins = "INSERT INTO `main picture` (src) VALUES ('$src')";
        $result = $connect->prepare($ins);
        $result->execute();
    }
    if ($result) {
        header("location:edit.php?ok3=8");
        exit;
    } else {
        header("location:edit.php?error3=9");
        exit;
    }
}

/* send photo fade menu section 1 */
if (isset($_POST["fade-pic-btn"])) {
    if (empty($_FILES["fade-pic"])) {
        header("location:edit.php?empty12=3");
        exit;
    } else {
        $filename2 = $_FILES["fade-pic"]["name"];
        $filetemp2 = $_FILES["fade-pic"]["tmp_name"];
        if (is_uploaded_file($filetemp2)) {
            if (move_uploaded_file($filetemp2, $filename2)) {
                // $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $filename2 . "')</script>";
                header("refresh:0");
            } else {
                header("location:edit.php?error7=5");
                exit;
            }
        }
    }
}

/* fade menu section 1 */
if (isset($_POST["fade-btn1"])) {
    if (empty($_POST["fade-title1"]) || empty($_POST["fade-con1"]) || empty($_POST["fade-src1"])) {
        header("location:edit.php?empty4=10");
        exit;
    } else {
        $title = $_POST["fade-title1"];
        $content = $_POST["fade-con1"];
        $src = $_POST["fade-src1"];
        $ins = "INSERT INTO `fade menu1` (title , content , src) VALUES ('$title' , '$content' , '$src')";
        $result = $connect->prepare($ins);
        $result->execute();
        if ($result) {
            header("location:edit.php?ok4=1");
            exit;
        } else {
            header("location:edit.php?error4=1");
            exit;
        }
    }
}

/* send photo fade menu section 2 */
if (isset($_POST["fade-pic-btn2"])) {
    if (empty($_FILES["fade-pic2"])) {
        header("location:edit.php?empty13=3");
        exit;
    } else {
        $filename2 = $_FILES["fade-pic2"]["name"];
        $filetemp2 = $_FILES["fade-pic2"]["tmp_name"];
        if (is_uploaded_file($filetemp2)) {
            if (move_uploaded_file($filetemp2, $filename2)) {
                // $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $filename2 . "')</script>";
                header("refresh:0");
            } else {
                header("location:edit.php?error7=5");
                exit;
            }
        }
    }
}

/* fade menu section 2 */
if (isset($_POST["fade-btn2"])) {
    if (empty($_POST["fade-title2"]) || empty($_POST["fade-con2"]) || empty($_POST["fade-src2"])) {
        header("location:edit.php?empty5=10");
        exit;
    } else {
        $title = $_POST["fade-title2"];
        $content = $_POST["fade-con2"];
        $src = $_POST["fade-src2"];
        $ins = "INSERT INTO `fade menu2` (title , content , src) VALUES ('$title' , '$content' , '$src')";
        $result = $connect->prepare($ins);
        $result->execute();
        if ($result) {
            header("location:edit.php?ok5=1");
            exit;
        } else {
            header("location:edit.php?error5=1");
            exit;
        }
    }
}

/*send slider picture */
if (isset($_POST["send-photo2"])) {
    if (empty($_FILES["pic-input2"])) {
        header("location:edit.php?empty6=3");
        exit;
    } else {
        $filename2 = $_FILES["pic-input2"]["name"];
        $filetemp2 = $_FILES["pic-input2"]["tmp_name"];
        if (is_uploaded_file($filetemp2)) {
            if (move_uploaded_file($filetemp2, $filename2)) {
                // $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $filename2 . "')</script>";
                header("refresh:0");
            } else {
                header("location:edit.php?error6=5");
                exit;
            }
        }
    }
}

/* upload slider picture */
if (isset($_POST["upload-btn2"])) {
    if (empty($_POST["slider-pic"])) {
        header("location:edit.php?empty14=7");
        exit;
    } else {
        $src = $_POST["slider-pic"];
        $ins = "INSERT INTO `slider` (src) VALUES ('$src')";
        $result = $connect->prepare($ins);
        $result->execute();
    }
    if ($result) {
        header("location:edit.php?ok14=8");
        exit;
    } else {
        header("location:edit.php?error14=9");
        exit;
    }
}

/* send menu time photo */
if (isset($_POST["send-btn3"])) {
    if (empty($_FILES["time-input3"])) {
        header("location:edit.php?empty15=3");
        exit;
    } else {
        $filename2 = $_FILES["time-input3"]["name"];
        $filetemp2 = $_FILES["time-input3"]["tmp_name"];
        if (is_uploaded_file($filetemp2)) {
            if (move_uploaded_file($filetemp2, $filename2)) {
                // $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $filename2 . "')</script>";
                header("refresh:0");
            } else {
                header("location:edit.php?error15=5");
                exit;
            }
        }
    }
}


/* upload time menu picture and content */

if (isset($_POST["upload-btn3"])) {
    if (empty($_POST["time-src"]) || empty($_POST["menu-time-content"])) {
        header("location:edit.php?empty16=7");
        exit;
    } else {
        $src = $_POST["time-src"];
        $content = $_POST["menu-time-content"];
        $ins = "INSERT INTO `menu time` (src,content) VALUES ('$src' , '$content')";
        $result = $connect->prepare($ins);
        $result->execute();
    }
    if ($result) {
        header("location:edit.php?ok16=8");
        exit;
    } else {
        header("location:edit.php?error16=9");
        exit;
    }
}

// main menu delete

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM `main menu` WHERE id=:id";
    $result = $connect->prepare($sql);
    $result->bindparam(":id", $id);
    $result->execute();
    if ($result) {
        header("location:edit.php");
        echo "right";
    } else {
        echo "error";
    }
}

// main picture delete 
if (isset($_GET["id"])) {
    $id2 = $_GET["id"];
    $sql2 = "DELETE FROM `main picture` WHERE id=:id";
    $result2 = $connect->prepare($sql2);
    $result2->bindparam(":id", $id2);
    $result2->execute();
    if ($result2) {
        header("location:edit.php");
        echo "right";
    } else {
        echo "error";
    }
}

// fade menu1 delete
if (isset($_GET["id"])) {
    $id3 = $_GET["id"];
    $sql3 = "DELETE FROM `fade menu1` WHERE id=:id";
    $result3 = $connect->prepare($sql3);
    $result3->bindparam(":id", $id3);
    $result3->execute();
    if ($result3) {
        header("location:edit.php");
        echo "right";
    } else {
        echo "error";
    }
}
// fade menu2 delete 
if (isset($_GET["id"])) {
    $id4 = $_GET["id"];
    $sql4 = "DELETE FROM `fade menu2` WHERE id=:id";
    $result4 = $connect->prepare($sql4);
    $result4->bindparam(":id", $id4);
    $result4->execute();
    if ($result4) {
        header("location:edit.php");
        echo "right";
    } else {
        echo "error";
    }
}

// slider delete 
if (isset($_GET["id"])) {
    $id5 = $_GET["id"];
    $sql5 = "DELETE FROM `slider` WHERE id=:id";
    $result5 = $connect->prepare($sql5);
    $result5->bindparam(":id", $id5);
    $result5->execute();
    if ($result5) {
        header("location:edit.php");
        echo "right";
    } else {
        echo "error";
    }
}
// menu time 
if (isset($_GET["id"])) {
    $id6 = $_GET["id"];
    $sql6 = "DELETE FROM `menu time` WHERE id=:id";
    $result6 = $connect->prepare($sql6);
    $result6->bindparam(":id", $id6);
    $result6->execute();
    if ($result6) {
        header("location:edit.php");
        echo "right";
    } else {
        echo "error";
    }
}
// USER EXIST 
function userexist($username)
{
    global $connect;
    $sql = "SELECT `username` FROM `sign up` WHERE `username`=?";
    $result = $connect->prepare($sql);
    $result->bindvalue(1, $username);
    $result->execute();
    if ($result->rowCount() < 1) {
        return false;
    } else {
        return $result;
    }
}


// sign up
if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $pas = $_POST["pas"];
    $age = $_POST["age"];
    $exist = userexist($username);
    if (empty($_POST["username"]) || empty($_POST["pas"]) || empty($_POST["age"])) {
        echo "<script>alert('fill all the inputs')</script>";
    } else {
        if ($exist) {
            echo "<script>alert('there is a member with the same username')</script>";
            return false;
        } else {
            $sql7 = "INSERT INTO `sign up` (username,pas,age) VALUES ('$username','$pas','$age')";
            $result7 = $connect->prepare($sql7);
            $result7->execute();
            if ($result7) {
                header("location:main.php?oklogup=1");
                exit;
            } else {
                header("location:main.php?errorlogup=2");
                exit;
            }
        }
    }
}

// sign in 
if (isset($_POST["signin"])) {
    if (empty($_POST["username"]) || empty($_POST["pas"])) {
        echo "<script>alert('fill all the inputs')</script>";
    } else {
        $username = $_POST["username"];
        $pas = $_POST["pas"];
        $sql = "SELECT * FROM `sign up` WHERE `username`=?";
        $result = $connect->prepare($sql);
        $result->bindvalue(1, $username);
        $result->execute();
        $sql2 = "SELECT * FROM `admin` WHERE `username`=?";
        $result2 = $connect->prepare($sql2);
        $result2->bindvalue(1, $username);
        $result2->execute();
        if ($result) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            if ($row["pas"] == $pas) {
                $_SESSION["adminname"] = $row["username"];
                $_SESSION["adminpas"] = $row["pas"];
                $_SESSION["adminsrc"] = $row["src"];
                setcookie("member", "ADMIN", time() + (86400 * 7));
                header("location:main.php?oklogin");
                // header("location:main.php?oklogin=" . $row["username"]);
                exit;
            } else {
                echo "<script>alert('WRONG')</script>";
            }
        }
        if ($result2) {
            $row2 = $result2->fetch(PDO::FETCH_ASSOC);
            if ($row2["pas"] == $pas) {
                $_SESSION["adminname"] = $row2["username"];
                $_SESSION["adminpas"] = $row2["pas"];
                $_SESSION["adminage"] = $row2["age"];
                $_SESSION["adminsrc"] = $row2["src"];
                setcookie("member", "ADMIN", time() + (86400 * 7));
                header("location:panel.php?oklogin");
                // header("location:main.php?oklogin=" . $row["username"]);
                exit;
            }
        }
    }
}
if (isset($_GET["logout"])) {
    setcookie("member", "ADMIN", time() - (86400 * 7));
    header("location:main.php");
    exit;
}

if (isset($_POST["addadmin-btn"])) {
    $adminname = $_POST["adminname"];
    $adminpas = $_POST["adminpas"];
    $adminage = $_POST["adminage"];
    $src = $_POST["adminsrc"];
    if (empty($adminname) || empty($adminpas) || empty($adminage) || empty($src)) {
        echo "<script>alert('fill all the inputs')</script>";
    } else {
        $sql = "INSERT INTO `admin` (username,pas,age,src) VALUES ('$adminname' , '$adminpas' , '$adminage' , '$src')";
        $result = $connect->prepare($sql);
        $result->execute();
        if ($result) {
            echo "<script>alert('admin added successfully')</script>";
        } else {
            echo "<script>alert('ERROR')</script>";
        }
    }
}

// members edit
if (isset($_GET["admindelid"])) {
    $id = $_GET["admindelid"];
    $sql = "DELETE FROM `admin` WHERE id=:id";
    $result = $connect->prepare($sql);
    $result->bindparam(":id", $id);
    $result->execute();
    if ($result) {
        header("location:members.php");
        echo "right";
    } else {
        echo "error";
    }
}

if (isset($_GET["memberdelid"])) {
    $id = $_GET["memberdelid"];
    $sql = "DELETE FROM `sign up` WHERE id=:id";
    $result = $connect->prepare($sql);
    $result->bindparam(":id", $id);
    $result->execute();
    if ($result) {
        header("location:members.php");
        echo "right";
    } else {
        echo "error";
    }
}

// admin photo
if (isset($_POST["adminbtn"])) {
    $filename = $_FILES["adminupload"]["name"];
    $fildetmp = $_FILES["adminupload"]["tmp_name"];
    if (is_uploaded_file($fildetmp)) {
        if (move_uploaded_file($fildetmp, $filename)) {
            // $address = (stream_resolve_include_path($filename));
            echo "<script>alert('the photo address : " . $filename . "')</script>";
            header("refresh:0");
            exit;
        }
    } else {
        header("location:adminadd.php?error");
        echo "error";
        exit;
    }
}

// admin edit 
if (isset($_POST["adminedit-btn"])) {
    try {
        global $adminid;
        $username = $_POST["adminnameedit"];
        $pas = $_POST["adminpasedit"];
        $age = $_POST["adminageedit"];
        $src = $_POST["adminsrcedit"];
        $sql = "UPDATE `admin` SET username='$username' , pas='$pas' , age='$age' , src='$src' WHERE id=$adminid ";
        $result = $connect->prepare($sql);
        $result->execute();
        if ($result) {
            header("location:members.php");
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}

// member edit

if (isset($_POST["memberedit-btn"])) {
    try {
        global $memberid;
        $username = $_POST["membernameedit"];
        $pas = $_POST["memberpasedit"];
        $age = $_POST["memberageedit"];
        $sql = "UPDATE `sign up` SET username='$username' , pas='$pas' , age='$age' WHERE id=$memberid ";
        $result = $connect->prepare($sql);
        $result->execute();
        if ($result) {
            header("location:members.php");
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}

// section 1 edit

if (isset($_POST["section1-btn"])) {
    try {
        global $section1id;
        $title = $_POST["section1-title"];
        $content = $_POST["section1-content"];
        $src = $_POST["section1-src"];
        $sql = "UPDATE `fade menu1` SET title='$title' , content='$content' , src='$src' WHERE id=$section1id ";
        $result = $connect->prepare($sql);
        $result->execute();
        if ($result) {
            header("location:edit.php");
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}

// section 2 edit
if (isset($_POST["section2-btn"])) {
    try {
        global $section2id;
        $title = $_POST["section2-title"];
        $content = $_POST["section2-content"];
        $src = $_POST["section2-src"];
        $sql = "UPDATE `fade menu2` SET title='$title' , content='$content' , src='$src' WHERE id=$section2id ";
        $result = $connect->prepare($sql);
        $result->execute();
        if ($result) {
            header("location:edit.php");
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}

// menu time edit
if (isset($_POST["menu-time-btn"])) {
    try {
        global $menutimeid;
        $content = $_POST["menu-time-content"];
        $src = $_POST["menu-time-src"];
        $sql = "UPDATE `menu time` SET content='$content' , src='$src' WHERE id=$menutimeid ";
        $result = $connect->prepare($sql);
        $result->execute();
        if ($result) {
            header("location:edit.php");
        }
    } catch (PDOException $err) {
        echo $err->getMessage();
    }
}
