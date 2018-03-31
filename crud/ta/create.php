<?php 
    include("../../dbo.php"); 

    $id_ta = $_POST['id_ta'];
    $tahun_angkatan = $_POST['tahun_angkatan'];
    $sql = mysqli_query($koneksi, "INSERT INTO tbthangkatan VALUES ('$id_ta', '$tahun_angkatan')" ) 
            or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=ta&insert=success");	
    }
?>

