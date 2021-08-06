<header id="header" class="fixed-top d-flex align-items-center header-transparent ">
  <div class="container d-flex align-items-center">
    <div class="logo mr-auto">
      <a href="welcome_message.php"><img src="img/logo3.png"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="<?= base_url('/'); ?>">Home</a></li>
        <li class="drop-down"><a href="">Student</a>
          <ul>
            <li><a href="<?= base_url('/loginSiswa/'); ?>">Login</a></li>
          </ul>
        </li>
        <li class="drop-down"><a href="">School</a>
          <ul>
            <li><a href="<?= base_url('/loginSekolah/'); ?>">Login</a></li>
          </ul>
        </li>
        <li><a href="#about">About</a></li>
        <li><a href="#pricing">Location</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->