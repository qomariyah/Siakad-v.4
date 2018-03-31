<?php 
    include("../../dbo.php"); 

    $id_ta = $_POST['id_ta'];
    $tahun_angkatan = $_POST['tahun_angkatan'];
    $sql = mysqli_query($koneksi, "UPDATE tbthangkatan set tahun_angkatan='$tahun_angkatan' where id_ta='$id_ta' " ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=ta&insert=success");	
    }
?>

