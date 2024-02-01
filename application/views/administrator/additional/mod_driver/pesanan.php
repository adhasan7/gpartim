<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Orderan Ojek</h3>
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
            <th>Kode Transaksi</th>
            <th>Nama Costumer</th>
            <th>Driver</th>
            <th>Lokasi Jemput</th>
            <th>Tujuan</th>
            <th>Jarak</th>
            <th>Tarif</th>
            <th>Total</th>
            <th>Status</th>
            <th>Waktu Transaksi</th>
            <th style="width: 120px;">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>OL-20240121-ID_pelangga</td>
            <td>Hani</td>
            <td>Budi</td>
            <td>Padang</td>
            <td>Batusangkar</td>
            <td>14,3 Km</td>
            <td>Rp 4000/ Km</td>
            <td>Rp. 56000</td>
            <td>
              <b style="color: red;">Menunggu</b>
              <b style="color: blue;">Pickup</b>
              <b style="color: green;">Drive</b>
              <b style="color: green;">Selesai</b>
            </td>
            <td>2024-01-21 11:45</td>
            <td>
              <a href=""></a>
            </td>
          </tr>
        </tbody>
      </table>
      <hr>
    </div>