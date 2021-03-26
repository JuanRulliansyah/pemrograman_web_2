<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn) {
        mysqli_select_db($conn, "artikel_db"); // mengaktifkan database
        //membuat tabel
        $sql = "CREATE TABLE articles
            (
            articleID int NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(articleID), 
            judul varchar(255),
            penulis varchar(20),
            lead varchar(255),
            content TEXT,
            waktu TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
            )";
        mysqli_query($conn, $sql);
    }
?>
