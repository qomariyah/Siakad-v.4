<?php
    $server_db="localhost"; //ip address
    $user_db="root";
    $pass_db="";
    $nama_db="dbsiakad_161530018";

    $koneksi=mysqli_connect($server_db, $user_db, $pass_db, $nama_db) 
            or die(mysql_error());
?>

