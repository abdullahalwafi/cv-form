<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendataan Mahasiswa</title>
</head>

<body>
    <main style="margin: auto 250px; border: 1px solid black; padding-bottom:50px">

        <div style="display: flex; justify-content:center">
            <img src="logo.png" alt="" width="100">
            <h3>FORM PENDATAAN MAHASISWA <br> SISTEM INFORMASI</h3>
        </div>
        <hr>
        <div style="display: flex; justify-content:center">
            <?php if (isset($_GET['kirim'])) { ?>
                <fieldset style="border: 1px solid black; border-radius:20px; height:100%">
                    <legend>Hasil Input</legend>
                    <table cellpadding="10">
                        <tr>
                            <td><label for="nip">Nomor Pokok Mahasiswa</label></td>
                            <td>:</td>
                            <td><?php echo $_GET['nip'] ?></td>
                        </tr>
                        <tr>
                            <td><label for="nama">Nama Mahasiswa</label></td>
                            <td>:</td>
                            <td><?php echo $_GET['nama'] ?></td>
                        </tr>
                        <tr>
                            <td><label for="alamat">Alamat</label></td>
                            <td>:</td>
                            <td><?php echo $_GET['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td><label for="gender">Jenis Kelamin</label></td>
                            <td>:</td>
                            <td><?php echo $_GET['gender'] ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;"><label for="hobby">Hobby</label></td>
                            <td style="vertical-align: top;">:</td>
                            <td>
                                <?php
                                foreach ($_GET['hobby'] as $key) {
                                    echo "$key <br>";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="komentar">Komentar</label></td>
                            <td>:</td>
                            <td><?php echo $_GET['komentar'] ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <a style="text-decoration: none;color:antiquewhite; border: 1px solid black; padding:7px 100px; background-color:mediumblue; border-radius:10px; text-align:center" href="1.php">Kembali ke Form</a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            <?php } else { ?>
                <fieldset style="border: 1px solid black; border-radius:20px; height:100%">
                    <legend>Form Input</legend>
                    <form method="GET">
                        <table cellpadding="10">
                            <tr>
                                <td><label for="nip">Nomor Pokok Mahasiswa</label></td>
                                <td>:</td>
                                <td><input type="number" name="nip" required></td>
                            </tr>
                            <tr>
                                <td><label for="nama">Nama Mahasiswa</label></td>
                                <td>:</td>
                                <td><input type="text" name="nama" required></td>
                            </tr>
                            <tr>
                                <td><label for="alamat">Alamat</label></td>
                                <td>:</td>
                                <td><input type="text" name="alamat" required></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;"><label for="gender">Jenis Kelamin</label></td>
                                <td style="vertical-align: top;">:</td>
                                <td>
                                    <input type="radio" name="gender" value="Pria"> Pria <br>
                                    <input type="radio" name="gender" value="Wanita"> Wanita
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;"><label for="hobby">Hobby</label></td>
                                <td style="vertical-align: top;">:</td>
                                <td>
                                    <input type="checkbox" name="hobby[]" value="Membaca"> Membaca <br>
                                    <input type="checkbox" name="hobby[]" value="Memancing"> Memancing <br>
                                    <input type="checkbox" name="hobby[]" value="Lain - lain"> Lain - lain
                                </td>
                            </tr>
                            <tr>
                                <td><label for="komentar">Komentar</label></td>
                                <td>:</td>
                                <td><textarea name="komentar" id="" cols="22" required></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" required></td>
                                <td>
                                    <input type="submit" value="Kirim" name="kirim">
                                    <input type="reset" value="Reset">
                                </td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            <?php } ?>
        </div>
    </main>
</body>

</html>