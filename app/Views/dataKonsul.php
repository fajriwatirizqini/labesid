<?= $this->extend('/layout_sekolah/header','layout_sekolah/footer'); ?>

<?= $this->section('content'); ?>
    <style type="text/css">
          .bg-warna{
            background-color: #ffa62b;
          }
          .bg-warna1{
            background-color: #03c4a1;
          }
    </style>

    <!--ISI-->
<div class="col-md-10 p-5 pt2">
  <h3><i class="fas fa-scroll"></i> Data Konsultasi SMK NEGERI 1 PANJI </h3><hr>
          <div class="row text-white"></div>

<table class="table">
  <thead class="table-secondary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Konsultasi</th>
    </tr>
  </thead>

<?php $i = 1; ?>
<?php foreach ($datakonsul as $o) : ?>
  <tbody>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $o ['nim']; ?></td>
      <td><?= $o ['nama']; ?></td>
      <td><a href="chat/"><i class="fas fa-comments"></i></a></td>
    </tr>
  </tbody>

<?php endforeach; ?>
</table>
    
        
  </body>
</html>

<?= $this->endSection(); ?>