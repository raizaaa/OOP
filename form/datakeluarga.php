<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Latihan 1</title>
    </head>

    <body>
        <fieldset>
        <legend>Anggota Keluarga</legend>
        <form action="" method="post">
        <label for="">Jumlah Anggota Keluarga</label>
        <input type="number" name="jml" min="1" required><br>
        <input type="submit" name="submit" value="simpan"><hr>
        </form>

        <form action="datakeluargapro.php" method="post">
        <?php
        if (isset($_POST['submit'])) {
            $jml_form = $_POST['jml'];
            for ($a=0; $a < $jml_form; $a++) { ?>
                <label for=>Nama</label>
                <input type="text" name="nama[]" required>
                <label for=>NIK</label>
                <input type="number" name="nik[]" required>
                <label for=>Alamat</label>
                <input type="textarea" name="alamat[]" required>
                <label for=>Umur</label>
                <input type="number" name="umur[]" required><br><br>
           <?php } ?>
           <input type="submit" name="sbm" value="Simpan">
           <input type="reset" value="Reset">
        </form>
        <?php } ?>
        </fieldset>
    </body>

    </html>
