<?= $this->extend('layout_siswa/template'); ?>

<?= $this->section('content'); ?>
<!--WELCOME-->
<div class="col-md-10 p-5 ">
  <div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Profil</a>
        </li>
      </ul>
    </div>
    
    <div class="card-body">
      <h5 class="card-title">
        <center>
          <img src="img/PICT/icon.png" class="img-top" height="150px" width="150px">
        </center>
        <hr class="bg-primary"><br>
      </h5>

      <form>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="rakassatrio" value="rakassatrio">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" value="rakas">
          </div>
        </div>
      </form>
    </div>
  </div>

<?= $this->endSection(); ?>
