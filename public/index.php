<?php
require "../config/Database.php";
require "../models/MahasiswaRepository.php";

$db = new Database();
$pdo = $db->connect();
$repo = new MahasiswaRepository($pdo);

$mahasiswa = $repo->all();
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Data Mahasiswa</h2>

<a class="btn" href="create.php">+ Tambah Mahasiswa</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

<?php foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['id'] ?></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['prodi'] ?></td>
        <td><?= $m['angkatan'] ?></td>
        <td><?= $m['status'] ?></td>
        <td>
            <a class="btn-warning btn" href="edit.php?id=<?= $m['id'] ?>">Edit</a>
            <a class="btn-danger btn" href="delete.php?id=<?= $m['id'] ?>"
               onclick="return confirm('Hapus data?')">Delete</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
</div>