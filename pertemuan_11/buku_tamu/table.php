<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn) {
        mysqli_select_db($conn, "lat_dbase");
        $sql = "CREATE TABLE guest_book
            (
            id int NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(id), 
            full_name varchar(20),
            instance varchar(255),
            purpose TEXT,
            phone_number varchar(20),
            date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
            )";
        mysqli_query($conn, $sql);
    }
?>