<?= $this->extend('layout_siswa/template'); ?>

<?= $this->section('content'); ?>

<!--CHAT-->
<div class="col-md-10 p-5 pt-2">
<div class="card-header"><i class="fas fa-user-circle"></i>
    Sekolah
  </div>

 <form class="mb-3" style="max-width: 35rem;">
  <p class="card-text"></p>
</form>
      <?php foreach($konsultasi as $a) : ?>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle mb-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $a['pesan']; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="konsultasi/delete/<?= $a['id']; ?>">hapus</a>
            </div>
          </div>
       
      <?php endforeach; ?>

  <div class="card-footer text-muted">
    <form action="/konsultasi/save" method="post">
      <?= csrf_field(); ?>
      <div class="form-row">
      <div class="form-group col-md-11">
      <input type="text" class="form-control" id="pesan" placeholder="Masukkan kata..." name="pesan" autofocus value="<?= old('pesan'); ?>">
      </div>
      <div class="form-group col-md-1">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-paper-plane"></i></button>
      </div>
      </div>          
    </form>
  </div>
</div>
 <?= $this->endSection(); ?>