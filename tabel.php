<?php
	include 'dbo.php';
	error_reporting(0);
	if ($_GET["page"] == "ta") {
?>

<div class="row">
	<div class="col-xs-12">
      	<div class="card">
        	<div class="card-header">
          		Data TA. : Tahun Angkatan &nbsp;&nbsp;&nbsp; | &nbsp;
          		<a href="index.php?form-ta=add" class="btn btn-success btn-xs"><i class="fa fa-user-plus"></i> Add</a>
        	</div>
        	<div class="card-body no-padding">
	          	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
				    <thead>
				        <tr>
				            <th width="5%">No.</th>
				            <th width="10%">ID. TA</th>
				            <th width="20%">Tahun Angkatan</th>
				            <th width="70%"></th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$i = 1;
				    		$sql = mysqli_query($koneksi, "SELECT * FROM tbthangkatan order by id_ta asc") or die("Error query ".mysqli_error());
				    		while($data = mysqli_fetch_array($sql)) {
				    	?>
				        <tr>
				            <td><?php echo $i; ?></td>
				            <td><?php echo $data['id_ta']; ?></td>
				            <td><?php echo $data['tahun_angkatan']; ?></td>
				            <td>
				            	<a class="btn btn-info btn-xs" href="index.php?form-ta=edit&id=<?php echo $data['id_ta']?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
				            	<a class="btn btn-danger btn-xs" href="crud/ta/delete.php?id=<?php echo $data['id_ta']?>"><i class="fa fa-trash-o"></i> Hapus</a>
				            </td>
				        </tr>
				        <?php $i++; } ?>
				    </tbody>
				</table>
	        </div>
      	</div>
    </div>
</div>

<?php } ?>

<?php
if ($_GET["page"] == "jurusan") {
?>

<div class="row">
	<div class="col-xs-12">
      	<div class="card">
        	<div class="card-header">
          		Data Jurusan &nbsp;&nbsp;&nbsp; | &nbsp;
          		<a href="index.php?form-jurusan=add" class="btn btn-success btn-xs"><i class="fa fa-user-plus"></i> Add</a>
        	</div>
        	<div class="card-body no-padding">
	          	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
				    <thead>
				        <tr>
				            <th width="5%">No.</th>
					        <th width="15%">KD. Jurusan</th>
					        <th width="35%">Nama Jurusan</th>
					        <th width="45%"></th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$i = 1;
				    		$sql = mysqli_query($koneksi, "SELECT * FROM tbjurusan") or die("Error query ".mysqli_error());
				    		while($data = mysqli_fetch_array($sql)) {
				    	?>
				        <tr>
				            <td><?php echo $i; ?></td>
				            <td><?php echo $data['kd_jur']; ?></td>
				            <td><?php echo $data['jurusan']; ?></td>
				            <td>
				            	<a class="btn btn-info btn-xs" href="index.php?form-jurusan=edit&id=<?php echo $data['kd_jur']?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
				            	<a class="btn btn-danger btn-xs" href="crud/jurusan/delete.php?id=<?php echo $data['kd_jur']?>"><i class="fa fa-trash-o"></i> Hapus</a>
				            </td>
				        </tr>
				        <?php $i++; } ?>
				    </tbody>
				</table>
	        </div>
      	</div>
    </div>
</div>

<?php } ?>

<?php
if ($_GET["page"] == "prodi") {
?>

<div class="row">
	<div class="col-xs-12">
      	<div class="card">
        	<div class="card-header">
          		Data Program Studi &nbsp;&nbsp;&nbsp; | &nbsp;
          		<a href="index.php?form-prodi=add" class="btn btn-success btn-xs"><i class="fa fa-user-plus"></i> Add</a>
        	</div>
        	<div class="card-body no-padding">
	          	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
				    <thead>
				        <tr>
				            <th width="5%">No.</th>
					        <th width="30%">Nama Jurusan</th>
					        <th width="10%">KD. Prodi</th>
					        <th width="35%">Program Studi</th>
					        <th width="20%"></th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$i = 1;
				    		$sql = mysqli_query($koneksi, "SELECT * FROM tbprodi a, tbjurusan b where a.kd_jur=b.kd_jur") or die("Error query ".mysqli_error());
				    		while($data = mysqli_fetch_array($sql)) {
				    	?>
				        <tr>
				            <td><?php echo $i?></td>
					        <td><?php echo $data['jurusan']?></td>
					        <td><?php echo $data['kd_prodi']?></td>
					        <td><?php echo $data['prodi']?></td>
				            <td>
				            	<a class="btn btn-info btn-xs" href="index.php?form-prodi=edit&id=<?php echo $data['kd_prodi']?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
				            	<a class="btn btn-danger btn-xs" href="crud/prodi/delete.php?id=<?php echo $data['kd_prodi']?>"><i class="fa fa-trash-o"></i> Hapus</a>
				            </td>
				        </tr>
				        <?php $i++; } ?>
				    </tbody>
				</table>
	        </div>
      	</div>
    </div>
</div>

<?php } ?>


<?php
if ($_GET["page"] == "mahasiswa") {
?>

<div class="row">
	<div class="col-xs-12">
      	<div class="card">
        	<div class="card-header">
          		Data Mahasiswa &nbsp;&nbsp;&nbsp; | &nbsp;
          		<a href="index.php?form-mhs=add" class="btn btn-success btn-xs"><i class="fa fa-user-plus"></i> Add</a>
          		&nbsp;&nbsp;&nbsp; | &nbsp;
          		<a href="index.php?laporan=mahasiswa" class="btn btn-warning btn-xs"><i class="fa fa-newspaper-o"></i> Report</a>
        	</div>
        	<div class="card-body no-padding">
	          	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
				    <thead>
				        <tr>
				            <th width="4%">No.</th>
					        <th width="15%">Program Studi</th>
					        <th width="8%">NIM</th>
					        <th width="20%">Nama Mahasiswa</th>
					        <th width="3%">L/P</th>
					        <th width="15%">Tempat, Tgl Lahir</th>
					        <th width="25%">Alamat</th>
					        <th width="10%"></th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$i = 1;
				    		$sql = mysqli_query($koneksi, "SELECT * FROM tbmahasiswa a, tbprodi b where a.kd_prodi=b.kd_prodi order by a.id_ta, a.kd_prodi desc") or die("Error query ".mysqli_error());
				    		while($data = mysqli_fetch_array($sql)) {
				    	?>
				        <tr>
				            <td><?php echo ++$no_urut?></td>
					        <td><?php echo $data['prodi']?></td>
					        <td><?php echo $data['nim']?></td>
					        <td><?php echo $data['nama_mhs']?></td>
					        <td><?php echo $data['jk']?></td>
					        <td><?php echo $data['tmp_lahir'].', '.date('d-M-Y', strtotime($data['tgl_lahir']))?></td>
					        <td><?php echo $data['alamat']?></td>
				            <td>
				            	<a class="btn btn-info btn-xs" href="index.php?form-mhs=edit&id=<?php echo $data['nim']?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
				            	<a class="btn btn-danger btn-xs" href="crud/mahasiswa/delete.php?id=<?php echo $data['nim']?>"><i class="fa fa-trash-o"></i> Hapus</a>
				            </td>
				        </tr>
				        <?php $i++; } ?>
				    </tbody>
				</table>
	        </div>
      	</div>
    </div>
</div>

<?php } ?>

<?php
if ($_GET["page"] == "user") {
?>

<div class="row">
	<div class="col-xs-12">
      	<div class="card">
        	<div class="card-header">
          		Data User &nbsp;&nbsp;&nbsp; | &nbsp;
          		<a href="index.php?form-user=add" class="btn btn-success btn-xs"><i class="fa fa-user-plus"></i> Add</a>
        	</div>
        	<div class="card-body no-padding">
	          	<table class="datatable table table-striped primary" cellspacing="0" width="100%">
				    <thead>
				        <tr>
				            <th>No.</th>
				            <th>ID. User</th>
				            <th>Nama</th>
				            <th>Password</th>
				            <th>Level</th>
				            <th></th>
				        </tr>
				    </thead>
				    <tbody>
				    	<?php
				    		$i = 1;
				    		$sql = mysqli_query($koneksi, "SELECT * FROM tbuser") or die("Error query ".mysqli_error());
				    		while($data = mysqli_fetch_array($sql)) {
				    	?>
				        <tr>
				            <td><?php echo $i; ?></td>
				            <td><?php echo $data['id_user']; ?></td>
				            <td><?php echo $data['nama_user']; ?></td>
				            <td><?php echo $data['pass']; ?></td>
				            <td><?php echo $data['lev_user']; ?></td>
				            <td>
				            	<a class="btn btn-info btn-xs" href="index.php?form-user=edit&id=<?php echo $data['id_user']?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
				            	<a class="btn btn-danger btn-xs" href="crud/user/delete.php?id=<?php echo $data['id_user']?>"><i class="fa fa-trash-o"></i> Hapus</a>
				            </td>
				        </tr>
				        <?php $i++; } ?>
				    </tbody>
				</table>
	        </div>
      	</div>
    </div>
</div>

<?php } ?>