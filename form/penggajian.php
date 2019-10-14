<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <fieldset>
    <legend>
    Data Karyawan
    </legend>
    <table>
    <form action="penggajianpro.php" method="Post">
        <tr>
        <td><label for="">Nama</label></td>
        <td><input type="text" name="nama" required></td>
        </tr>
        
        <tr>
        <td><label for="">Nip</label></td>
        <td><input type="number" name="nip" required></td>
        </tr>

        <tr>
        <td><label for="">Alamat</label></td>
        <td><input type="textarea" name="alamat" required></td>
        </tr>

        <tr>
        <td><label for="">Hari Bekerja</label></td>
        <td><input type="number" min="0" max="30" name="habek" required></td>
        </tr>
        
        <tr>
        <td><input type="submit" name="simpan" value="simpan"></td>
        </tr>
    </form>
    </table>
    </fieldset>

</body>
</html>