<?= $this->extend('layout_siswa/template'); ?>
<?= $this->section('content'); ?>

<!--ISI-->
<div class="col-md-10">
  <div class="container">
    <h3><i class="fas fa-users mt-5">&nbsp;</i>Diskusi</h3><hr class="bg-dark">
  <a class="btn " style="background-color: #84a9ac" href="/diskusi/create"><i class="fas fa-plus mr-2"></i>diskusi</a>

  <br/><br/>

  <?php if (session()->getFLashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert"><?= session()->getFLashdata('pesan'); ?></div>
  <?php endif; ?>

  <?php foreach ($diskusi as $k) : ?>

  <div class="row">
  <div class="col-md-12">
    <table border="1">
      <div class="card">
        <div class="card-header" style="background-color: #84a9ac"><i class="fas fa-user-circle"></i>&nbsp;<?= $k['nama']; ?></div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p><?= $k['topik']; ?></p>
            <footer class="blockquote-footer">
            <cite title="Source Title"><?= $k['isi']; ?></cite>
            </footer>
            <form action="/diskusi/delete/<?= $k['id']; ?>" method="post">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="delete">
              <button type="submit" class="badge badge-warning text-white float-right ml-1" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
            </form>
            <a href="/diskusi/reply/<?= $k['id']; ?>" class="badge badge-info text-white float-right ml-1"><i class="fas fa-reply" data-toggle="tooltip" title="reply"></i></a>
            </blockquote>
          </div>
        </div><br/>
    </table>
  </div>
  </div>

<?php endforeach; ?>

</div>
<?= $this->endSection(); ?>