<?php
include 'koneksi.php';

$no_anggota = $_POST['no_anggota'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_bergabung = $_POST['tgl_bergabung'];


$sql = "UPDATE anggota SET nama='$nama',tgl_bergabung='$tgl_bergabung',no_hp='$no_hp',alamat='$alamat' WHERE no_anggota ='$no_anggota'";
if (mysqli_query($db, $sql)) {
  header('Location: Read.php?status=sukses');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
?>