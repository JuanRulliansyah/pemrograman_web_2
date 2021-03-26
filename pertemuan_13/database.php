<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn) {
        $dbname="artikel_db";
        $cek = mysqli_query($conn, "CREATE DATABASE $dbname") or die("Couldn't create database : $dbname");
        if($cek){
            echo "Database $dbname berhasil dibuat";
        }
    }
?> 