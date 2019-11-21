<?php

include "koneksi.php";

$koneksi->query("DELETE FROM tbl_mhs WHERE nim_mahasiswa=".$_GET['nim']);
?>


<script>
	documnet.location ='data_mahasiswa.php'
</script>