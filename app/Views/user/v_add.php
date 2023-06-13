<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Level User</h1>
      </div>
       <?php 
          if(session()->getFlashdata('pesanSukses')){
              echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Success! - ';
              echo session()->getFlashdata('pesanSukses');
              echo '</h5></div>';
          }
        ?>
        <?php echo form_open('user/save_insert'); ?>
        <div class="form-group ">
          <label>Nama User</label>
          <input  class="form-control <?= ($errors->hasError('nama_user')) ? 'is-invalid' : ''; ?>" name="nama_user" placeholder="Nama User" >
          <div class="invalid-feedback">
            <?= $errors->getError('nama_user'); ?>
          </div>
        </div>
        <div class="form-group ">
          <label>E-Mail</label>
          <input  class="form-control <?= ($errors->hasError('email')) ? 'is-invalid' : ''; ?> "  name="email" placeholder="E-Mail">
          <div class="invalid-feedback">
            <?= $errors->getError('email'); ?>
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input  class="form-control <?= ($errors->hasError('password')) ? 'is-invalid' : ''; ?>" type="password"  name="password" placeholder="Password">
          <div class="invalid-feedback">
            <?= $errors->getError('password'); ?>
          </div>
        </div>
        <div class="form-group">
          <label>Konfirmasi Password</label>
          <input  class="form-control <?= ($errors->hasError('repassword')) ? 'is-invalid' : ''; ?>" type="password" name="repassword" placeholder="Password">
          <div class="invalid-feedback">
            <?= $errors->getError('repassword'); ?>
          </div>
        </div>
        <div class="form-group">
          <label>Level</label>
          <select  class="form-control <?= ($errors->hasError('level')) ? 'is-invalid' : ''; ?>" name="level">
            <option value="">--Pilih Level--</option>
            <option value="1">Admin</option>
            <option value="2">Kondektur</option>
          </select>
          <div class="invalid-feedback">
            <?= $errors->getError('level'); ?>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="<?= base_url('user')?>" class="btn btn-success" >Kembali</a>
        </div>
        <?php echo form_close(); ?>
     
    </main>
  </div>
</div>


