<?php

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
                $address = (stream_resolve_include_path($filename));
                echo "<script>alert('the photo address : " . $address . "')</script>";
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
                $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $address . "')</script>";
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
                $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $address . "')</script>";
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
                $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $address . "')</script>";
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
                $address = (stream_resolve_include_path($filename2));
                echo "<script>alert('the photo address : " . $address . "')</script>";
                header("refresh:0");
            } else {
                header("location:edit.php?error15=5");
                exit;
            }
        }
    }
}

/* upload time menu picture */

if (isset($_POST["upload-btn3"])) {
    if (empty($_POST["time-src"])) {
        header("location:edit.php?empty16=7");
        exit;
    } else {
        $src = $_POST["time-src"];
        $ins = "INSERT INTO `menu time` (src) VALUES ('$src')";
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
    $result->bindparam(":id",$id);
    $result->execute();
    if ($result) {
        header("location:edit.php");
        echo "right";
    }
    else{
        echo "error";
    }   
}

// main picture delete 
if(isset($_GET["id"])){
    $id2=$_GET["id"];
    $sql2 = "DELETE FROM `main picture` WHERE id=:id";
    $result2 = $connect->prepare($sql2);
    $result2->bindparam(":id",$id2);
    $result2->execute();
    if ($result2) {
        header("location:edit.php");
        echo "right";
    }
    else{
        echo "error";
    }  
}

// fade menu1 delete
if(isset($_GET["id"])){
    $id3=$_GET["id"];
    $sql3 = "DELETE FROM `fade menu1` WHERE id=:id";
    $result3= $connect->prepare($sql3);
    $result3->bindparam(":id",$id3);
    $result3->execute();
    if ($result3) {
        header("location:edit.php");
        echo "right";
    }
    else{
        echo "error";
    }  
}
// fade menu2 delete 
if(isset($_GET["id"])){
    $id4=$_GET["id"];
    $sql4 = "DELETE FROM `fade menu2` WHERE id=:id";
    $result4= $connect->prepare($sql4);
    $result4->bindparam(":id",$id4);
    $result4->execute();
    if ($result4) {
        header("location:edit.php");
        echo "right";
    }
    else{
        echo "error";
    }  
}

// slider delete 
if(isset($_GET["id"])){
    $id5=$_GET["id"];
    $sql5 = "DELETE FROM `slider` WHERE id=:id";
    $result5= $connect->prepare($sql5);
    $result5->bindparam(":id",$id5);
    $result5->execute();
    if ($result5) {
        header("location:edit.php");
        echo "right";
    }
    else{
        echo "error";
    }  
}
// menu time 
if(isset($_GET["id"])){
    $id6=$_GET["id"];
    $sql6 = "DELETE FROM `menu time` WHERE id=:id";
    $result6= $connect->prepare($sql6);
    $result6->bindparam(":id",$id6);
    $result6->execute();
    if ($result6) {
        header("location:edit.php");
        echo "right";
    }
    else{
        echo "error";
    }  
}
