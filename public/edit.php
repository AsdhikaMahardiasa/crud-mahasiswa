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