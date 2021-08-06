<?= $this->extend('/layout_sekolah/header')?>

<?= $this->section('content'); ?>
<style type="text/css">
      .bg-color{
        background-color: #f64b3c;}
      .bg-color1{
        background-color: #f7ca44;}
      .bg-color2{
        background-color: #76a21e;}
      .bg-color3{
        background-color: #4592af;}
      .bg-color4{
        background-color: #698474;}
    </style>

    <!-- Isi-->
      <div class="col-md-9 p-5 pt-2">

        <h3><i class="fas fa-school"></i> SMK NEGERI 1 PANJI </h3><hr>

        <div class="row text-white">
          
          <div class="card bg-color ml-5" style="width: 25rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-user-graduate mr-2"></i>
              </div>
              <h5 class="card-title"> Data Siswa </h5>
              <div class="display-4"> 2500 </div>
              <a href="/datasiswa"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-color1 ml-3" style="width: 25rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-scroll"></i>
              </div>
              <h5 class="card-title"> Data Konsultasi </h5>
              <div class="display-4"> 500 </div>
              <a href="/datakonsul"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>


        <div>
          <h1></h1>
           <div class="row text-white">
          
          <div class="card bg-color2 ml-5" style="width: 25rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <h5 class="card-title"> Pelatihan Siswa </h5>
              <div class="display-4"> 2500 </div>
              <a href="/datapelatihan"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-color3 ml-3" style="width: 25rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-building mr-2"></i>
              </div>
              <h5 class="card-title"> Perusahaan Mitra </h5>
              <div class="display-4"> 500 </div>
              <a href="/perusahaan"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>

          <div>
          <h1></h1>
           <div class="row text-white">
          
          <div class="card bg-color4 ml-5" style="width: 25rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-briefcase"></i>
              </div>
              <h5 class="card-title"> Data Alumni </h5>
              <div class="display-4"> 2500 </div>
              <a href="/dataalumni"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>


          </div>  
         </div>
        </div>
     </div>
</div>
<?= $this->endSection(); ?>