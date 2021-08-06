<?= $this->extend('/layout_sekolah/header','layout_sekolah/footer'); ?>

<?= $this->section('content'); ?>
<style type="text/css">
	table.tableizer-table {
		font-size: 18px;
		border: 1px solid #CCC; 
		font-family: Verdana, Geneva, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}
</style>

<div class="col-md-20 pt-2 p-5">

<h3><i class="fas fa-user-graduate mr-2"></i> Data Siswa SMK NEGERI 1 PANJI </h3><hr>
        <div class="row text-white"></div>



	<table class="tableizer-table">
	<thead><tr class="tableizer-firstrow text-center"><th>NISN</th><th>Nama</th><th>Jenis Kelamin</th><th>TTL</th><th>Alamat</th><th>Jurusan</th></tr></thead><tbody>
	 <tr><td>1231</td><td>Alisia Mulach</td><td>P</td><td>Malang, 30 Maret 2000</td><td>Malang</td><td>Tata Boga</td></tr>
	 <tr><td>1232</td><td>Abimanyu Danendra</td><td>L</td><td>Jakarta, 3 Mei 2000</td><td>Malang</td><td>Tata Boga</td></tr>
	 <tr><td>1233</td><td>Berliana Permatasari</td><td>P</td><td>Palembang, 20 juli 2000</td><td>Malang</td><td>Tata Boga</td></tr>
	 <tr><td>1234</td><td>Bisma Anggara</td><td>L</td><td>Semarang, 15 Januari 2000</td><td>Malang</td><td>Tata Boga</td></tr>
	 <tr><td>1235</td><td>Charissa Putri</td><td>P</td><td>Kendari, 3 Agustus 2000</td><td>Malang</td><td>Akuntansi</td></tr>
	 <tr><td>1236</td><td>Candra Sidarta</td><td>L</td><td>Pekanbaru, 25 Maret 2000</td><td>Malang</td><td>Akuntansi</td></tr>
	 <tr><td>1237</td><td>Deniela Alvarez</td><td>P</td><td>Jakarta, 5 Maret 2000</td><td>Malang</td><td>Akuntansi</td></tr>
	 <tr><td>1238</td><td>Dewa Arta</td><td>L</td><td>Denpasar, 27 Januari 2000</td><td>Malang</td><td>Akuntansi</td></tr>
	 <tr><td>1239</td><td>Eva Mariana</td><td>P</td><td>Ambon, 12 Maret 2000</td><td>Malang</td><td>Akuntansi</td></tr>
	 <tr><td>1240</td><td>Eko Harianto</td><td>L</td><td>Malang, 23 April 2000</td><td>Malang</td><td>TKJ</td></tr>
	 <tr><td>1241</td><td>Fransisca Tobing</td><td>P</td><td>Jambi, 4 September 2000</td><td>Malang</td><td>TKJ</td></tr>
	 <tr><td>1242</td><td>Ferdian Paleka</td><td>L</td><td>Sorong, 2 Oktober 2000</td><td>Malang</td><td>TKJ</td></tr>
	 <tr><td>1243</td><td>Gracee Silalahi</td><td>P</td><td>Pontianak, 22 Maei 2000</td><td>Malang</td><td>TKJ</td></tr>
	 <tr><td>1244</td><td>Geovani Ramadan</td><td>L</td><td>Denpasar, 11 Januari 2000</td><td>Malang</td><td>TKJ</td></tr>
	 <tr><td>1245</td><td>Helena Masrin</td><td>P</td><td>Serang, 19 Juni 2000</td><td>Malang</td><td>RPL</td></tr>
	 <tr><td>1246</td><td>Hendri Julian</td><td>L</td><td>Manado, 2 Mei 2000</td><td>Malang</td><td>RPL</td></tr>
	 <tr><td>1247</td><td>Intan Maharani</td><td>P</td><td>Bandung, 4 Agustus 2000</td><td>Malang</td><td>RPL</td></tr>
	 <tr><td>1248</td><td>Irfan Halim</td><td>L</td><td>Situbondo, 21 Januari 2000</td><td>Malang</td><td>RPL</td></tr>
	 <tr><td>1249</td><td>Jenniver Dunn</td><td>P</td><td>Surabaya, 20 Desember 2000</td><td>Malang</td><td>Perhotelan</td></tr>
	 <tr><td>1250</td><td>Joe Sihombing</td><td>L</td><td>Kediri, 1 November 2000</td><td>Malang</td><td>Perhotelan</td></tr>
	 <tr><td>1251</td><td>Kezia Rolene</td><td>P</td><td>Batu, 14 Januari 2000</td><td>Malang</td><td>Perhotelan</td></tr>
	 <tr><td>1252</td><td>Keanu Angelo</td><td>L</td><td>Denpasar, 3 Oktober 2000</td><td>Malang</td><td>Perhotelan</td></tr>
	</tbody></table>

</form>
</div>
<?= $this->endSection(); ?>