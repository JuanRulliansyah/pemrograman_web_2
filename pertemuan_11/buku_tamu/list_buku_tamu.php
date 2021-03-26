<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
<?php
    $conn = mysqli_connect("localhost","root","");
    if($conn) {
        mysqli_select_db($conn, "lat_dbase");
        $hasil=mysqli_query($conn, "SELECT * FROM guest_book");
?>
<h1>
    Tugas buku tamu Pemrograman Web 2 
    <br>
    Muhammad Juan Akmal Rulliansyah - 181011400479
</h1>
<table border=1>
    <tr>
        <th>Nama</th>
        <th>Instansi</th>
        <th>Tujuan</th>
        <th>No. Handphone</th>
        <th>Waktu Bertamu</th>
    </tr>
<?php
        while($data=mysqli_fetch_array($hasil))
        {
            echo "<tr>";
            echo "<td> $data[full_name]</td>";
            echo "<td> $data[instance]</td>";
            echo "<td> $data[purpose]</td>";
            echo "<td> $data[phone_number]</td>";
            echo "<td> $data[date]</td>";
            echo "</tr>";
        }
    }
?> 
</table>
</body>
</html>