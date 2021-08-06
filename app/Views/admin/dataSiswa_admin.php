<?= $this->extend('/layout_admin/template'); ?>

<?= $this->section('content'); ?>

<style type="text/css">
  table.tableizer-table {
        font-size: 14px;
        border: 1px solid #CCC; 
        font-family: Arial, Helvetica, sans-serif;
      } 
      .tableizer-table td {
        background-color: #fffafa;
        padding: 4px;
        margin: 3px;
        border: 1px solid #CCC;
      }
      .tableizer-table th {
        background-color: #f08080; 
        color: #FFF;
        font-weight: bold;
      }
</style>

      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-user-graduate mr-2"></i> DATA SISWA</h3>
        <hr>
          <tbody>

          <table class="tableizer-table">
          <thead><tr class="tableizer-firstrow text-center"><th>NISN</th><th>Nama</th><th>Jenis Kelamin</th><th>TTL</th><th>Alamat</th><th>Jurusan</th></tr></thead><tbody>
           <tr><td>1021</td><td>Abi Muhammad</td><td>L</td><td>Surabaya, 2 Februari 2001 </td><td>Malang</td><td>Bisnis Manajemen</td></tr>
           <tr><td>1022</td><td>Akil Ramadhan</td><td>L</td><td>Malang, 24 Januari 2001</td><td>Malang</td><td>Bisnis Manajemen</td></tr>
           <tr><td>1023</td><td>Amelia Putri</td><td>P</td><td>Malang, 12 April 2001</td><td>Malang</td><td>Bisnis Manajemen</td></tr>
           <tr><td>1024</td><td>Anggia Lestari</td><td>P</td><td>Bogor, 20 Agustus 2001</td><td>Malang</td><td>Bisnis Manajemen</td></tr>
           <tr><td>1025</td><td>Bella Saskia</td><td>P</td><td>Jakarta, 23 Oktober 2001</td><td>Malang</td><td>Bisnis Manajemen</td></tr>
           <tr><td>1026</td><td>Bintang Oktavian</td><td>L</td><td>Bandung, 1 Oktober 2001</td><td>Malang</td><td>Akutansi </td></tr>
           <tr><td>1027</td><td>Chika Pratiwi</td><td>P</td><td>Bandung, 18 Juli 2001</td><td>Malang</td><td>Akutansi </td></tr>
           <tr><td>1028</td><td>Denis Ahmad </td><td>L</td><td>Surabaya, 5 Maret 2001</td><td>Malang</td><td>Akutansi </td></tr>
           <tr><td>1029</td><td>Dwi Cahaya </td><td>P</td><td>Malang, 7 April 2001</td><td>Malang</td><td>Akutansi </td></tr>
           <tr><td>1030</td><td>Fiona Permata</td><td>P </td><td>Bogor, 24 November 2001</td><td>Malang</td><td>Teknik Informatika</td></tr>
           <tr><td>1031</td><td>Fito Firmansyah</td><td>L</td><td>Malang, 30 Januari 2001</td><td>Malang</td><td>Teknik Informatika</td></tr>
           <tr><td>1031</td><td>Gilang erlangga</td><td>L</td><td>Malang, 16 Maret 2001</td><td>Malang</td><td>Teknik Informatika</td></tr>
           <tr><td>1032</td><td>Jeno Lee</td><td>L</td><td>Bandung, 23 April 2001</td><td>Malang</td><td>Teknik Informatika</td></tr>
           <tr><td>1033</td><td>Keanu celo</td><td>L</td><td>Malang, 12 Februari 2001</td><td>Malang</td><td>Teknik Elektronika</td></tr>
           <tr><td>1034</td><td>Kinandra Putra</td><td>L</td><td>Surabaya, 28 Januari 2001</td><td>Malang</td><td>Teknik Elektronika</td></tr>
           <tr><td>1034</td><td>Lathif Hendra</td><td>L</td><td>Malang, 4 Maret 2001</td><td>Malang</td><td>Teknik Elektronika</td></tr>
           <tr><td>1035</td><td>Lia Fitriani</td><td>P</td><td>Malang, 7 September 2001</td><td>Malang</td><td>Pariwisata</td></tr>
           <tr><td>1036</td><td>Mark Lee</td><td>L</td><td>Jakarta, 2 Agustus 2001</td><td>Malang</td><td>Pariwisata</td></tr>
           <tr><td>1037</td><td>Milea Sabila</td><td>P</td><td>Malang, 10 Juni 2001</td><td>Malang</td><td>Pariwisata</td></tr>
           <tr><td>1038</td><td>Na Jaemin </td><td>L</td><td>Bandung, 13 Agustus 2001</td><td>Malang</td><td>Pariwisata</td></tr>
          </tbody></table>

      </div>

<?= $this->endSection(); ?>