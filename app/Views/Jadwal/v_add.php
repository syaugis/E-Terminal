<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Jadwal Keberangkatan Bus</h1>
      </div>
      <?php 
          if(session()->getFlashdata('pesanSukses')){
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('pesanSukses');
            echo '</div>';
          }
        ?>
        <?php echo form_open('jadwal/save_insert'); ?>
        <div class="form-group ">
          <label>Terminal Awal</label>
          <input  class="form-control <?= ($errors->hasError('awal_terminal')) ? 'is-invalid' : ''; ?>" name="awal_terminal" placeholder="Terminal Awal" >
          <div class="invalid-feedback">
            <?= $errors->getError('awal_terminal'); ?>
          </div>
        </div>
        
        <div class="form-group ">
          <label>Tujuan</label>
          <input  class="form-control <?= ($errors->hasError('tujuan')) ? 'is-invalid' : ''; ?>" name="tujuan" placeholder="Tujuan" >
          <div class="invalid-feedback">
            <?= $errors->getError('tujuan'); ?>
          </div>
        </div>
        <div class="form-group ">
          <label>Waktu Awal</label>
          <input type="datetime-local"   class="form-control <?= ($errors->hasError('waktu')) ? 'is-invalid' : ''; ?> " name="waktu" placeholder="Waktu Awal" >
          <div class="invalid-feedback">
            <?= $errors->getError('waktu'); ?>
          </div>
        </div>
        <div class="form-group ">
          <label>Waktu Sampai</label>
          <input type="datetime-local"   class="form-control <?= ($errors->hasError('waktu_sampai')) ? 'is-invalid' : ''; ?> " name="waktu_sampai" placeholder="Waktu Sampai" >
          <div class="invalid-feedback">
            <?= $errors->getError('waktu_sampai'); ?>
          </div>
        </div>
        <div class="form-group">
          <label>Kondektur</label>
          <select  class="form-control <?= ($errors->hasError('id_knd')) ? 'is-invalid' : ''; ?> " name="id_knd">
            <option value="">--Pilih Kondektur--</option>
            <?php foreach($kondektur as $key => $value) { ?>
              <option value="<?= $value['id_knd']; ?>">
              <?= $value['nama_kondektur']; ?>
              </option>
            <?php } ?>
          </select>
          <div class="invalid-feedback">
            <?= $errors->getError('id_knd'); ?>
          </div>
        </div>
       
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('jadwal')?>" class="btn btn-success" >Kembali</a>
        </div>
        <?php echo form_close(); ?>
     
    </main>
  </div>
</div>


