<?php 
    include("../../dbo.php"); 

    $kd_prodi = $_POST['kd_prodi'];
    $prodi = $_POST['prodi'];
    $kd_jur = $_POST['kd_jur'];
    $sql = mysqli_query($koneksi, "UPDATE tbprodi set prodi='$prodi', kd_jur='$kd_jur' where kd_prodi='$kd_prodi' " ) or die("Query failed with error: ".mysqli_error($sql));
    if ($sql) {
            header("location:../../index.php?page=prodi&insert=success");	
    }
?>

