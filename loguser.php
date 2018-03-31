<div class="row">
  <div class="col-md-12">
    <div class="card card-mini">
      <div class="card-header">
        <div class="card-title">Last User Login</div>
        <ul class="card-action">
          <li>
            <a href="#">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body no-padding table-responsive">
        <table class="datatable table table-striped primary">
          <thead>
            <tr>
              <th>ID. Log</th>
              <th class="right">ID. User</th>
              <th>Nama User</th>
              <th>IP Address</th>
              <th>Device</th>
              <th>Browser</th>
              <th>Time</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i;
              $sql = mysqli_query($koneksi, "SELECT * FROM tblogin a, tbuser b where a.id_user = b.id_user order by id_log desc") or die("Error query ".mysqli_error());
              while($data = mysqli_fetch_array($sql)) {
            ?>
            <tr>
              <td><?php echo $data['id_log']?></td>
              <td><?php echo $data['id_user']?></td>
              <td><?php echo $data['nama_user']?></td>
              <td><?php echo $data['ip_address']?></td>
              <td><?php echo $data['device']?></td>
              <td><?php echo $data['browser']?></td>
              <td><?php echo $data['time']?></td>
            </tr>
            <?php $i++; } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>