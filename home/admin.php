<?php
  $data_nama = $_SESSION["ses_nama"];
  $data_level = $_SESSION["ses_level"];

  $sql = $koneksi->query("SELECT COUNT(id_pengguna) as pengguna from tb_pengguna");
    while ($data= $sql->fetch_assoc()) {
      $jml=$data['pengguna'];
  }
?>

<?php
  $sql = $koneksi->query("SELECT SUM(masuk) as tot_masuk  from kas where jenis='Masuk'");
  while ($data= $sql->fetch_assoc()) {
    $masuk=$data['tot_masuk'];
  }

  $sql = $koneksi->query("SELECT SUM(keluar) as tot_keluar  from kas where jenis='Keluar'");
  while ($data= $sql->fetch_assoc()) {
    $keluar=$data['tot_keluar'];
  }

  $saldo= $masuk-$keluar;
?>

<?php


  $sql = $koneksi->query("SELECT COUNT(no) as jumlah  from data_warga");
    while ($data= $sql->fetch_assoc()) {
      $jumlah=$data['jumlah'];
  }

  

  
?>


<div class="row">
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h5>
					<?php echo rupiah($saldo); ?>
				</h5>

				<p>Saldo Kas Iuran</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="?page=rekap_kas" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h5>
					<?php echo ($jumlah); ?>
				</h5>

				<p>Jumlah Warga</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="?page=data_warga" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $jml; ?>
				</h5>

				<p>Pengguna Sistem</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>
			<a href="#" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>