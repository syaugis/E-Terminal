<?= $this->include('layout/v_header') ?>
<?= $this->include('layout/v_nav') ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    	<h1 class="h2" style="margin:10px 0px 16px 0px;">Dashboard</h1>
  	</div>
	<div class="row">
  	<div class="col-6">
  		<div class="card">
  			<div class="card-header">
    			Data
  			</div>
  			<div class="card-body">
    			<h5 class="card-title">Penumpang</h5>
    			<p class="card-text">Ada 4 data penumpang</p>
    			<a href="#" class="btn btn-primary">Lihat data</a>
  			</div>
		</div>
	</div>
	<div class="col-6">
  		<div class="card">
  			<div class="card-header">
    			Data
  			</div>
  			<div class="card-body">
    			<h5 class="card-title">Jadwal</h5>
    			<p class="card-text">Ada 3 data jadwal bus</p>
    			<a href="#" class="btn btn-primary">Lihat data</a>
  			</div>
		</div>
	</div>
	</div>
<?= $this->include('layout/v_footer') ?>