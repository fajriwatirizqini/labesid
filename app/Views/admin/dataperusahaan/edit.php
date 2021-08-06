<?= $this->extend('layout_admin/template'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt-2">
	<h3 class="">Form Ubah Data Perusahaan</h3><hr style="width:1350px;">
	<form action="/dataPerusahaan/update/<?= $perusahaan['id']; ?>" method="post" enctype="multipart/form-data">
		<?= csrf_field(); ?>


		<input type="hidden" name="LogoLama" value="<?= $perusahaan['Logo']; ?>">
	  <div class="form-group row">
	    <label for="Logo" class="col-sm-2 col-form-label">Logo</label>
		   <div class="col-sm-2">
		    	<img src="/admin_labesid/img/<?= $perusahaan['Logo']; ?>" class="img-thumbnail img-preview">
		    </div>
		    <div class="col-sm-8">
		      <div class="custom-file">
				  <input type="file" class="custom-file-input <?= ($validation->hasError('Logo')) ? 'is-invalid' : ''; ?>" id="Logo" name="Logo" onchange="previewImg()">
				   <div id="validationServer03Feedback" class="invalid-feedback">
			      	<?= $validation->getError('Logo'); ?>
		     	   </div>
				  <label class="custom-file-label" for="Logo"><?= $perusahaan['Logo']; ?></label>
				</div>
		    </div>
		  </div>
	  <div class="form-group row">
	    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control <?= ($validation->hasError('Nama')) ? 'is-invalid' : ''; ?>" id="Nama" name="Nama" value="<?= $perusahaan['Nama']; ?>">
		      <div id="validationServer03Feedback" class="invalid-feedback">
		      	<?= $validation->getError('Nama'); ?>
	      </div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Kode" class="col-sm-2 col-form-label">Kode</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control <?= ($validation->hasError('Kode')) ? 'is-invalid' : ''; ?>" id="Kode" name="Kode" value="<?= $perusahaan['Kode']; ?>">
		      <div id="validationServer03Feedback" class="invalid-feedback">
			      	<?= $validation->getError('Kode'); ?>
		      </div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= $perusahaan['Alamat']; ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Email" class="col-sm-2 col-form-label">Email</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Email" name="Email" value="<?= $perusahaan['Email']; ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Telepon" class="col-sm-2 col-form-label">Telepon</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Telepon" name="Telepon" value="<?= $perusahaan['Telepon']; ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Situs" class="col-sm-2 col-form-label">Situs</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Situs" name="Situs" value="<?= $perusahaan['Situs']; ?>">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="Lowongan" class="col-sm-2 col-form-label">Lowongan</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Lowongan" name="Lowongan" value="<?= $perusahaan['Lowongan']; ?>">
	    </div>
	  </div>
	 
	  <div class="form-group row">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">Ubah</button>
	    </div>
	  </div>
	</form>
</div>


<?= $this->endSection(); ?>