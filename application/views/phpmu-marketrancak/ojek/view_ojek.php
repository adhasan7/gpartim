<div class="ps-page--single">
  <div class="ps-breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="#">Members</a></li>
        <li>Ojek</li>
      </ul>
    </div>
  </div>
</div>
<div class="ps-vendor-dashboard pro" style='margin-top:10px'>
  <div class="container">
    <div class="ps-section__content">
      <?php $this->load->view('phpmu-marketrancak/reseller/menu-members') ?>
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
          <?php $this->load->view('phpmu-marketrancak/reseller/sidebar-members');
          echo "<a href='" . base_url() . "members/daftar_sopir' class='ps-btn btn-block'><i class='icon-pen'></i> Daftar / Edit Data</a>" ?>
          <div style='clear:both'><br></div>
        </div>

        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 ">
          <a href="<?= base_url('members/pesanan') ?>" class="btn btn-primary btn-xs">
            <i class="fa fa-plus"></i> Pesanan Baru
          </a>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-condensed">
              <thead>
                <th>No.</th>
                <th>Lokasi Penjeputan</th>
                <th>Tujuan</th>
                <th>Driver</th>
                <th>Jarak</th>
                <th>Total Biaya</th>
                <th>Status</th>
                <th>Action</th>
              </thead>
              <tbody>
                <tr hidden>
                  <td>1</td>
                  <td>Padang</td>
                  <td>Padang</td>
                  <td></td>
                  <td>Dri</td>
                  <td><label for="" class="badge badge-success"></label> Rp. 45.000</td>
                  <td>
                    <label for="" class="badge badge-danger">Menunggu Driver</label>
                    <label for="" class="badge badge-danger">Batal</label>
                    <label for="" class="badge badge-warning">Pickup</label>
                    <label for="" class="badge badge-success">Selesai</label>
                  </td>
                  <td>
                    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Batalkan</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>