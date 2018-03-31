<?php
    include("dbo.php");

        $sql = mysqli_query($koneksi, "SELECT * FROM tbmahasiswa") or die("Error query ".mysqli_error());
        $jml = mysqli_num_rows($sql);

?>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <a class="card card-banner card-green-light">
            <div class="card-body">
                <i class="icon fa fa-user-plus fa-4x"></i>
                <div class="content">
                    <div class="title">Data Mahasiswa</div>
                    <div class="value"><span class="sign"></span><?php echo $jml ?></div>
                </div>
            </div>
        </a>
    </div>
</div>

<?php include("loguser.php"); ?>