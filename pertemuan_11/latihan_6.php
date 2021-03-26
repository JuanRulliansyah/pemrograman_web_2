<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn) {
        mysqli_select_db($conn, "lat_dbase");
        $hasil=mysqli_query($conn, "SELECT * FROM tbl_mhs");
        while($data=mysqli_fetch_array($hasil))
        {
            echo "$data[FirstName] $data[LastName] $data[Age]<br>";
        }
    }
?> 