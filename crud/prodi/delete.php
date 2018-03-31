<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbprodi where kd_prodi='$id'";
    $result = mysqli_query($koneksi, $query) or die("Query failed with error: ".mysqli_error($query));
    if ($result) {
        header("location:../../index.php?page=prodi&delete=success");	
    }
?>

