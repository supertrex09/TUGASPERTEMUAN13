<?php
include('config.php');

$sql = "SELECT * FROM calon_siswa";
$result = $conn->query($sql);

// Fungsi untuk menghapus satu data siswa berdasarkan ID
if (isset($_GET['hapus_id'])) {
    $id = $_GET['hapus_id'];

    $sql_delete = "DELETE FROM calon_siswa WHERE id = $id";

    if ($conn->query($sql_delete) === TRUE) {
        echo "Siswa dengan ID $id berhasil dihapus";
    } else {
        echo "Error: " . $sql_delete . "<br>" . $conn->error;
    }
}

// Fungsi untuk menghapus semua data siswa
if (isset($_GET['hapus_semua'])) {
    $sql_delete_all = "DELETE FROM calon_siswa";

    if ($conn->query($sql_delete_all) === TRUE) {
        echo "Semua data siswa berhasil dihapus";
    } else {
        echo "Error: " . $sql_delete_all . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h1>Daftar Siswa</h1>
    
    <!-- Tambahkan tombol untuk menghapus semua data -->
    <a href="list-siswa.php?hapus_semua=1" class="btn-hapus-semua">Hapus Semua</a>
    
    <table>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Aksi</th>
            <th>Foto Profil</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['jenis_kelamin'] . "</td>";
                echo "<td>" . $row['agama'] . "</td>";
                echo "<td>" . $row['sekolah_asal'] . "</td>";
                echo "<td><a href='list-siswa.php?hapus_id=" . $row['id'] . "' class='btn-hapus'>Hapus</a></td>";
                echo "<td><img src='data:image/png;base64,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' alt='Foto Profil' width='250' height='250'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada data siswa.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
