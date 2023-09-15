<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
</head>

<body>
    <?php
    include 'koneksi.php';
    $no_anggota = $_GET['no_anggota'];
    $query = "SELECT * FROM anggota WHERE no_anggota = '$no_anggota'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    }
    ?>
    <header>
        <h3>Form Edit Data Pasien </h3>
    </header>
    <form action="update.php" method="POST">
        <table border="1">
            <tr>
                <td></td>
                <td><input type="hidden" name="no_anggota" value="<?php echo $data['no_anggota'] ?>"></td>
            </tr>
            <tr>
                <td><label>Nama Pasien:</label></td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td><label>Alamat :</label></td>
                <td><textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td><label>No. HP :</label></td>
                <td><input type="varchar" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>
            </tr>
            <tr>
                <td><label>tgl bergabung:</label></td>
                <td><input type="date" name="tgl_bergabung" value="<?php echo $data['tgl_bergabung'] ?>"></td>
            <tr>
        </table>
        <input type="submit" value="Update">
    </form>
</body>

</html>