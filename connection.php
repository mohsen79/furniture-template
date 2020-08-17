<?php

        $option = [PDO::ATTR_PERSISTENT=>TRUE , PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
        try{
            $server = "localhost";
            $dbname = "furniture";
            $username = "root";
            $password="mysql";
            $connect = new PDO("mysql:host=$server;dbname=$dbname",$username,$password,$option);
        } catch(PDOException $err){
            echo "error " . $err->getMessage();
        }

?>