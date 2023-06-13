<?= $this->include('layout-penumpang/header') ?>
<?= $this->include('layout-penumpang/sidebar') ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2" style="margin:10px 0px 16px 0px;">Profil</h1>
  </div>
  <div class="form-group" style="margin-bottom:24px;">
    <label for="id_user" style="margin-bottom:6px;">Hak akses</label>
    <input type="text" class="form-control" id="id_user" placeholder="Penumpang" readonly>
  </div>
  <div class="form-group" style="margin-bottom:24px;">
    <label for="nama_user" style="margin-bottom:6px;">Nama</label>
    <input type="text" class="form-control" id="nama_user" placeholder="<?= session()->get('nama_user')?>" readonly>
  </div>
  <div class="form-group">
    <label for="email_user" style="margin-bottom:6px;">Email</label>
    <input type="text" class="form-control" id="email_user" placeholder="<?= session()->get('email')?>" readonly>
  </div>
<?= $this->include('layout-penumpang/footer') ?>