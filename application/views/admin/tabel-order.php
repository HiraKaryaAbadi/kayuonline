<div class="content">
  <div class="container-fluid">
   <?php
   if (!empty($this->session->flashdata('msg'))) {
    $message = $this->session->flashdata('msg');
    ?>
    <div class="alert alert-<?php echo $message['class']?>" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <center><?php echo $message['message'] ?></center>
    </div>
    <?php } ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Daftar Tabel Order Yang Berstatus Pesan</h4>
            <p class="card-category"> Ini merupakan tabel order yang berstatus (Pesan) atau belum di konfirmasi oleh admin</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <?php if (!empty($orderpesan)) { ?>
                  <thead class="text-primary">
                    <th>No</th>
                    <th>Nama <br> Pemesan</th>
                    <th>SKU</th>
                    <th>Nama Produk</th>
                    <th>Ukuran Produk</th>
                    <th>Jumlah <br> Pesanan</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($orderpesan as $key) { ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $key->nama;?></td>
                        <td><?= $key->sku_product;?></td>
                        <td><?= $key->name;?></td>
                        <td><?= $key->ukuran;?></td>
                        <td><?= $key->jumlah;?></td>
                        <td><?= $key->harga;?></td>
                        <td align="center"><?= $key->total;?></td>
                      </tr>
                    <?php $no+=1; } ?>
                  </tbody>
                  <?php }
                    else{
                      echo "<center><h3>TIDAK ADA DATA !</h3></center>";
                    } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Daftar Tabel Order Yang Berstatus Done</h4>
            <p class="card-category"> Ini merupakan tabel order yang berstatus (Done) atau sudah di konfirmasi oleh admin</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <?php if (!empty($orderdone)) { ?>
                  <thead class="text-primary">
                    <th>No</th>
                    <th>Nama <br> Pemesan</th>
                    <th>SKU</th>
                    <th>Nama Produk</th>
                    <th>Ukuran Produk</th>
                    <th>Jumlah <br> Pesanan</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($orderdone as $key) { ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $key->nama;?></td>
                        <td><?= $key->sku_product;?></td>
                        <td><?= $key->name;?></td>
                        <td><?= $key->ukuran;?></td>
                        <td><?= $key->jumlah;?></td>
                        <td><?= $key->harga;?></td>
                        <td align="center"><?= $key->total;?></td>
                      </tr>
                    <?php $no+=1; } ?>
                  </tbody>
                  <?php }
                    else{
                      echo "<center><h3>TIDAK ADA DATA !</h3></center>";
                    } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>