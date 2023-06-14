<?= $this->include('layout-penumpang/header') ?>
<?= $this->include('layout-penumpang/sidebar') ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" style="margin:10px 0px 16px 0px;">Kupon</h1>
  </div>
  <div class="alert alert-primary" role="alert">
    Cek jadwal bus menggunakan website ini, <a href="<?php echo site_url('menu/bus_penumpang'); ?>">Klik disini!</a>
  </div>
  <?php
    foreach($kupon as $key => $value){ ?>
  <div class="card border-dark mb-3">
    <div class="card-header">Kupon</div>
    <div class="card-body text-dark">
      <h5 class="card-title">ID kupon: <?= $value['kd_kupon']; ?></h5>
      <p class="card-text"><?= $value['tgl_dibuat']; ?></p>
    </div>
  </div>
  <?php } ?>
<?= $this->include('layout-penumpang/footer') ?>