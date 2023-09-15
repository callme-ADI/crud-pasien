<html>

<head>
    <title>
    </title>
</head>

<body>
    <header>
        <h3>Form Pasien Baru</h3>
    </header>
    <form action="#" method="POST">
        <table border="1">
            <tr>
                <td><label>No Pinjaman : </label></td>
                <td><input type="char" name="no_pinjaman"></td>
            </tr>
            <tr>
                <td><label>No Anggota :</label></td>
                <td><input type="char" name="no_anggota"></td>
            </tr>
            <tr>
                <td><label>Tanggal Pinjaman :</label></td>
                <td><input type="date" name="tgl_pinjaman"></td>
            </tr>
            <tr>
                <td><label>Nominal :</label></td>
                <td><input type="number" name="nominal"></td>
            </tr>
            <tr>
                <td><label>Tenor :</label></td>
                <td><select name="tenor" id="">
                        <option value="3">3</option>
                        <option value="9">9</option>
                        <option value="15">15</option>
                    </select></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Simpan"></td>

    </form>
    <?php
include 'koneksi.php';
if (isset($_POST['submit'])){
    $no_pinjaman = $_POST['no_pinjaman'];
    $no_anggota = $_POST['no_anggota'];
    $tgl_pinjaman = $_POST['tgl_pinjaman'];
    $nominal = $_POST['nominal'];
    $Tenor = $_POST['tenor'];
    include_once 'koneksi.php';
if ($Tenor == 3 && $nominal <= 1500000){
    $sql = mysqli_query($db, "INSERT INTO pinjaman(no_pinjaman, no_anggota, tgl_pinjaman, nominal, tenor) 
    VALUES('$no_pinjaman', '$no_anggota', '$tgl_pinjaman', '$nominal','$Tenor')");
    echo "BERHASIL";
} elseif ($Tenor == 3 && $nominal > 1500000){
    echo "Tenor 3 bulan maksimal 1500000";
} elseif ($Tenor == 9 && $nominal <= 4500000){
    $sql = mysqli_query($db, "INSERT INTO pinjaman(no_pinjaman, no_anggota, tgl_pinjaman, nominal, tenor) 
    VALUES('$no_pinjaman', '$no_anggota', '$tgl_pinjaman', '$nominal','$Tenor')");
    echo "BERHASIL";
} elseif ($Tenor == 9 && $nominal > 4500000){
    echo "Tenor 9 bulan maksimal 4500000";
} elseif ($Tenor == 15 && $nominal <= 9000000){
    $sql = mysqli_query($db, "INSERT INTO pinjaman(no_pinjaman, no_anggota, tgl_pinjaman, nominal, tenor) 
    VALUES('$no_pinjaman', '$no_anggota', '$tgl_pinjaman', '$nominal','$Tenor')");
    echo "BERHASIL";
} elseif ($Tenor == 15 && $nominal > 9000000){
    echo "tenor 15 bulan maksimal 9000000";
}
}
?>
</body>

</html>