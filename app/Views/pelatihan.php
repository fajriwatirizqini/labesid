<?= $this->extend('layout_siswa/template'); ?>

<?= $this->section('content'); ?>

<div class="col-md-10 p-5 pt2">
  <h3><i class="fas fa-chalkboard-teacher"></i> Pelatihan Siswa SMK NEGERI 1 PANJI </h3><hr>
        <div class="row text-white"></div>

  <div class="form-row">
  <div class="col-md-12">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="https://www.bing.com/videos/search?q=unpas&&view=detail&mid=A9C4B92A583554ECEDF1A9C4B92A583554ECEDF1&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dunpas%26FORM%3DHDRSC3">
        <img src="/img/PICT/coding.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><bold>TUTORIAL PHP</bold></h5>
          <p><bold>Belajar PHP untuk PEMULA | WEB HOSTING & DOMAIN NAME GRATIS</bold></p>
        </div>
      </a>
    </div>

    <div class="carousel-item">
      <a href="https://www.bing.com/videos/search?q=akuntansi&&view=detail&mid=666178C3156011AB78F4666178C3156011AB78F4&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dakuntansi%26qs%3Dn%26form%3DQBVDMH%26sp%3D-1%26pq%3Dakuntansi%26sc%3D8-9%26sk%3D%26cvid%3D41F485EC97DC41898443BA4180DE15E7">
        <img src="/img/PICT/bisnis2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><font color="black"><bold>Belajar Akuntansi</bold></font></h5>
          <p><font color="black"><bold>Akuntansi Keuangan Daerah (ASET TETAP)</bold></font></p>
        </div>
      </a>
    </div>

    <div class="carousel-item">
      <a href="https://www.bing.com/videos/search?q=masak&&view=detail&mid=485A3E3AF7E7C2F7976C485A3E3AF7E7C2F7976C&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dmasak%26qs%3Dn%26form%3DQBVDMH%26sp%3D-1%26pq%3Dmasak%26sc%3D8-5%26sk%3D%26cvid%3D010C0E26102944BCB46A14E966DA7973">
        <img src="/img/PICT/memasak.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><font color="black"><bold>Tutorial Memasak</bold></font></h5>
          <p><font color="black"><bold>Resep Shabu-shabu Rumahan</bold></font></p>
        </div>
      </a>
    </div>
  </div>


  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

  <br/><br/>

  <div class="form-row">
  <div class="form-group col-md-4">
    <iframe width="300" height="200" src="https://www.youtube.com/embed/XQUDACV04p0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="form-group col-md-4">
   <iframe width="300" height="200" src="https://www.youtube.com/embed/Okb5xYjQ58U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="form-group col-md-4">
    <iframe width="300" height="200" src="https://www.youtube.com/embed/K7KwJVsBZjo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  </div>

<hr>


<br>

<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Lembaga Pelatihan</th>
      <th scope="col">Bidang</th>
      <th scope="col">Level</th>
      <th scope="col">Peserta</th>
      <th scope="col">Website</th>
      <th scope="col">Informasi Detail</th>
    </tr>
  </thead>

  <?php $i = 1; ?>
  <?php foreach ($pelatihan as $l) : ?>
  <tr>
    <td scope="col"><?= $i++; ?></td>
    <td scope="col"><?= $l ['lembaga']; ?></td>
    <td scope="col"><?= $l ['bidang']; ?></td>
    <td scope="col"><?= $l ['level']; ?></td>
    <td scope="col"><?= $l ['peserta']; ?></td>
    <td scope="col"><a href="<?= $l ['link']; ?>"><center><i class="fas fa-globe-europe"></i></center></a></td>
    <td scope="col"><?= $l ['informasi']; ?></td>
  </tr>
  <?php endforeach; ?>
  
</table>


</div>
 <?= $this->endSection(); ?>