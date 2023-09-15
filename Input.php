<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
</head>

<body>
    <header>
        <h3>Form Pasien Baru</h3>
    </header>
    <form action="create.php" method="POST">
        <table border="1">
            <tr>
                <td><label>No Anggota : </label></td>
                <td><input type="char" name="no_anggota"></td>
            </tr>
            <tr>
                <td><label>Nama :</label></td>
                <td><input type="varchar" name="nama"></td>
            </tr>
            <tr>
                <td><label>Alamat :</label></td>
                <td><textarea type="text" name="alamat" cols="30" rows="10"></textarea></td>
            </tr>

            <tr>
                <td><label>No. HP :</label></td>
                <td><input type="varchar" name="no_hp"></td>
            </tr>

            <tr>
                <td><label>Tanggal Bergabung :</label></td>
                <td><input type="date" name="tgl_bergabung"></td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>