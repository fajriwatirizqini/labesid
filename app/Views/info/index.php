<?= $this->extend('layout_siswa/template'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt-2">
	<h3><i class="fas fa-building mr-2"></i> Perusahaan Mitra SMK NEGERI 1 PANJI </h3><hr>
        <div class="row text-white"></div>
    <br>

   <?php foreach($perusahaan as $a) : ?>

		<div class="media">
		  <img src="admin_sekolah/<?= $a['gambar']; ?>" class="mr-3" alt="..." heigh="150" width="150">
			<div class="media-body">
			    <h5 class="mt-0"><?= $a['nama']; ?></h5>
			    <p class="card-text"><?= $a['deskripsi']; ?></p>
			    <div class="card-body">
				    <a href="<?= $a['link']; ?>" class="card-link"><i class="fas fa-link"></i></a>
				</div>
			</div>
		</div>
		<hr/>
	<?php endforeach; ?>
</div>


<?= $this->endSection(); ?>