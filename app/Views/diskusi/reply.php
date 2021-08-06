<?= $this->extend('layout_siswa/template'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt-2">
<h3><i class="fas fa-users"></i>Reply Data Diskusi</h3><hr>

<form action="/diskusi/save" method="post">
  <?= csrf_field(); ?>
          <div class="form-group">
              <label for="inputAddress">Username</label>
              <input type="text" class="form-control <?= ($validation->hasError('nama'))? 'is-invalid' : ''; ?>" id="nama" placeholder="" name="nama" autofocus value="<?= old('nama'); ?>">
                <div id="validationServer03Feedback" class="invalid-feedback"><?= $validation->getError('nama'); ?></div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Topik</label>
              <input type="text" class="form-control" id="topik" placeholder="" name="topik" value="<?= old('topik'); ?>">
            </div>
            <div class="form-group">
              <label for="inputAddress">Isi</label>
              <input type="text" class="form-control" id="isi" placeholder="" name="isi" value="<?= old('isi'); ?>">
            </div>
            <input type="submit" name="Input" value="kirim">
      </form>
</div>

<?= $this->endSection(); ?>