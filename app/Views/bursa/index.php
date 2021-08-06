<?= $this->extend('layout_siswa/template'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt2">

	<h3><i class="fas fa-briefcase"></i> Bursa Kerja Khusus</h3><hr>
	<form action="/bursa/save" method="post">
		<?= csrf_field(); ?>
          <div class="form-group">
            <label for="inputNamaDepan">Nama Lengkap</label>
            <input type="text" class="form-control" id="inputNamaDepan" name="nama" autofocus value="<?= old('nama'); ?>">
          </div>
		<div class="form-group">
		  <label for="nama">Tempat Tanggal Lahir</label>
		  <input type="text" class="form-control" id="ttl" name="ttl" value="<?= old('ttl'); ?>">
		</div>
		<div class="form-group">
		  <label for="nama">email</label>
		  <input type="email" class="form-control <?= ($validation->hasError('email'))? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= old('email'); ?>">
		  <div id="validationServer03Feedback" class="invalid-feedback">
	        Alamat email wajib diisi.
	      </div>
		</div>
		<div class="form-group">
          <label for="inputAddress">Pilih perusahaan</label>
          <select id="inputState" class="form-control <?= ($validation->hasError('lamar'))? 'is-invalid' : ''; ?>" id="lamar" name="lamar" value="<?= old('lamar'); ?>">
          	  <option selected disabled value="">...</option>
              <option id="lamar"  name="lamar" value="Indofood">Indofood</option>
              <option id="lamar"  name="lamar" value="Indocement">Indocement</option>
              <option id="lamar"  name="lamar" value="Semen Indonesia">Semen Indonesia</option>
              <option id="lamar"  name="lamar" value="Gudang Garam">Gudang Garam</option>
              <option id="lamar"  name="lamar" value="Unilever">Unilever</option>
              <option id="lamar"  name="lamar" value="Perusahaan Gas Negara">Perusahaan Gas Negara</option>
            </select>
             <div id="validationServer03Feedback" class="invalid-feedback">
		        Wajib memilih perusahaan.
		      </div>
        </div>
		<div class="form-group">
			<label for="cv">Upload CV</label>
		 	<div class="custom-file">
	  	  	  <input type="file" class="custom-file-input <?= ($validation->hasError('cv'))? 'is-invalid' : ''; ?>" id="cv" name="cv" onchange="previewImg()">
	  	  	  <div id="validationServer03Feedback" class="invalid-feedback">
		        CV harus dimasukkan.
		      </div>
	      		<label class="custom-file-label" for="cv"></label>
			</div>
		</div>
		<input type="submit" name="Input" value="kirim">
	</form>

	<div class="mt-3">
	<h6>Contoh CV (Curriculum Vitae)</h6></div>
	<div class="form-row">
	  <div class="form-group col-md-4">
	    <img src="img/CV/cv.jpg" width="300" height="425">
	  </div>
	  <div class="form-group col-md-4">
	   <img src="img/CV/cv2.jpg" width="300" height="425">
	  </div>
	  <div class="form-group col-md-4">
	    <img src="img/CV/cv3.jpg" width="300" height="425">
	  </div>
	  </div>

</div>

<?= $this->endSection(); ?>