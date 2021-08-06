<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <meta name="description" content="The small framework with powerful features">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="img/img.png">

  <!-- STYLES -->
   <style type="text/css">
      .bg-warna{
        background-color: #394867;
      }
    </style>
    
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style_admin.css">
    <link rel="stylesheet" type="text/css" href="/admin_sekolah/css_siswa/fontawesome-free-5.15.1-web/css/all.min.css">
  
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top" style="background: linear-gradient(0deg, #202058 -0.29%, #202058 100%); ">
      <img src="/img/logo3.png" width="150px">
      <form action="" method="post" class="form-inline my-2 my-lg-0 ml-auto">
        <input name="caridata" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button name="cari" class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>

      <div class="icon ml-4">
        <h5>
          <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notification"></i>
          <a href="signInSekolah.php"><i class="fas fa-sign-out-alt mr-3 " data-toggle="tooltip" title="Sign Out"></i></a>
        </h5>
      </div>
      
    </nav>
    
    <!-- Sidebar-->
    <div class="row no gutters mt-5">
      <div class="col-md-2.5 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="<?= base_url('/homeSekolah'); ?>"><center><i class="fas fa-school"></i> 
              <div> ADMIN SEKOLAH</i></a></center>
            <hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/dataSiswa'); ?>">
              <i class="fas fa-user-graduate mr-1"></i> Data Siswa </a>
            <hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/dataAlumni'); ?>">
              <i class="fas fa-briefcase mr-1"></i> Data Alumni </a>
            <hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/dataPelatihan/'); ?>">
              <i class="fas fa-chalkboard-teacher mr-1"></i> Pelatihan Siswa </a>
            <hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/dataKonsul/'); ?>">
              <i class="fas fa-scroll mr-1"></i> Data Konsultasi </a>
            <hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('/perusahaan'); ?>">
              <i class="fas fa-building mr-1"></i> Perusahaan Mitra </a>
            <hr class="bg-secondary">
          </li>

        </ul>
      </div>

<?= $this->renderSection('content'); ?>
<?= $this->include('layout_sekolah/footer'); ?>