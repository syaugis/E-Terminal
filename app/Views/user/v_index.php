
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Data User</h1>
        <div class="card-tools">
          <a href="<?= base_url('user/add') ?>" class="btn btn-primary btn-sm btn-flat" >
            <i class="fas fa-plus">Add</i>
          </a>
        </div>
      </div>

      <div>
        <?php 
        if(session()->getFlashdata('pesanSukses')){
          echo '<div class="alert alert-success" role="alert">';
          echo session()->getFlashdata('pesanSukses');
          echo '</div>';
        }
        ?>
      
        <table  id="example1"   class="table table-bordered table-striped text-center">
          <thead class="">
            <tr>
              <th width="80px">No</th>
              <th>Nama User</th>
              <th>E-Mail</th>
              <th>Level</th>
              <th width="150px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no =1;
              foreach($user as $key => $value){ ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $value['nama_user']; ?></td>
                <td><?= $value['email']; ?></td>
                <td>
                  <?php if($value['level']==1){
                      echo 'Admin';
                    }else if($value['level']==2){
                      echo 'Kondektur';
                    }
                    else{
                      echo 'Penumpang';
                    }
                  ?>
                </td>
                <td>
                  <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#update<?=  $value['id_user']; ?>">Edit</button>
                  <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?=  $value['id_user']; ?>"  >Delete</button>                 
                </td>
              </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
      
    </main>
  </div>
</div>

<!-- Modal EDIT.User -->
<?php foreach ($user as $key => $value){?>
<div class="modal fade" id="update<?=  $value['id_user']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Level</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open('user/update/'.$value['id_user']) ?>
          <div class="form-group">
            <label>Level</label>
            <select  class="form-control" name="level">
            <option value="">
              <?php if($value['level']==1) {
                echo 'Admin';
              }elseif($value['level']==2){
                echo 'Kondektur';
              }
              ?> </option>
            <option value="1">Admin</option>
            <option value="2">Kondektur</option>
          </select>
          </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- /.AKHIR modal-EDIT -->
<?php } ?>

<!-- Modal EDIT.Hapus -->
<?php foreach ($user as $key => $value){?>
<div class="modal fade" id="delete<?=  $value['id_user']; ?>">
  <div class="modal-dialog modal-danger">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin ingin menghapus?
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-de fault" data-dismiss="modal">Tidak</button>
        <a href="<?= base_url('user/delete/'.$value['id_user']) ?>" type="submit" class="btn btn-primary">Iya</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- /.AKHIR modal-Hapus -->
<?php } ?>


