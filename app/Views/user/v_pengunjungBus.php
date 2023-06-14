<?= $this->include('layout-penumpang/header') ?>
<?= $this->include('layout-penumpang/sidebar') ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" style="margin:10px 0px 16px 0px;">Bus</h1>
  </div>
  <?php
    $no =1;
    foreach($jadwal as $key => $value){ ?>
  <div class="card border-dark mb-3">
    <div class="card-header">Berangkat: <?= $value['waktu']; ?> <br> Perkiraan sampai: <?= $value['waktu_sampai']; ?></div>
    <div class="card-body text-dark">
      <h5 class="card-title"><?= $value['awal_terminal']; ?> -> <?= $value['tujuan']; ?></h5>
      <p class="card-text">Kondektur: <?= $value['nama_kondektur']; ?></p>
    </div>
    <div class="card-footer bg-transparent border-success">
      <a href="https://wa.me/089502869186?text=Halo,%20Saya%20ingin%20beli%20tiket!" style="color:#333;">Beli tiket</a>
    </div>
  </div>
  <?php } ?>
  <br><br><br>
<?= $this->include('layout-penumpang/footer') ?>