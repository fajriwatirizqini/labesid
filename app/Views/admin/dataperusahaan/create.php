<?= $this->extend('layout_admin/template'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt-2">
	<h3 class="">Form Tambah Data Perusahaan</h3><hr style="width:1350px;">
	<form action="/dataPerusahaan/save" method="post" enctype="multipart/form-data">
		<?= csrf_field(); ?>
	  <div class="form-group row">
	    <label for="Logo" class="col-sm-2 col-form-label">Logo</label>
	    <div class="col-sm-2">
	    	<img src="/admin_labesid/img/default.jpg" class="img-thumbnail img-preview">
	    </div>
	    <div class="col-sm-8">
	      <div class="custom-file">
			  <input type="file" class="custom-file-input <?= ($validation->hasError('Logo')) ? 'is-invalid' : ''; ?>" id="Logo" name="Logo" onchange="previewImg()">
			   <div id="validationServer03Feedback" class="invalid-feedback">
		      	<?= $validation->getError('Logo'); ?>
	     	   </div>
			  <label class="custom-file-label" for="Logo">Pilih Gambar...</label>
			</div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control <?= ($validation->hasError('Nama')) ? 'is-invalid' : ''; ?>" id="Nama" name="Nama" value="<?= old('Nama'); ?>">
		      <div id="validationServer03Feedback" class="invalid-feedback">
		      	<?= $validation->getError('Nama'); ?>
	      </div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Kode" class="col-sm-2 col-form-label">Kode</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control <?= ($validation->hasError('Kode')) ? 'is-invalid' : ''; ?>" id="Kode" name="Kode" value="<?= old('Kode'); ?>">
		      <div id="validationServer03Feedback" class="invalid-feedback">
			      	<?= $validation->getError('Kode'); ?>
		      </div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= old('Alamat'); ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Email" class="col-sm-2 col-form-label">Email</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Email" name="Email" value="<?= old('Email'); ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Telepon" class="col-sm-2 col-form-label">Telepon</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Telepon" name="Telepon" value="<?= old('Telepon'); ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Lowongan" class="col-sm-2 col-form-label">Situs</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Situs" name="Situs" value="<?= old('Situs'); ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Lowongan" class="col-sm-2 col-form-label">Lowongan</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Lowongan" name="Lowongan" value="<?= old('Lowongan'); ?>">
	    </div>
	  </div>
	 
	  <div class="form-group row">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">Tambah</button>
	    </div>
	  </div>
	</form>
</div>


<?= $this->endSection(); ?>