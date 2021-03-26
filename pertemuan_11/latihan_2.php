<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn) {
        $dbname="lat_dbase";
        $cek = mysqli_query($conn, "CREATE DATABASE $dbname") or die("Couldn't create database : $dbname");
        if($cek){
            echo "Database $dbname berhasil dibuat";
        }
    }
?> 