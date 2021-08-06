<?= $this->extend('layout_sekolah/header'); ?>

<?= $this->section('content'); ?>

<div id="form" class="col-md-10 p-5 pt-2">

		<h3>Input Pelatihan Siswa</h3>
    <br>

		<form action="/datapelatihan/save" method="post">
      <?= csrf_field(); ?>
          <div class="form-group">

            <div class="form-group">
              <label for="inputAddress">Lembaga Pelatihan</label>
              <input type="text" class="form-control" id="lembaga" name="lembaga" value="<?= old('lembaga'); ?>">
            </div>

            <div class="form-group">
              <label for="inputAddress">Bidang</label>
              <input type="text" class="form-control" id="bidang" name="bidang" value="<?= old('bidang'); ?>">
            </div>

            <div class="form-group">
              <label for="inputAddress">level</label>
              <input type="text" class="form-control" id="level" name="level" value="<?= old('level'); ?>">
            </div>

            <div class="form-group">
              <label for="inputAddress">Peserta</label>
              <input type="text" class="form-control" id="peserta" name="peserta" value="<?= old('peserta'); ?>">
            </div>

            <div class="form-group">
              <label for="inputAddress">Informasi Detail</label>
              <input type="text" class="form-control" id="informasi" name="informasi" value="<?= old('informasi'); ?>">
            </div>

            <input type="submit" name="Input" value="kirim">
      </form>
	</div>
</div>
 <?= $this->endSection(); ?>