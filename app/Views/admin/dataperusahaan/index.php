<?= $this->extend('layout_admin/template'); ?>

<?= $this->section('content'); ?>

<title>Data Perusahaan</title>
  </head>
  <body>
  <!-- Isi-->
  <div class="col-md-10 p-5 pt-2">
  	<h3><i class="fas fa-building mr-2"></i> DATA PERUSAHAAN</h3><hr style="width:1350px;">
  	<a href="/dataperusahaan/create" class="btn btn-primary mb-3">Tambah Data Perusahaan</a> 
  	<?php if(session()->getFlashdata('pesan')) : ?>	
  		<div class="alert alert-success" role="alert">
		  <?= session()->getFlashdata('pesan'); ?>
		</div>
 	<?php endif; ?>
	  <table class="table">
	  <thead>
	    <tr style="width: 17rem; background-color: #8fbc8f;">
	      <th scope="col">No</th>
	      <th scope="col">Logo</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Kode</th>
	      <th scope="col">Alamat</th>
	      <th scope="col">Email</th>
	      <th scope="col">Telepon</th>
	      <th scope="col">Situs</th>
	      <th scope="col">Lowongan</th>	
	      <th scope="col">Aksi</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $i = 1; ?>
	  	<?php foreach($perusahaan as $k) : ?>
	    <tr>
	      <th scope="row"><?= $i++; ?></th>
	      <td><img src="/img/<?= $k['Logo']; ?>" class="perusahaan"></td>
	      <td><?= $k['Nama']; ?></td>
	      <td><?= $k['Kode']; ?></td>
	      <td><?= $k['Alamat']; ?></td>
	      <td><?= $k['Email']; ?></td>
	      <td><?= $k['Telepon']; ?></td>
	      <td><?= $k['Situs']; ?></td>
	      <td><?= $k['Lowongan']; ?></td>
	      <td><a href="/DataPerusahaan/delete/<?= $k['id']; ?>" class="btn btn-danger mb-2">hapus</a>
	      	  <a href="/DataPerusahaan/edit/<?= $k['id']; ?>" class="btn btn-warning">edit</a></td>
	    </tr>
	<?php endforeach; ?>
	  </tbody>
	</table>
</div>



<?= $this->endSection(); ?>