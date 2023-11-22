<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $foto_profil = ''; // Variabel untuk menyimpan path foto profil

    if ($_FILES['foto_profil']['error'] == UPLOAD_ERR_OK) {
        $nama_file = $_FILES['foto_profil']['name'];
        $lokasi_file = $_FILES['foto_profil']['tmp_name'];
        $folder_upload = "C:/xampp/htdocs/profil_images/";

        // Pindahkan file ke lokasi yang ditentukan
        if (move_uploaded_file($lokasi_file, $folder_upload . $nama_file)) {
            $foto_profil = $folder_upload . $nama_file; // Simpan lokasi file ke database
        } else {
            echo "Gagal mengunggah file.";
        }
    }

    // Sisipkan $foto_profil ke dalam query INSERT INTO
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, foto_profil) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$foto_profil')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
