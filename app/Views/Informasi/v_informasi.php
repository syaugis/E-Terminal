<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Informasi</h1>
        <div class="card-tools">
          <a href="<?= base_url('informasi/add') ?>" class="btn btn-primary btn-sm btn-flat" >
            <i class="fas fa-plus">Add</i>
          </a>
        </div>
      </div>
      <?php 
          if(session()->getFlashdata('pesanSukses')){
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('pesanSukses');
            echo '</div>';
          }
        ?>
      
      <div>
        <table  id="example1"   class="table table-bordered table-striped text-center">
          <thead class="">
            <tr>
              <th width="80px">No</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Waktu Kejadian</th>
              <th width="150px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no =1;
              foreach($informasi as $key => $value){ ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $value['judul']; ?></td>
                <td><?= $value['isi']; ?></td>
                <td><?= $value['waktu_kejadian']; ?></td>
                <td>
                  <a href="<?= base_url('informasi/edit/'.$value['id_info']) ?>" class="btn btn-sm btn-warning" >Edit</a>
                  <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?=  $value['id_info']; ?>"  >Delete</button>
              </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
      
    </main>
  </div>
</div>

<!-- Modal EDIT.Hapus -->
<?php foreach ($informasi as $key => $value){?>
<div class="modal fade" id="delete<?=  $value['id_info']; ?>">
  <div class="modal-dialog modal-danger">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Informasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda Yakin ingin menghapus?
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        <a href="<?= base_url('informasi/delete/'.$value['id_info']) ?>" type="submit" class="btn btn-primary">Iya</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>
<!-- /.AKHIR modal-Hapus -->
<?php } ?>

