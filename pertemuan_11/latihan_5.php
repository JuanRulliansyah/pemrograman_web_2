<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn) {
        mysqli_select_db($conn, "lat_dbase");
        $hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

        while($data=mysqli_fetch_row($hasil))
        {
            echo "$data[0] $data[1] $data[2]<br>";
        }
    }
?>