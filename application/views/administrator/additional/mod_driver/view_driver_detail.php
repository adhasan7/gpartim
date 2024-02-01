      <div class='col-md-12'>
        <div class='box box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'>Detail Data Driver</h3>
            <a class='pull-right btn btn-warning btn-sm' href='<?php echo base_url(); ?>administrator/driver'>Kembali</a>
          </div>
          <div class='box-body'>

            <div class='panel-body'>
              <ul id='myTabs' class='nav nav-tabs' role='tablist'>
                <li role='presentation' class='active'><a href='#profile' id='profile-tab' role='tab' data-toggle='tab' aria-controls='profile' aria-expanded='true'>Data Driver </a></li>
                <li role='presentation' class=''><a href='#history-order' role='tab' id='history-order-tab' data-toggle='tab' aria-controls='history-order' aria-expanded='false'>History Orderan</a></li>
              </ul><br>

              <div id='myTabContent' class='tab-content'>
                <div role='tabpanel' class='tab-pane fade active in' id='profile' aria-labelledby='profile-tab'>
                  <div class='col-md-12'>
                    <table class='table table-condensed table-bordered'>
                      <tbody>
                        <?php
                        if (trim($rows['foto']) == '') {
                          $foto_user = 'blank.png';
                        } else {
                          if (!file_exists("asset/foto_user/$rows[foto]")) {
                            $foto_user = 'blank.png';
                          } else {
                            $foto_user = $rows['foto'];
                          }
                        } ?>
                        <tr bgcolor='#e3e3e3'>
                          <th rowspan='14' width='110px'>
                            <center><?php echo "<img style='border:1px solid #cecece; height:85px; width:85px' src='" . base_url() . "asset/foto_user/$foto_user' class='img-circle img-thumbnail'>"; ?></center>
                            <a style='margin-top:5px' class='btn btn-block btn-sm btn-success' href='<?php echo base_url() . $this->uri->segment(1); ?>/edit_konsumen/<?php echo $rows['id_konsumen']; ?>'>Edit Profil</a>
                          </th>
                        </tr>
                        <tr>
                          <th width='130px' scope='row'>Username</th>
                          <td><?php echo $rows['username'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Password</th>
                          <td>*****************</td>
                        </tr>
                        <tr>
                          <th scope='row'>Nama Lengkap</th>
                          <td><?php echo $rows['nama_lengkap'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Alamat Email</th>
                          <td><?php echo $rows['email'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>No Hp</th>
                          <td><?php echo $rows['no_hp'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Jenis Kelamin</th>
                          <td><?php echo $rows['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Tanggal Lahir</th>
                          <td><?php echo tgl_indo($rows['tanggal_lahir']); ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Daerah</th>
                          <td><?php echo kecamatan($rows['kecamatan_id'], $rows['kota_id']); ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Alamat</th>
                          <td><?php echo $rows['alamat_lengkap'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Kota</th>
                          <td><?php echo $rows['kota'] ?></td>
                        </tr>
                        <tr>
                          <th scope='row'>Status Akun</th>
                          <td>
                            <?php
                            $ver = $this->db->query("SELECT * FROM rb_konsumen_verifikasi where id_konsumen='$rows[id_konsumen]'");
                            if ($ver->num_rows() >= 1) {
                              $verif = $ver->row_array();
                              echo "<b style='color:" . ($verif['status_verifikasi'] == 'Verified Account' ? 'green' : 'blue') . "'>$verif[status_verifikasi]</b> 
                                        <a href='" . base_url() . $this->uri->segment(1) . "/edit_konsumen/$rows[id_konsumen]'><i class='fa fa-edit'></i></a>";
                            } else {
                              echo "<b style='color:red'>UNVERIFIED</b>";
                            }
                            ?>
                          </td>
                        </tr>
                        <tr>
                          <th scope='row'>Tanggal Daftar</th>
                          <td><?php echo tgl_indo($rows['tanggal_daftar']); ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div style='clear:both'></div>
                </div>

                <div role='tabpanel' class='tab-pane fade' id='history-order' aria-labelledby='history-order-tab'>
                  <div class='col-md-12'>
                    <table id="example1" class='table table-hover table-condensed'>
                      <thead>
                        <tr>
                          <th width="20px">No</th>
                          <th>Kode Transaksi</th>
                          <th>Nama Costumer</th>
                          <th>Lokasi Jemput</th>
                          <th>Tujuan</th>
                          <th>Jarak</th>
                          <th>Tarif</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Waktu Transaksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>