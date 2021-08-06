<?= $this->extend('layout_admin/template'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt-2">
	<h3 class="">Form Ubah Data Sekolah</h3><hr style="width:1350px;">
	<form action="/Sekolah/update/<?= $sekolah['id']; ?>" method="post">
		<?= csrf_field(); ?>
	  <div class="form-group row">
	    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Nama" name="Nama" autofocus value="<?= $sekolah['Nama']; ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="NPSN" class="col-sm-2 col-form-label">NPSN</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control <?= ($validation->hasError('NPSN')) ? 'is-invalid' : ''; ?>" id="NPSN" name="NPSN" value="<?= $sekolah['NPSN']; ?>">
		      <div id="validationServer03Feedback" class="invalid-feedback">
		      	<?= $validation->getError('NPSN'); ?>
	      </div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="NSS" class="col-sm-2 col-form-label">NSS</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control <?= ($validation->hasError('NSS')) ? 'is-invalid' : ''; ?>" id="NSS" name="NSS" value="<?= $sekolah['NSS']; ?>">
		      <div id="validationServer03Feedback" class="invalid-feedback">
			      	<?= $validation->getError('NSS'); ?>
		      </div>
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Akreditasi" name="Akreditasi" value="<?= $sekolah['Akreditasi']; ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= $sekolah['Alamat']; ?>">
	    </div>
	  </div>
	  <div class="form-group row">
	    <label for="Telepon" class="col-sm-2 col-form-label">Telepon</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Telepon" name="Telepon" value="<?= $sekolah['Telepon']; ?>">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="Email" class="col-sm-2 col-form-label">Email</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="Email" name="Email" value="<?= $sekolah['Email']; ?>">
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