<?= $this->extend('layout_admin/template'); ?>

<?= $this->section('content'); ?>

<?php 
//menyambungkan ke database
$conn = mysqli_connect("localhost","root","","labesid");
// mengambil data dari tabel
$result = mysqli_query($conn, "SELECT * FROM dashboard");
//ambil data dari tabel
$dashboard = mysqli_fetch_row($result);
//grafik
$jumlah_siswa  = mysqli_query($conn, "SELECT jumlah_siswa FROM grafik_admin order by id asc");
$bulan       = mysqli_query($conn, "SELECT bulan FROM grafik_admin order by id asc");

?>

<script src="admin_labesid/js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 40%;
                margin: 15px auto;
            }
            .card-header {
              font-size: 20px;
              font-family: "Open Sans", sans-serif;
            }
    </style>

      <!-- Isi-->
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

        <div class="row text-white">
          <div class="card ml-5" style="width: 17rem; background-color: #f08080;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-school mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah Siswa</h5>
              <div class="display-4"> 20</div>
              <a href="/dataadmin/dataSiswa_admin"><p class="card-text text-white"><a href="/dataadmin/dataSiswa_admin" class="text-white">Lihat Detail</a><i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card ml-5" style="width: 17rem; background-color: #dda0dd;">
            <div class="card-body">
              <div class="card-body-icon">
               <i class="fas fa-school mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah Sekolah</h5>
              <div class="display-4">1 </div>
              <a href="<?= base_url('/sekolah/'); ?>"><p class="card-text text-white"><a href="<?= base_url('/sekolah/'); ?>" class="text-white">Lihat Detail</a><i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card ml-5" style="width: 17rem; background-color: #8fbc8f;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-building mr-2"></i>
              </div>
              <h5 class="card-title">Jumlah Perusahaan</h5>
              <div class="display-4">4 </div>
              <a href="/dataperusahaan/"><p class="card-text text-white"><a href="/dataperusahaan" class="text-white" >Lihat Detail</a><i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
        </div>

        <br><br>
        <!-- grafik -->
        <div class="card text-center">
          <div class="card-header" style="background-color: #e0ffff;">
            Grafik Jumlah Siswa yang Mengambil Program BKK
          </div>
          <div class="card-body">
            <h5 class="card-title">
              <div class="container">
                <canvas id="barchart" width="100" height="100"></canvas>
                </div>
            </h5>
          </div>
        </div>
      </div>
    </body>

  <script  type="text/javascript">
  var ctx = document.getElementById("barchart").getContext("2d");
  var data = {
            labels: [<?php while ($p = mysqli_fetch_array($bulan)) { echo '"' . $p['bulan'] . '",';}?>],
            datasets: [
            {
              label: "Jumlah Siswa",
              data: [<?php while ($p = mysqli_fetch_array($jumlah_siswa)) { echo '"' . $p['jumlah_siswa'] . '",';}?>],
              backgroundColor: [
                '#ffc0cb',
                '#add8e6',
                '#90ee90',
                '#fffacd',
                '#deb887'
              ]
            }
            ]
            };

  var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
            legend: {
              display: false
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>



<?= $this->endSection(); ?>
