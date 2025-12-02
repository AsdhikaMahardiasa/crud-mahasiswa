<?php
require "../config/Database.php";
require "../models/MahasiswaRepository.php";

$db = new Database();
$pdo = $db->connect();
$repo = new MahasiswaRepository($pdo);

$data = $repo->find($_GET['id']);
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Edit Mahasiswa</h2>

<form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <label>Nama</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>">

    <label>NIM</label>
    <input type="text" name="nim" value="<?= $data['nim'] ?>">

    <label>Prodi</label>
    <select name="prodi">
        <option value="TI" <?= $data['prodi']=="TI"?"selected":"" ?>>TI</option>
        <option value="SI" <?= $data['prodi']=="SI"?"selected":"" ?>>SI</option>
        <option value="DKV" <?= $data['prodi']=="DKV"?"selected":"" ?>>DKV</option>
    </select>

    <label>Angkatan</label>
    <input type="number" name="angkatan" value="<?= $data['angkatan'] ?>">

    <label>Status</label>
    <select name="status">
        <option value="aktif" <?= $data['status']=="aktif"?"selected":"" ?>>Aktif</option>
        <option value="nonaktif" <?= $data['status']=="nonaktif"?"selected":"" ?>>Nonaktif</option>
    </select>

    <button type="submit">Update</button>
</form>
</div>