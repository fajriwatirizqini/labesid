<?= $this->extend('layout_sekolah/header'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt-2">
	<h3><i class="fas fa-building mr-2"></i> Perusahaan Mitra SMK NEGERI 1 PANJI </h3><hr>
        <div class="row text-white"></div>

	<a class="btn btn-primary" href="/perusahaan/create"><i class="fas fa-plus mr-2"></i>Tambah Perusahaan Mitra</a>
    <br>
    <br>

   <?php foreach($perusahaan as $a) : ?>

		<div class="media">
		  <img src="admin_sekolah/<?= $a['gambar']; ?>" class="mr-3" alt="..." heigh="150" width="150">
			<div class="media-body">
			    <h5 class="mt-0"><?= $a['nama']; ?></h5>
			    <p class="card-text"><?= $a['deskripsi']; ?></p>
			    <div class="card-body">
				    <a href="<?= $a['link']; ?>" class="card-link"><i class="fas fa-link"></i></a>
				    <form action="/Perusahaan/delete/<?= $a['id']; ?>" method="post">
			              <?= csrf_field(); ?>
			              <input type="hidden" name="_method" value="delete">
			              <button type="submit" class="badge badge-danger text-white float-right ml-1" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
			        </form>
				</div>
			</div>
		</div>
		<hr/>
	<?php endforeach; ?>
</div>


<?= $this->endSection(); ?>