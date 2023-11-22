<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Form Pendaftaran Siswa</h1>
        <form action="proses-pendaftaran.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-input" required><br>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" class="form-input" required><br>

            <label>Jenis Kelamin:</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" class="radio-input" required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" class="radio-input" required> Perempuan<br>

            <label for="agama">Agama:</label>
            <input type="text" id="agama" name="agama" class="form-input" required><br>

            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-input" required><br>
            <label for="foto_profil">Foto:</label>
            <input type="file" name="foto_profil">
            <input type="submit" value="Daftar" class="form-button">

            

        </form>
    </div>
</body>
</html>
