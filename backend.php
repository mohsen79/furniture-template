<?php

    include_once "connection.php" ;
    // main menu
    if(isset($_POST["ok"])){
        if(empty($_POST["title"])){
            header("location:edit.php?empty=0");
            exit;
        } else{
            $title = $_POST["title"];
            $ins = "INSERT INTO `main menu` (title) VALUES ('$title')";
            $result = $connect->prepare($ins);
            $result->execute();
            if($result){
                header("location:edit.php?ok=1");
                exit;
            } else{
                header("location:edit.php?error=2");
                exit;
            }
        }
    }

    // main photo send
    if(isset($_POST["send-photo"])){
        if(empty($_FILES["pic-input"])){
            header("location:edit.php?empty2=3");
           exit;
        }
        else{
            $filename = $_FILES["pic-input"]["name"];
            $filetemp = $_FILES["pic-input"]["tmp_name"];
            if(is_uploaded_file($filetemp)){
                if(move_uploaded_file($filetemp,$filename)){
                     echo "file has been uploaded successfully<br>";
                    echo "<a href='".$filename."'> file address </a>";
                }
                else{
                    header("location:edit.php?error2=5");
                    exit;
                }
            } 
        }

    }
    //main photo upload
    if(isset($_POST["upload-btn"])){
        if(empty($_POST["main-pic"])){
            header("location:edit.php?empty3=7");   
            exit;
        } 
        else{
            $src = $_POST["main-pic"];
            $ins = "INSERT INTO `main picture` (src) VALUES ('$src')";
            $result = $connect->prepare($ins);
            $result->execute();
        }
        if($result){
            header("location:edit.php?ok3=8");
            exit;
        } else{
            header("location:edit.php?error3=9");
            exit;
        }
    }


?>