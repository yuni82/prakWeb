<?php
include('koneksi.php');
 
if(isset($_GET['id'])){
	$nim = $_GET['id'];
	
	$cek = mysqli_query($koneksi, "SELECT * FROM 'tb_mhs' WHERE 'nim_mahasiswa'=$nim") or die(mysqli_error($koneksi));
	
	if(mysqli_num_rows($cek) > 0){
		$del = mysqli_query($koneksi,  "DELETE FROM `tb_mhs` WHERE `tb_mhs`.`nim_mahasiswa` = $nim") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="home.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="home.php";</script>';
		}
	}else{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="home.php";</script>';
	}
}else{
	echo '<script>alert("ID tidak ditemukan di database."); document.location="home.php";</script>';
}
 
?>