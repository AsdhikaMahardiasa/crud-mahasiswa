<?php
require "../config/Database.php";
require "../models/MahasiswaRepository.php";

$db = new Database();
$pdo = $db->connect();
$repo = new MahasiswaRepository($pdo);

$data = [
    "id" => $_POST["id"],
    "nama" => $_POST["nama"],
    "nim" => $_POST["nim"],
    "prodi" => $_POST["prodi"],
    "angkatan" => $_POST["angkatan"],
    "status" => $_POST["status"]
];

$repo->update($data);

header("Location: index.php");
exit;