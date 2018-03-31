<?php 
    include("../../dbo.php"); 

    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $pass = md5($_POST['pass']);
    $lev_user = $_POST['lev_user'];
    $sql = mysqli_query($koneksi, "INSERT INTO tbuser VALUES ('$id_user','$nama_user', '$pass', '$lev_user')" ) or die ("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=user&insert=success");	
    }
?>