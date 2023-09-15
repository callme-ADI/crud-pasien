<?php
include 'koneksi.php';
$no_anggota = $_POST['no_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_bergabung = $_POST['tgl_bergabung'];
$sql = "INSERT INTO anggota VALUES('$no_anggota', '$nama', '$alamat', '$no_hp','$tgl_bergabung')";
if (mysqli_query($db, $sql)) {
  header('Location: read.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
?>