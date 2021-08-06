<?= $this->extend('layout_sekolah/header'); ?>

<?= $this->section('content'); ?>

<div id="form" class="col-md-10 p-5 pt-2">

    <h3>Input Perusahaan Mitra</h3>
    <br>

    <form action="/perusahaan/save" method="post">
      <?= csrf_field(); ?>
          <div class="form-group">

            <div class="form-group">
              <label for="gambar">Gambar</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input " id="gambar" name="gambar" onchange="previewImg()">
              <label class="custom-file-label" for="gambar"></label>
              </div>
            </div>

            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
              <div class="invalid-feedback">
              Please provide a valid city.
              </div>
            </div>

            <div class="form-group">
              <label for="inputAddress">Deskripsi</label>
              <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>">
            </div>

            <div class="form-group">
              <label for="inputAddress">Link</label>
              <input type="text" class="form-control" id="link" name="link" value="<?= old('link'); ?>">
            </div>

            <input type="submit" name="Input" value="kirim">
      </form>
  </div>
</div>

<?= $this->endSection(); ?>