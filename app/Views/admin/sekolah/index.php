<?= $this->extend('layout_admin/template'); ?>

<?= $this->section('content'); ?>

<body>
  <!-- Isi-->
  	<div class="col-md-10 p-5 pt-2">
  		<h3><i class="fas fa-school mr-2"></i> DATA Sekolah</h3><hr style="width:1350px;">
  		<a href="/sekolah/create" class="btn btn-primary mb-3">Tambah Data Sekolah</a>
  		<?php if(session()->getFlashdata('pesan')) : ?>
  		<div class="alert alert-success" role="alert">
		  <?= session()->getFlashdata('pesan'); ?>
		</div>
  		<?php endif; ?>
  		<table class="table">
		  <thead>
		    <tr style="background-color:#dda0dd; ">
		      <th scope="col">#</th>
		      <th scope="col">Nama</th>
		      <th scope="col">NPSN</th>
		      <th scope="col">NSS</th>
		      <th scope="col">Akreditasi</th>
		      <th scope="col">Alamat</th>
		      <th scope="col">Telepon</th>
		      <th scope="col">Email</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $a = 1; ?>
		  	<?php foreach($sekolah as $s) : ?>
		    <tr>
		      <th scope="row"><?= $a++; ?></th>
		      <td><?= $s['Nama']; ?></td>
		      <td><?= $s['NPSN']; ?></td>
		      <td><?= $s['NSS']; ?></td>
		      <td><?= $s['Akreditasi']; ?></td> 
		      <td><?= $s['Alamat']; ?></td>
		      <td><?= $s['Telepon']; ?></td>
		      <td><?= $s['Email']; ?></td>
		      <td><a href="/Sekolah/delete/<?= $s['id']; ?>" class="btn btn-danger mb-2">hapus</a>
	      	  <a href="/Sekolah/edit/<?= $s['id']; ?>" class="btn btn-warning">edit</a></td>
		    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
  	</div>

<?= $this->endSection(); ?>