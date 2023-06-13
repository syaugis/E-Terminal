<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" style="position:fixed !important;padding-bottom:100%;">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <?php
              if($title == 'Dashboard'){
            ?>
              <a class="nav-link active nfbar" aria-current="page" href="<?= base_url('menu/menu_admin')?>">
            <?php
              }else{
            ?>
              <a class="nav-link nfbar" aria-current="page" href="<?= base_url('menu/menu_admin')?>">
            <?php
              }
            ?>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <?php
              if($title == 'User'){
            ?>
              <a class="nav-link active nfbar" aria-current="page" href="<?= base_url('user')?>">
            <?php
              }else{
            ?>
              <a class="nav-link nfbar" aria-current="page" href="<?= base_url('user')?>">
            <?php
              }
            ?>
              Kelola User
            </a>
          </li>
          <li class="nav-item">
            <?php
              if($title == 'Jadwal'){
            ?>
              <a class="nav-link active nfbar" aria-current="page" href="<?= base_url('jadwal')?>">
            <?php
              }else{
            ?>
              <a class="nav-link nfbar" aria-current="page" href="<?= base_url('jadwal')?>">
            <?php
              }
            ?>
              Kelola Jadwal
            </a>
          </li>
          <li class="nav-item">
            <?php
              if($title == 'Informasi'){
            ?>
              <a class="nav-link active nfbar" aria-current="page" href="<?= base_url('informasi')?>">
            <?php
              }else{
            ?>
              <a class="nav-link nfbar" aria-current="page" href="<?= base_url('informasi')?>">
            <?php
              }
            ?>
              Kelola Informasi
            </a>
          </li>
    
        </ul>
      </div>
    </nav>