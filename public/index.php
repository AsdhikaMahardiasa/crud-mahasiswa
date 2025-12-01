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

