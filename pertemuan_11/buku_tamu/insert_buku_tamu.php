<?php
    $con = mysqli_connect("localhost","root","");
    if (!$con) {
        die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con, "lat_dbase");
    $sql = "INSERT INTO guest_book (full_name, instance, purpose, phone_number) 
    VALUES
    ('$_POST[full_name]','$_POST[instance]','$_POST[purpose]', '$_POST[phone_number]')";
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
    echo "1 record added";
    mysqli_close($con)
?>