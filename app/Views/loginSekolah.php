<?= $this->extend('layout_login/header'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center"><b>Login Sekolah</b></h5>

          <?php 

              $errors = session()->getFlashdata('errors');

          ?>

         <?php if ($errors != null) : ?>
                <div class="alert alert-danger" role="alert">
                    <p class="alert-heading" align="center">Terjadi Kesalahan</p>
                    <hr>
                    <?php 
                        foreach ($errors as $err) {
                            echo $err;
                        }
                    ?>
                </div>
          <?php endif; ?>


          <?php echo form_open('loginSekolah/login'); ?>
            <div class="form-label-group">
              <input type="username" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
              <label for="inputUsername">Username</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
              <label for="inputPassword">Password</label>
            </div>

            <div class="custom-control custom-checkbox mb-3">
              <input type="checkbox" class="custom-control-input" id="customCheck1">
              <label class="custom-control-label" for="customCheck1">Remember password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="input" value="login">Login</button>
            <hr class="my-4">
         <?php echo form_close() ?>

          <!-- <form class="form-signup"> Have you ever register your account?
            <a class="btn btn-lg btn-google d-block text-center mt-2 small" href="registerSekolah.php">Register now</a>
          </form> -->

        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>