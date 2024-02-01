<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Driver</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
      <?php
      echo $this->session->flashdata('message');
      $this->session->unset_userdata('message');
      ?>
      <table id="example1" class="table table-bordered table-striped table-condensed">
        <thead>
          <tr>
            <th style='width:30px'>No</th>
            <th>Email</th>
            <th>No.Ho</th>
            <th>Nama Lengkap</th>
            <th>Status Account</th>
            <th>Saldo</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($driver as $key => $row) : ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['no_hp'] ?></td>
              <td><?= $row['nama_konsumen'] ?></td>
              <td>
                <?php if ($row['status_driver'] == 1) : ?>
                  <b style="color:red">Tidak Ada Data Diri </b>
                <?php elseif ($row['status_driver'] == 2) : ?>
                  <b style="color:blue">Pending Verification </b>
                <?php elseif ($row['status_driver'] == 3) : ?>
                  <b style="color:yellow">Data Tidak Lengkap</b>
                <?php elseif ($row['status_driver' == 4]) : ?>
                  <b style="color:green">Verified Account </b>
                <?php endif; ?>
              </td>
              <td>
                <b style="color:green">Rp. 0</b>
              </td>
              <td>
                <b style="color: green;">Aktif</b>
                <b style="color: green;"><i class="fa fa-motorcycle"></i></b>
              </td>
              <td style="width: 120px;">
                <?php if ($row['status_driver'] == 4) : ?>
                  <a href="" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></a>
                <?php else : ?>
                  <a href="" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-ok"></span></a>
                <?php endif; ?>
                <a href="<?= base_url('administrator/detail_driver/' . $row['id_konsumen']) ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-search"></span></a>
                <a href="<?= base_url('administrator/edit_driver/' . $row['id_konsumen']) ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <hr>
    </div>
    <script>
      delete_data = () => {

      }
    </script>