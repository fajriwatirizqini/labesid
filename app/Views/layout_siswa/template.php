<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title; ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/logo4.ico"/>

	<!-- STYLES -->
	 <style type="text/css">
      .bg-warna{
        background-color: #10316b;
      }
    </style>
    
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style_admin.css">
    <link rel="stylesheet" type="text/css" href="/css_siswa/fontawesome-free-5.15.1-web/css/all.min.css">
	
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top" style="background-image: linear-gradient(0deg, #202058 -0.29%, #202058 100%); ">
  <img src="/img/logo3.png" width="150px">

  <form action="" method="post" class="form-inline my-2 my-lg-0 ml-auto">
    <input name="caridata" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button name="cari" class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
  </form>

  <div class="icon ml-4">
    <h5>
      <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
      <a href="signInSiswa.php"><i class="fas fa-sign-out-alt mr-3 " data-toggle="tooltip" title="Sign Out"></i></a>
    </h5>
  </div>
</nav>

<!-- Sidebar-->
<div class="row no gutters mt-5">
  <div class="col-md-2 bg-warna mt-1 pr-1 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
            <a href="<?= base_url('/'); ?>" class="nav-link active text-white"><center><i class="fas fa-portrait"></i><br/>Rakas Satrio</center></a>
            <hr class="bg-light">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/konsultasi'); ?>"><i class="fas fa-scroll mr-1"></i> Konsultasi</a>
            <hr class="bg-secondary">
          </li>
           <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/pelatihan'); ?>"><i class="fas fa-chalkboard-teacher mr-1"></i> Pelatihan</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/bursa'); ?>"><i class="fas fa-briefcase mr-1"></i> Bursa Kerja</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/info'); ?>"><i class="fas fa-building mr-1"></i> Info Perusahaan</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/diskusi'); ?>"><i class="fas fa-users mr-1"></i> Diskusi</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>

<?= $this->renderSection('content'); ?>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function previewImg(){
          const cv = document.querySelector('#cv');
          const cvLabel = document.querySelector('.custom-file-label');
          const imgPreview = document.querySelector('.img-preview');

          //ganti url
          cvLabel.textContent = cv.files[0].name;

          //ganti preview
          const filecv = new FileReader();
          filecv.readAsDataURL(cv.files[0]);

          filegambar.onload = function(e){
            imgPreview.src = e.target.result;
          }
        }
    </script>

</body>
</html>