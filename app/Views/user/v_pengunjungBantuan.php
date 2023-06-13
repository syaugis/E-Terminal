<?= $this->include('layout-penumpang/header') ?>
<?= $this->include('layout-penumpang/sidebar') ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" style="margin:10px 0px 16px 0px;">Bantuan</h1>
  </div>
  <div class="alert alert-primary" role="alert">
    Cek jadwal bus menggunakan website ini, <a href="<?php echo site_url('menu/bus_penumpang'); ?>">Klik disini!</a>
  </div>
  <p>Apabila anda mempunyai pertanyaan atau masalah di saat menggunakan website ini, baca FAQ's atau hubungi admin <a href="https://wa.me/0895631651536?text=Halo,%20Saya%20ingin%20bertanya%20terkait%20penggunaan%20website!">disini!</a>
  <div class="row justify-content-between" style="margin-bottom:10px;margin-top:24px;">
    <div class="col-6">
      <h4>FAQ's (Frequently Asked Questions)</h4>
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
        Kamu bisa mengecek jadwal bus melalui menu "Bus" di <i>sidebar</i> atau bagian kiri. Selain itu, kamu juga bisa mengecek jadwal melalui <i>search bar</i> di <i>navigation menu</i> atau bagian atas.
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
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Apa saja metode pembayaran untuk membeli kupon?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Apabila membeli kupon di pos terminal bisa menggunakan uang tunai dan jika membeli kupon melalui kontak admin bisa menggunakan QRIS yang disediakan.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Apakah harga di saat sudah naik bus dengan membeli kupon di pos atau admin berbeda?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Tujuan dari website ini untuk mempermudah penumpang dalam melakukan aktivitas di terminal. Untuk harga memiliki nominal yang sama.
      </div>
    </div>
  </div>
  </div>
<?= $this->include('layout-penumpang/footer') ?>