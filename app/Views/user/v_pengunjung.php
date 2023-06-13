<?= $this->include('layout-penumpang/header') ?>
<?= $this->include('layout-penumpang/sidebar') ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" style="margin:10px 0px 16px 0px;">Dashboard</h1>
  </div>
  <div class="alert alert-primary" role="alert">
    Cek jadwal bus menggunakan website ini, <a href="<?php echo site_url('menu/bus_penumpang'); ?>">Klik disini!</a>
  </div>
  <div class="card" style="margin-top:24px !important;">
    <h5 class="card-header" style="padding:16px;">Informasi</h5>
    <div class="card-body">
      <p class="card-text" style="width:700px;">Untuk melihat semua informasi dan pengumuman bisa klik tombol "Selengkapnya"</p>
      <a href="<?php echo site_url('menu/informasi_penumpang'); ?>" class="btn btn-primary">Selengkapnya</a>
    </div>
  </div>
  <div class="card jadwal" style="margin-top:40px !important;margin-bottom:40px;">
    <div class="card-body">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menunggu</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Perjalanan</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Dibatalkan</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <?php
          $no =1;
          foreach($jadwal as $key => $value){ ?>
          <div class="menunggu1">
            <h5><?= $value['awal_terminal']; ?> -> <?= $value['tujuan']; ?></h5>
            <h6 style="color:#777;font-weight:normal;">Kondektur: <?= $value['nama_kondektur']; ?></h6>
            <p style="font-weight:normal;margin-bottom:20px;">Terminal <?= $value['awal_terminal']; ?> - <b>Waktu berangkat: <?= $value['waktu']; ?></b></p>
          </div>
        <?php } ?>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <div class="menunggu1">
            <h5>Belum ada bus yang berangkat~</h5>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
          <div class="menunggu1">
            <h5>Belum ada bus yang dibatalkan~</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-between" style="margin-bottom:10px;">
    <div class="col-6">
      <h4>FAQ's (Frequently Asked Questions)</h4>
    </div>
    <div class="col-4" style="text-align:right;margin-top:4px;">
      <a href="<?php echo site_url('menu/bantuan_penumpang'); ?>">Selengkapnya</a>
    </div>
  </div>
  <div class="accordion" id="accordionExample" style="margin-bottom:100px;">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Bagaimana cara mengecek jadwal bus?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Kamu bisa mengecek jadwal bus melalui menu "Jadwal" di <i>sidebar</i> atau bagian kiri. Selain itu, kamu juga bisa mengecek jadwal melalui <i>search bar</i> di <i>navigation menu</i> atau bagian atas.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Bagaimana cara mendapatkan kupon?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Kamu bisa mencari kupon di menu "Kupon" dan membelinya di pos E-Terminal yang tersedia di sekitar terminal atau bisa membeli melewati kontak admin yang tertera.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Apakah bisa melakukan refund kupon yang sudah dibeli?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Semua kupon yang sudah dibeli oleh penumpang sudah tidak dapat direfund atau dikembalikan lagi.
      </div>
    </div>
  </div>
  </div>
<?= $this->include('layout-penumpang/footer') ?>