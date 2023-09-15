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
        <h3>Form Edit Data </h3>
    </header>

    <form action="update.php" method="POST">

        <fieldset>
            <p>

                <input type="hidden" name="no_anggota" value="<?php echo $data['no_anggota'] ?>">
            </p>
            <p>
                <label>Nama Anggota:</label>
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
            </p>
            <p>
                <label>Alamat :</label>
                <textarea name="alamat"><?php echo $data['alamat'] ?></textarea>
            </p>
            <p>
                <label>No. HP :</label>
                <input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>">
            </p>

            <p>
                <label>tanggal Bergabung :</label>
                <input type="date" name="tgl_bergabung" value="<?php echo $data['tgl_bergabung'] ?>">
            </p>
            <p>
                <input type="submit" value="Update">
            </p>
        </fieldset>

    </form>
</body>

</html>