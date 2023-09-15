<!DOCTYPE html>
<html>

<head>
    <title>
    </title>
</head>

<body>

    <header>
        <h3>Form anggota Baru</h3>
    </header>

    <form action="create.php" method="POST">

        <fieldset>
            <p>
                <label>No Anggota : </label>
                <input type="char" name="no_anggota">
            </p>
            <p>
                <label>Nama :</label>
                <input type="text" name="nama">
            </p>
            <p>
                <label>Alamat :</label>
                <textarea type="text" name="alamat" cols="30" rows="10"></textarea>
            </p>

            <p>
                <label>No. HP :</label>
                <input type="varchar" name="no_hp">
            </p>

            <p>
                <label>Tsnggsl Bergabung :</label>
                <input type="date" name="tgl_bergabung">
            </p>
            <p>
                <input type="submit" value="Simpan">
            </p>
        </fieldset>

    </form>
</body>

</html>