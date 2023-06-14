<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Informasi</h1>
      </div>
      <?php 
          if(session()->getFlashdata('pesanSukses')){
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('pesanSukses');
            echo '</div>';
          }
        ?>
         <div class="card-body">
        <?php echo form_open('informasi/save_insert'); ?>
        <div class="form-group ">
          <label>Judul</label>
          <input  class="form-control <?= ($errors->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" placeholder="Judul" >
          <div class="invalid-feedback">
            <?= $errors->getError('judul'); ?>
          </div>
        </div>
        
        <div class="form-group ">
          <label>Isi</label>
          <input type="text"  class="form-control <?= ($errors->hasError('isi')) ? 'is-invalid' : ''; ?>" name="isi" placeholder="Isi" >
          <div class="invalid-feedback">
            <?= $errors->getError('tujuan'); ?>
          </div>
        </div>
        <div class="form-group ">
          <label>Waktu Kejadian</label>
          <input type="datetime-local"   class="form-control <?= ($errors->hasError('waktu_kejadian')) ? 'is-invalid' : ''; ?> " name="waktu_kejadian" placeholder="Waktu Kejadian" >
          <div class="invalid-feedback">
            <?= $errors->getError('waktu_kejadian'); ?>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('informasi')?>" class="btn btn-success" >Kembali</a>
        </div>
        <?php echo form_close(); ?>
        </div>

     
    </main>
  </div>
</div>


