<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Level User</h1>
      </div>
      <?php echo form_open_multipart('user/save_edit/'.$user['id_user']); ?>
        <div class="form-group ">
          <label>Nama User</label>
          <input  value="<?= $user['nama_user'] ?>" class="form-control <?= ($errors->hasError('nama_user')) ? 'is-invalid' : ''; ?>" name="nama_user" placeholder="Nama User" readonly  >
    
        </div>
        <div class="form-group ">
          <label>E-Mail</label>
          <input  value="<?= $user['email'] ?>" class="form-control <?= ($errors->hasError('email')) ? 'is-invalid' : ''; ?> "  name="email" placeholder="E-Mail" readonly >
         
        </div>
        <div class="form-group">
          <label>Password</label>
          <input  value="<?= $user['password'] ?>"  class="form-control <?= ($errors->hasError('password')) ? 'is-invalid' : ''; ?>" type="password"  name="password" placeholder="Password" readonly >
         
        </div>
        <div class="form-group">
          <label>Level</label>
          <select  class="form-control <?= ($errors->hasError('level')) ? 'is-invalid' : ''; ?>" name="level">
            <option value="<?= $user['level'] ?>">
              <?php if($user['level']==1) {
                echo 'Admin';
              }elseif($user['level']==2){
                echo 'Kondektur';
              }else{
                echo 'Penumpang';
              }
              ?> </option>
            <option value="1">Admin</option>
            <option value="2">Kondektur</option>
            <option value="3">Penumpang</option>
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


