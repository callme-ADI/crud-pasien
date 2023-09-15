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
    <a href="Input.php">[+] Tambah Baru</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>no_anggota</th>
            <th>nama</th>
            <th>alamat</th>
            <th>no_hp.</th>
            <th>tgl_bergabung</th>
        </tr>
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
    </table>
</body>

</html>