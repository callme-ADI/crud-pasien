<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
</head>

<body>
    <header>
        <h3>Daftar Pasien</h3>
    </header>
    <nav>
        <a href="insert.php">[+] Tambah Baru</a>
    </nav>

    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telf.</th>
                <th>Tanggal Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php

include 'koneksi.php';
$query = "SELECT * FROM anggota";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
  while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $data['no_anggota'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['no_hp'] ?></td>
                <td><?php echo $data['tgl_bergabung'] ?></td>
                <td>
                    <a href="edit.php?no_anggota=<?php echo $data['no_anggota'] ?>">EDIT</a>
                    <a href="delete.php?no_anggota=<?php echo $data['no_anggota'] ?>">HAPUS</a>
                </td>
            </tr>
            <?php }
      } else ?>
            <tr>

            </tr>
        </tbody>
    </table>
</body>